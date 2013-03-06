<?php

/*------------------------------------------------------------------------
# mod_virtuemart_magicslideshow - Magic Slideshow for Joomla with VirtueMart
# ------------------------------------------------------------------------
# Magic Toolbox
# Copyright 2011 MagicToolbox.com. All Rights Reserved.
# @license - http://www.opensource.org/licenses/artistic-license-2.0  Artistic License 2.0 (GPL compatible)
# Website: http://www.magictoolbox.com/magicslideshow/modules/virtuemart/
# Technical Support: http://www.magictoolbox.com/contact/
/*-------------------------------------------------------------------------*/

if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );


if(!in_array('MagicToolboxImageHelper', get_declared_classes())) {

    require_once('magictoolbox.params.class.php');

    if(!defined('MT_DS')) {
        //define('MT_DS', DIRECTORY_SEPARATOR);
        define('MT_DS', '/');
    }

    class MagicToolboxImageHelper {

        // link to original image file
        var $src = '';

        // original file extension
        var $ext = '';

        // file or dirrectory where should be saved resized file
        //var $_out;

        // destination file (without sufix and extension)
        var $out = '';

        // full path for webdir
        var $path = '';

        // web address for wesite
        var $url = '';

        // destination file sufix
        //var $sufix;

        // full destination file
        var $file = '';

        // options (imagick path, resize params, etc)
        var $options = null;

        //options hash for folder name
        var $hash;

        //path to folder with cached images
        //var $cache_folder = '';

        //original file name
        //var $original_name = '';

        // is thre critical errors?
        var $errors = false;

        //path to folder with cached images
        var $cache = '';

        var $pid = null;

        /**
        * @constructor
        * @param string $path full path for webdir
        * @param string $cache cache folder path relative to webdir
        * @param object $options options (imagick path, resize params, etc)
        * @param string $pid product ID
        * @param string $url web address for wesite
        * @return nothing
        */
        function MagicToolboxImageHelper($path, $cache = null, $options = null, $pid = null, $url = null) {

            clearstatcache();

            //prepare params
            $this->path = preg_replace('/(\/|\\\\)$/is', '', $path);
            if(!$cache) {
                $cache = MT_DS . 'magictoolbox_cache';
            } else {
                $cache = preg_replace('/(\/|\\\\)$/is', '', $cache);
            }
            if(!$options) {
                $this->options = new MagicToolboxParams();
                $this->options->appendArray(array("square-images"=>array("id"=>"square-images","group"=>"Positioning and Geometry","order"=>"310","default"=>"disable","label"=>"Create square images","description"=>"If enabled then the white/transparent padding will be added around the image","type"=>"array","subType"=>"radio","values"=>array("enable","disable"),"scope"=>"profile"),"imagemagick"=>array("id"=>"imagemagick","group"=>"Miscellaneous","order"=>"550","default"=>"auto","label"=>"Path to Imagemagick binaries (convert tool)","description"=>"You can set 'auto' to automatically detect imagemagick location or 'off' to disable imagemagick and use php GD lib instead","type"=>"text","scope"=>"profile"),"watermark"=>array("id"=>"watermark","group"=>"Watermark","order"=>"10","default"=>"","label"=>"Path to watermark image","description"=>"Relative for site base path. Use empty to disable watermark","type"=>"text","scope"=>"profile"),"watermark-opacity"=>array("id"=>"watermark-opacity","group"=>"Watermark","order"=>"40","default"=>"50","label"=>"Opacity of the watermark image","description"=>"0-100","type"=>"num","scope"=>"profile"),"watermark-max-width"=>array("id"=>"watermark-max-width","group"=>"Watermark","order"=>"20","default"=>"50%","label"=>"Maximum width of watermark image","description"=>"pixels (fixed size) or percent (relative for image size)","type"=>"text","scope"=>"profile"),"watermark-max-height"=>array("id"=>"watermark-max-height","group"=>"Watermark","order"=>"21","default"=>"50%","label"=>"Maximum height watermark image","description"=>"pixels (fixed size) or percent (relative for image size)","type"=>"text","scope"=>"profile"),"watermark-position"=>array("id"=>"watermark-position","group"=>"Watermark","order"=>"50","default"=>"center","label"=>"Position of the watermark","description"=>"'watermark-size' will ignore when 'watermark-position' sets to 'stretch'","type"=>"array","subType"=>"select","values"=>array("top","right","bottom","left","top-left","bottom-left","top-right","bottom-right","center","stretch"),"scope"=>"profile"),"watermark-offset-x"=>array("id"=>"watermark-offset-x","group"=>"Watermark","order"=>"60","default"=>"0","label"=>"Watermark horizontal offset","description"=>"Offset from left and/or right image borders. Pixels (fixed size) or percent (relative for image size)","type"=>"text","scope"=>"profile"),"watermark-offset-y"=>array("id"=>"watermark-offset-y","group"=>"Watermark","order"=>"70","default"=>"0","label"=>"Watermark vertical offset","description"=>"Offset from top and/or bottom image borders. Pixels (fixed size) or percent (relative for image size)","type"=>"text","scope"=>"profile"),"image-quality"=>array("id"=>"image-quality","group"=>"Miscellaneous","order"=>"560","default"=>"100","label"=>"Quality of thumbnails and watermarked images","type"=>"num","scope"=>"profile"),"use-original-file-names"=>array("id"=>"use-original-file-names","group"=>"Miscellaneous","order"=>"565","default"=>"No","label"=>"Whether to use original file name for cached images","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"profile")));
                $this->error('MagicToolbox ImageHelper :: Invalid options (use defauls)');
            } else {
                $this->options = $options;
            }
            $this->pid = $pid;
            if($url) {
                $this->url = preg_replace('/\/$/is', '', $url);
            }
            $this->hash = $this->getOptionsHash();
            $cache = $cache . MT_DS . $this->hash;
            $this->cache = $this->path . $cache;
            //create cache
            if(!is_dir($this->cache)) {
                $this->cache = $this->path;
                //recursively check/create subdirs
                $cache = explode(MT_DS, $cache);
                foreach($cache as $sub_dir) {
                    if(!$sub_dir) continue;
                    $this->cache .= MT_DS . $sub_dir;
                    if(!is_dir($this->cache) && (!@mkdir($this->cache) || !@chmod($this->cache, 0777))) {
                        $this->error('MagicToolbox ImageHelper :: Can\'t create cache folder or change permission (' . $this->cache . ')', true);
                        return;
                    }
                }
            }

        }

        function getOptionsHash() {
            $params = array();
            $wIDs = array('watermark-opacity', 'watermark-max-width', 'watermark-max-height', 'watermark-position', 'watermark-offset-x', 'watermark-offset-y');
            $params[] = $this->options->getValue('square-images');
            $params[] = $this->options->getValue('image-quality');
            $params[] = $this->options->getValue('use-original-file-names');
            $watermark = $this->options->getValue('watermark');
            if($watermark) {
                $params[] = $watermark;
                foreach($wIDs as $id) {
                    $params[] = $this->options->getValue($id);
                }
            }
            return md5(implode('', $params));
        }

        /**
        * create thumbnail
        *
        * @access public
        * @param string $src relative path to original image
        * @param string / array $type type of thumbnail to create ('original', 'thumb', 'selector') or sizes
        * @param string $out relative path to result image
        * @param string $pid product ID
        * @param boolean $force force to replace existing image
        */

        function create($src, $type, $pid = null, $out = null, $force = false) {
            if($this->errors) {
                return false;
            }
            $this->src = $this->path . $src;
            if(!file_exists($this->src) || !is_file($this->src)) {
                $this->error('MagicToolbox ImageHelper :: Invalid image file (' . $this->src . ')', true);
                return false;
            } else {
                if(is_string($type)) {
                    if($type == 'original') {
                        $size = array(0, 0);
                    } else {
                        $size = array($this->options->getValue($type . '-max-width'), $this->options->getValue($type . '-max-height'));
                        $type = $type . $size[0] . 'x' . $size[1];
                    }
                } else {
                    $size = $type;
                    $type = $type[0] . 'x' . $type[1];
                }
                if($pid === null) $pid = $this->pid;
                $this->ext = substr($src, strrpos($src, "."));
                if($out === null) {
                    if($pid === null) {
                        $out = $this->cache . MT_DS . $type;
                    } else {
                        $out = $this->cache . MT_DS . $pid;
                        if(!is_dir($out) && (!@mkdir($out) || !@chmod($out, 0777))) {
                            $this->error('MagicToolbox ImageHelper :: Can\'t create cache folder or change permission (' . $out . ')', true);
                            return false;
                        }
                        $out = $out . MT_DS . $type;
                    }
                    if(!is_dir($out) && (!@mkdir($out) || !@chmod($out, 0777))) {
                        $this->error('MagicToolbox ImageHelper :: Can\'t create cache folder or change permission (' . $out . ')', true);
                        return false;
                    }
                    if($this->options->checkValue('use-original-file-names', 'No')) {
                        $this->out = $out . MT_DS . md5($src);
                    } else {
                        $this->out = $out . MT_DS . substr($src, strrpos($src, MT_DS)+1, -strlen($this->ext));
                    }
                    $this->file = $this->out . $this->ext;
                } else {
                    $this->out = $this->path . $out;
                    $this->file = $this->out;
                }
                if($force || !file_exists($this->file) || !is_file($this->file) || (@filemtime($this->file) - @filemtime($this->src)) < 0) {
                    $this->resize($size[0], $size[1]);
                    if(file_exists($this->file) && is_file($this->file)) {
                        @chmod($this->file, 0755);
                        return $this->getLink($this->file);
                    }
                } elseif(file_exists($this->file) && is_file($this->file)) {
                    return $this->getLink($this->file);
                }
            }
            return $this->getLink($this->src);
        }

        function getLink($link) {
            return $this->path ? str_replace($this->path, $this->url, $link) : ($this->url . $link);
        }

        function calculate_size($originalW, $originalH, $maxW = 0, $maxH = 0) {
            if(!$maxW && !$maxH) {
                return array($originalW, $originalH);
            } elseif(!$maxW) {
                $maxW = ($maxH * $originalW) / $originalH;
            } elseif(!$maxH) {
                $maxH = ($maxW * $originalH) / $originalW;
            }
            $sizeDepends = $originalW/$originalH;
            $placeHolderDepends = $maxW/$maxH;
            if($sizeDepends > $placeHolderDepends) {
                $newW = $maxW;
                $newH = $originalH * ($maxW / $originalW);
            } else {
                $newW = $originalW * ($maxH / $originalH);  
                $newH = $maxH;
            }
            return array(round($newW), round($newH));
        }

        function resize($w = null, $h = null, $square = null) {
            if($this->errors) {return false;}
            $imagick = $this->options->getValue('imagemagick');
            $watermark = $this->options->getValue('watermark');
            if($watermark) {
                $watermark = $this->path . '/' . preg_replace('/^\/|\/$/is', '', $watermark);
                if(!(file_exists($watermark) && is_file($watermark))) {
                    $watermark = false;
                } else {
                    $wpos = strtolower($this->options->getValue('watermark-position'));
                    $wopacity = $this->options->getValue('watermark-opacity');
                    $woffsetx = $this->options->getValue('watermark-offset-x');
                    $woffsety = $this->options->getValue('watermark-offset-y');
                }
            } elseif(!$w && !$h) {
                return;
            }
            if($square == null) {
                $square = $this->options->checkValue('square-images', 'enable');
            } else {
                $square = ($square == 'enable');
            }
            $q = intval($this->options->getValue('image-quality'));
            if($imagick = $this->_checkImagick($imagick)) {
                // use imagemagick
                if($imagick == 'native') {
                    //not support yet
                    //$imagick = new Imagick($this->img);
                    //if($h === null) {
                    //    $imagick->thumbnailImage($depends != 'height' ? $w : 0, $depends != 'width' ? $w : 0, $depends == 'both' ? true : false);
                    //} else {
                    //    $imagick->thumbnailImage($w, $h, false);
                    //}
                    //$imagick->writeImage($this->file);
                    // TODO implement watermark
                    // TODO implement square
                } else {
                    $imagickComposite = str_replace('convert', 'composite', $imagick);
                    $size = $this->getImageInfo($this->src, $imagick);
                    if(empty($size[0]) || !$size[0]) {
                        $this->error('MagicToolbox ImageHelper :: Can\'t get the picture size.  (' . $this->src . ')', true);
                        return false;
                    }
                    if(!$w && !$h) {
                        $w = $size[0]; $h = $size[1];
                    } else {
                        list($w, $h) = $this->calculate_size($size[0], $size[1], $w, $h);
                    }

                    exec(escapeshellarg($imagick) . ' ' . escapeshellarg($this->src) . (($this->ext == '.gif')?' -coalesce':'') . ' -quality ' . $q . ' -resize ' . $w . 'x' . $h . '! ' . escapeshellarg($this->file));

                    if($watermark) {
                        $wsize = $this->getImageInfo($watermark, $imagick);
                        $ww = $this->options->getValue('watermark-max-width');
                        $wh = $this->options->getValue('watermark-max-height');
                        $mins = min($w, $h);
                        $ww = $this->_percent($ww, $mins);
                        $wh = $this->_percent($wh, $mins);
                        list($ww, $wh) = $this->calculate_size($wsize[0], $wsize[1], $ww, $wh);

                        $woffsetx = $this->_percent($woffsetx, $w);
                        $woffsety = $this->_percent($woffsety, $h);

                        if($wpos == 'stretch') {
                            $wcmd = '-size ' . $w . 'x' . $h . ' -depth ' . $wsize[2] . ' NULL: -write mpr:watermarkblank +delete '
                                  . escapeshellarg($watermark) . ' -quality ' . $q . ' -resize ' . ($w - 2 * $woffsetx) . 'x' . ($h - 2 * $woffsety) . '! -write mpr:watermark +delete '
                                  . 'mpr:watermarkblank -gravity Center mpr:watermark -composite -write mpr:watermark +delete ';
                        } else {
                            $wcmd = '-size ' . ($ww + 2 * $woffsetx) . 'x' . ($wh + 2 * $woffsety) . ' -depth ' . $wsize[2] . ' NULL: -write mpr:watermarkblank +delete '
                                  . escapeshellarg($watermark) . '  -quality ' . $q . ' -resize ' . $ww . 'x' . $wh . '! -write mpr:watermark +delete '
                                  . 'mpr:watermarkblank -gravity Center mpr:watermark -composite -write mpr:watermark +delete ';
                        }

                        exec(escapeshellarg($imagick) . ' ' . $wcmd . ' mpr:watermark -quality ' . $q . ' ' . escapeshellarg($this->file . '.png'));

                        switch($wpos) {
                            case 'stretch':
                            case 'center':
                                $wcmd = 'Center';
                                break;
                            case 'tile':
                                // TODO implement
                                // we can use -tile option here
                                break;
                            case 'top-right':
                                $wcmd = 'NorthEast';
                                break;
                            case 'top-left':
                                $wcmd = 'NorthWest';
                                break;
                            case 'bottom-right':
                                $wcmd = 'SouthEast';
                                break;
                            case 'bottom-left':
                                $wcmd = 'SouthWest';
                                break;
                            case 'top':
                                $wcmd = 'North';
                                break;
                            case 'bottom':
                                $wcmd = 'South';
                                break;
                            case 'left':
                                $wcmd = 'West';
                                break;
                            case 'right':
                                $wcmd = 'East';
                                break;
                            default: break;
                        }
                        exec(escapeshellarg($imagickComposite) . ' ' . escapeshellarg($this->file . '.png') . ' -dissolve ' . $wopacity . ' -gravity ' . $wcmd . ' ' . escapeshellarg($this->file) . ' ' . escapeshellarg($this->file));
                        @unlink($this->file . '.png');
                    }

                    if($square) {
                        $s = max($w, $h);
                        if($size[3] == 'png' || $size == 'gif') {
                            // null for transparent images
                            $wrapper = 'NULL:';
                        } else {
                            // white background for opaque images
                            $wrapper = 'xc:white';
                        }
                        //$wrapper = 'NULL:';
                        $cmd = ' -size ' . $s . 'x' . $s . ' -depth ' . $size[2] . ' ' . $wrapper . ' -write mpr:resultblank +delete '
                              . 'mpr:resultblank -gravity Center ' . escapeshellarg($this->file) . ' -compose src-over -composite ' . escapeshellarg($this->file);
                        exec(escapeshellarg($imagick) . $cmd);
                    }


                }
            } else {
                // use GD library
                list($data, $size) = $this->_load($this->src);
                if(!$data) {
                    $this->error('MagicToolbox ImageHelper :: Can\'t get the image data.  (' . $this->src . ')', true);
                    return false;
                }
                if(!$w && !$h) {
                    $w = $size[0]; $h = $size[1];
                } else {
                    list($w, $h) = $this->calculate_size($size[0], $size[1], $w, $h);
                }

                $rw = $square ? max($w, $h) : $w;
                $rh = $square ? max($w, $h) : $h;

                $out = $this->_create($rw,  $rh);

                $fCopy = function_exists('imagecopyresampled') ? 'imagecopyresampled' : 'imagecopyresized';
                call_user_func($fCopy, $out, $data, ($rw-$w)/2, ($rh-$h)/2, 0, 0, $w, $h, $size[0], $size[1]);

                // include watermark
                if($watermark) {
                    list($wdata, $wsize) = $this->_load($watermark);

                    $ww = $this->options->getValue('watermark-max-width');
                    $wh = $this->options->getValue('watermark-max-height');
                    $mins = min($w, $h);
                    $ww = $this->_percent($ww, $mins);
                    $wh = $this->_percent($wh, $mins);
                    list($ww, $wh) = $this->calculate_size($wsize[0], $wsize[1], $ww, $wh);

                    $wpos = strtolower($this->options->getValue('watermark-position'));
                    $wopacity = $this->options->getValue('watermark-opacity');
                    $woffsetx = $this->options->getValue('watermark-offset-x');
                    $woffsety = $this->options->getValue('watermark-offset-y');

                    $woffsetx = $this->_percent($woffsetx, $w);
                    $woffsety = $this->_percent($woffsety, $h);

                    if($wpos == 'stretch') {
                        $wdatanew = $this->_create($w - 2 * $woffsetx, $h - 2 * $woffsety, 0);
                        call_user_func($fCopy, $wdatanew, $wdata, 0, 0, 0, 0, $w - 2 * $woffsetx, $h - 2 * $woffsety, $wsize[0], $wsize[1]);
                    } else {
                        $wdatanew = $this->_create($ww,  $wh, 0);
                        call_user_func($fCopy, $wdatanew, $wdata, 0, 0, 0, 0, $ww, $wh, $wsize[0], $wsize[1]);
                    }
                    //imagealphablending($wdatanew, true);

                    switch($wpos) {
                        case 'center':
                            //call_user_func($fCopy, $out, $wdata, ($rw-$ww)/2, ($rh-$wh)/2, 0, 0, $ww, $wh, $wsize[0], $wsize[1]);
                            imagecopymerge($out, $wdatanew, ($rw-$ww)/2, ($rh-$wh)/2, 0, 0, $ww, $wh, $wopacity);
                            break;
                        case 'tile':
                            // TODO implement
                            break;
                        case 'stretch':
                            imagecopymerge($out, $wdatanew, $woffsetx + ($rw - $w) / 2, $woffsety + ($rh - $h) / 2, 0, 0, $w - 2 * $woffsetx, $h - 2 * $woffsety, $wopacity);
                            break;
                        case 'top-right':
                            imagecopymerge($out, $wdatanew, $rw - $woffsetx - $ww - ($rw - $w) / 2, $woffsety + ($rh - $h) / 2, 0, 0, $ww, $wh, $wopacity);
                            break;
                        case 'top-left':
                            imagecopymerge($out, $wdatanew, $woffsetx + ($rw - $w) / 2, $woffsety + ($rh - $h) / 2, 0, 0, $ww, $wh, $wopacity);
                            break;
                        case 'bottom-right':
                            imagecopymerge($out, $wdatanew, $rw - $woffsetx - $ww - ($rw - $w) / 2, $rh - $woffsety - $wh - ($rh - $h) / 2, 0, 0, $ww, $wh, $wopacity);
                            break;
                        case 'bottom-left':
                            imagecopymerge($out, $wdatanew, $woffsetx + ($rw - $w) / 2, $rh - $woffsety - $wh - ($rh - $h) / 2, 0, 0, $ww, $wh, $wopacity);
                            break;
                        case 'top':
                            imagecopymerge($out, $wdatanew, ($rw - $ww) / 2, $woffsety + ($rh - $h) / 2, 0, 0, $ww, $wh, $wopacity);
                            break;
                        case 'bottom':
                            imagecopymerge($out, $wdatanew, ($rw - $ww) / 2, $rh - $woffsety - $wh - ($rh - $h) / 2, 0, 0, $ww, $wh, $wopacity);
                            break;
                        case 'left':
                            imagecopymerge($out, $wdatanew, $woffsetx + ($rw - $w) / 2, ($rh-$wh)/2, 0, 0, $ww, $wh, $wopacity);
                            break;
                        case 'right':
                            imagecopymerge($out, $wdatanew, $rw - $woffsetx - $ww - ($rw - $w) / 2, ($rh-$wh)/2, 0, 0, $ww, $wh, $wopacity);
                            break;
                        default: break;
                    }

                }

                switch($size[2]) {
                    case 1: function_exists('imagegif') && imagegif($out, $this->file);
                    case 3: imagepng($out, $this->file); break;
                    case 2: imagejpeg($out, $this->file, $q); break;
                }
                imagedestroy($data);
                imagedestroy($out);
            }
        }

        function getImageInfo($src, $imagick) {

            $imagickIdentify = str_replace('convert', 'identify', $imagick);
            $commands = array(
                escapeshellarg($imagick) . ' ' . escapeshellarg($src) . ' -format \'%w::%h::%[depth]::%e\' info:',
                escapeshellarg($imagick) . ' ' . escapeshellarg($src) . ' -format \'%w::%h::%z::%e\' info:',
                escapeshellarg($imagickIdentify) . ' -format \'%w::%h::%[depth]::%e\' ' . escapeshellarg($src),
                escapeshellarg($imagickIdentify) . ' -format \'%w::%h::%z::%e\' ' . escapeshellarg($src)
            );

            $info = array();
            foreach($commands as $c) {
                $result = array();
                exec($c, $result);
                if(!empty($result)) {
                    $info = explode('::', $result[0]);
                    if(!empty($info[2])) break;
                }
            }
            return $info;
        }

        function _percent($p, $s) {
            preg_match('/^([0-9]+)(%|px|Px|pX|PX)?$/is', $p, $matches);
            if(isset($matches[2]) && $matches[2] == '%') {
                $p = round($s * $matches[1] / 100);
            } else {
                $p = $matches[1];
            }
            return $p;
        }

        function _create($w, $h, $op = 127) {
            $fCreate = function_exists('imagecreatetruecolor') ? 'imagecreatetruecolor' : 'imagecreate';
            $out = call_user_func($fCreate, $w,  $h);

            if(function_exists('imageantialias')) { imageantialias($out, true); }
            if(function_exists('imagealphablending')) { imagealphablending($out, false); }
            if(function_exists('imagecolorallocatealpha')) {
                // white transparent BG
                $clr = imagecolorallocatealpha($out, 255, 255, 255, $op);
                imagefill($out, 0, 0, $clr);
            }
            if(function_exists('imagesavealpha')) { imagesavealpha($out, true); }
            if(function_exists('imagealphablending')) { imagealphablending($out, true); }

            return $out;
        }

        function _load($src, $size = null) {
            if($size === null) {
                $size = getimagesize($src);
            }
            /*
                1 GIF
                2 JPG
                3 PNG
                4 SWF
                5 PSD
                6 BMP
                7 TIFF (intel byte order)
                8 TIFF (motorola byte order)
                9 JPC
               10 JP2
               11 JPX
               12 JB2
               13 SWC
               14 IFF
            */
            switch($size[2]) {
                case 1:
                    // unfortunately this function does not work on windows
                    // via the precompiled php installation :(
                    // it should work on all other systems however.
                    if(function_exists('imagecreatefromgif')) {
                        $data = imagecreatefromgif($src);
                    } else {
                        $data = false;
                        $this->error('MagicToolbox ImageHelper :: Sorry, this server doesn\'t support <b>imagecreatefromgif()</b> function', true);
                    }
                    break;
                case 2:
                    // php5 & gd2 bug. see issue #0024583 for details
                    ini_set('gd.jpeg_ignore_warning', 1);
                    $data = imagecreatefromjpeg($src);
                    break;
                case 3: $data = imagecreatefrompng($src); break;
                // GD doesn't support other formats
                default:
                    $data = false;
                    $this->error('MagicToolbox ImageHelper :: Unsupported image type (' . $size[2] . ')', true);
            }
            return array($data, $size);
        }

        function _file_exists($f, $check = false) {
            if(@file_exists($f) && (!$check || $check && @is_file($f))) {
                return true;
            } elseif(@exec('ls -l ' . escapeshellarg($f) . ' | grep ' . escapeshellarg($f))) {
                return true;
            } else {
                return false;
            }
        }

        function _checkImagick($imagick) {
            $execDisabled = preg_match('/exec/is', ini_get('disable_functions'));

            if(!$execDisabled && strtolower($imagick) != 'off') {
                if(strtolower($imagick) == 'auto' || empty($imagick)) {
                    $imagick = false;
                    // auto detect
                    if(@$this->_file_exists('/usr/bin/convert')) {
                        // found UNIX imagick tools in /usr/bin
                        $imagick = '/usr/bin/convert';
                    } else if(@$this->_file_exists('/usr/local/bin/convert')) {
                        // found UNIX imagick tools in /usr/local/bin
                        $imagick = '/usr/local/bin/convert';
                    }
                    if(!$imagick) {
                        @exec('compgen -ac', $a);
                        if($a && is_array($a) && in_array('convert', $a) && in_array('identify', $a)) {
                            // UNIX imagick command line tools is available
                            $imagick = 'convert';
                        }
                    }
                } else {
                    if(!preg_match('/convert$/s', $imagick)) {
                       if(!preg_match('/\/$/s', $imagick)) {
                            $imagick .= '/';
                        }
                        $imagick .= 'convert';
                    }
                    if(!@$this->_file_exists($imagick)) {
                        $imagick = false;
                    }
                }
            } else {
                $imagick = false;
            }

            if($imagick) {
                // we should also check does we can run imagick bin file
                @exec(escapeshellarg($imagick) . ' logo: /tmp/logo.png', $ret, $exitCode);
                if($exitCode > 0) {
                    // got error, disable imagick
                    $imagick = false;
                }
            }

            // check imagick version (for some reason, resize option dosn't working in imagick 5.x)
            if($imagick) {
                @exec(escapeshellarg($imagick) . ' --version', $ret);
                foreach($ret as $line) {
                    if(preg_match('/version:/is', $line)) {
                        $v = preg_replace('/^.*?\s((?:[0-9]+\.){2}[0-9]+)(\-\d+)?\s.*$/is', '$1', $line);
                        if(version_compare($v, '6.0.0', '<')) {
                            $imagick = false;
                        }
                        break;
                    }
                }
            }

            // temporary disabled
            /*if(!$imagick && (in_array('Imagick', get_declared_classes()) || in_array('imagick', get_declared_classes()))) {
                $imagick = 'native';
            }*/

            return $imagick;
        }

        function error($message, $critical = false) {
            if($this->options->checkValue('imagehelper-errors', 'Yes')) {
                error_log($message);
            }
            if($critical) {
                $this->errors = true;
            }
        }

    }

}
