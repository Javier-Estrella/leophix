<?php
function IFT_about_section_setting( $wp_customize ) {
	global $default_setting;
	//About Section	
		$wp_customize->add_section( 'about_section' , array(
			'title'  => 'About Section',
			'panel'  => 'theme_option_panel',
		) );
		//About Section title
		    $wp_customize->add_setting('about_main_title', array(
		        'default'        => 'About',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'about_main_title',
		    	array(
			        'settings' => 'about_main_title',
			        'label'   => 'About Title',
			        'section' => 'about_section',
			        'type'  => 'text',
		        )
		    ));
		    if ( isset( $wp_customize->selective_refresh ) ) {
				$wp_customize->selective_refresh->add_partial(
					'about_main_title',
					array(
						'selector'        => '.about_section_info',
						'render_callback' => 'custom_customize_about_name',
					)
				);
			}
		//About Section Description
		    $wp_customize->add_setting('about_description', array(
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'sanitize_textarea_field',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'about_description',
		    	array(
			        'settings' => 'about_description',
			        'label'   => 'About Description',
			        'section' => 'about_section',
			        'type'  => 'textarea',
		        )
		    ));
		//About Section image 
			$wp_customize->add_setting('about_section_image', array(
	        	'type'       => 'theme_mod',
		        'transport'     => 'refresh',
		        'height'        => 180,
		        'width'        => 160,
		        'capability' => 'edit_theme_options',
		        'sanitize_callback' => 'esc_url_raw'
		    ));
		    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'about_section_image' , array(
		        'label' =>  'Image',
		        'section' => 'about_section',
		        'settings' => 'about_section_image',
		        'library_filter' => array( 'gif', 'jpg', 'jpeg', 'png', 'ico' ),
		    )));
		//About Section layouts
			$wp_customize->add_setting('about_section_layouts', array(
		        'default'        => 'layout2',
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',		
		        'sanitize_callback' => 'custom_sanitize_select',
		    ));
		    $wp_customize->add_control( new WP_Customize_Control(
		    	$wp_customize,'about_section_layouts',
		    	array(
			        'settings' => 'about_section_layouts',
			        'label'   => 'About Layouts',
			        'section' => 'about_section',
			        'type'  => 'select',
			        'choices'    => array(
			        	'layout1' => 'Layout 1',
			        	'layout2' => 'Layout 2',
		        	),
		        )
		    ));
		//Layout1
		    //Layout1 title
			    $wp_customize->add_setting('about_layout1_title', array(
			        'default'        => 'Hi, I Am Samantha!',
			        'type'       => 'theme_mod',
			        'transport'   => 'refresh',
			        'capability'     => 'edit_theme_options',		
			        'sanitize_callback' => 'sanitize_text_field',
			    ));
			    $wp_customize->add_control( new WP_Customize_Control(
			    	$wp_customize,'about_layout1_title',
			    	array(
				        'settings' => 'about_layout1_title',
				        'label'   => 'About Title',
				        'section' => 'about_section',
				        'type'  => 'text',
				        'active_callback' => 'about_layout1_callback',
			        )
			    ));
			//Layout1 subheading
			    $wp_customize->add_setting('about_layout1_subheading', array(
			        'default'        => 'Owner/Founder, Executive Coach',
			        'type'       => 'theme_mod',
			        'transport'   => 'refresh',
			        'capability'     => 'edit_theme_options',		
			        'sanitize_callback' => 'sanitize_text_field',
			    ));
			    $wp_customize->add_control( new WP_Customize_Control(
			    	$wp_customize,'about_layout1_subheading',
			    	array(
				        'settings' => 'about_layout1_subheading',
				        'label'   => 'Sub Heading',
				        'section' => 'about_section',
				        'type'  => 'text',
				        'active_callback' => 'about_layout1_callback',
			        )
			    ));
			//Layout1 description
			    $wp_customize->add_setting('about_layout1_description', array(
			        'type'       => 'theme_mod',
			        'transport'   => 'refresh',
			        'capability'     => 'edit_theme_options',		
			        'sanitize_callback' => 'sanitize_textarea_field',
			    ));
			    $wp_customize->add_control( new WP_Customize_Control(
			    	$wp_customize,'about_layout1_description',
			    	array(
				        'settings' => 'about_layout1_description',
				        'label'   => 'About Description',
				        'section' => 'about_section',
				        'type'  => 'textarea',
				        'active_callback' => 'about_layout1_callback',
			        )
			    ));
			//Layout1 button
			    $wp_customize->add_setting('about_layout1_button', array(
			        'default'        => 'Read More',
			        'type'       => 'theme_mod',
			        'transport'   => 'refresh',
			        'capability'     => 'edit_theme_options',		
			        'sanitize_callback' => 'sanitize_text_field',
			    ));
			    $wp_customize->add_control( new WP_Customize_Control(
			    	$wp_customize,'about_layout1_button',
			    	array(
				        'settings' => 'about_layout1_button',
				        'label'   => 'Button',
				        'section' => 'about_section',
				        'type'  => 'text',
				        'active_callback' => 'about_layout1_callback',
			        )
			    ));
			//Layout1 button Link
			    $wp_customize->add_setting('about_layout1_button_link', array(
			        'default'        => '#',
			        'type'       => 'theme_mod',
			        'transport'   => 'refresh',
			        'capability'     => 'edit_theme_options',		
			        'sanitize_callback' => 'sanitize_text_field',
			    ));
			    $wp_customize->add_control( new WP_Customize_Control(
			    	$wp_customize,'about_layout1_button_link',
			    	array(
				        'settings' => 'about_layout1_button_link',
				        'label'   => 'Button Link',
				        'section' => 'about_section',
				        'type'  => 'text',
				        'active_callback' => 'about_layout1_callback',
			        )
			    ));
		//Layout2
			//Create Featured Section in add filed
			$wp_customize->add_setting( 'about_section_content', 
				array(
			            'type'       => 'theme_mod',
			            'transport'   => 'refresh',
			            'capability'     => 'edit_theme_options',
			            'default' => inpersttion_theme_get_about_default(),
			            'sanitize_callback' => 'custom_sanitization_callback',
			        ) 
			);
			$wp_customize->add_control( new Customizer_Repeater( 
			$wp_customize, 'about_section_content', array(
				'label'                             => esc_html__( 'About Items Content', 'grasim-shop' ),
				'section'                           => 'about_section',
				'add_field_label'                   => esc_html__( 'Add new About', 'grasim-shop' ),
				'item_name'                         => esc_html__( 'About Item', 'grasim-shop' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_link_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_icon_control'  => true,
	            'customizer_repeater_checkbox_control' => true,
	            'active_callback' => 'about_layout2_callback',
			    ) ) );

		//About in pro version
			$wp_customize->add_setting('about_section_pro', array(
		        'type'       => 'theme_mod',
		        'transport'   => 'refresh',
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
		    ));
		    $wp_customize->add_control( new Customize_Upgrade_Control(
		    	$wp_customize,'about_section_pro',
		    	array(
			        'settings' => 'about_section_pro',
			        'section' => 'about_section',
			        'active_callback' => 'about_layout2_callback',
			        'sanitize_callback' => 'custom_sanitization_callback',
		        )
		    ));

		//About Background Color
		    $wp_customize->add_setting( 'about_bg_color', 
		        array(
		            'default'    =>  $default_setting['about_bg_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'about_bg_color', 
		        array(
		            'label'      => 'Background Color', 
		            'settings'   => 'about_bg_color', 
		            'priority'   => 10,
		            'section'    => 'about_section',
		        ) 
	        ) ); 
	    //About title text color
	        $wp_customize->add_setting( 'about_title_text_color', 
		        array(
		            'default'    => $default_setting['about_title_text_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'about_title_text_color', 
		        array(
		            'label'      => 'Title Text Color', 
		            'settings'   => 'about_title_text_color', 
		            'priority'   => 10,
		            'section'    => 'about_section',
		        ) 
	        ) ); 
	    //About text color
	        $wp_customize->add_setting( 'about_text_color', 
		        array(
		            'default'    => $default_setting['about_text_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'about_text_color', 
		        array(
		            'label'      => 'Text Color', 
		            'settings'   => 'about_text_color', 
		            'priority'   => 10,
		            'section'    => 'about_section',
		        ) 
	        ) ); 
	    //About Link color
	        $wp_customize->add_setting( 'about_link_color', 
		        array(
		            'default'    => $default_setting['about_link_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'about_link_color', 
		        array(
		            'label'      => 'Link Color', 
		            'settings'   => 'about_link_color', 
		            'priority'   => 10,
		            'section'    => 'about_section',
		        ) 
	        ) ); 
	    //About text color
	        $wp_customize->add_setting( 'about_link_hover_color', 
		        array(
		            'default'    => $default_setting['about_link_hover_color'], //Default setting/value to save
		            'type'       => 'theme_mod',
		            'transport'   => 'refresh',
		            'capability' => 'edit_theme_options',
		            'sanitize_callback' => 'custom_sanitization_callback',
		        ) 
		    ); 
	        $wp_customize->add_control( new Customize_Transparent_Color_Control( 
		        $wp_customize,'about_link_hover_color', 
		        array(
		            'label'      => 'Link Hover Color', 
		            'settings'   => 'about_link_hover_color', 
		            'priority'   => 10,
		            'section'    => 'about_section',
		        ) 
	        ) ); 
}
add_action( 'customize_register', 'IFT_about_section_setting' );

function about_layout1_callback(){
	$about_section_layouts = get_theme_mod( 'about_section_layouts','layout2');
	if ( 'layout1' === $about_section_layouts ) {
		return true;
	}
	return false;
}
function about_layout2_callback(){
	$about_section_layouts = get_theme_mod( 'about_section_layouts','layout2');
	if ( 'layout2' === $about_section_layouts ) {
		return true;
	}
	return false;
}
?>