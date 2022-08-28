<?php
require_once get_template_directory() . '/inc/install/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'grasim_shop_wtb_register_required_plugins' );

function grasim_shop_wtb_register_required_plugins() {
	
	$plugins = array( 
        array(
            'name' => esc_html__('Inpersttion For Theme','grasim-shop'),
            'slug' => 'err-our-team',
            'required' => false,
        ),
        array(
            'name' => esc_html__('WooCommerce','grasim-shop'),
            'slug' => 'woocommerce',
            'required' => false,
        ),
    );

	$plugins = apply_filters( 'grasim_shop_recommended_plugins', $plugins );
	
	$config = array(
		'id'           => 'grasim-shop',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}

add_action( "wp_ajax_grasim_shop_install_plugins", "grasim_shop_install_recommended_plugins" );
function grasim_shop_install_recommended_plugins(){
    if ( isset( $_POST['nonce'] )  && !wp_verify_nonce( sanitize_text_field( wp_unslash($_POST['nonce'])), "grasim_shop_install_plugins" ) ) {
    //if ( !wp_verify_nonce( $_POST['nonce'], "grasim_shop_install_plugins" ) ) {
        die;
    }  

    $recommended_plugins = apply_filters( 'grasim_shop_plugins', $plugins = array() );

    grasim_shop_install_activate_plugins( $recommended_plugins );
    update_option( 'grasim_shop_hide_msg', true );

    echo 'success';

    die;

}
function grasim_shop_install_activate_plugins( $recommended_plugins ){

    // Install and activate recommended plugins
    foreach ( $recommended_plugins as $key => $value ) {
        
        if ( !grasim_shop_is_plugin_installed( $value['slug'] ) ) {
            grasim_shop_install_plugin( 'https://downloads.wordpress.org/plugin/' . $value['zip'] . '.latest-stable.zip' );
        }

        activate_plugin( $value['slug'] , '' , '' , true );

    }

}
function grasim_shop_is_plugin_installed( $slug ) {
    
    if ( ! function_exists( 'get_plugins' ) ) {
        //require_once ABSPATH . 'wp-admin/includes/plugin.php';
        get_template_part( 'wp-admin/includes/plugin.php' );
    }

    $all_plugins = get_plugins();
   
    if ( !empty( $all_plugins[$slug] ) ) {
        return true;
    } else {
        return false;
    }

}

function grasim_shop_install_plugin( $plugin_zip ) {

    $upgrader = new \Plugin_Upgrader( new grasim_shop_Quiet_Skin() );

    $installed = $upgrader->install( $plugin_zip );
 
    return $installed;

}

include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';       
 
class grasim_shop_Quiet_Skin extends \WP_Upgrader_Skin {

    public function feedback( $string, ...$args )
    {
        
    }
    public function header() 
    {
        
    }
    public function footer() 
    {
       
    }

}