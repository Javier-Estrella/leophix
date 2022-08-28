<?php
function inpersttion_theme_action(){
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/features/sliders.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/features/featured_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/features/about.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/features/portfolio.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/features/services.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/features/our_team.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/features/testimonial.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/features/sponsors.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/features/hide-show.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/features/social_icon.php';

	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/sections/sliders_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/sections/featured_section_info.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/sections/about_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/sections/portfolio_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/sections/services_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/sections/team_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/sections/testimonial_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/sections/sponsors-section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/sections/product_section.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/sections/social_icon_section.php';

	require_once IFT_PLUGIN_DIR_PATH . 'includes/custom_cantrol.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/customizer_control.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/customizer_css.php';
	require_once IFT_PLUGIN_DIR_PATH . 'includes/free/extras.php';

}
add_action('init','inpersttion_theme_action');