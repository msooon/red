<?php

require_once('include/plugin.php');

head_add_css('library/fancybox/jquery.fancybox-1.3.4.css');
head_add_css('library/tiptip/tipTip.css');
head_add_css('library/jgrowl/jquery.jgrowl.css');
head_add_css('library/jslider/css/jslider.css');
head_add_css('library/colorbox/colorbox.css');

head_add_css('view/css/conversation.css');
head_add_css('view/css/widgets.css');
head_add_css('library/justifiedGallery/dist/css/justifiedGallery.css');
head_add_css('library/bootstrap-tagsinput/bootstrap-tagsinput.css');

head_add_js('jquery.js');
head_add_js('jquery-migrate-1.1.1.js');
head_add_js('library/justifiedGallery/dist/js/jquery.justifiedGallery.js');

//head_add_js('jquery-compat.js');
head_add_js('spin.js');
head_add_js('jquery.spin.js');
head_add_js('jquery.textinputs.js');
head_add_js('autocomplete.js');
head_add_js('library/jquery-textcomplete/jquery.textcomplete.js');
head_add_js('library/fancybox/jquery.fancybox-1.3.4.js');
head_add_js('library/jquery.timeago.js');
head_add_js('library/jquery.divgrow/jquery.divgrow-1.3.1.js');
head_add_js('library/jquery_ac/friendica.complete.js');
head_add_js('library/tiptip/jquery.tipTip.minified.js');
head_add_js('library/jgrowl/jquery.jgrowl_minimized.js');
head_add_js('library/tinymce/jscripts/tiny_mce/tiny_mce.js');
head_add_js('library/cryptojs/components/core-min.js');
head_add_js('library/cryptojs/rollups/aes.js');
head_add_js('library/cryptojs/rollups/rabbit.js');
head_add_js('library/cryptojs/rollups/tripledes.js');
//head_add_js('library/stylish_select/jquery.stylish-select.js');
head_add_js('acl.js');
head_add_js('webtoolkit.base64.js');
head_add_js('main.js');
head_add_js('crypto.js');
head_add_js('library/jslider/bin/jquery.slider.min.js');
head_add_js('docready.js');
head_add_js('library/colorbox/jquery.colorbox-min.js');
head_add_js('library/bootstrap-tagsinput/bootstrap-tagsinput.js');

/**
 * Those who require this feature will know what to do with it.
 * Those who don't, won't.
 * Eventually this functionality needs to be provided by a module
 * such that permissions can be enforced. At the moment it's 
 * more of a proof of concept; but sufficient for our immediate needs.  
 */

$channel = get_app()->get_channel();
if($channel && file_exists($channel['channel_address'] . '.js'))
	head_add_js('/' . $channel['channel_address'] . '.js');

