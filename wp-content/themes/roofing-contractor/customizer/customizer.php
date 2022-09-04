<?php

function roofing_contractor_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_section( 'construction_hub_color_option' );
    $wp_customize->remove_section( 'construction_hub_pro_documentation' );
    $wp_customize->remove_section( 'construction_hub_about_section' );
}
add_action( 'customize_register', 'roofing_contractor_remove_customize_register', 11 );

function roofing_contractor_customize_register( $wp_customize ) {

    //Social Media
    $wp_customize->add_section( 'roofing_contractor_social_media', array(
        'title'      => __( 'Social Media Links', 'roofing-contractor' ),
        'priority' => 50,
        'description' => __( 'Add your Social Links', 'roofing-contractor' ),
        'panel' => 'construction_hub_panel_id'
    ) );

    $wp_customize->add_setting('roofing_contractor_facebook_url',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('roofing_contractor_facebook_url',array(
        'label' => __('Facebook Link','roofing-contractor'),
        'section'=> 'roofing_contractor_social_media',
        'type'=> 'url'
    ));

    $wp_customize->add_setting('roofing_contractor_twitter_url',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('roofing_contractor_twitter_url',array(
        'label' => __('Twitter Link','roofing-contractor'),
        'section'=> 'roofing_contractor_social_media',
        'type'=> 'url'
    ));

    $wp_customize->add_setting('roofing_contractor_instagram_url',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('roofing_contractor_instagram_url',array(
        'label' => __('Instagram Link','roofing-contractor'),
        'section'=> 'roofing_contractor_social_media',
        'type'=> 'url'
    ));

    $wp_customize->add_setting('roofing_contractor_youtube_url',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('roofing_contractor_youtube_url',array(
        'label' => __('YouTube Link','roofing-contractor'),
        'section'=> 'roofing_contractor_social_media',
        'type'=> 'url'
    ));

    $wp_customize->add_setting('roofing_contractor_pint_url',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('roofing_contractor_pint_url',array(
        'label' => __('Pinterest Link','roofing-contractor'),
        'section'=> 'roofing_contractor_social_media',
        'type'=> 'url'
    ));

    //Projects
    $wp_customize->add_section('roofing_contractor_projects',array(
        'title' => __('Projects Section','roofing-contractor'),
        'panel' => 'construction_hub_panel_id',
    ));

    $wp_customize->add_setting('roofing_contractor_projetcs_main_text',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('roofing_contractor_projetcs_main_text',array(
        'label' => esc_html__('Section Heading Text','roofing-contractor'),
        'section'=> 'roofing_contractor_projects',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('roofing_contractor_projetcs_main_heading',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('roofing_contractor_projetcs_main_heading',array(
        'label' => esc_html__('Section Heading','roofing-contractor'),
        'section'=> 'roofing_contractor_projects',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('roofing_contractor_projetcs_number',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('roofing_contractor_projetcs_number',array(
        'label' => esc_html__('No of Tabs to show','roofing-contractor'),
        'section'=> 'roofing_contractor_projects',
        'type'=> 'number'
    ));

    $featured_post = get_theme_mod('roofing_contractor_projetcs_number','');
    for ( $j = 1; $j <= $featured_post; $j++ ) {
        $wp_customize->add_setting('roofing_contractor_projetcs_text'.$j,array(
            'default'=> '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('roofing_contractor_projetcs_text'.$j,array(
            'label' => esc_html__('Tab ','roofing-contractor').$j,
            'section'=> 'roofing_contractor_projects',
            'type'=> 'text'
        ));

        $categories = get_categories();
            $cat_posts = array();
                $i = 0;
                $cat_posts[]='Select';
            foreach($categories as $category){
                if($i==0){
                $default = $category->slug;
                $i++;
            }
            $cat_posts[$category->slug] = $category->name;
        }

        $wp_customize->add_setting('roofing_contractor_projetcs_category'.$j,array(
            'default'   => 'select',
            'sanitize_callback' => 'roofing_contractor_sanitize_choices',
        ));
        $wp_customize->add_control('roofing_contractor_projetcs_category'.$j,array(
            'type'    => 'select',
            'choices' => $cat_posts,
            'label' => __('Select Category to display projects','roofing-contractor'),
            'section' => 'roofing_contractor_projects',
        ));
    }
}
add_action( 'customize_register', 'roofing_contractor_customize_register' );
