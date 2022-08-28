<?php

function IFT_social_icon_setting( $wp_customize ) {
	global $default_setting;
	//Create Social Info Section
	    $wp_customize->add_section( 'social_icon_section' , array(
			'title'             => 'Social Info',
			'panel'             => 'topbar_header_section',
		) );
		// Social Icon tabing
			$wp_customize->add_setting( 'social_icon_tab', 
		        array(
		            'default'    => 'general', //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability'     => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitize_select',
		        ) 
		    ); 
	        $wp_customize->add_control( new Custom_Radio_Control( 
		        $wp_customize,'social_icon_tab',array(
		            'settings'   => 'social_icon_tab', 
		            'priority'   => 10,
		            'section'    => 'social_icon_section',
		            'type'    => 'select',
		            'choices'    => array(
			        	'general' => 'General',
			        	'design' => 'Design',
		        	),
		        ) 
	        ) ); 
	    //Display Social Icon
	        $wp_customize->add_setting( 'display_social_icon', array(		                
                'default'   => true,
				'priority'  => 10,
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'custom_sanitize_checkbox',
		    ));
		    $wp_customize->add_control(  new WP_Customize_Control( $wp_customize,'display_social_icon', 
		    	array(
	                'label' => 'Display Social Icon',
	                'type'  => 'checkbox', // this indicates the type of control
	                'section' => 'social_icon_section',
	                'settings' => 'display_social_icon',
	                'active_callback' => 'IFT_social_icon_general_callback',
		        )
		    )); 
		//Create Social Icon in add filed
			$wp_customize->add_setting( 'social_icon_section_content', 
				array(
			            'type'       => 'theme_mod',
			            'transport'   => 'refresh',
			            'capability'     => 'edit_theme_options',
			            'default' => inpersttion_theme_get_icon_default(),
			            'sanitize_callback' => 'custom_sanitization_callback',
			        ) 
			);
			$wp_customize->add_control( new Customizer_Repeater( 
			$wp_customize, 'social_icon_section_content', array(
				'label'                             => esc_html__( 'Icon Items Content', 'grasim-shop' ),
				'section'                           => 'social_icon_section',
				'add_field_label'                   => esc_html__( 'Add new Icon', 'grasim-shop' ),
				'item_name'                         => esc_html__( 'Icon Item', 'grasim-shop' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_link_control'  => true,
	            'customizer_repeater_checkbox_control' => true,
	            'active_callback' => 'IFT_social_icon_general_callback',
			    ) ) );
		//Social Icon background Color
			$wp_customize->add_setting( 'social_icon_bg_color', 
		        array(
		        	'default' => $default_setting['social_icon_bg_color'],
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'social_icon_bg_color', 
		        array(
		            'label'      => __( 'Icon Background Color', 'retailer-tech' ), 
		            'settings'   => 'social_icon_bg_color', 
		            'priority'   => 10,
		            'section'    => 'social_icon_section',
		            'active_callback' => 'IFT_social_icon_design_callback',
		        ) 
	        ) );
	    //Social Icon background Hover Color
			$wp_customize->add_setting( 'social_icon_bg_hover_color', 
		        array(
		            'default'    => $default_setting['social_icon_bg_hover_color'],
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'social_icon_bg_hover_color', 
		        array(
		            'label'      => __( 'Icon Background Hover Color', 'retailer-tech' ), 
		            'settings'   => 'social_icon_bg_hover_color', 
		            'priority'   => 10,
		            'section'    => 'social_icon_section',
		            'active_callback' => 'IFT_social_icon_design_callback',
		        ) 
	        ) );
	    //Social Icon Text Color
	    	$wp_customize->add_setting( 'social_icon_color', 
		        array(
		            'default'    => $default_setting['social_icon_color'],
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'social_icon_color', 
		        array(
		            'label'      => __( 'Icon Color', 'retailer-tech' ), 
		            'settings'   => 'social_icon_color', 
		            'priority'   => 10,
		            'section'    => 'social_icon_section',
		            'active_callback' => 'IFT_social_icon_design_callback',
		        ) 
	        ) );
	    //Social Icon Text Hover Color
	    	$wp_customize->add_setting( 'social_icon_hover_color', 
		        array(
		            'default'    => $default_setting['social_icon_hover_color'],
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'social_icon_hover_color', 
		        array(
		            'label'      => __( 'Icon Hover Color', 'retailer-tech' ), 
		            'settings'   => 'social_icon_hover_color', 
		            'priority'   => 10,
		            'section'    => 'social_icon_section',
		            'active_callback' => 'IFT_social_icon_design_callback',
		        ) 
	        ) );
}
add_action( 'customize_register', 'IFT_social_icon_setting' );
function IFT_social_icon_general_callback(){
	$social_icon_tab = get_theme_mod( 'social_icon_tab','general');
	if ( 'general' === $social_icon_tab ) {
		return true;
	}
	return false;
}
function IFT_social_icon_design_callback(){
	$social_icon_tab = get_theme_mod( 'social_icon_tab','general');
	if ( 'design' === $social_icon_tab ) {
		return true;
	}
	return false;
}