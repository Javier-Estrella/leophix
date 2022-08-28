<?php

require get_stylesheet_directory() . '/customizer/customizer.php';

add_action( 'after_setup_theme', 'roofing_contractor_after_setup_theme' );
function roofing_contractor_after_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "responsive-embeds" );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'roofing-contractor-featured-image', 2000, 1200, true );
    add_image_size( 'roofing-contractor-thumbnail-avatar', 100, 100, true );

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // Add theme support for Custom Logo.
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
    ) );

    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff'
    ) );

    add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

    add_editor_style( array( 'assets/css/editor-style.css') );
}

/**
 * Register widget area.
 */
function roofing_contractor_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'roofing-contractor' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'roofing-contractor' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Page Sidebar', 'roofing-contractor' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'roofing-contractor' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar 3', 'roofing-contractor' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'roofing-contractor' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'roofing-contractor' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'roofing-contractor' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'roofing-contractor' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'roofing-contractor' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'roofing-contractor' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'roofing-contractor' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 4', 'roofing-contractor' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'roofing-contractor' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'roofing_contractor_widgets_init' );

// enqueue styles for child theme
function roofing_contractor_enqueue_styles() {
    
    // Bootstrap
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

    // Theme block stylesheet.
    wp_enqueue_style( 'roofing-contractor-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'roofing-contractor-child-style' ), '1.0' );
    
    // enqueue parent styles
    wp_enqueue_style('construction-hub-style', get_template_directory_uri() .'/style.css');
    
    // enqueue child styles
    wp_enqueue_style('roofing-contractor-child-style', get_stylesheet_directory_uri() .'/style.css', array('construction-hub-style'));

    wp_enqueue_script( 'roofing-contractor-custom-scripts-jquery', get_theme_file_uri() . '/assets/js/custom.js', array('jquery'),'' ,true );

    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );    
}
add_action('wp_enqueue_scripts', 'roofing_contractor_enqueue_styles');

function roofing_contractor_admin_scripts() {
    // Backend CSS
    wp_enqueue_style( 'roofing-contractor-backend-css', get_theme_file_uri( '/assets/css/customizer.css' ) );
}
add_action( 'admin_enqueue_scripts', 'roofing_contractor_admin_scripts' );

function roofing_contractor_header_style() {
    if ( get_header_image() ) :
    $custom_header = "
        .menubar{
            background-image:url('".esc_url(get_header_image())."');
            background-position: center top;
        }";
        wp_add_inline_style( 'roofing-contractor-child-style', $custom_header );
    endif;
}
add_action( 'wp_enqueue_scripts', 'roofing_contractor_header_style' );

add_action( 'init', 'roofing_contractor_remove_my_action');
function roofing_contractor_remove_my_action() {
    remove_action( 'admin_menu','construction_hub_menu' );
    remove_action( 'admin_notices','construction_hub_activation_notice' );
}

if ( ! defined( 'CONSTRUCTION_HUB_PRO_THEME_NAME' ) ) {
    define( 'CONSTRUCTION_HUB_PRO_THEME_NAME', esc_html__( 'Roofing Contractor Pro', 'roofing-contractor' ));
}
if ( ! defined( 'CONSTRUCTION_HUB_PRO_THEME_URL' ) ) {
    define( 'CONSTRUCTION_HUB_PRO_THEME_URL', esc_url('https://www.themespride.com/themes/roofing-contractor-wordpress-theme/'));
}

function roofing_contractor_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}