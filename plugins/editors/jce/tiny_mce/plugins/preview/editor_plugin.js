/**
 * $Id: editor_plugin.js 26 2009-05-25 10:21:53Z happynoodleboy $
 *
 * @author Moxiecode
 * @copyright Copyright � 2004-2008, Moxiecode Systems AB, All rights reserved.
 */

(function() {
    tinymce.create('tinymce.plugins.Preview', {
        init : function(ed, url) {
            var t = this;

            ed.addCommand('mcePreview', function() {
                ed.windowManager.open({
                    file : ed.getParam('site_url') + 'index.php?option=com_jce&task=plugin&plugin=preview&file=preview',
                    width : parseInt(ed.getParam("plugin_preview_width", "550")),
                    height : parseInt(ed.getParam("plugin_preview_height", "600")),
                    resizable : "yes",
                    scrollbars : "yes",
                    inline : ed.getParam("plugin_preview_inline", 1)
                }, {
                  url : url
                });
            });

            ed.addButton('preview', {title : 'preview.preview_desc', cmd : 'mcePreview'});
        },

        getInfo : function() {
            return {
                longname : 'Preview',
                author : 'Moxiecode Systems AB',
                authorurl : 'http://tinymce.moxiecode.com',
                infourl : 'http://wiki.moxiecode.com/index.php/TinyMCE:Plugins/preview',
                version : tinymce.majorVersion + "." + tinymce.minorVersion
            };
        }

    });

    // Register plugin
    tinymce.PluginManager.add('preview', tinymce.plugins.Preview);
})();