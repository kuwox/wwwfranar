(function(){var each=tinymce.each;var styleProps=new Array('background','background-attachment','background-color','background-image','background-position','background-repeat','border','border-bottom','border-bottom-color','border-bottom-style','border-bottom-width','border-color','border-left','border-left-color','border-left-style','border-left-width','border-right','border-right-color','border-right-style','border-right-width','border-style','border-top','border-top-color','border-top-style','border-top-width','border-width','outline','outline-color','outline-style','outline-width','height','max-height','max-width','min-height','min-width','width','font','font-family','font-size','font-style','font-variant','font-weight','content','counter-increment','counter-reset','quotes','list-style','list-style-image','list-style-position','list-style-type','margin','margin-bottom','margin-left','margin-right','margin-top','padding','padding-bottom','padding-left','padding-right','padding-top','bottom','clear','clip','cursor','display','float','left','overflow','position','right','top','visibility','z-index','orphans','page-break-after','page-break-before','page-break-inside','widows','border-collapse','border-spacing','caption-side','empty-cells','table-layout','color','direction','letter-spacing','line-height','text-align','text-decoration','text-indent','text-shadow','text-transform','unicode-bidi','vertical-align','white-space','word-spacing');tinymce.create('tinymce.plugins.PastePlugin',{init:function(ed,url){var t=this,cb;t.editor=ed;t.url=url;t.onPreProcess=new tinymce.util.Dispatcher(t);t.onPostProcess=new tinymce.util.Dispatcher(t);t.onAfterPaste=new tinymce.util.Dispatcher(t);t.onPreProcess.add(t._preProcess);t.onPostProcess.add(t._postProcess);t.onPreProcess.add(function(pl,o){ed.execCallback('paste_preprocess',pl,o)});t.onPostProcess.add(function(pl,o){ed.execCallback('paste_postprocess',pl,o)});t.pasteText=ed.getParam('paste_text',1);t.pasteHtml=ed.getParam('paste_html',1);t.pasteWord=ed.getParam('paste_word',1);function process(o){var dom=ed.dom;t.plainText=t.command=='mcePasteText'||(t.pasteText&&!t.pasteHtml&&!t.pasteWord);t.pasteWord=t.command=='mcePasteWord'||(!t.pasteText&&!t.pasteHtml&&t.pasteWord);if(t.pasteWord){o.wordContent=true}t.onPreProcess.dispatch(t,o);o.node=dom.create('div',0,o.content);if(tinymce.isGecko){rng=ed.selection.getRng(true);if(rng.startContainer==rng.endContainer&&rng.startContainer.nodeType==3){nodes=dom.select('p,h1,h2,h3,h4,h5,h6,pre',o.node);if(nodes.length==1)dom.remove(nodes.reverse(),true)}}t.onPostProcess.dispatch(t,o);o.content=ed.serializer.serialize(o.node,{getInner:1});if(this.plainText){t._insertPlainText(o.content)}else if(/<(p|h[1-6]|ul|ol)/.test(o.content)){t._insertBlockContent(ed,dom,o.content)}else{t._insert(o.content)}t.onAfterPaste.dispatch(t);t.command='mcePaste'};ed.addCommand('mceInsertClipboardContent',function(u,o){process(o)});ed.onInit.add(function(){if(ed.plugins.contextmenu){ed.plugins.contextmenu.onContextMenu.add(function(th,m,e){var c=ed.selection.isCollapsed();m.add({title:'advanced.cut_desc',icon:'cut',cmd:'Cut'}).setDisabled(c);m.add({title:'advanced.copy_desc',icon:'copy',cmd:'Copy'}).setDisabled(c);if(t.pasteHtml){m.add({title:'paste.paste_desc',icon:'paste',cmd:'mcePaste'})}if(t.pasteWord){m.add({title:'paste.paste_word_desc',icon:'pasteword',cmd:'mcePasteWord'})}if(t.pasteText){m.add({title:'paste.paste_text_desc',icon:'pastetext',cmd:'mcePasteText'})}})}});function grabContent(e){var n,or,rng,sel=ed.selection,dom=ed.dom,body=ed.getBody(),doc=ed.getDoc(),posY;if(ed.pasteAsPlainText&&(e.clipboardData||dom.doc.dataTransfer)){e.preventDefault();process({content:(e.clipboardData||dom.doc.dataTransfer).getData('Text').replace(/\r?\n/g,'<br />')});return}if(dom.get('_mcePaste'))return;n=dom.add(body,'div',{id:'_mcePaste','class':'mcePaste'},'\uFEFF<br _mce_bogus="1">');if(body!=doc.body)posY=dom.getPos(ed.selection.getStart(),body).y;else posY=body.scrollTop;dom.setStyles(n,{position:'absolute',left:-10000,top:posY,width:1,height:1,overflow:'hidden'});if(tinymce.isIE){rng=dom.doc.body.createTextRange();rng.moveToElementText(n);rng.execCommand('Paste');dom.remove(n);if(n.innerHTML==='\uFEFF'){ed.execCommand('mcePaste');e.preventDefault();return}process({content:n.innerHTML});return tinymce.dom.Event.cancel(e)}else{function block(e){e.preventDefault()};dom.bind(doc,'mousedown',block);dom.bind(doc,'keydown',block);or=ed.selection.getRng();n=n.firstChild;rng=doc.createRange();rng.setStart(n,0);rng.setEnd(n,1);sel.setRng(rng);window.setTimeout(function(){var h='',nl=dom.select('div.mcePaste');each(nl,function(n){var child=n.firstChild;if(child&&child.nodeName=='DIV'&&child.style.marginTop&&child.style.backgroundColor){dom.remove(child,1)}each(dom.select('div.mcePaste',n),function(n){dom.remove(n,1)});each(dom.select('span.Apple-style-span',n),function(n){dom.remove(n,1)});each(dom.select('br[_mce_bogus]',n),function(n){dom.remove(n)});h+=n.innerHTML});each(nl,function(n){dom.remove(n)});if(or)sel.setRng(or);process({content:h});dom.unbind(doc,'mousedown',block);dom.unbind(doc,'keydown',block)},0)}};if(ed.getParam(ed,"paste_auto_cleanup_on_paste")){if(tinymce.isOpera||/Firefox\/2/.test(navigator.userAgent)){ed.onKeyDown.add(function(ed,e){if(((tinymce.isMac?e.metaKey:e.ctrlKey)&&e.keyCode==86)||(e.shiftKey&&e.keyCode==45)){return grabContent(e)}})}else{ed.onPaste.addToTop(function(ed,e){return grabContent(e)})}}if(ed.getParam('paste_block_drop')){ed.onInit.add(function(){ed.dom.bind(body,['dragend','dragover','draggesture','dragdrop','drop','drag'],function(e){e.preventDefault();e.stopPropagation();return false})})}each(['mcePasteText','mcePaste','mcePasteWord'],function(cmd){ed.addCommand(cmd,function(){t.command=cmd;if(ed.getParam('paste_use_dialog')){return t._openWin(cmd)}else{try{var doc=ed.getDoc();if(!doc.queryCommandSupported('Paste')){return t._openWin(cmd)}else{if(tinymce.isIE){return ed.onPaste.dispatch()}else{doc.execCommand('Paste')}}}catch(e){return t._openWin(cmd)}}})});if(t.pasteHtml&&!t.pasteWord&&!t.pasteText){ed.addButton('paste',{title:'paste.paste_desc',cmd:'mcePaste',ui:true})}if(!t.pasteHtml&&t.pasteWord&&!t.pasteText){ed.addButton('paste',{title:'paste.paste_word_desc',cmd:'mcePasteWord',ui:true})}if(!t.pasteHtml&&!t.pasteWord&&t.pasteText){ed.addButton('paste',{title:'paste.paste_text_desc',cmd:'mcePasteText',ui:true})}},createControl:function(n,cm){var t=this,ed=t.editor;switch(n){case'paste':if(t.pasteHtml&&t.pasteText){var c=cm.createSplitButton('paste',{title:'paste.paste_desc',onclick:function(e){ed.execCommand('mcePaste')}});c.onRenderMenu.add(function(c,m){m.add({title:'paste.paste_desc',icon:'paste',onclick:function(e){ed.execCommand('mcePaste')}});m.add({title:'paste.paste_word_desc',icon:'pasteword',onclick:function(e){ed.execCommand('mcePasteWord')}});m.add({title:'paste.paste_text_desc',icon:'pastetext',onclick:function(e){ed.execCommand('mcePasteText')}})});return c}break}return null},getInfo:function(){return{longname:'Paste text/word',author:'Moxiecode Systems AB / Ryan demmer',authorurl:'http://tinymce.moxiecode.com',infourl:'http://wiki.moxiecode.com/index.php/TinyMCE:Plugins/paste',version:'1.5.7.7'}},_openWin:function(cmd){var t=this,ed=this.editor;ed.windowManager.open({file:t.url+'/paste.htm',width:parseInt(ed.getParam("paste_dialog_width","450")),height:parseInt(ed.getParam("paste_dialog_height","400")),inline:1},{cmd:cmd})},_preProcess:function(pl,o){var ed=this.editor,h=o.content;h=h.replace(/^\s*(&nbsp;)+/g,'');h=h.replace(/(&nbsp;|<br[^>]*>)+\s*$/g,'');if(this.plainText){return h}if(/(content=\"OpenOffice.org[^\"]+\")/i.test(h)){o.wordContent=true;h=h.replace(/[\s\S]+?<meta[^>]*>/,'');h=h.replace(/<!--[\s\S]+?-->/gi,'');h=h.replace(/<style[^>]*>[\s\S]+?<\/style>/gi,'')}if(/(class=\"?Mso|style=\"[^\"]*\bmso\-|w:WordDocument)/.test(h)){o.wordContent=true}if(o.wordContent){h=this._processWordContent(h)}h=h.replace(/&nbsp;/g,'\u00a0');if(ed.getParam('paste_remove_spans')){h=h.replace(/<\/?(span)[^>]*>/gi,'')}o.content=h},_processWordContent:function(h){var ed=this.editor,stripClass;if(ed.getParam('paste_convert_middot_lists',true)&&!this.plainText){h=h.replace(/<!--\[if !supportLists\]-->/gi,'$&__MCE_ITEM__');h=h.replace(/(<span[^>]+:\s*symbol[^>]+>)/gi,'$1__MCE_ITEM__');h=h.replace(/(<span[^>]+mso-list:[^>]+>)/gi,'$1__MCE_ITEM__');h=h.replace(/(<p[^>]+class="MsoListParagraph[^"]+"[^>]+>)/gi,'$1__MCE_ITEM__')}h=h.replace(/<!--[\s\S]+?-->/gi,'');h=h.replace(/<style([^>]*)>([\w\W]*?)<\/style>/gi,'');h=h.replace(/<(!|script[^>]*>.*?<\/script(?=[>\s])|\/?(\?xml(:\w+)?|meta|link|\w:\w+)(?=[\s\/>]))[^>]*>/gi,'');h=h.replace(/<(\/?)s>/gi,"<$1strike>");h=h.replace(/&nbsp;/gi,"\u00a0");do{len=h.length;h=h.replace(/(<[a-z][^>]*\s)(?:id|language|type|on\w+|\w+:\w+)=(?:"[^"]*"|\w+)\s?/gi,"$1")}while(len!=h.length);if(ed.getParam('paste_remove_styles',true)){h=h.replace(/<span\s+style\s*=\s*"\s*mso-spacerun\s*:\s*yes\s*;?\s*"\s*>([\s\u00a0]*)<\/span>/gi,function(str,spaces){return(spaces.length>0)?spaces.replace(/./," ").slice(Math.floor(spaces.length/2)).split("").join("\u00a0"):""});h=h.replace(/(<[a-z][^>]*)\sstyle="([^"]*)"/gi,function(str,tag,style){var n=[],i=0,s=tinymce.explode(tinymce.trim(style).replace(/&quot;/gi,"'"),";");each(s,function(v){var name,value,parts=tinymce.explode(v,":");function ensureUnits(v){return v+((v!=="0")&&(/\d$/.test(v)))?"px":""}if(parts.length==2){name=parts[0].toLowerCase();value=parts[1].toLowerCase();switch(name){case"mso-padding-alt":case"mso-padding-top-alt":case"mso-padding-right-alt":case"mso-padding-bottom-alt":case"mso-padding-left-alt":case"mso-margin-alt":case"mso-margin-top-alt":case"mso-margin-right-alt":case"mso-margin-bottom-alt":case"mso-margin-left-alt":case"mso-table-layout-alt":case"mso-height":case"mso-width":case"mso-vertical-align-alt":n[i++]=name.replace(/^mso-|-alt$/g,"")+":"+ensureUnits(value);return;case"horiz-align":n[i++]="text-align:"+value;return;case"vert-align":n[i++]="vertical-align:"+value;return;case"font-color":case"mso-foreground":n[i++]="color:"+value;return;case"mso-background":case"mso-highlight":n[i++]="background:"+value;return;case"mso-default-height":n[i++]="min-height:"+ensureUnits(value);return;case"mso-default-width":n[i++]="min-width:"+ensureUnits(value);return;case"mso-padding-between-alt":n[i++]="border-collapse:separate;border-spacing:"+ensureUnits(value);return;case"text-line-through":if((value=="single")||(value=="double")){n[i++]="text-decoration:line-through"}return;case"mso-zero-height":if(value=="yes"){n[i++]="display:none"}return}if(/^(mso|column|font-emph|lang|layout|line-break|list-image|nav|panose|punct|row|ruby|sep|size|src|tab-|table-border|text-(?!align|decor|indent|trans)|top-bar|version|vnd|word-break)/.test(name)){return}n[i++]=name+":"+parts[1]}});if(i>0){return tag+' style="'+n.join(';')+'"'}else{return tag}})}if(ed.getParam(ed,"paste_convert_headers_to_strong")){h=h.replace(/<h[1-6][^>]*>/gi,"<p><strong>");h=h.replace(/<\/h[1-6][^>]*>/gi,"</strong></p>")}return h},_insertPlainText:function(h){var ed=this.editor,dom=ed.dom,entities=null;if((typeof(h)==="string")&&(h.length>0)){if(!entities)entities=("34,quot,38,amp,39,apos,60,lt,62,gt,"+ed.serializer.settings.entities).split(",");if(/<(?:p|br|h[1-6]|ul|ol|dl|table|t[rdh]|div|blockquote|fieldset|pre|address|center)[^>]*>/i.test(h)){h=h.replace(/[\n\r]+/g,'')}else{h=h.replace(/\r+/g,'')}h=h.replace(/<\/(?:p|h[1-6]|ul|ol|dl|table|div|blockquote|fieldset|pre|address|center)>/gi,"\n\n");h=h.replace(/<br[^>]*>|<\/tr>/gi,"\n");h=h.replace(/<\/t[dh]>\s*<t[dh][^>]*>/gi,"\t");h=h.replace(/<[a-z!\/?][^>]*>/gi,'');h=h.replace(/&nbsp;/gi," ");h=h.replace(/&(#\d+|[a-z0-9]{1,10});/gi,function(e,s){if(s.charAt(0)==="#"){return String.fromCharCode(s.slice(1))}else{return((e=tinymce.inArray(entities,s))>0)?String.fromCharCode(entities[e-1]):" "}});h=h.replace(/(?:(?!\n)\s)*(\n+)(?:(?!\n)\s)*/gi,"$1");h=h.replace(/\n{3,}/g,"\n\n");h=h.replace(/^\s+|\s+$/g,'');h=dom.encode(h);h=h.replace(/\u2026/g,"...");h=h.replace(/[\x93\x94\u201c\u201d]/g,'"');h=h.replace(/[\x60\x91\x92\u2018\u2019]/g,"'");if(ed.getParam("force_p_newlines")){h=h.replace(/\n\n/,'__MCE_PARA__');var blocks='';tinymce.each(h.split('__MCE_PARA__'),function(block){blocks+='<p>'+block+'</p>'});h=blocks}h=h.replace(/\n/g,'<br />')}if(/<(p|h[1-6]|ul|ol)/.test(h)){t._insertBlockContent(ed,dom,h)}else{t._insert(h)}},_postProcess:function(pl,o){var t=this,ed=t.editor,dom=ed.dom,h;if(!this.plainText){each(dom.select('span.Apple-style-span',o.node),function(n){dom.remove(n,1)});var sc=ed.getParam("paste_strip_class_attributes","all");each(dom.select('*[class]',o.node),function(n){if(sc=='all'){n.removeAttribute('class')}else if(sc=='mso'){var cls=dom.getAttrib(n,'class');cls=tinymce.grep(tinymce.explode(cls.replace(/^(["'])(.*)\1$/,"$2")," "),function(v){return(/^(?!mso)/i.test(v))});cls=cls.length?cls.join(" "):'';dom.setAttrib(n,'class',cls)}});if(o.wordContent){each(dom.select('a',o.node),function(a){if(!a.href||a.href.indexOf('#_Toc')!=-1)dom.remove(a,1)});each(dom.select('*[lang]',o.node),function(el){el.removeAttribute('lang')});var s=ed.getParam('paste_retain_style_properties');if(s&&tinymce.is(s,'string')){styleProps=tinymce.explode(s)}if(t.editor.getParam('paste_convert_middot_lists',true)){t._convertLists(pl,o);styleProps.push('list-style-type')}if(ed.getParam('paste_remove_styles',true)){each(dom.select('*[style]',o.node),function(el){var s=dom.getStyle(el,'list-style-type');el.removeAttribute('style');el.removeAttribute('_mce_style');if(s){dom.setStyle(el,'list-style-type',s)}})}else{each(dom.select('*',o.node),function(el){var ns={},x=0;var styles=ed.dom.parseStyle(el.style.cssText);each(styles,function(v,k){if(tinymce.inArray(styleProps,k)!=-1){ns[k]=v;x++}});dom.setAttrib(el,'style','');if(x>0){dom.setStyles(el,ns)}else{if(el.nodeName=='SPAN'&&!el.className){dom.remove(el,true)}}if(tinymce.isWebKit){el.removeAttribute('_mce_style')}})}each(dom.select('img',o.node),function(el){if(/file:\/\//.test(el.src)){dom.remove(el)}});each(dom.select('a[href*=#]',o.node),function(el){var href=el.href;dom.setAttrib(el,'href',href.substring(href.lastIndexOf('#')));if(el.name)dom.addClass(el,'mceItemAnchor')})}each(dom.select('span'),function(n){if(!n.hasAttributes()){dom.remove(n,1)}})}if(ed.getParam('paste_convert_urls',true)){var ex='([-!#$%&\'\*\+\\./0-9=?A-Z^_`a-z{|}~]+@[-!#$%&\'\*\+\\/0-9=?A-Z^_`a-z{|}~]+\.[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+)';var ux='((news|telnet|nttp|file|http|ftp|https)://[-!#$%&\'\*\+\\/0-9=?A-Z^_`a-z{|}~]+\.[-!#$%&\'\*\+\\./0-9=?A-Z^_`a-z{|}~]+)';function processURL(h){h=h.replace(new RegExp(ex,'g'),'<a href="mailto:$1">$1</a>');h=h.replace(new RegExp(ux,'g'),'<a href="$1">$1</a>');return h}each(dom.select('*:not(a)',o.node),function(el){if(!dom.getParent(el,'a')){each(el.childNodes,function(n){if(n&&n.nodeType==3){var s=n.innerText||n.textContent||n.data||null;if(s&&(new RegExp(ex,'g').test(s)||new RegExp(ux,'g').test(s))){n.parentNode.innerHTML=processURL(s)}}})}})}if(ed.getParam('paste_remove_empty_paragraphs',true)){each(dom.select('p'),function(n){if(/^<br[^>]+>$/.test(n.innerHTML)||tinymce.trim(n.innerHTML)==''){if(ed.getParam('force_br_newlines')&&!ed.getParam('forced_root_block')){dom.replace(n,dom.create('br'))}else{dom.remove(n)}}})}},_convertLists:function(pl,o){var dom=pl.editor.dom,listElm,li,lastMargin=-1,margin,levels=[],lastType;each(dom.select('p',o.node),function(p){var sib,val='',type,html,idx,parents,s,char,st;for(sib=p.firstChild;sib&&sib.nodeType==3;sib=sib.nextSibling){val+=sib.nodeValue}val=p.innerHTML.replace(/<\/?\w+[^>]*>/gi,'').replace(/&nbsp;/g,'\u00a0');if(/^(__MCE_ITEM__)+[\u2022\u00b7\u00a7\u00d8o]\s*\u00a0*/.test(val)){type='ul'}if(s=val.match(/^(__MCE_ITEM__)?(\s|\u00a0)*\(*(\w+)\)*\.*\s*\u00a0{2,}/)){type='ol';char=s[3];if(char&&char!='__MCE_ITEM__'){if(/0[1-9]/.test(char)){st='decimal-leading-zero'}if(/[a-z+?]/.test(char)){st='lower-alpha'}if(/[A-Z+?]/.test(char)){st='upper-alpha'}if(/[ivx+]/.test(char)){st='lower-roman'}if(/[IVX+]/.test(char)){st='upper-roman'}}}if(type){margin=parseFloat(p.style.marginLeft||0);if(margin>lastMargin)levels.push(margin);if(!listElm||type!=lastType){listElm=dom.create(type);dom.insertAfter(listElm,p)}else{if(margin>lastMargin){listElm=li.appendChild(dom.create(type))}else if(margin<lastMargin){idx=tinymce.inArray(levels,margin);parents=dom.getParents(listElm.parentNode,type);listElm=parents[parents.length-1-idx]||listElm}}each(dom.select('span',p),function(span){var html=span.innerHTML.replace(/<\/?\w+[^>]*>/gi,'');if(type=='ul'&&/^(__MCE_ITEM__)?[\u2022\u00b7\u00a7\u00d8o]/i.test(html)){dom.remove(span)}else if(/^(&nbsp;|\u00a0)+\s*/.test(html)){dom.remove(span)}else if(/^(__MCE_ITEM__)?(\s|&nbsp;)*\(*([0-9]{1,3}|[ivxlcm]+|[a-z]{1,2})(\)|\.)/i.test(html)){dom.remove(span)}});html=p.innerHTML;if(type=='ul'){html=p.innerHTML.replace(/__MCE_ITEM__/g,'').replace(/^[\u2022\u00b7\u00a7\u00d8o]\s*(&nbsp;|\u00a0)+\s*/,'')}else{html=p.innerHTML.replace(/__MCE_ITEM__/g,'').replace(/^\s*\w+\.(&nbsp;|\u00a0)+\s*/,'')}li=listElm.appendChild(dom.create('li',0,html));dom.remove(p);if(st&&typeof st!='undefined'){dom.setStyle(listElm,'list-style-type',st)}lastMargin=margin;lastType=type}else{listElm=lastMargin=0}});html=o.node.innerHTML;if(html.indexOf('__MCE_ITEM__')!=-1)o.node.innerHTML=html.replace(/__MCE_ITEM__/g,'')},_insertBlockContent:function(ed,dom,content){var parentBlock,marker,sel=ed.selection,last,elm,vp,y,elmHeight;function select(n){var r;if(tinymce.isIE){r=ed.getDoc().body.createTextRange();r.moveToElementText(n);r.collapse(false);r.select()}else{sel.select(n,1);sel.collapse(false)}};this._insert('<span id="_marker"></span>',1);marker=dom.get('_marker');parentBlock=dom.getParent(marker,'p,h1,h2,h3,h4,h5,h6,ul,ol,th,td');if(parentBlock&&!/TD|TH/.test(parentBlock.nodeName)){marker=dom.split(parentBlock,marker);each(dom.create('div',0,content).childNodes,function(n){last=marker.parentNode.insertBefore(n.cloneNode(true),marker)});select(last)}else{dom.setOuterHTML(marker,content);sel.select(ed.getBody(),1);sel.collapse(0)}dom.remove('_marker');elm=sel.getStart();vp=dom.getViewPort(ed.getWin());y=ed.dom.getPos(elm).y;elmHeight=elm.clientHeight;if(y<vp.y||y+elmHeight>vp.y+vp.h)ed.getDoc().body.scrollTop=y<vp.y?y:y-vp.h+25},_insert:function(h,skip_undo){var ed=this.editor;if(!ed.selection.isCollapsed())ed.getDoc().execCommand('Delete',false,null);ed.execCommand(tinymce.isGecko?'insertHTML':'mceInsertContent',false,h,{skip_undo:skip_undo})}});tinymce.PluginManager.add('paste',tinymce.plugins.PastePlugin)})();