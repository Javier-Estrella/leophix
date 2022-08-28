<?php
function IFT_our_testimonial_setting( $wp_customize ) {
	global $default_setting;
	//Our Testimonial
		$wp_customize->add_section( 'our_testimonial_section' , array(
			'title'  => 'Our Testimonial',
			'panel'  => 'theme_option_panel',
		) );
		//Our Testimonial Tabing
		 	$wp_customize->add_setting( 'our_testimonial_section_tab', 
		        array(
		            'default'    => 'general', //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability'     => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitize_select',
		        ) 
		    ); 
	        $wp_customize->add_control( new Custom_Radio_Control( 
		        $wp_customize,'our_testimonial_section_tab',array(
		            'settings'   => 'our_testimonial_section_tab', 
		            'priority'   => 0,
		            'section'    => 'our_testimonial_section',
		            'type'    => 'select',
		            'choices'    => array(
			        	'general' => 'General',
			        	'design' => 'Design',
		        	),
		        ) 
	        ) );
		//Our Testimonial in Title
			$wp_customize->add_setting( 'our_testimonial_main_title', array(
				'default'    => 'Our Testimonial',
			    'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_testimonial_main_title',
		    	array(
					'type' => 'text',
					'settings' => 'our_testimonial_main_title',
					'section' => 'our_testimonial_section', // // Add a default or your own section
					'label' => 'Our Testimonial Title',
					'active_callback' => 'our_testimonial_general_callback',
				)
			) );
			if ( isset( $wp_customize->selective_refresh ) ) {
				$wp_customize->selective_refresh->add_partial(
					'our_testimonial_main_title',
					array(
						'selector'        => '.our_testimonial_section',
						'render_callback' => 'custom_customize_partial_testimonial',
					)
				);
			}
		//Our Testimonial in Discription
			$wp_customize->add_setting( 'our_testimonial_main_discription', array(
			    'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_textarea_field',
			) );
			$wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_testimonial_main_discription',
		    	array(
					'type' => 'textarea',
					'settings' => 'our_testimonial_main_discription',
					'section' => 'our_testimonial_section', // // Add a default or your own section
					'label' => 'Our Testimonial Discription',  
					'active_callback' => 'our_testimonial_general_callback',
				)
			) );
		//Create Our Portfolio add new filed			
			$wp_customize->add_setting( 'our_testimonial_section_content', array( 
				'default' => inpersttion_theme_get_testimonial_default(),
				'sanitize_callback' => 'custom_sanitization_callback',
			) );
			$wp_customize->add_control( new Customizer_Repeater( 
			$wp_customize, 'our_testimonial_section_content', array(
				'label'                             => esc_html__( 'Testimonial Items Content', 'grasim-shop' ),
				'section'                           => 'our_testimonial_section',
				'add_field_label'                   => esc_html__( 'Add new Testimonial Items', 'grasim-shop' ),
				'item_name'                         => esc_html__( 'Testimonial Item', 'grasim-shop' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_subtitle_control' => true,
				'customizer_repeater_text_control' => true,
				//'customizer_repeater_icon_control'  => true,
				'customizer_repeater_link_control'  => true,
	            'active_callback' => 'our_testimonial_general_callback',
			    ) ) );		
		//Our Testimonial in background color
			$wp_customize->add_setting( 'our_team_testimonial_bg_color', 
		        array(
		            'default'    => $default_setting['our_team_testimonial_bg_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_team_testimonial_bg_color', 
		        array(
		            'label'      => 'Background Color', 
		            'settings'   => 'our_team_testimonial_bg_color', 
		            'priority'   => 1,
		            'section'    => 'our_testimonial_section',
		            'active_callback' => 'our_testimonial_design_callback',
		        ) 
	        ) ); 
	    //Our Testimonial background image option
	        $wp_customize->add_setting('our_testimonial_background_image', array(
	        	'type'       => 'theme_mod',
		        'transport'     => 'refresh',
		        'height'        => 180,
		        'width'        => 160,
		        'capability' => 'edit_theme_options',
		        'sanitize_callback' => 'esc_url_raw'
		    ));
		    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'our_testimonial_background_image', array(
		        'label' => 'Backgroung Image',
		        'section' => 'our_testimonial_section',
		        'priority'   => 2,
		        'settings' => 'our_testimonial_background_image',
		        'library_filter' => array( 'gif', 'jpg', 'jpeg', 'png', 'ico' ),
		        'active_callback' => 'our_testimonial_design_callback',
		    )));
		//Our Testimonial in image background position
		    $wp_customize->add_setting('our_testimonial_bg_position', array(
		        'default'        => 'center center',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_testimonial_bg_position',
		    	array(
			        'settings' => 'our_testimonial_bg_position',
			        'label'   => 'Background Position',
			        'priority'   => 3,
			        'section' => 'our_testimonial_section',
			        'type'  => 'select',
			        'choices'    => array(
			        	'left top' => 'Left Top',
			        	'left center' => 'Left Center',
			        	'left bottom' => 'Left Bottom',
			            'right top' => 'Right Top',
			            'right center' => 'Right Center',
			            'right bottom' => 'Right Bottom',
			            'center top' => 'Center Top',
			            'center center' => 'Center Center',
			            'center bottom' => 'Center Bottom',
		        	),
		        	'active_callback' => 'our_testimonial_design_callback',
		        )
		    )); 
		//Our Testimonial in image background attachment
		    $wp_customize->add_setting('our_testimonial_bg_attachment', array(
		        'default'        => 'fixed',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_testimonial_bg_attachment',
		    	array(
			        'settings' => 'our_testimonial_bg_attachment',
			        'label'   => 'Background Attachment',
			        'section' => 'our_testimonial_section',
			        'priority'   => 4,
			        'type'  => 'select',
			        'choices'    => array(
			        	'scroll' => 'Scroll',
			        	'fixed' => 'Fixed',
		        	),
		        	'active_callback' => 'our_testimonial_design_callback',
		        )
		    ));
		//Our Testimonial in image background Size
		    $wp_customize->add_setting('our_testimonial_bg_size', array(
		        'default'        => 'cover',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_testimonial_bg_size',
		    	array(
			        'settings' => 'our_testimonial_bg_size',
			        'label'   => 'Background Size',
			        'section' => 'our_testimonial_section',
			        'priority'   => 5,
			        'type'  => 'select',
			        'choices'    => array(
			        	'auto' => 'Auto',
			        	'cover' => 'Cover',
			            'contain' => 'Contain'
		        	),
		        	'active_callback' => 'our_testimonial_design_callback',
		        )
		    ));  		   
	    //Our Testimonial in Text color
			$wp_customize->add_setting( 'our_testimonial_text_color', 
		        array(
		            'default'    => $default_setting['our_testimonial_text_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_testimonial_text_color', 
		        array(
		            'label'      => 'Text Color', 
		            'settings'   => 'our_testimonial_text_color', 
		            'priority'   => 6,
		            'section'    => 'our_testimonial_section',
		            'active_callback' => 'our_testimonial_design_callback',
		        ) 
	        ) );
	    //Our Testimonial in Contain background color
	        $wp_customize->add_setting(
		        'our_testimonial_alpha_color_setting',
		        array(
		            'default'    => $default_setting['our_testimonial_alpha_color_setting'],
		            'type'       => 'theme_mod',
		            'capability' => 'edit_theme_options',
		            'transport'  => 'refresh',
					'sanitize_callback' => 'custom_sanitization_callback',
		        )
		    );	
		    $wp_customize->add_control(new Customize_Transparent_Color_Control(
		            $wp_customize,'our_testimonial_alpha_color_setting',
		            array(
		                'label'        => 'Contain Background Color',
		                'priority'   => 7,
		                'section'      => 'our_testimonial_section',
		                'settings'     => 'our_testimonial_alpha_color_setting',
		                'active_callback'  => 'our_testimonial_design_callback',
		            )
		        )
		    ); 
	    //Our Testimonial in Description Text color
			$wp_customize->add_setting( 'our_team_testimonial_text_color', 
		        array(
		            'default'    => $default_setting['our_team_testimonial_text_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_team_testimonial_text_color', 
		        array(
		            'label'      => 'Description Text Color', 
		            'settings'   => 'our_team_testimonial_text_color', 
		            'priority'   => 8,
		            'section'    => 'our_testimonial_section',
		            'active_callback' => 'our_testimonial_design_callback',
		        ) 
	        ) ); 
	    //Our Testimonial in image background color
			$wp_customize->add_setting( 'our_team_testimonial_image_bg_color', 
		        array(
		            'default'    => $default_setting['our_team_testimonial_image_bg_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_team_testimonial_image_bg_color', 
		        array(
		            'label'      => 'Image Background Color', 
		            'settings'   => 'our_team_testimonial_image_bg_color', 
		            'priority'   => 10,
		            'section'    => 'our_testimonial_section',
		            'active_callback' => 'our_testimonial_design_callback',
		        ) 
	        ) );   
	    //Our Testimonial in arrow background color
			$wp_customize->add_setting( 'our_team_testimonial_arrow_bg_color', 
		        array(
		            'default'    => $default_setting['our_team_testimonial_arrow_bg_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_team_testimonial_arrow_bg_color', 
		        array(
		            'label'      => 'Arrow Background Color', 
		            'settings'   => 'our_team_testimonial_arrow_bg_color', 
		            'priority'   => 10,
		            'section'    => 'our_testimonial_section',
		            'active_callback' => 'our_testimonial_design_callback',
		        ) 
	        ) );  
	    //Our Testimonial in arroe text color
			$wp_customize->add_setting( 'our_team_testimonial_arrow_text_color', 
		        array(
		            'default'    => $default_setting['our_team_testimonial_arrow_text_color'],
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_team_testimonial_arrow_text_color', 
		        array(
		            'label'      => 'Arrow Text Color', 
		            'settings'   => 'our_team_testimonial_arrow_text_color', 
		            'priority'   => 10,
		            'section'    => 'our_testimonial_section',
		            'active_callback' => 'our_testimonial_design_callback',
		        ) 
	        ) );  
	    //Our Testimonial in Autoplay True
		    $wp_customize->add_setting('our_testimonial_slider_autoplay', array(
		        'default'        => 'true',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'custom_sanitize_select',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_testimonial_slider_autoplay',
		    	array(
			        'settings' => 'our_testimonial_slider_autoplay',
			        'label'   => 'Autoplay',
			        'section' => 'our_testimonial_section',
			        'type'  => 'select',
			        'choices'    => array(
			        	'true' => 'True',
			        	'false' => 'False',
		        	),
		        	'active_callback' => 'our_testimonial_design_callback',
		        )
		    )); 
		//Our Testimonial Slider in autoplay speed
		    $wp_customize->add_setting('our_testimonial_slider_autoplay_speed', array(
		    	'default'        => '1000',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_testimonial_slider_autoplay_speed',
		    	array(
			        'settings' => 'our_testimonial_slider_autoplay_speed',
			        'label'   => 'AutoplaySpeed',
			        'section' => 'our_testimonial_section',
			        'type'  => 'text', 
			        'active_callback' => 'our_testimonial_design_callback',  
		        )
		    ));    
		//Our Testimonial in autoplay TimeOut
		    $wp_customize->add_setting('our_testimonial_autoplay_timeout', array(
		    	'default'        => '5000',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_testimonial_autoplay_timeout',
		    	array(
			        'settings' => 'our_testimonial_autoplay_timeout',
			        'label'   => 'AutoplayTimeout',
			        'section' => 'our_testimonial_section',
			        'type'  => 'text',
			        'active_callback' => 'our_testimonial_design_callback',
		        )
		    ));
}
add_action( 'customize_register', 'IFT_our_testimonial_setting' );

function our_testimonial_general_callback(){
	$our_testimonial_section_tab = get_theme_mod( 'our_testimonial_section_tab','general');
	if ( 'general' === $our_testimonial_section_tab ) {
		return true;
	}
	return false;
}
function our_testimonial_design_callback(){
	$our_testimonial_section_tab = get_theme_mod( 'our_testimonial_section_tab','design');
	if ( 'design' === $our_testimonial_section_tab ) {
		return true;
	}
	return false;
}