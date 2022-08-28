<?php

function IFT_featured_section_setting( $wp_customize ) {
	global $default_setting;
	$image_position = array(
						'left top' => 'Left Top',
			        	'left center' => 'Left Center',
			        	'left bottom' => 'Left Bottom',
			            'right top' => 'Right Top',
			            'right center' => 'Right Center',
			            'right bottom' => 'Right Bottom',
			            'center top' => 'Center Top',
			            'center center' => 'Center Center',
			            'center bottom' => 'Center Bottom',
	);
	//Featured Section
		$wp_customize->add_section( 'featured_sections' , array(
			'title'  => 'Featured Section',
			'panel'  => 'theme_option_panel',
		) ); 
		// Featured Section tabing
			$wp_customize->add_setting( 'featured_section_tab', 
		        array(
		            'default'    => 'general', //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability'     => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitize_select',
		        ) 
		    ); 
	        $wp_customize->add_control( new Custom_Radio_Control( 
		        $wp_customize,'featured_section_tab',array(
		            'settings'   => 'featured_section_tab', 
		            'priority'   => 10,
		            'section'    => 'featured_sections',
		            'type'    => 'select',
		            'choices'    => array(
			        	'general' => 'General',
			        	'design' => 'Design',
		        	),
		        ) 
	        ) );
	    if ( isset( $wp_customize->selective_refresh ) ) {
			$wp_customize->selective_refresh->add_partial(
				'featured_section_tab',
				array(
					'selector'        => '.featured-section_data',
					'render_callback' => 'custom_customize_featured_section',
				)
			);
		}
		//Featured Section title
		    $wp_customize->add_setting('featured_section_main_title', array(
		        'default'        => 'Featured Section',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'featured_section_main_title',
		    	array(
			        'settings' => 'featured_section_main_title',
			        'label'   => 'Featured Section Title',
			        'section' => 'featured_sections',
			        'type'  => 'text',
			        'active_callback' => 'IFT_featured_section_callback',
		        )
		    ));
		//Featured Section Description
		    $wp_customize->add_setting('featured_section_description', array(
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_textarea_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'featured_section_description',
		    	array(
			        'settings' => 'featured_section_description',
			        'label'   => 'Featured Section Description',
			        'section' => 'featured_sections',
			        'type'  => 'textarea',
			        'active_callback' => 'IFT_featured_section_callback',
		        )
		    ));
		//Create Featured Section in add filed
			$wp_customize->add_setting( 'featured_section_content', 
				array(
			            'type'       => 'theme_mod',
			            'transport'   => 'refresh',
			            'capability'     => 'edit_theme_options',
			            'default' => inpersttion_theme_get_info_default(),
			            'sanitize_callback' => 'custom_sanitization_callback',
			        ) 
			);
			$wp_customize->add_control( new Customizer_Repeater( 
			$wp_customize, 'featured_section_content', array(
				'label'                             => esc_html__( 'Info Items Content', 'grasim-shop' ),
				'section'                           => 'featured_sections',
				'add_field_label'                   => esc_html__( 'Add new info', 'grasim-shop' ),
				'item_name'                         => esc_html__( 'Info Item', 'grasim-shop' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_icon_control'  => true,
	            'customizer_repeater_checkbox_control' => true,
	            'active_callback' => 'IFT_featured_section_callback',
			    ) ) );
	   
		//Featured Section icon size 
			$wp_customize->add_setting( 'featured_section_icon_size', array(
				'default'    => '35',
			    'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'featured_section_icon_size',
		    	array(
					'type' => 'number',
					'settings'   => 'featured_section_icon_size',
					'section' => 'featured_sections', // // Add a default or your own section
					'label' => 'Icon Size',
					'description' =>'in px',
					'active_callback' => 'IFT_featured_section_designcallback',
				)
			) );
		// //Featured Section background color
			$wp_customize->add_setting('featured_section_background_section', array(
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new Custom_GeneratePress_Upsell_Section(
		    	$wp_customize,'featured_section_background_section',
		    	array(
			        'settings' => 'featured_section_background_section',
			        'label'   => 'Background Color Or Image',
			        'section' => 'featured_sections',
			        'type'     => 'ast-description',
			        'active_callback' => 'IFT_featured_section_designcallback',
		        )
		    ));
	    //Featured Section backgroung Image
	    	$wp_customize->add_setting('featured_section_bg_image', array(
	    		'default'  => '',
	        	'type'       => 'theme_mod',
		        'transport'     => 'refresh',
		        'height'        => 180,
		        'width'        => 160,
		        'capability' => 'edit_theme_options',
		        'sanitize_callback' => 'esc_url_raw'
		    ));
		    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_section_bg_image', array(
		        'label' => 'Backgroung Image',
		        'section' => 'featured_sections',
		        'settings' => 'featured_section_bg_image',
		        'library_filter' => array( 'gif', 'jpg', 'jpeg', 'png', 'ico' ),
		        'active_callback' => 'IFT_featured_section_designcallback',
		    )));
		//Featured Section in Background Position
		    $wp_customize->add_setting('featured_section_bg_position', array(
		        'default'        => 'center center',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'featured_section_bg_position',
		    	array(
			        'settings' => 'featured_section_bg_position',
			        'label'   => 'Background Position',
			        'section' => 'featured_sections',
			        'type'  => 'select',
			        'active_callback' => 'IFT_featured_section_designcallback',
			        'choices'    => $image_position,
		        )
		    ));
		//Featured Section Section in Background Attachment
			$wp_customize->add_setting('featured_section_bg_attachment', array(
		        'default'        => 'scroll',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'featured_section_bg_attachment',
		    	array(
			        'settings' => 'featured_section_bg_attachment',
			        'label'   => 'Background Attachment',
			        'section' => 'featured_sections',
			        'type'  => 'select',
			        'choices'    => array(
			        	'scroll' => 'Scroll',
			        	'fixed' => 'Fixed',
		        	),
		        	'active_callback' => 'IFT_featured_section_designcallback',
		        )
		    ));
		//Featured Section Section in image background Size
		    $wp_customize->add_setting('featured_section_bg_size', array(
		        'default'        => 'cover',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'featured_section_bg_size',
		    	array(
			        'settings' => 'featured_section_bg_size',
			        'label'   => 'Background Size',
			        'section' => 'featured_sections',
			        'type'  => 'select',
			        'active_callback' => 'IFT_featured_section_designcallback',
			        'choices'    => array(
			        	'auto' => 'Auto',
			        	'cover' => 'Cover',
			            'contain' => 'Contain'
		        	),
		        )
		    ));   
		//Featured Section Background color
				    $wp_customize->add_setting( 'featured_section_main_bg_color', 
				        array(
				            'default'    => $default_setting['featured_section_main_bg_color'], 
				            'type'       => 'theme_mod',
				            'transport'   => 'refresh',
				            'capability' => 'edit_theme_options',
				            'sanitize_callback' => 'custom_sanitization_callback',
				        ) 
				    ); 
			        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
				        $wp_customize,'featured_section_main_bg_color', 
				        array(
				            'label'      => 'Background Color', 
				            'settings'   => 'featured_section_main_bg_color', 
				            'priority'   => 10,
				            'section'    => 'featured_sections',
				            'active_callback' => 'IFT_featured_section_designcallback',
				        ) 
			        ) );
			    //Featured Section text color
				    $wp_customize->add_setting( 'featured_section_main_text_color', 
				        array(
				            'default'    => $default_setting['featured_section_main_text_color'], 
				            'type'       => 'theme_mod',
				            'transport'   => 'refresh',
				            'capability' => 'edit_theme_options',
				            'sanitize_callback' => 'custom_sanitization_callback',
				        ) 
				    ); 
			        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
				        $wp_customize,'featured_section_main_text_color', 
				        array(
				            'label'      => 'Text Color', 
				            'settings'   => 'featured_section_main_text_color', 
				            'priority'   => 10,
				            'section'    => 'featured_sections',
				            'active_callback' => 'IFT_featured_section_designcallback',
				        ) 
			        ) );
				//Featured Section Background color
				    $wp_customize->add_setting( 'featured_section_bg_color', 
				        array(
				            'default'    => $default_setting['featured_section_bg_color'], 
				            'type'       => 'theme_mod',
				            'transport'   => 'refresh',
				            'capability' => 'edit_theme_options',
				            'sanitize_callback' => 'custom_sanitization_callback',
				        ) 
				    ); 
			        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
				        $wp_customize,'featured_section_bg_color', 
				        array(
				            'label'      => 'Contain Background Color', 
				            'settings'   => 'featured_section_bg_color', 
				            'priority'   => 10,
				            'section'    => 'featured_sections',
				            'active_callback' => 'IFT_featured_section_designcallback',
				        ) 
			        ) );
			    //Featured Section Text color
				    $wp_customize->add_setting( 'featured_section_color', 
				        array(
				            'default'    =>  $default_setting['featured_section_color'], 
				            'type'       => 'theme_mod',
				            'transport'   => 'refresh',
				            'capability' => 'edit_theme_options',
				            'sanitize_callback' => 'custom_sanitization_callback',
				        ) 
				    ); 
			        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
				        $wp_customize,'featured_section_color', 
				        array(
				            'label'      => 'Contain Text Color', 
				            'settings'   => 'featured_section_color', 
				            'priority'   => 10,
				            'section'    => 'featured_sections',
				            'active_callback' => 'IFT_featured_section_designcallback',
				        ) 
			        ) ); 
			    //Featured Section Background hover color
				    $wp_customize->add_setting( 'featured_section_bg_hover_color', 
				        array(
				            'default'    => $default_setting['featured_section_bg_hover_color'], 
				            'type'       => 'theme_mod',
				            'transport'   => 'refresh',
				            'capability' => 'edit_theme_options',
				            'sanitize_callback' => 'custom_sanitization_callback',
				        ) 
				    ); 
			        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
				        $wp_customize,'featured_section_bg_hover_color', 
				        array(
				            'label'      => 'Contain Background Hover Color', 
				            'settings'   => 'featured_section_bg_hover_color', 
				            'priority'   => 10,
				            'section'    => 'featured_sections',
				            'active_callback' => 'IFT_featured_section_designcallback',
				        ) 
			        ) ); 
			    //Featured Section Text hover color
				    $wp_customize->add_setting( 'featured_section_text_hover_color', 
				        array(
				            'default'    => $default_setting['featured_section_text_hover_color'], 
				            'type'       => 'theme_mod',
				            'transport'   => 'refresh',
				            'capability' => 'edit_theme_options',
				            'sanitize_callback' => 'custom_sanitization_callback',
				        ) 
				    ); 
			        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
				        $wp_customize,'featured_section_text_hover_color', 
				        array(
				            'label'      => 'Contain Text Hover Color', 
				            'settings'   => 'featured_section_text_hover_color', 
				            'priority'   => 10,
				            'section'    => 'featured_sections',
				            'active_callback' => 'IFT_featured_section_designcallback',
				        ) 
			        ) ); 
			    //Featured Section Icon color
				    $wp_customize->add_setting( 'featured_section_icon_color', 
				        array(
				            'default'    => $default_setting['featured_section_icon_color'], 
				            'type'       => 'theme_mod',
				            'transport'   => 'refresh',
				            'capability' => 'edit_theme_options',
				            'sanitize_callback' => 'custom_sanitization_callback',
				        ) 
				    ); 
			        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
				        $wp_customize,'featured_section_icon_color', 
				        array(
				            'label'      => 'Icon Color', 
				            'settings'   => 'featured_section_icon_color', 
				            'priority'   => 10,
				            'section'    => 'featured_sections',
				            'active_callback' => 'IFT_featured_section_designcallback',
				        ) 
			        ) ); 
			    //Featured Section Icon Hover color
				    $wp_customize->add_setting( 'featured_section_icon_hover_color', 
				        array(
				            'default'    => $default_setting['featured_section_icon_hover_color'], 
				            'type'       => 'theme_mod',
				            'transport'   => 'refresh',
				            'capability' => 'edit_theme_options',
				            'sanitize_callback' => 'custom_sanitization_callback',
				        ) 
				    ); 
			        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
				        $wp_customize,'featured_section_icon_hover_color', 
				        array(
				            'label'      => 'Icon Hover Color', 
				            'settings'   => 'featured_section_icon_hover_color', 
				            'priority'   => 10,
				            'section'    => 'featured_sections',
				            'active_callback' => 'IFT_featured_section_designcallback',
				        ) 
			        ) ); 
			    //Featured Section Icon Backgroundcolor
				    $wp_customize->add_setting( 'featured_section_icon_bg_color', 
				        array(
				            'default'    => $default_setting['featured_section_icon_bg_color'], 
				            'type'       => 'theme_mod',
				            'transport'   => 'refresh',
				            'capability' => 'edit_theme_options',
				            'sanitize_callback' => 'custom_sanitization_callback',
				        ) 
				    ); 
			        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
				        $wp_customize,'featured_section_icon_bg_color', 
				        array(
				            'label'      => 'Icon Background Color', 
				            'settings'   => 'featured_section_icon_bg_color', 
				            'priority'   => 10,
				            'section'    => 'featured_sections',
				            'active_callback' => 'IFT_featured_section_designcallback',
				        ) 
			        ) ); 
			    //Featured Section Icon Background Hover color
				    $wp_customize->add_setting( 'featured_section_icon_bg_hover_color', 
				        array(
				            'default'    => $default_setting['featured_section_icon_bg_hover_color'], 
				            'type'       => 'theme_mod',
				            'transport'   => 'refresh',
				            'capability' => 'edit_theme_options',
				            'sanitize_callback' => 'custom_sanitization_callback',
				        ) 
				    ); 
			        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
				        $wp_customize,'featured_section_icon_bg_hover_color', 
				        array(
				            'label'      => 'Icon Background Hover Color', 
				            'settings'   => 'featured_section_icon_bg_hover_color', 
				            'priority'   => 10,
				            'section'    => 'featured_sections',
				            'active_callback' => 'IFT_featured_section_designcallback',
				        ) 
			        ) ); 
			    //Featured Section margin
			        $wp_customize->add_setting( 'featured_section_margin', 
				        array(
				            'default'    => '0px 0px 0px 0px', //Default setting/value to save
				            'type'       => 'theme_mod',
				            'transport'   => 'refresh',
				            'capability' => 'edit_theme_options',
				            'sanitize_callback' => 'sanitize_text_field',
				        ) 
				    ); 
			        $wp_customize->add_control( new WP_Customize_Control( 
				        $wp_customize,'featured_section_margin', 
				        array(
				            'label'      => 'Margin', 
				            'description'=> '0px 0px 0px 0px',
				            'settings'   => 'featured_section_margin', 
				            'priority'   => 10,
				            'section'    => 'featured_sections',
				            'active_callback' => 'IFT_featured_section_designcallback',
				        ) 
			        ) );	    
}
add_action( 'customize_register', 'IFT_featured_section_setting' );
function IFT_featured_section_callback(){
	$featured_section_tab = get_theme_mod( 'featured_section_tab','general');
	if ( 'general' === $featured_section_tab ) {
		return true;
	}
	return false;
}
function IFT_featured_section_designcallback(){
	$featured_section_tab = get_theme_mod( 'featured_section_tab','design');
	if ( 'design' === $featured_section_tab ) {
		return true;
	}
	return false;
}