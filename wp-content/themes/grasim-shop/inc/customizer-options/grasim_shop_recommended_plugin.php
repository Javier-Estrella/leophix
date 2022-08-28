<?php
/* Notifications in customizer */

require get_template_directory()  . '/inc/customizer-notify/grasim-shop-notify.php';
$grasim_shop_config_customizer = array(
	'recommended_plugins'       => array(
		'err-our-team' => array(
			'recommended' => true,
			'description' => sprintf(__('Install and activate <strong>Inpersttion For Theme</strong> plugin for taking full advantage of all the features this theme has to offer Grasim Shop.', 'grasim-shop')),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'grasim-shop' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'grasim-shop' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'grasim-shop' ),
	'activate_button_label'     => esc_html__( 'Activate', 'grasim-shop' ),
	'grasim_shop_deactivate_button_label'   => esc_html__( 'Deactivate', 'grasim-shop' ),
);
grasim_shop_Customizer_Notify::init( apply_filters( 'grasim_shop_recommended_plugins', $grasim_shop_config_customizer ) );
