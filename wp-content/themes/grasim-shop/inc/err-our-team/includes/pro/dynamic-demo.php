<?php
function inpersttion_theme_action(){
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/features/sliders.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/features/featured_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/features/about.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/features/portfolio.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/features/services.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/features/our_team.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/features/testimonial.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/features/sponsors.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/features/hide-show.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/features/social_icon.php';

	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/sections/sliders_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/sections/featured_section_info.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/sections/about_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/sections/portfolio_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/sections/services_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/sections/team_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/sections/testimonial_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/sections/sponsors-section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/sections/product_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/sections/social_icon_section.php';

	require_once IFT_PLUGIN_DIR_PATH . 'includes/custom_cantrol.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/customizer_control.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/customizer_css.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/pro/extras.php';

}
add_action('init','inpersttion_theme_action');