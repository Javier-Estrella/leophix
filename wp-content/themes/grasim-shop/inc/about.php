<?php

function grasim_shop_about_menu() {
	add_theme_page( esc_html__( 'About Theme', 'grasim-shop' ), esc_html__( 'About Theme', 'grasim-shop' ), 'edit_theme_options', 'grasim_shop-about', 'grasim_shop_about_display' );
}
add_action( 'admin_menu', 'grasim_shop_about_menu' );

function grasim_shop_about_display(){
	?>
	<div class="grasim_shop_about_data">
		<div class="grasim_shop_about_title">
			<h1><?php echo esc_html( 'Welcome to Grasim Shop!', 'grasim-shop' ); ?></h1>
			<div class="grasim_shop_about_theme">
				<div class="grasim_shop_about_description">
					<p>
						<?php echo esc_html( 'Grasim Shop is a modern and powerful multipurpose business WordPress theme with a high-quality look that helps to make a beautiful website.	Grasim Shop theme is supported for WooCommerce. Grasim Shop in awesome features like Social Icon, Featured Slider, Our Services, About Section, Our Team,Featured Section, Testimonial Slider, Our Sponsors, Sticky Header and any eCommerce business need. All of these highly-customizable features and sections are completely responsive and absolutely easy to customize. you’ll easily find the design of this theme impressive and suitable for your Website.', 'grasim-shop' ); ?>

					</p>
				</div>
				<div class="grasim_shop_about_image">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				</div> 
			</div>
			<div class="grasim_shop_about_demo">
				<div class="feature-section">
					<div class="about_data_grasim_shop">
						<h3><?php echo esc_html( 'Documentation', 'grasim-shop' ); ?></h3>
						<p><?php echo esc_html( 'Getting started with a new theme can be difficult, But its installation and customization is so easy', 'grasim-shop' ); ?></p>
						<a href="https://www.inverstheme.com/grasim-shop-documentation/"><?php echo esc_html( 'Read Documentation', 'grasim-shop' ); ?></a>
					</div>
				</div>
				<div class="feature-section">
					<div class="about_data_grasim_shop">
						<h3><?php echo esc_html( 'Recommended Plugins', 'grasim-shop' ); ?></h3>
						<p><?php echo esc_html( 'Please install recommended plugins for better use of theme. It will help you to make website more useful', 'grasim-shop' ); ?></p>
						<a href="<?php echo esc_url(admin_url('/themes.php?page=tgmpa-install-plugins&plugin_status=activate'), 'grasim-shop'); ?>"><?php echo esc_html( 'Install Plugins ', 'grasim-shop' ); ?></a>
					</div>
				</div>
				<div class="feature-section">
					<div class="about_data_grasim_shop">
						<h3><?php echo esc_html( 'Free Theme Demo', 'grasim-shop' ); ?></h3>
						<p><?php echo esc_html( 'You can check free theme demo before setup your website if you like demo then install theme', 'grasim-shop' ); ?></p>
						<a href="https://inverstheme.com/themedemo/grasim-shop/"><?php echo esc_html( 'Free Theme Demo ', 'grasim-shop' ); ?></a>
					</div>
				</div>
				<div class="feature-section">
					<div class="about_data_grasim_shop">
						<h3><?php echo esc_html( 'Free VS Pro', 'grasim-shop' ); ?></h3>
						<p><?php echo esc_html( 'You can check compare free version and pro version.', 'grasim-shop' ); ?></p>
						<a href="https://www.inverstheme.com/theme/grasim-shop-pro/"><?php echo esc_html( 'Compare free Vs Pro ', 'grasim-shop' ); ?></a>
					</div>
				</div>
			</div>
		</div>
		<ul class="tabs">
			<li class="tab-link current" data-tab="about"><?php echo esc_html( 'About', 'grasim-shop' ); ?></li>
		</ul> 
		<div id="about" class="tab-content current">
			<div class="about_section">
				<div class="about_info_data theme_info">
					<div class="about_theme_title">
						<h2><?php echo esc_html( 'Theme Customizer', 'grasim-shop' ); ?></h2>
					</div>
					<div class="about_theme_data">
						<p><?php echo esc_html( 'All Theme Options are available via Customize screen.', 'grasim-shop' ); ?></p>
					</div>
					<div class="about_theme_btn">
						<a class="customize_btn button button-primary" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"><?php echo esc_html( 'Customize', 'grasim-shop' ); ?></a>
					</div>
				</div>
				<div class="theme_que theme_info">
					<div class="about_theme_que">
						<h2><?php echo esc_html( 'Got theme support question?', 'grasim-shop' ); ?></h2>
					</div>
					<div class="about_que_data">
						<p><?php echo esc_html( 'Get genuine support from genuine people. Whether it is customization or compatibility, our seasoned developers deliver tailored solutions to your queries.', 'grasim-shop' ); ?></p>
					</div>
					<div class="about_que_btn">
						<a class="support_forum button button-primary" href="https://inverstheme.com/contact-us/"><?php echo esc_html( 'Support Forum', 'grasim-shop' ); ?></a>
					</div>
				</div>
			</div>
			<div class="about_shortcode theme_info">
				<div class="about_single_page_post_shortcode">
					<h2><?php echo esc_html( 'Single Page And Post Add shortcode', 'grasim-shop' ); ?></h2>
					<p><?php echo esc_html( 'if this plugin Page Section For inverstheme must be installed then this Shortcode use Otherwise this Shortcode is not work.', 'grasim-shop'); ?></p>
				</div>
				<ul>
					<h3><?php echo esc_html( 'Featured Slider :', 'grasim-shop' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_featured_slider_activate']", 'grasim-shop' ); ?></li>

					<h3><?php echo esc_html( 'Featured Section :', 'grasim-shop' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_featured_section_info_activate']", 'grasim-shop' ); ?></li>

					<h3><?php echo esc_html( 'About Section :', 'grasim-shop' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_about_section_activate']", 'grasim-shop' ); ?></li>

					<h3><?php echo esc_html( 'Our Portfolio :', 'grasim-shop' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_our_portfolio_section_activate']", 'grasim-shop' ); ?></li>

					<h3><?php echo esc_html( 'Our Services :', 'grasim-shop' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_our_services_activate']", 'grasim-shop' ); ?></li>

					<h3><?php echo esc_html( 'Our Sponsors :', 'grasim-shop' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_our_sponsors_activate']", 'grasim-shop' ); ?></li>

					<h3><?php echo esc_html( 'Our Team :', 'grasim-shop' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_our_team_activate']", 'grasim-shop' ); ?></li>

					<h3><?php echo esc_html( 'Our Testimonial :', 'grasim-shop' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_our_testimonial_activate']", 'grasim-shop' ); ?></li>

					<h3><?php echo esc_html( 'Widget Section :', 'grasim-shop' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='IFT_woocommerce_product_section_activate']", 'grasim-shop' ); ?></li>
				</ul>
			</div>
		</div>
	</div>
	<?php
}