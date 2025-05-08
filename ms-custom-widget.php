<?php 
/*
 * Plugin Name:       MS Custom Widgets
 * Plugin URI:         https://github.com/mominsarder12/ms-custom-widgets
 * Description:       A plugin for custom developed widget.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Momin Sarder
 * Author URI:        https://github.com/mominsarder12/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/mominsarder12/ms-custom-widgets
 * Text Domain:       mcw-text-domain
 * Domain Path:       /languages
 */

//unauthorized access denied
if(!defined('ABSPATH')){
    exit;
 }

 //enqueue assets
 add_action('admin_enqueue_scripts','mcw_add_admin_scripts');
 function mcw_add_admin_scripts(){
    wp_enqueue_style('mcw_admin_style_css', plugin_dir_url(__FILE__) .'assets/mcw_admin-style.css',array(),'1.0.0','all');
    wp_enqueue_script('mcw_admin_script_js',plugin_dir_url(__FILE__) .'assets/mcw_admin-script.js',array('jquery'),'1.0.0');
 }
 
//need to create widget for this
add_action('widgets_init','mcw_custom_widgets');
include_once plugin_dir_path(__FILE__) . "widgets/My_Form_Widget.php";
function mcw_custom_widgets(){
    register_widget( 'My_Form_Widget' );
}