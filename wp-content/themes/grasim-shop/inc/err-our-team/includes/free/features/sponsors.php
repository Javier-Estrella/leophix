<?php

function IFT_our_sponsors_setting( $wp_customize ) {
	global $default_setting;
	//Our Sponsors
		$wp_customize->add_section( 'our_sponsors_section' , array(
			'title'  => 'Our Sponsors',
			'panel'  => 'theme_option_panel',
		) );
		//Our Sponsors in Tabing
			$wp_customize->add_setting( 'our_sponsors_tab', 
		        array(
		            'default'    => 'general', //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability'     => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitize_select',
		        ) 
		    ); 
	        $wp_customize->add_control( new Custom_Radio_Control( 
		        $wp_customize,'our_sponsors_tab',array(
		            'settings'   => 'our_sponsors_tab', 
		            'priority'   => 10,
		            'section'    => 'our_sponsors_section',
		            'type'    => 'select',
		            'choices'    => array(
			        	'general' => 'General',
			        	'design' => 'Design',
		        	),
		        ) 
	        ) );
		//Our Sponsors in Title
			$wp_customize->add_setting( 'our_sponsors_main_title', array(
				'default'    => 'Our Sponsors',
			    'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_sponsors_main_title',
		    	array(
					'type' => 'text',
					'settings' => 'our_sponsors_main_title',
					'section' => 'our_sponsors_section', // // Add a default or your own section
					'label' => 'Our Sponsors Title', 
					'active_callback' => 'our_sponsors_general_callback',     
				)
			) );
			if ( isset( $wp_customize->selective_refresh ) ) {
				$wp_customize->selective_refresh->add_partial(
					'our_sponsors_main_title',
					array(
						'selector'        => '.our_sponsors_section',
						'render_callback' => 'custom_customize_partial_sponsors',
					)
				);
			}
		//Our Sponsors in Discription
			$wp_customize->add_setting( 'our_sponsors_main_discription', array(
			    'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_textarea_field',
			) );
			$wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_sponsors_main_discription',
		    	array(
					'type' => 'textarea',
					'settings' => 'our_sponsors_main_discription',
					'section' => 'our_sponsors_section', // // Add a default or your own section
					'label' => 'Our Sponsors Discription', 
					'active_callback' => 'our_sponsors_general_callback',  
				)
			) );	
		//Create Sponsors add new filed			
			$wp_customize->add_setting( 'our_sponsors_section_content', array( 
				'default' =>inpersttion_theme_get_sponsors_default(),
				'sanitize_callback' => 'custom_sanitization_callback',
			) );
			$wp_customize->add_control( new Customizer_Repeater( 
			$wp_customize, 'our_sponsors_section_content', array(
				'label'                             => esc_html__( 'Sponsors Items Content', 'grasim-shop' ),
				'section'                           => 'our_sponsors_section',
				'add_field_label'                   => esc_html__( 'Add new Sponsors Items', 'grasim-shop' ),
				'item_name'                         => esc_html__( 'Sponsors Item', 'grasim-shop' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_link_control'  => true,
	            'active_callback' => 'our_sponsors_general_callback',
			    ) ) );
		//our sponsors pro version
			$wp_customize->add_setting('our_sponsors_section_pro', array(
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new Customize_Upgrade_Control(
		    	$wp_customize,'our_sponsors_section_pro',
		    	array(
			        'settings' => 'our_sponsors_section_pro',
			        'section' => 'our_sponsors_section',
			        'active_callback' => 'our_sponsors_general_callback',
		        )
		    ));	
		//Our sponsors in Text color
			$wp_customize->add_setting( 'our_sponsors_text_color', 
		        array(
		            'default'    => $default_setting['our_sponsors_text_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_sponsors_text_color', 
		        array(
		            'label'      => 'Text Color', 
		            'settings'   => 'our_sponsors_text_color', 
		            'priority'   => 10,
		            'section'    => 'our_sponsors_section',   
		            'active_callback' => 'our_sponsors_design_callback',
		        ) 
	        ) ); 
	    //Our sponsors in background color
			$wp_customize->add_setting( 'our_sponsors_bg_color', 
		        array(
		            'default'    => $default_setting['our_sponsors_bg_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_sponsors_bg_color', 
		        array(
		            'label'      => 'Background Color', 
		            'settings'   => 'our_sponsors_bg_color', 
		            'priority'   => 10,
		            'section'    => 'our_sponsors_section', 
		            'active_callback' => 'our_sponsors_design_callback',  
		        ) 
	        ) );  	
	    //Our sponsors in image hover background color
			$wp_customize->add_setting( 'our_sponsors_img_hover_bg_color', 
		        array(
		            'default'    => $default_setting['our_sponsors_img_hover_bg_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_sponsors_img_hover_bg_color', 
		        array(
		            'label'      => 'Image Hover Background Color', 
		            'settings'   => 'our_sponsors_img_hover_bg_color', 
		            'priority'   => 10,
		            'section'    => 'our_sponsors_section',
		            'active_callback' => 'our_sponsors_design_callback',   
		        ) 
	        ) );  	 	
	    //Our sponsors in arrow color
			$wp_customize->add_setting( 'our_sponsors_arrow_color', 
		        array(
		            'default'    => $default_setting['our_sponsors_arrow_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_sponsors_arrow_color', 
		        array(
		            'label'      => 'Arrow Color', 
		            'settings'   => 'our_sponsors_arrow_color', 
		            'priority'   => 10,
		            'section'    => 'our_sponsors_section',
		            'active_callback' => 'our_sponsors_design_callback',   
		        ) 
	        ) ); 
	    //Our sponsors in arrow Background color
			$wp_customize->add_setting( 'our_sponsors_arrow_bg_color', 
		        array(
		            'default'    => $default_setting['our_sponsors_arrow_bg_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_sponsors_arrow_bg_color', 
		        array(
		            'label'      => 'Arrow Background Color', 
		            'settings'   => 'our_sponsors_arrow_bg_color', 
		            'priority'   => 10,
		            'section'    => 'our_sponsors_section',
		            'active_callback' => 'our_sponsors_design_callback',   
		        ) 
	        ) );  	 	
	    //Our sponsors in Autoplay True
		    $wp_customize->add_setting('our_sponsors_slider_autoplay', array(
		        'default'        => 'true',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'custom_sanitize_select',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_sponsors_slider_autoplay',
		    	array(
			        'settings' => 'our_sponsors_slider_autoplay',
			        'label'   => 'Autoplay',
			        'section' => 'our_sponsors_section',
			        'type'  => 'select',
			        'choices'    => array(
			        	'true' => 'True',
			        	'false' => 'False',
		        	),
		        	'active_callback' => 'our_sponsors_design_callback',
		        )
		    )); 
		//Our sponsors Slider in autoplay speed
		    $wp_customize->add_setting('our_sponsors_slider_autoplay_speed', array(
		    	'default'        => '1000',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_sponsors_slider_autoplay_speed',
		    	array(
			        'settings' => 'our_sponsors_slider_autoplay_speed',
			        'label'   => 'AutoplaySpeed',
			        'section' => 'our_sponsors_section',
			        'type'  => 'text', 
			        'active_callback' => 'our_sponsors_design_callback',  
		        )
		    ));  
		//Our sponsors in autoplay TimeOut
		    $wp_customize->add_setting('our_sponsors_autoplay_timeout', array(
		    	'default'        => '5000',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_sponsors_autoplay_timeout',
		    	array(
			        'settings' => 'our_sponsors_autoplay_timeout',
			        'label'   => 'AutoplayTimeout',
			        'section' => 'our_sponsors_section',
			        'type'  => 'text',
			        'active_callback' => 'our_sponsors_design_callback',
		        )
		    ));  
}
add_action( 'customize_register', 'IFT_our_sponsors_setting' );

function our_sponsors_general_callback(){
	$our_sponsors_tab = get_theme_mod( 'our_sponsors_tab','general');
	if ( 'general' === $our_sponsors_tab ) {
		return true;
	}
	return false;
}
function our_sponsors_design_callback(){
	$our_sponsors_tab = get_theme_mod( 'our_sponsors_tab','design');
	if ( 'design' === $our_sponsors_tab ) {
		return true;
	}
	return false;
}