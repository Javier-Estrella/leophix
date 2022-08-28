<?php
/**
 * grasim_shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package grasim_shop
 */

if ( ! defined( 'GRASIM_SHOP_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'GRASIM_SHOP_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'grasim_shop_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function grasim_shop_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on grasim_shop, use a find and replace
		 * to change 'grasim-shop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'grasim-shop', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'grasim-shop' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'grasim_shop_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'grasim_shop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $grasim_shop_content_width
 */
function grasim_shop_content_width() {
	$GLOBALS['grasim_shop_content_width'] = apply_filters( 'grasim_shop_content_width', 640 );
}
add_action( 'after_setup_theme', 'grasim_shop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function grasim_shop_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'grasim-shop' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'grasim-shop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'grasim-shop' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'grasim-shop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'grasim-shop' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'grasim-shop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'grasim-shop' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'grasim-shop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 4', 'grasim-shop' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'grasim-shop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if (is_plugin_active( 'woocommerce/woocommerce.php')) {
	//if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		register_sidebar(
			array(
				'name'          => esc_html__( 'WooCommerce Product Section', 'grasim-shop' ),
				'id'            => 'woocommerce_product',
				'description'   => esc_html__( 'Add widgets here.', 'grasim-shop' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
}
add_action( 'widgets_init', 'grasim_shop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function grasim_shop_scripts() {
	wp_enqueue_script('jquery', false, array(), false, false);
	wp_enqueue_style( 'grasim-shop-style', get_stylesheet_uri(), array(), GRASIM_SHOP_S_VERSION );
	wp_style_add_data( 'grasim-shop-style', 'rtl', 'replace' );
	wp_enqueue_style( 'grasim-shop-fontawesome-css', esc_url(get_template_directory_uri()).'/assets/fontawesome/css/font-awesome.css' , array(), GRASIM_SHOP_S_VERSION );
	wp_enqueue_style( 'grasim-shop-theme-css', esc_url(get_template_directory_uri()).'/assets/css/theme.css' , array(), GRASIM_SHOP_S_VERSION );
	wp_enqueue_script( 'grasim-shop-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), GRASIM_SHOP_S_VERSION, true );

	wp_enqueue_style( 'grasim-shop-owl-carousel-css', esc_url(get_template_directory_uri()).'/assets/css/owl.carousel.css' , array(), GRASIM_SHOP_S_VERSION );
	wp_enqueue_style( 'grasim-shop-owl-carousel_theme-css', esc_url(get_template_directory_uri()).'/assets/css/owl.theme.css' , array(), GRASIM_SHOP_S_VERSION );	
	wp_enqueue_script( 'grasim-shop-owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js', array(), GRASIM_SHOP_S_VERSION, true );
	
	wp_enqueue_script( 'grasim-shop-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), GRASIM_SHOP_S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'grasim_shop_scripts' );

function grasim_shop_admin_script_style(){
	wp_enqueue_style( 'grasim-shop-admin-site-css', esc_url(get_template_directory_uri()).'/assets/css/admin_site.css' , array(), GRASIM_SHOP_S_VERSION );
	wp_enqueue_script('grasim-shop-admin-js',  get_template_directory_uri() . '/inc/install/admin.js', array( 'jquery' ), false, false );
	wp_enqueue_style('wp-color-picker' );
    wp_enqueue_script('wp-color-picker-alpha',  get_template_directory_uri() . '/assets/js/wp-color-picker-alpha.js', array( 'wp-color-picker' ), '1.0.0', true );
   
    $color_picker_strings = array(
        'clear'            => __( 'Clear', 'grasim-shop' ),
        'clearAriaLabel'   => __( 'Clear color', 'grasim-shop' ),
        'defaultString'    => __( 'Default', 'grasim-shop' ),
        'defaultAriaLabel' => __( 'Select default color', 'grasim-shop' ),
        'pick'             => __( 'Select Color', 'grasim-shop' ),
        'defaultLabel'     => __( 'Color value', 'grasim-shop' ),
    );
    wp_localize_script( 'wp-color-picker-alpha', 'wpColorPickerL10n', $color_picker_strings );
    wp_enqueue_script( 'wp-color-picker-alpha' );    
}
add_action('admin_enqueue_scripts', 'grasim_shop_admin_script_style');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/customizer-css.php';

require get_template_directory() . '/inc/customizer_control.php';

require get_template_directory() . '/inc/about.php';

require get_template_directory() . '/inc/default_setting.php';

//require get_template_directory() . '/inc/install/wtb-required-plugins.php';

//require get_template_directory() . '/inc/customizer-options/grasim_shop_recommended_plugin.php';
require get_template_directory() . '/inc/err-our-team/err-our-team.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

function grasim_shop_breadcrumb_slider(){
	?>
	<div class="breadcrumb_info">
		<div class="breadcrumb_data">
			<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-centerc">
				<div class="breadcrumb-content">
					<div class="breadcrumb-heading">
						<h1><?php  grasim_shop_breadcrumb_title();	?></h1>
					</div>
					<ol class="breadcrumb-list">
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home"></i></a>
							<?php echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;"; ?>
						</li>
						<li>
							<?php grasim_shop_breadcrumb_title();?>
						</li>
					</ol>
				</div> 
			</section>
		</div>		
	</div>
	<?php
}

// Add custom meta box
add_action("add_meta_boxes", "grasim_shop_add_sidebar_meta_box");
function grasim_shop_add_sidebar_meta_box()
{
	$post_types = get_post_type();
    add_meta_box("grasim_shop-meta-box", "Custom Meta Box","grasim_shop_sidebar_meta_box_markup", $post_types, "normal", "high", null);
}
function grasim_shop_sidebar_meta_box_markup($object){
	?>
	<table class="admin_sidebar_select">
		<tr><td><label><h2 class="custom_meta"><?php echo __( 'Breadcrumb', 'grasim-shop' ); ?></h2></label></td></tr>
	   	<tr>
	   		<td>
	   			<label for="breadcrumb_select">
	   				<input type="radio" name="breadcrumb_select" id="breadcrumb_select" value="yes" <?php if(get_post_meta($object->ID,'breadcrumb_select',true)=='yes'){echo "checked";}?>><?php echo __( 'Yes', 'grasim-shop' );?> 
	   				<input type="radio" name="breadcrumb_select" id="breadcrumb_select" value="no" <?php if(get_post_meta($object->ID,'breadcrumb_select',true)=='no'){echo "checked";}?>><?php echo __( 'No', 'grasim-shop' );?>
	   			</label>
	   		</td>
	   	</tr>
	   	<tr><td><label><h2 class="custom_meta"><?php echo __( 'Sidebar', 'grasim-shop' );?></h2></label></td></tr>
   		<tr>
	   		<td>
	   			<label for="no_sidebar">		   				
	   				<input type="radio" name="sidebar_select" id="no_sidebar" class="no_sidebar" value="no_sidebar" <?php if(get_post_meta($object->ID,'sidebar_select',true)=='no_sidebar'){echo "checked";}?>>
		   				<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/full.png' ?>">
		   			</input>
	   			</label>
	   			<label for="left_sidebar">
	   				<input type="radio" name="sidebar_select" id="left_sidebar" class="left_sidebar" value="left_sidebar" <?php if(get_post_meta($object->ID,'sidebar_select',true)=='left_sidebar'){echo "checked";}?>>
	   					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/left.png' ?>">
	   				</input>
	   			</label>
	   			<label for="right_sidebar">			   				
	   				<input type="radio" name="sidebar_select" id="right_sidebar" class="right_sidebar" value="right_sidebar" <?php if(get_post_meta($object->ID,'sidebar_select',true)=='right_sidebar'){echo "checked";}?>>
	   					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/right.png' ?>">
	   				</input>
	   			</label>			
	   		</td>
	   	</tr>
	</table>
	<?php
}
add_action( 'save_post','grasim_shop_save_sidebar_meta_box_data');
function grasim_shop_save_sidebar_meta_box_data( $post_id ) {
	
	if(isset($_REQUEST['breadcrumb_select'])){
		$breadcrumb_select = sanitize_text_field( wp_unslash($_REQUEST['breadcrumb_select'] ));
		update_post_meta($post_id,'breadcrumb_select',$breadcrumb_select);
	}
	if(isset($_REQUEST['sidebar_select'])){
		$sidebar_select = sanitize_text_field( wp_unslash($_REQUEST['sidebar_select'] ));
		update_post_meta($post_id,'sidebar_select',$sidebar_select);
	}
}


//add_action( 'admin_notices', 'grasim_shop_admin_notice_demo_data' );
function grasim_shop_admin_notice_demo_data() {
	if( !empty( $_GET['status'] ) && $_GET['status'] == 'grasim_shop_hide_msg' ){
		update_option( 'grasim_shop_hide_msg', true );
	}

	$status = get_option( 'grasim_shop_hide_msg' );
	if( $status == true ){
		return;
	} 

	$recommended_plugins = apply_filters( 'grasim_shop_plugins', $plugins = array() );
	if( empty( $recommended_plugins ) ){
		return;
	}
	$my_theme = wp_get_theme();
	$theme_name = $my_theme->get( 'Name' );
	$nonce = wp_create_nonce("grasim_shop_install_plugins");
	?>
	 <div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
                <div class="grasim_shop-getting-started-notice clearfix">
                    <div class="grasim_shop-theme-screenshot">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png" class="screenshot" alt="<?php esc_attr_e( 'Theme Screenshot', 'grasim-shop' ); ?>" />
                    </div><!-- /.grasim_shop-theme-screenshot -->
                    <div class="theme-info-wrapper">
				        <?php 
				        echo '<strong style="font-size: 20px; padding-bottom: 10px; display: block;">';
						
				        printf(
				        	esc_html__( 'Thank you for installing %1$s', 'grasim-shop' ),
				        	esc_attr($theme_name)
				        ); 
				        echo '</strong>';
				        echo '<p>' . esc_html__( "Install and activate Inverstheme For Theme plugin for taking full advantage of all the features this theme has to offer." , 'grasim-shop' ) . '</p>';
				        ?>

				        <div class="button_wrapper_theme" style="margin-top: 20px;">
					        <a 
					        href="javascript:void(0)" 
					        class="button button-primary button-hero grasim_shop_install_plugins" 
					        data-nonce="<?php echo esc_attr( $nonce ); ?>"
					        data-redirect="<?php echo esc_url( admin_url( 'customize.php' )); ?>"
					        >
					        <!-- themes.php?page=tgmpa-install-plugins -->
					        <img class="lodear_img" src="<?php echo esc_url(get_template_directory_uri().'/assets/images/loader.gif') ?>" style="display: none;">
					        <span><?php esc_html_e( 'Get Started', 'grasim-shop' ) ?></span>
					    	</a>

					        <a href="<?php echo esc_url( admin_url('/?status=grasim_shop_hide_msg') ); ?>" 
					        class="button button-default button-hero grasim_shop_dismiss" ><?php esc_html_e( 'Close', 'grasim-shop' ) ?></a>
				        </div>
			        </div>   
                </div>
            </div>    
    <?php
}

add_filter( 'grasim_shop_plugins', function(){

	$plugins = array(
		'err-our-team' => array(
			'slug' => 'err-our-team/err-our-team.php',
			'zip' => 'err-our-team'
		),	
		'woocommerce' => array(
            'slug' => 'woocommerce/woocommerce.php',
            'zip' => 'woocommerce'
        ),
	);
	return $plugins;
});

function grasim_shop_main_js() {
    wp_enqueue_script( 'grasim-shop-main-js', get_theme_file_uri( '/assets/js/custom.js' ), array(), '1.0', true );
    // Localize the script with new data and pass php variables to JS.
    $main_js_data = array(
        'img_autoplay' => esc_attr(get_theme_mod('featured_slider_autoplay', 'true')),
        'img_autoplayspped' => esc_attr(get_theme_mod('featured_slider_autoplay_speed','1000')),
        'img_autoplaytimeout' => esc_attr(get_theme_mod('featured_slider_autoplay_timeout','5000')),

        'autoplay' => esc_attr(get_theme_mod('our_testimonial_slider_autoplay', 'true')),
        'autoplayspped' => esc_attr(get_theme_mod('our_testimonial_slider_autoplay_speed','1000')),
        'autoplaytimeout' => esc_attr(get_theme_mod('our_testimonial_autoplay_timeout','5000')),

        'sponsor_autoplay' => esc_attr(get_theme_mod('our_sponsors_slider_autoplay', 'true')),
        'sponsor_autoplayspped' => esc_attr(get_theme_mod('our_sponsors_slider_autoplay_speed','1000')),
        'sponsor_autoplaytimeout' => esc_attr(get_theme_mod('our_sponsors_autoplay_timeout','5000')),
    );
    wp_localize_script( 'grasim-shop-main-js', 'grasim_shop_main_vars', $main_js_data );
}
add_action( 'wp_enqueue_scripts', 'grasim_shop_main_js' );