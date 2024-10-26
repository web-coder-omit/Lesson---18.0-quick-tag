<?php
/**
 * Plugin Name: Quick tag
 * Plugin URI:  Plugin URL Link
 * Author:      Plugin Author Name
 * Author URI:  Plugin Author Link
 * Description: This plugin make for pratice wich is "Quick tag".
 * Version:     0.1.0
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain:qt_tg
 */
 function plugin_file_function(){
    load_plugin_textdomain('opt_set', false, dirname(__FILE__) . "/lng");
}
add_action('plugins_loaded', 'plugin_file_function');
// Start to write code from here.
// function add_js_function($screen){
//     if('post.php' == $screen){
//         wp_enqueue_script('qrsd-main-js',plugin_dir_url(__FILE__)."/asset/main.js",array('quicktags','thickbox'));
// //  wp_localize_script('qtsd-main-js','qtsd',array('preview'=>plugin_dir_url(__FILE__)."/popup.php"));
// wp_localize_script('qtsd-main-js', 'qtsd', array('preview' => plugin_dir_url(__FILE__)."/popup.php"));
//     }

// }
// add_action('admin_enqueue_scripts','add_js_function');
function add_js_function($screen){
    if('post.php' == $screen){
        wp_enqueue_script('qtsd-main-js', plugin_dir_url(__FILE__)."/asset/main.js", array('quicktags', 'thickbox'));
        wp_localize_script('qtsd-main-js', 'qtsd', array('preview' => plugin_dir_url(__FILE__)."/ppp.php"));
    }
}
add_action('admin_enqueue_scripts', 'add_js_function');















// Stop code from there.
?>