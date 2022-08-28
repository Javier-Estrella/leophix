<?php
function IFT_our_team_setting( $wp_customize ) {
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
	//Our Team
		$wp_customize->add_section( 'our_team_section' , array(
			'title'  => 'Our Team',
			'panel'  => 'theme_option_panel',
		) );
		//Our Team tabing 
			$wp_customize->add_setting( 'our_team_section_tab', 
		        array(
		            'default'    => 'general', //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability'     => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitize_select',
		        ) 
		    ); 
	        $wp_customize->add_control( new Custom_Radio_Control( 
		        $wp_customize,'our_team_section_tab',array(
		            'settings'   => 'our_team_section_tab', 
		            'priority'   => 10,
		            'section'    => 'our_team_section',
		            'type'    => 'select',
		            'choices'    => array(
			        	'general' => 'General',
			        	'design' => 'Design',
		        	),
		        ) 
	        ) );
		//Our Team in Title
			$wp_customize->add_setting( 'our_team_main_title', array(
				'default'    => 'Our Team',
			    'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_team_main_title',
		    	array(
					'type' => 'text',
					'settings' => 'our_team_main_title',
					'section' => 'our_team_section', // // Add a default or your own section
					'label' => 'Our Team Title',
					'active_callback' => 'our_team_general_callback',
				)
			) );
			if ( isset( $wp_customize->selective_refresh ) ) {
				$wp_customize->selective_refresh->add_partial(
					'our_team_main_title',
					array(
						'selector'        => '.our_team_section',
						'render_callback' => 'custom_customize_partial_our_team',
					)
				);
			}
		//Our Team in Discription
			$wp_customize->add_setting( 'our_team_main_discription', array(
			    'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_textarea_field',
			) );
			$wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_team_main_discription',
		    	array(
					'type' => 'textarea',
					'settings' => 'our_team_main_discription',
					'section' => 'our_team_section', // // Add a default or your own section
					'label' => 'Our Team Discription',  
					'active_callback' => 'our_team_general_callback',
				)
			) );
		//Create Our Team Section in add filed
			$wp_customize->add_setting( 'our_team_section_content', 
				array(
			            'type'       => 'theme_mod',
			            'transport'   => 'refresh',
			            'capability'     => 'edit_theme_options',
			            'default' => inpersttion_theme_get_team_default(),
			            'sanitize_callback' => 'custom_sanitization_callback',
			        ) 
			);
			$wp_customize->add_control( new Customizer_Repeater( 
			$wp_customize, 'our_team_section_content', array(
				'label'                             => esc_html__( 'Team Items Content', 'grasim-shop' ),
				'section'                           => 'our_team_section',
				'add_field_label'                   => esc_html__( 'Add new Team', 'grasim-shop' ),
				'item_name'                         => esc_html__( 'Team Item', 'grasim-shop' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_subtitle_control' => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_twitter_control'  => true,
				'customizer_repeater_facebook_control'  => true,
				'customizer_repeater_linkedin_control'  => true,
				'customizer_repeater_instagram_control'  => true,
	            'customizer_repeater_checkbox_control' => true,
	            'active_callback' => 'our_team_general_callback',
			    ) ) );
		//Our Team in pro version
			$wp_customize->add_setting('our_team_section_pro', array(
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new Customize_Upgrade_Control(
		    	$wp_customize,'our_team_section_pro',
		    	array(
			        'settings' => 'our_team_section_pro',
			        'section' => 'our_team_section',
			        'active_callback' => 'our_team_general_callback',
			        'sanitize_callback' => 'custom_sanitization_callback',
		        )
		    ));	
	   
		//Our Team Section in Background Title
	    	$wp_customize->add_setting('our_team_background_section', array(
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new Custom_GeneratePress_Upsell_Section(
		    	$wp_customize,'our_team_background_section',
		    	array(
			        'settings' => 'our_team_background_section',
			        'label'   => 'Background Color Or Image',
			        'section' => 'our_team_section',
			        'type'     => 'ast-description',
			        'active_callback' => 'our_team_design_callback',
		        )
		    ));
		    //Our Team backgroung Image
		    	$wp_customize->add_setting('our_team_bg_image', array(
		    		'default'  => '',
		        	'type'       => 'theme_mod',
			        'transport'     => 'refresh',
			        'height'        => 180,
			        'width'        => 160,
			        'capability' => 'edit_theme_options',
			        'sanitize_callback' => 'esc_url_raw'
			    ));
			    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'our_team_bg_image', array(
			        'label' => 'Backgroung Image',
			        'section' => 'our_team_section',
			        'settings' => 'our_team_bg_image',
			        'library_filter' => array( 'gif', 'jpg', 'jpeg', 'png', 'ico' ),
			        'active_callback' => 'our_team_design_callback',
			    )));
			//Our Team in Background Position
			    $wp_customize->add_setting('our_team_bg_position', array(
			        'default'        => 'center center',
			        'type'       => 'theme_mod',
			        'transport'   => 'refresh',
			        'capability'     => 'edit_theme_options',		
			        'sanitize_callback' => 'sanitize_text_field',
			    ));
			    $wp_customize->add_control( new WP_Customize_Control(
			    	$wp_customize,'our_team_bg_position',
			    	array(
				        'settings' => 'our_team_bg_position',
				        'label'   => 'Background Position',
				        'section' => 'our_team_section',
				        'type'  => 'select',
				        'active_callback' => 'our_team_design_callback',
				        'choices'    => $image_position,
			        )
			    ));
			//Our Team Section in Background Attachment
				$wp_customize->add_setting('our_team_bg_attachment', array(
			        'default'        => 'scroll',
			        'type'       => 'theme_mod',
			        'transport'   => 'refresh',
			        'capability'     => 'edit_theme_options',		
			        'sanitize_callback' => 'sanitize_text_field',
			    ));
			    $wp_customize->add_control( new WP_Customize_Control(
			    	$wp_customize,'our_team_bg_attachment',
			    	array(
				        'settings' => 'our_team_bg_attachment',
				        'label'   => 'Background Attachment',
				        'section' => 'our_team_section',
				        'type'  => 'select',
				        'choices'    => array(
				        	'scroll' => 'Scroll',
				        	'fixed' => 'Fixed',
			        	),
			        	'active_callback' => 'our_team_design_callback',
			        )
			    ));
			//Our Team Section in image background Size
			    $wp_customize->add_setting('our_team_bg_size', array(
			        'default'        => 'cover',
			        'type'       => 'theme_mod',
			        'transport'   => 'refresh',
			        'capability'     => 'edit_theme_options',		
			        'sanitize_callback' => 'sanitize_text_field',
			    ));
			    $wp_customize->add_control( new WP_Customize_Control(
			    	$wp_customize,'our_team_bg_size',
			    	array(
				        'settings' => 'our_team_bg_size',
				        'label'   => 'Background Size',
				        'section' => 'our_team_section',
				        'type'  => 'select',
				        'active_callback' => 'our_team_design_callback',
				        'choices'    => array(
				        	'auto' => 'Auto',
				        	'cover' => 'Cover',
				            'contain' => 'Contain'
			        	),
			        )
			    ));   
			//Our team background color
				$wp_customize->add_setting( 'our_team_bg_color', 
			        array(
			            'default'    => $default_setting['our_team_bg_color'], //Default setting/value to save
			            'type'       => 'theme_mod',
			            'transport'   => 'refresh',
			            'capability' => 'edit_theme_options',
			            'sanitize_callback' => 'custom_sanitization_callback',
			        ) 
			    ); 
		        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
			        $wp_customize,'our_team_bg_color', 
			        array(
			            'label'      => 'Background Color', 
			            'settings'   => 'our_team_bg_color', 
			            'priority'   => 10,
			            'section'    => 'our_team_section',
			            'active_callback' => 'our_team_design_callback',
			        ) 
		        ) ); 
	    //Our team text color
			$wp_customize->add_setting( 'our_team_text_color', 
		        array(
		            'default'    => $default_setting['our_team_text_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_team_text_color', 
		        array(
		            'label'      => 'Text Color', 
		            'settings'   => 'our_team_text_color', 
		            'priority'   => 10,
		            'section'    => 'our_team_section',
		            'active_callback' => 'our_team_design_callback',
		        ) 
	        ) ); 
	    //Our team text hover color
			$wp_customize->add_setting( 'our_team_text_hover_color', 
		        array(
		            'default'    => $default_setting['our_team_text_hover_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_team_text_hover_color', 
		        array(
		            'label'      => 'hover on Text Color', 
		            'settings'   => 'our_team_text_hover_color', 
		            'priority'   => 10,
		            'section'    => 'our_team_section',
		            'active_callback' => 'our_team_design_callback',
		        ) 
	        ) );  
	    //Our team icon color
			$wp_customize->add_setting( 'our_team_icon_color', 
		        array(
		            'default'    => $default_setting['our_team_icon_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_team_icon_color', 
		        array(
		            'label'      => 'Icon Color', 
		            'settings'   => 'our_team_icon_color', 
		            'priority'   => 10,
		            'section'    => 'our_team_section',
		            'active_callback' => 'our_team_design_callback',
		        ) 
	        ) );  
	    //Our team icon hover color
			$wp_customize->add_setting( 'our_team_icon_hover_color', 
		        array(
		            'default'    => $default_setting['our_team_icon_hover_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_team_icon_hover_color', 
		        array(
		            'label'      => 'Icon Hover Color', 
		            'settings'   => 'our_team_icon_hover_color', 
		            'priority'   => 10,
		            'section'    => 'our_team_section',
		            'active_callback' => 'our_team_design_callback',
		        ) 
	        ) );  
	    //Our team icon background color
			$wp_customize->add_setting( 'our_team_icon_background_color', 
		        array(
		            'default'    => $default_setting['our_team_icon_background_color'],
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_team_icon_background_color', 
		        array(
		            'label'      => 'Icon Background Color', 
		            'settings'   => 'our_team_icon_background_color', 
		            'priority'   => 10,
		            'section'    => 'our_team_section',
		            'active_callback' => 'our_team_design_callback',
		        ) 
	        ) );  
	    //Our team icon background hover color
			$wp_customize->add_setting( 'our_team_icon_bg_hover_color', 
		        array(
		            'default'    => $default_setting['our_team_icon_bg_hover_color'], 
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_team_icon_bg_hover_color', 
		        array(
		            'label'      => 'Icon Background Hover Color', 
		            'settings'   => 'our_team_icon_bg_hover_color', 
		            'priority'   => 10,
		            'section'    => 'our_team_section',
		            'active_callback' => 'our_team_design_callback',
		        ) 
	        ) );  
	    //Our team Link color
			$wp_customize->add_setting( 'our_team_link_color', 
		        array(
		            'default'    => $default_setting['our_team_link_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_team_link_color', 
		        array(
		            'label'      => 'Link Color', 
		            'settings'   => 'our_team_link_color', 
		            'priority'   => 10,
		            'section'    => 'our_team_section',
		            'active_callback' => 'our_team_design_callback',
		        ) 
	        ) );  
	    //Our team Link Hover color
			$wp_customize->add_setting( 'our_team_link_hover_color', 
		        array(
		            'default'    => $default_setting['our_team_link_hover_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_team_link_hover_color', 
		        array(
		            'label'      => 'Link Hover Color', 
		            'settings'   => 'our_team_link_hover_color', 
		            'priority'   => 10,
		            'section'    => 'our_team_section',
		            'active_callback' => 'our_team_design_callback',
		        ) 
	        ) );  
}
add_action( 'customize_register', 'IFT_our_team_setting' );

function our_team_general_callback(){
	$our_team_section_tab = get_theme_mod( 'our_team_section_tab','general');
	if ( 'general' === $our_team_section_tab ) {
		return true;
	}
	return false;
}
function our_team_design_callback(){
	$our_team_section_tab = get_theme_mod( 'our_team_section_tab','design');
	if ( 'design' === $our_team_section_tab ) {
		return true;
	}
	return false;
}
?>