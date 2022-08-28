<?php
add_action( 'customize_register', 'IFT_inpersttion_slider_setting' );
function IFT_inpersttion_slider_setting($wp_customize ){
	global $default_setting;
	//Featured Slider Section
		$wp_customize->add_section( 'inpersttion_slider_section' , array(
			'title'  => 'Featured Slider',
			'panel'  => 'theme_option_panel',
		) );
		//Featured Slider in tabing
			$wp_customize->add_setting( 'featuredimage_slider_tab', 
		        array(
		            'default'    => 'general', //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability'     => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitize_select',
		        ) 
		    ); 
	        $wp_customize->add_control( new Custom_Radio_Control( 
		        $wp_customize,'featuredimage_slider_tab',array(
		            'settings'   => 'featuredimage_slider_tab', 
		            'priority'   => 10,
		            'section'    => 'inpersttion_slider_section',
		            'type'    => 'select',
		            'choices'    => array(
			        	'general' => 'General',
			        	'design' => 'Design',
		        	),
		        ) 
	        ) );
	    //Create slider in add filed
		    $wp_customize->add_setting( 'featuredimage_slider', 
			        array(
			            'type'       => 'theme_mod',
			            'transport'   => 'refresh',
			            'capability'     => 'edit_theme_options',
			            'default' => inpersttion_theme_get_slider_default(),
			            'sanitize_callback' => 'custom_sanitization_callback',
			        ) 
			    ); 
			$wp_customize->add_control( new Customizer_Repeater( 
		        $wp_customize,'featuredimage_slider',array(
		            'label'                             => esc_html__( 'Slider Items Content', 'grasim-shop' ),
					'section'                           => 'inpersttion_slider_section',
					'add_field_label'                   => esc_html__( 'Add new slide item', 'grasim-shop' ),
					'item_name'                         => esc_html__( 'Slide Item', 'grasim-shop' ),
					'customizer_repeater_image_control' => true,
					'customizer_repeater_title_control' => true,
					'customizer_repeater_text_control'  => true,
					'customizer_repeater_text2_control'=> true,
					'customizer_repeater_button_text_control' => true,
					'customizer_repeater_link_control'  => true,
					'customizer_repeater_checkbox_control' => true,
					'active_callback' => 'slider_general_callback',
		        ) 
	        ) );
	    //Features slider in pro version
				$wp_customize->add_setting('featuredimage_slider_pro', array(
			        'type'       => 'theme_mod',
			        'transport'   => 'refresh',
			        'capability'     => 'edit_theme_options',
			        'sanitize_callback' => 'sanitize_text_field',
			    ));
			    $wp_customize->add_control( new Customize_Upgrade_Control(
			    	$wp_customize,'featuredimage_slider_pro',
			    	array(
				        'settings' => 'featuredimage_slider_pro',
				        'section' => 'inpersttion_slider_section',
				        'active_callback' => 'slider_general_callback',
			        )
			    ));	
	   /* if ( isset( $wp_customize->selective_refresh ) ) {
			$wp_customize->selective_refresh->add_partial(
				'featuredimage_slider_tab',
				array(
					'selector'        => '.featured_slider_image',
					'render_callback' => 'custom_customize_featuredimage_slider',
				)
			);
		}*/
		//Featured Slider in add text color
		    $wp_customize->add_setting( 'featured_slider_text_color', 
		        array(
		        	'default'    =>  $default_setting['featured_slider_text_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'featured_slider_text_color', 
		        array(
		            'label'      => 'Text Color' ,
		            'settings'   => 'featured_slider_text_color', 
		            'priority'   => 10,
		            'section'    => 'inpersttion_slider_section',
		            'active_callback' => 'slider_design_callback',
		        ) 
	        ) );
	   	//Featured Slider arrow in add Text color
		    $wp_customize->add_setting( 'featured_slider_arrow_text_color', 
		        array(
		        	'default'    => $default_setting['featured_slider_arrow_text_color'],
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'featured_slider_arrow_text_color', 
		        array(
		            'label'      => 'Arrow Text Color', 
		            'settings'   => 'featured_slider_arrow_text_color', 
		            'priority'   => 10,
		            'section'    => 'inpersttion_slider_section',
		            'active_callback' => 'slider_design_callback',
		        ) 
	        ) );  	
	    //Featured Slider arrow in add background color
		    $wp_customize->add_setting( 'featured_slider_arrow_bg_color', 
		        array(
		        	'default'    => $default_setting['featured_slider_arrow_bg_color'],
		            'type'       => 'theme_mod',
		            'transport'  => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'featured_slider_arrow_bg_color', 
		        array(
		            'label'      => 'Arrow Background Color', 
		            'settings'   => 'featured_slider_arrow_bg_color', 
		            'priority'   => 10,
		            'section'    => 'inpersttion_slider_section',
		            'active_callback' => 'slider_design_callback',
		        ) 
	        ) );
	    //Featured Slider in arrow Text hover color
		    $wp_customize->add_setting( 'featured_slider_arrow_texthover_color', 
		        array(
		        	'default'    => $default_setting['featured_slider_arrow_texthover_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'featured_slider_arrow_texthover_color', 
		        array(
		            'label'      => 'Arrow Text Hover Color', 
		            'settings'   => 'featured_slider_arrow_texthover_color', 
		            'priority'   => 10,
		            'section'    => 'inpersttion_slider_section',
		            'active_callback' => 'slider_design_callback',
		        ) 
	        ) );
	    //Featured Slider in add background hover color
		    $wp_customize->add_setting( 'featured_slider_arrow_bghover_color', 
		        array(
		        	'default'    => $default_setting['featured_slider_arrow_bghover_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'featured_slider_arrow_bghover_color', 
		        array(
		            'label'      => 'Arrow Background Hover Color', 
		            'settings'   => 'featured_slider_arrow_bghover_color', 
		            'priority'   => 10,
		            'section'    => 'inpersttion_slider_section',
		            'active_callback' => 'slider_design_callback',
		        ) 
	        ) );
	    //Featured Slider in Autoplay True
		    $wp_customize->add_setting('featured_slider_autoplay', array(
		        'default'        => 'true',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'custom_sanitize_select',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'featured_slider_autoplay',
		    	array(
			        'settings' => 'featured_slider_autoplay',
			        'label'   => 'Autoplay',
			        'section' => 'inpersttion_slider_section',
			        'type'  => 'select',
			        'choices'    => array(
			        	'true' => 'True',
			        	'false' => 'False',
		        	),
		        	'active_callback' => 'slider_design_callback',
		        )
		    )); 
		//Featured Slider in autoplay speed
		    $wp_customize->add_setting('featured_slider_autoplay_speed', array(
		    	'default'        => '1000',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'featured_slider_autoplay_speed',
		    	array(
			        'settings' => 'featured_slider_autoplay_speed',
			        'label'   => 'AutoplaySpeed',
			        'section' => 'inpersttion_slider_section',
			        'type'  => 'text',
			        'active_callback' => 'slider_design_callback',
		        )
		    ));  
		//Featured Slider in autoplay TimeOut
		    $wp_customize->add_setting('featured_slider_autoplay_timeout', array(
		    	'default'        => '5000',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'featured_slider_autoplay_timeout',
		    	array(
			        'settings' => 'featured_slider_autoplay_timeout',
			        'label'   => 'AutoplayTimeout',
			        'section' => 'inpersttion_slider_section',
			        'type'  => 'text',
			        'active_callback' => 'slider_design_callback',
		        )
		    ));  


		    //ordering section    
			$wp_customize->add_setting('globalddd_ordering', array(
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'globalddd_ordering',
		    	array(
			        'settings' => 'globalddd_ordering',
			        'section' => 'inpersttion_slider_section',
			        'type'    => 'hidden',
			    )
			));	
		//diseble section    
			$wp_customize->add_setting('custom_ordering_diseble', array(
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'custom_ordering_diseble',
		    	array(
			        'settings' => 'custom_ordering_diseble',
			        'section' => 'inpersttion_slider_section',
			        'type'    => 'hidden',
			    )
			));	
}
function slider_general_callback(){
	$featuredimage_slider_tab = get_theme_mod( 'featuredimage_slider_tab','general');
	if ( 'general' === $featuredimage_slider_tab ) {
		return true;
	}
	return false;
}
function slider_design_callback(){
	$featuredimage_slider_tab = get_theme_mod( 'featuredimage_slider_tab','general');
	if ( 'design' === $featuredimage_slider_tab ) {
		return true;
	}
	return false;
}