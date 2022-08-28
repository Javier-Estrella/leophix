<?php
function IFT_our_portfolio_setting($wp_customize){
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
	//Our Portfolio
	    $wp_customize->add_section( 'our_portfolio_section' , array(
			'title'  => 'Our Portfolio',
			'panel'  => 'theme_option_panel',
		) ); 
		//Our Portfolio tabing
			$wp_customize->add_setting( 'our_portfolio_section_tab', 
		        array(
		            'default'    => 'general', //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability'     => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitize_select',
		        ) 
		    ); 
	        $wp_customize->add_control( new Custom_Radio_Control( 
		        $wp_customize,'our_portfolio_section_tab',array(
		            'settings'   => 'our_portfolio_section_tab', 
		            'priority'   => 10,
		            'section'    => 'our_portfolio_section',
		            'type'    => 'select',
		            'choices'    => array(
			        	'general' => 'General',
			        	'design' => 'Design',
		        	),
		        ) 
	        ) );
	    //Our Portfolio in Title
			$wp_customize->add_setting( 'our_portfolio_main_title', array(
				'default'    => 'Our Portfolio',
			    'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_portfolio_main_title',
		    	array(
					'type' => 'text',
					'settings' => 'our_portfolio_main_title',
					'section' => 'our_portfolio_section', // // Add a default or your own section
					'label' => 'Our Portfolio Title',
					'active_callback' => 'our_portfolio_general_callback',
				)
			) );
			if ( isset( $wp_customize->selective_refresh ) ) {
				$wp_customize->selective_refresh->add_partial(
					'our_portfolio_main_title',
					array(
						'selector'        => '.our_portfolio_info',
						'render_callback' => 'custom_customize_partial_name',
					)
				);
			}
		//Our Portfolio in Discription
			$wp_customize->add_setting( 'our_portfolio_main_discription', array(
			    'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_portfolio_main_discription',
		    	array(
					'type' => 'textarea',
					'settings' => 'our_portfolio_main_discription',
					'section' => 'our_portfolio_section', // // Add a default or your own section
					'label' => 'Our Portfolio Discription',
					'active_callback' => 'our_portfolio_general_callback',
				)
			) );
		//Create Our Portfolio add new filed			
			$wp_customize->add_setting( 'our_portfolio_section_content', 
				array( 
					'default'        => inpersttion_theme_get_portfolio_default(),
			        'type'       => 'theme_mod',
			        'transport'   => 'refresh',
			        'capability'     => 'edit_theme_options',
			        'sanitize_callback' => 'custom_sanitization_callback',
					
			) );
			$wp_customize->add_control( new Customizer_Repeater( 
			$wp_customize, 'our_portfolio_section_content', array(
				'label'                             => esc_html__( 'Portfolio Items Content', 'grasim-shop' ),
				'section'                           => 'our_portfolio_section',
				'add_field_label'                   => esc_html__( 'Add new Portfolio Items', 'grasim-shop' ),
				'item_name'                         => esc_html__( 'Portfolio Item', 'grasim-shop' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_subtitle_control' => true,
				//'customizer_repeater_icon_control'  => true,
				'customizer_repeater_link_control'  => true,
	            'customizer_repeater_checkbox_control' => true,
	            'active_callback' => 'our_portfolio_general_callback',
			    ) ) );

		//our_portfolioin pro version
			$wp_customize->add_setting('our_portfolioin_section_pro', array(
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new Customize_Upgrade_Control(
		    	$wp_customize,'our_portfolioin_section_pro',
		    	array(
			        'settings' => 'our_portfolioin_section_pro',
			        'section' => 'our_portfolio_section',
			        'active_callback' => 'our_portfolio_general_callback',
		        )
		    ));	

		//Our Portfolio in Background Title
			$wp_customize->add_setting('our_portfolio_bg_heading', array(
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new Custom_GeneratePress_Upsell_Section(
		    	$wp_customize,'our_portfolio_bg_heading',
		    	array(
			        'settings' => 'our_portfolio_bg_heading',
			        'label'   => 'Background Color',
			        'section' => 'our_portfolio_section',
			        'type'     => 'ast-description',
			        'active_callback' => 'our_portfolio_design_callback',
		        )
		    )); 
	    //Our Portfolio Section in Background Image
	    	$wp_customize->add_setting('our_portfolio_bg_image', array(
	    		'default'  => '',
	        	'type'       => 'theme_mod',
		        'transport'     => 'refresh',
		        'height'        => 180,
		        'width'        => 160,
		        'capability' => 'edit_theme_options',
		        'sanitize_callback' => 'esc_url_raw'
		    ));
		    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'our_portfolio_bg_image', array(
		        'label'  =>  'Background Image',
		        'section' => 'our_portfolio_section',
		        'settings' => 'our_portfolio_bg_image',
		        'library_filter' => array( 'gif', 'jpg', 'jpeg', 'png', 'ico' ),
		        'active_callback' => 'our_portfolio_design_callback',
		    )));
		//Our Portfolio  in image background position
		    $wp_customize->add_setting('our_portfolio_bg_position', array(
		        'default'        => 'center center',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'custom_sanitize_select',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_portfolio_bg_position',
		    	array(
			        'settings' => 'our_portfolio_bg_position',
			        'label'   => 'Background Position',
			        'section' => 'our_portfolio_section',
			        'type'  => 'select',
			        'choices'    => $image_position,
		        	'active_callback' => 'our_portfolio_design_callback',
		        )
		    )); 
		//Our Portfolio in image background attachment
		    $wp_customize->add_setting('our_portfolio_design_callback', array(
		        'default'        => 'scroll',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'custom_sanitize_select',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_portfolio_design_callback',
		    	array(
			        'settings' => 'our_portfolio_design_callback',
			        'label'   => 'Background Attachment',
			        'section' => 'our_portfolio_section',
			        'type'  => 'select',
			        'choices'    => array(
			        	'scroll' => 'Scroll',
			        	'fixed' => 'Fixed',
		        	),
		        	'active_callback' => 'our_portfolio_design_callback',
		        )
		    ));
		//Our Portfolio  in image background Size
		    $wp_customize->add_setting('our_portfolio_bg_size', array(
		        'default'        => 'cover',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'custom_sanitize_select',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'our_portfolio_bg_size',
		    	array(
			        'settings' => 'our_portfolio_bg_size',
			        'label'   => 'Background Size',
			        'section' => 'our_portfolio_section',
			        'type'  => 'select',
			        'choices'    => array(
			        	'auto' => 'Auto',
			        	'cover' => 'Cover',
			            'contain' => 'Contain'
		        	),
		        	'active_callback' => 'our_portfolio_design_callback',
		        )
		    ));  
		//Our Portfolio in background color
		   	$wp_customize->add_setting( 'our_portfolio_bg_color', 
		        array(
		            'default'    => $default_setting['our_portfolio_bg_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_portfolio_bg_color', 
		        array(
		            'label'      => 'Background Color', 
		            'settings'   => 'our_portfolio_bg_color', 
		            'priority'   => 10,
		            'section'    => 'our_portfolio_section',
		            'active_callback' => 'our_portfolio_design_callback',
		        ) 
	        ) ); 
	    //Our Portfolio in title color
		   	$wp_customize->add_setting( 'our_portfolio_title_color', 
		        array(
		            'default'    => $default_setting['our_portfolio_title_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_portfolio_title_color', 
		        array(
		            'label'      => 'Title Color', 
		            'settings'   => 'our_portfolio_title_color', 
		            'priority'   => 10,
		            'section'    => 'our_portfolio_section',
		            'active_callback' => 'our_portfolio_design_callback',
		        ) 
	        ) ); 
	    //Our Portfolio in text color
		   	$wp_customize->add_setting( 'our_portfolio_text_color', 
		        array(
		            'default'    => $default_setting['our_portfolio_text_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_portfolio_text_color', 
		        array(
		            'label'      => 'Text Color', 
		            'settings'   => 'our_portfolio_text_color', 
		            'priority'   => 10,
		            'section'    => 'our_portfolio_section',
		            'active_callback' => 'our_portfolio_design_callback',
		        ) 
	        ) );    
	    //Our Portfolio in Container text color
		   	$wp_customize->add_setting( 'our_portfolio_container_text_color', 
		        array(
		            'default'    => $default_setting['our_portfolio_container_text_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_portfolio_container_text_color', 
		        array(
		            'label'      => 'Container Text Color', 
		            'settings'   => 'our_portfolio_container_text_color', 
		            'priority'   => 10,
		            'section'    => 'our_portfolio_section',
		            'active_callback' => 'our_portfolio_design_callback',
		        ) 
	        ) );  
	    //Our Portfolio in Container background color
		   	$wp_customize->add_setting( 'our_portfolio_container_bg_color', 
		        array(
		            'default'    => $default_setting['our_portfolio_container_bg_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_portfolio_container_bg_color', 
		        array(
		            'label'      => 'Icon Container Background Color', 
		            'settings'   => 'our_portfolio_container_bg_color', 
		            'priority'   => 10,
		            'section'    => 'our_portfolio_section',
		            'active_callback' => 'our_portfolio_design_callback',
		        ) 
	        ) );   
	    //Our Portfolio in icon background color
		   	$wp_customize->add_setting( 'our_portfolio_icon_bg_color', 
		        array(
		            'default'    => $default_setting['our_portfolio_icon_bg_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_portfolio_icon_bg_color', 
		        array(
		            'label'      => 'Icon Background Color', 
		            'settings'   => 'our_portfolio_icon_bg_color', 
		            'priority'   => 10,
		            'section'    => 'our_portfolio_section',
		            'active_callback' => 'our_portfolio_design_callback',
		        ) 
	        ) );   
	    //Our Portfolio in icon color
		   	$wp_customize->add_setting( 'our_portfolio_icon_color', 
		        array(
		            'default'    => $default_setting['our_portfolio_icon_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'our_portfolio_icon_color', 
		        array(
		            'label'      => 'Icon Color', 
		            'settings'   => 'our_portfolio_icon_color', 
		            'priority'   => 10,
		            'section'    => 'our_portfolio_section',
		            'active_callback' => 'our_portfolio_design_callback',
		        ) 
	        ) );   
}
add_action( 'customize_register', 'IFT_our_portfolio_setting' );

function our_portfolio_general_callback(){
	$our_portfolio_section_tab = get_theme_mod( 'our_portfolio_section_tab','general');
	if ( 'general' === $our_portfolio_section_tab ) {
		return true;
	}
	return false;
}
function our_portfolio_design_callback(){
	$our_portfolio_section_tab = get_theme_mod( 'our_portfolio_section_tab','design');
	if ( 'design' === $our_portfolio_section_tab ) {
		return true;
	}
	return false;
}