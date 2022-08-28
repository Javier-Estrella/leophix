<?php 
function inpersttion_theme_get_slider_default(){
	return apply_filters(
		'inpersttion_theme_get_slider_default', json_encode(
				 array(
				array(
					'title'           => esc_html__( ' New Skills', 'grasim-shop' ),
					'subtitle'         => esc_html__( 'Simple, Intuitive & Expertly Crafted!', 'grasim-shop' ),
					'text'            => esc_html__( 'We are experienced professionals who understand that It services is charging, and are true partners who care about your success.', 'grasim-shop' ),
					'text2'	  =>  esc_html__( 'Purchase Now', 'grasim-shop' ),
					'link'	  =>  esc_html__( '#', 'grasim-shop' ),
					'icon_value'	  =>  esc_html__( 'fa-arrow-right', 'grasim-shop' ),
					"slide_align" => "left", 
					'id'              => 'customizer_repeater_slider_001',
				),
			)
		)
	);
}
/*
 *
 * Info Default
 */
 function inpersttion_theme_get_info_default() {
	return apply_filters(
		'inpersttion_theme_get_info_default', json_encode(
				 array(
				array(
					'title'           => esc_html__( 'Cloud', 'grasim-shop' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, consectetur.', 'grasim-shop' ),
					'icon_value'       => 'fa-cloud',
					'id'              => 'customizer_repeater_info_001',
					
				),
				array(
					'title'           => esc_html__( 'Networking', 'grasim-shop' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, consectetur.', 'grasim-shop' ),
					'icon_value'       => 'fa-signal',
					'id'              => 'customizer_repeater_info_002',				
				),
				array(
					'title'           => esc_html__( 'Mobility', 'grasim-shop' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet, consectetur.', 'grasim-shop' ),
					'icon_value'       => 'fa-mobile',
					'id'              => 'customizer_repeater_info_003',
				),
			)
		)
	);
}
/*
 *
 * Portfolio Default
 */
 function inpersttion_theme_get_portfolio_default() {
	return apply_filters(
		'inpersttion_theme_get_portfolio_default', json_encode(
				array(
				array(
					'title'           => esc_html__( 'Free Consulting', 'grasim-shop' ),
					'subtitle'        => esc_html__( 'Business Consulting', 'grasim-shop' ),
					'link'           => '#',
					'id'              => 'customizer_repeater_info_001',					
				),
				array(
					'title'           => esc_html__( 'Best Analysis', 'grasim-shop' ),
					'subtitle'        => esc_html__( 'Financial Analysis', 'grasim-shop' ),
					'link'           => '#',
					'id'              => 'customizer_repeater_info_002',					
				),
				array(
					'title'           => esc_html__( 'Successes Reports', 'grasim-shop' ),
					'subtitle'        => esc_html__( 'Project Reporting', 'grasim-shop' ),
					'link'           => '#',
					'id'              => 'customizer_repeater_info_003',					
				),
			)
		)
	);
}
/*
 *
 * Services Default
 */
 function inpersttion_theme_get_services_default() {
	return apply_filters(
		'inpersttion_theme_get_services_default', json_encode(
				array(
				array(
					'icon_value'       => 'fa-lightbulb-o',
					'title'           => esc_html__( 'Digital Branding', 'grasim-shop' ),
					'text'           => esc_html__( 'To generate highly focused leads ready to purchases.', 'grasim-shop' ),
					'link'           => '#',
					'id'              => 'customizer_repeater_info_001',					
				),
				array(
					'icon_value'       => 'fa-search-plus',
					'title'           => esc_html__( 'Seo Optimization', 'grasim-shop' ),
					'text'           => esc_html__( 'This Is Photoshops Version Of Lorem Ipsum. Proin Gravida Nibh Vel Velit Auctor Aliquet. Aenean Sollicitudin.', 'grasim-shop' ),
					'id'              => 'customizer_repeater_info_002',					
				),
				array(
					'icon_value'       => 'fa-edit',
					'title'           => esc_html__( 'UI Design', 'grasim-shop' ),
					'text'           => esc_html__( 'This Is Photoshops Version Of Lorem Ipsum. Proin Gravida Nibh Vel Velit Auctor Aliquet. Aenean Sollicitudin.', 'grasim-shop' ),
					'id'              => 'customizer_repeater_info_003',					
				),
			)
		)
	);
}
/*
 *
 * Testimonial Default
 */
 
 function inpersttion_theme_get_testimonial_default() {
	return apply_filters(
		'inpersttion_theme_get_testimonial_default', json_encode(
			array(
				array(
					'title'           => esc_html__( 'Glenn Maxwell', 'grasim-shop' ),
					'subtitle'        => esc_html__( 'Project Manager', 'grasim-shop' ),
					'text'            => esc_html__( 'This is Photoshop version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.', 'grasim-shop' ),
					'link'           => '#',
					'id'              => 'customizer_repeater_testimonial_001',
				),
				array(
					'title'           => esc_html__( 'Rizon Pet', 'grasim-shop' ),
					'subtitle'        => esc_html__( 'Project Manager', 'grasim-shop' ),
					'text'            => esc_html__( 'This is Photoshop version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.', 'grasim-shop' ),
					'link'           => '#',
					'id'              => 'customizer_repeater_testimonial_002',
				),
				array(
					'title'           => esc_html__( 'Miekel Stark', 'grasim-shop' ),
					'subtitle'        => esc_html__( 'Project Manager', 'grasim-shop' ),
					'text'            => esc_html__( 'This is Photoshop version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.', 'grasim-shop' ),
					'link'           => '#',
					'id'              => 'customizer_repeater_testimonial_003',
				),
		    )
		)
	);
}
/*
 *
 * Sponsors Default
 */
 
 function inpersttion_theme_get_sponsors_default() {
	return apply_filters(
		'inpersttion_theme_get_sponsors_default', json_encode(
			array(
				array(					
					'link'           => '#',
					'id'              => 'customizer_repeater_testimonial_001',
				),
				array(
					'link'           => '#',
					'id'              => 'customizer_repeater_testimonial_002',
				),
				array(
					'link'           => '#',
					'id'              => 'customizer_repeater_testimonial_003',
				),
				array(
					'link'           => '#',
					'id'              => 'customizer_repeater_testimonial_004',
				),
				array(
					'link'           => '#',
					'id'              => 'customizer_repeater_testimonial_005',
				),
		    )
		)
	);
}
/*
 *
 * Sponsors Default
 */
 
function inpersttion_theme_get_about_default() {
 	return apply_filters(
		'inpersttion_theme_get_about_default', json_encode(
			array(
				array(
					'icon_value'     => 'fa-file-video-o',
					'title'          => esc_html__( 'Video Marketing', 'grasim-shop' ),
					'text'           => esc_html__( 'To Generate Highly Focused Leads Ready To Purchases.', 'grasim-shop' ),
					'link'           => '#',
					'id'             => 'customizer_repeater_info_001',					
				),
				array(
					'icon_value'     => 'fa-file-video-o',
					'title'          => esc_html__( 'Our Mission', 'grasim-shop' ),
					'text'           => esc_html__( 'To Generate Highly Focused Leads Ready To Purchases.', 'grasim-shop' ),
					'link'           => '#',
					'id'             => 'customizer_repeater_info_002',					
				),
				array(
					'icon_value'     => 'fa-file-video-o',
					'title'          => esc_html__( 'Our Vision', 'grasim-shop' ),
					'text'           => esc_html__( 'To Generate Highly Focused Leads Ready To Purchases.', 'grasim-shop' ),
					'link'           => '#',
					'id'             => 'customizer_repeater_info_003',					
				),
				array(
					'icon_value'     => 'fa-file-video-o',
					'title'          => esc_html__( 'Our Team', 'grasim-shop' ),
					'text'           => esc_html__( 'To Generate Highly Focused Leads Ready To Purchases.', 'grasim-shop' ),
					'link'           => '#',
					'id'             => 'customizer_repeater_info_004',					
				),
			)
		)
	);
}
/*
 *
 * Our Team Default
 */
function inpersttion_theme_get_team_default(){
	return apply_filters(
		'inpersttion_theme_get_team_default', json_encode(
			array(
				array(
					'title'          => esc_html__( 'Rizon Pet', 'grasim-shop' ),
					'subtitle'       => esc_html__( 'Project Manager', 'grasim-shop' ),
					'link'           => '#',
					'twitter'        => esc_html__( 'https://twitter.com/', 'grasim-shop' ),
					'facebook'       => 'https://www.facebook.com/',
					'linkedin'       => 'https://www.instagram.com/',
					'instagram'      => 'https://www.linkedin.com/feed/',
					'id'             => 'customizer_repeater_info_001',					
				),
				array(
					'title'          => esc_html__( 'Glenn Maxwell', 'grasim-shop' ),
					'subtitle'       => esc_html__( 'Project Manager', 'grasim-shop' ),
					'link'           => '#',
					'twitter'        => 'https://twitter.com/',
					'facebook'       => 'https://www.facebook.com/',
					'linkedin'       => 'https://www.instagram.com/',
					'instagram'      => 'https://www.linkedin.com/feed/',
					'id'             => 'customizer_repeater_info_002',					
				),
				array(
					'title'          => esc_html__( 'Aaron Finch', 'grasim-shop' ),
					'subtitle'       => esc_html__( 'Manager And Director', 'grasim-shop' ),
					'link'           => '#',
					'twitter'        => 'https://twitter.com/',
					'facebook'       => 'https://www.facebook.com/',
					'linkedin'       => 'https://www.instagram.com/',
					'instagram'      => 'https://www.linkedin.com/feed/',
					'id'             => 'customizer_repeater_info_003',					
				),
				array(
					'title'          => esc_html__( 'Christiana Ena', 'grasim-shop' ),
					'subtitle'       => esc_html__( 'Project Manager', 'grasim-shop' ),
					'link'           => '#',
					'twitter'        => 'https://twitter.com/',
					'facebook'       => 'https://www.facebook.com/',
					'linkedin'       => 'https://www.instagram.com/',
					'instagram'      => 'https://www.linkedin.com/feed/',
					'id'             => 'customizer_repeater_info_004',					
				),
			)
		)
	);
}
/*
 *
 *Social Icon Default
 */
function inpersttion_theme_get_icon_default(){
	return apply_filters(
		'inpersttion_theme_get_icon_default', json_encode(
			array(
				array(
					'icon_value'     => 'fa-facebook',
					'link'           => '#',
					'id'             => 'customizer_repeater_info_001',					
				),
				array(
					'icon_value'     => 'fa-twitter',
					'link'           => '#',
					'id'             => 'customizer_repeater_info_002',					
				),
				array(
					'icon_value'     => 'fa-linkedin',
					'link'           => '#',
					'id'             => 'customizer_repeater_info_003',					
				),
				array(
					'icon_value'     => 'fa-instagram',
					'link'           => '#',
					'id'             => 'customizer_repeater_info_004',					
				),
			)
		)
	);
}