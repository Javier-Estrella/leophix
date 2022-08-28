<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grasim_shop
 */

if(get_theme_mod('grasim_shop_display_breadcrumb_section',true) != ''){
	grasim_shop_breadcrumb_slider();
}
elseif(get_post_type()){	
	if(get_post_meta(get_the_ID(),'breadcrumb_select',true) == 'yes'){
		grasim_shop_breadcrumb_slider();
	}
}