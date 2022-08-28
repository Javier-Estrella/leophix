<?php
add_action('init','default_settings_themes',2);
function default_settings_themes(){
  	global $default_setting;
  	//Featured Slider
		$default_setting['featured_slider_arrow_bg_color']='#2e6d87';
		$default_setting['featured_slider_arrow_texthover_color']='#2e6d87';
		$default_setting['featured_slider_arrow_bghover_color']='#ffffff';

	//Featured Section
		$default_setting['featured_section_main_bg_color']='#ffffff';
		$default_setting['featured_section_bg_color']='#ddd';
		$default_setting['featured_section_color']='#333333';
		$default_setting['featured_section_bg_hover_color']='#2e6d87';
	    $default_setting['featured_section_text_hover_color']='#ffffff';
	    $default_setting['featured_section_icon_color']='#ffffff';
	    $default_setting['featured_section_icon_hover_color']='#2e6d87';
	    $default_setting['featured_section_icon_bg_color']='#2e6d87';
	    $default_setting['featured_section_icon_bg_hover_color']='#ffffff';

	//About Us
	    $default_setting['about_bg_color']='#ffffff';
	    $default_setting['about_title_text_color']='#333333';
	    $default_setting['about_text_color']='#333333';
	    $default_setting['about_link_color']='#2e6d87';
	    $default_setting['about_link_hover_color']='#333333';

	//Our Portfolio Section
    	$default_setting['our_portfolio_bg_color']='#eeeeee';
    	$default_setting['our_portfolio_title_color']='#333333';
    	$default_setting['our_portfolio_text_color']='#333333';
    	$default_setting['our_portfolio_icon_bg_color']='#2e6d87';
    	$default_setting['our_portfolio_icon_color']='#ffffff';

    //Our Services Section
    	$default_setting['our_services_bg_color']='#eeeeee';
    	$default_setting['our_services_text_color']='#333333';
    	$default_setting['our_services_contain_bg_color']='#ffffff';
    	$default_setting['our_services_contain_text_color']='#333333';
    	$default_setting['our_services_link_color']='#333';
    	$default_setting['our_services_link_hover_color']='#ffffff';
    	$default_setting['our_services_icon_color']='#2e6d87';
    	$default_setting['our_services_icon_hover_color']='#ffffff';
    	$default_setting['our_services_contain_bg_hover_color']='#2e6d87';

    //Our Team Section
	    $default_setting['our_team_bg_color']='#ffffff';
	    $default_setting['our_team_text_color']='#333333';
	    $default_setting['our_team_text_hover_color']='#000000';
	    $default_setting['our_team_icon_color']='#2e6d87';
	    $default_setting['our_team_icon_hover_color']='#ffffff';
	    $default_setting['our_team_icon_background_color']='#ffffff';
	    $default_setting['our_team_icon_bg_hover_color']='#2e6d87';
	    $default_setting['our_team_link_color']='#ffffff';
	    $default_setting['our_team_link_hover_color']='#000000';

	//Our Testimonial Section
	   	$default_setting['our_team_testimonial_bg_color']='#eeeeee';
	    $default_setting['our_testimonial_text_color']='#333333';
	    $default_setting['our_testimonial_alpha_color_setting']='#dbdbdb';
	    $default_setting['our_team_testimonial_text_color']='#333333';
	    $default_setting['our_team_testimonial_image_bg_color']='#ffffff';
	    $default_setting['our_team_testimonial_arrow_bg_color']='#2e6d87';
	    $default_setting['our_team_testimonial_arrow_text_color']='#ffffff';

	//Our Sponsors Section
	    $default_setting['our_sponsors_text_color']='#333333';
	    $default_setting['our_sponsors_bg_color']='#ffffff';
	    $default_setting['our_sponsors_img_hover_bg_color']='#fff';
	    $default_setting['our_sponsors_arrow_color']='#ffffff';
	    $default_setting['our_sponsors_arrow_bg_color']='#2e6d87';

	//top bar social icon
	    $default_setting['social_icon_bg_color']='#2e6d87';
	    $default_setting['social_icon_bg_hover_color']='#ffffff';
	    $default_setting['social_icon_color']='#ffffff';
	    $default_setting['social_icon_hover_color']='#2e6d87';
}