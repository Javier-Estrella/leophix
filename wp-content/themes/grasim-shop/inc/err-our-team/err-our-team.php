<?php
/**
* Plugin Name: Inpersttion For Theme
* Description: Import all the demos on your site
* Version: 1.0
* Copyright: 2020
* Text Domain: grasim-shop
* 
*/

if (!defined('ABSPATH')) {
	exit();
}
if (!defined('IFT_PLUGIN_NAME')) {
  define('IFT_PLUGIN_NAME', 'Inpersttion For Theme');
}
if (!defined('IFT_PLUGIN_VERSION')) {
  define('IFT_PLUGIN_VERSION', '2.0.0');
}
if (!defined('IFT_PLUGIN_FILE')) {
  define('IFT_PLUGIN_FILE', __FILE__);
}
if (!defined('IFT_PLUGIN_DIR')) {
  define('IFT_PLUGIN_DIR',get_template_directory_uri().'/inc/err-our-team/');
}
if (!defined('IFT_BASE_NAME')) {
    define('IFT_BASE_NAME', plugin_basename(IFT_PLUGIN_FILE));
}
if (!defined('IFT_DOMAIN')) {
  define('IFT_DOMAIN', 'grasim-shop');
}
define( 'IFT_PLUGIN_DIR_PATH' , plugin_dir_path( __FILE__ ) );


include_once('inc/inpersttion-for-shortcode.php');

$theme = wp_get_theme();
if( 'Grasim Shop' == $theme->name){
    include_once('includes/free/dynamic-demo.php');
    include_once('includes/free/customizer-repeater/functions.php');
}
if( 'Grasim Shop Pro' == $theme->name){
    include_once('includes/pro/dynamic-demo.php');
    include_once('includes/pro/customizer-repeater/functions.php');
}

function IFT_load_admin_script_style(){
	wp_enqueue_style( 'IFT-admin-style', IFT_PLUGIN_DIR . '/includes/assets/css/customizer_admin.css', false, '1.0.0');
}
add_action('admin_enqueue_scripts','IFT_load_admin_script_style');


add_action('init','IFT_default_settings',1);
function IFT_default_settings(){
  global $default_setting;
  //featured slider
    $default_setting['featured_slider_text_color']='#ffffff';
    $default_setting['featured_slider_arrow_text_color']='#ffffff';
    $default_setting['featured_slider_arrow_bg_color']='#212428';
    $default_setting['featured_slider_arrow_texthover_color']='#212428';
    $default_setting['featured_slider_arrow_bghover_color']='#c4cfde';

  //featured section
    $default_setting['featured_section_main_bg_color']='#212428';
    $default_setting['featured_section_bg_color']='#16181c';
    $default_setting['featured_section_color']='#c4cfde';
    $default_setting['featured_section_bg_hover_color']='#c4cfde';
    $default_setting['featured_section_text_hover_color']='#16181c';
    $default_setting['featured_section_icon_color']='#c4cfde';
    $default_setting['featured_section_icon_hover_color']='#16181c';
    $default_setting['featured_section_icon_bg_color']='#212428';
    $default_setting['featured_section_icon_bg_hover_color']='#c4cfde';
    $default_setting['featured_section_main_text_color']='#333';

  //About Us
    $default_setting['about_bg_color']='#16181c';
    $default_setting['about_title_text_color']='#c4cfde';
    $default_setting['about_text_color']='#c4cfde';
    $default_setting['about_link_color']='#c4cfde';
    $default_setting['about_link_hover_color']='#ffffff';

  //Our Portfolio Section
    $default_setting['our_portfolio_bg_color']='#16181c';
    $default_setting['our_portfolio_title_color']='#c4cfde';
    $default_setting['our_portfolio_text_color']='#c4cfde';
    $default_setting['our_portfolio_container_text_color']='#ffffff';
    $default_setting['our_portfolio_icon_bg_color']='#16181c';
    $default_setting['our_portfolio_icon_color']='#c4cfde';
    $default_setting['our_portfolio_container_bg_color']='#c4cfde';

  //Our Services Section
    $default_setting['our_services_bg_color']='#16181c';
    $default_setting['our_services_text_color']='#c4cfde';
    $default_setting['our_services_contain_bg_color']='#212428';
    $default_setting['our_services_contain_text_color']='#ffffff';
    $default_setting['our_services_link_color']='#c4cfde';
    $default_setting['our_services_link_hover_color']='#ff014f';
    $default_setting['our_services_icon_color']='#ffffff';
    $default_setting['our_services_icon_hover_color']='rgb(255,255,255,0.2)';
    $default_setting['our_services_contain_bg_hover_color']='#16181c';

  //Our Team Section
    $default_setting['our_team_bg_color']='#16181c';
    $default_setting['our_team_text_color']='#c4cfde';
    $default_setting['our_team_text_hover_color']='#000000';
    $default_setting['our_team_icon_color']='#c4cfde';
    $default_setting['our_team_icon_hover_color']='#16181c';
    $default_setting['our_team_icon_background_color']='#16181c';
    $default_setting['our_team_icon_bg_hover_color']='#c4cfde';
    $default_setting['our_team_link_color']='#c4cfde';
    $default_setting['our_team_link_hover_color']='#000000';

  //Our Testimonial Section
    $default_setting['our_team_testimonial_bg_color']='#16181c';
    $default_setting['our_testimonial_text_color']='#ffffff';
    $default_setting['our_testimonial_alpha_color_setting']='#212428';
    $default_setting['our_team_testimonial_text_color']='#ffffff';
    $default_setting['our_team_testimonial_image_bg_color']='#212428';
    $default_setting['our_team_testimonial_arrow_bg_color']='#212428';
    $default_setting['our_team_testimonial_arrow_text_color']='#ffffff';

  //Our Sponsors Section
    $default_setting['our_sponsors_text_color']='#c4cfde';
    $default_setting['our_sponsors_bg_color']='#16181c';
    $default_setting['our_sponsors_img_hover_bg_color']='#fff';
    $default_setting['our_sponsors_arrow_color']='#ffffff';
    $default_setting['our_sponsors_arrow_bg_color']='#212428';

  //Social Icon 
    $default_setting['social_icon_bg_color']='#ffffff';
    $default_setting['social_icon_bg_hover_color']='#425e79';
    $default_setting['social_icon_color']='#425E79';
    $default_setting['social_icon_hover_color']='#ffffff';  
}