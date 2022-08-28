<?php
function grasim_shop_customize_css(){
	global $default_setting;
	global $grasim_shop_fonttotal;
	$grasim_shop_body_fontfamily = get_theme_mod("grasim_shop_body_fontfamily",5);
    $grasim_shop_body_fontfamily = $grasim_shop_fonttotal[$grasim_shop_body_fontfamily];

    $grasim_shop_Heading_fontfamily = get_theme_mod("grasim_shop_Heading_fontfamily",5);
    $grasim_shop_Heading_fontfamily = $grasim_shop_fonttotal[$grasim_shop_Heading_fontfamily];

    $grasim_shop_Heading1_fontfamily = get_theme_mod("grasim_shop_Heading1_fontfamily",5);
    $grasim_shop_Heading1_fontfamily = $grasim_shop_fonttotal[$grasim_shop_Heading1_fontfamily];

    $grasim_shop_Heading2_fontfamily = get_theme_mod("grasim_shop_Heading2_fontfamily",5);
    $grasim_shop_Heading2_fontfamily = $grasim_shop_fonttotal[$grasim_shop_Heading2_fontfamily];

    $grasim_shop_Heading3_fontfamily = get_theme_mod("grasim_shop_Heading3_fontfamily",5);
    $grasim_shop_Heading3_fontfamily = $grasim_shop_fonttotal[$grasim_shop_Heading3_fontfamily];

    //Body Font-Family
	    if($grasim_shop_body_fontfamily!='Select Font'){
			?>
			<style type="text/css">
		        body{
		            font-family: <?php echo esc_attr( $grasim_shop_body_fontfamily );?>            
		        }
	        </style>
	        <?php
	    }
    //Heading Font-Family
    if($grasim_shop_Heading_fontfamily!='Select Font'){
    	?>
		<style type="text/css">
	        h1, h2, h3, h4, h5, h6{
	            font-family: <?php echo esc_attr( $grasim_shop_Heading_fontfamily );?>            
	        }
        </style>
        <?php
    }
    //Heading H1 Font-Family
	    if($grasim_shop_Heading1_fontfamily!='Select Font'){
	    	?>
			<style type="text/css">
		        h1{
		            font-family: <?php echo esc_attr( $grasim_shop_Heading1_fontfamily );?>            
		        }
	        </style>
	        <?php
	    }
	//Heading H2 Font-Family
	    if($grasim_shop_Heading2_fontfamily!='Select Font'){
	    	?>
			<style type="text/css">
		        h2{
		            font-family: <?php echo esc_attr( $grasim_shop_Heading2_fontfamily );?>            
		        }
	        </style>
	        <?php
	    }
    //Heading H3 Font-Family
	    if($grasim_shop_Heading3_fontfamily!='Select Font'){
	    	?>
			<style type="text/css">
		        h3{
		            font-family: <?php echo esc_attr( $grasim_shop_Heading3_fontfamily );?>            
		        }
	        </style>
	        <?php
	    }
	if(get_theme_mod('grasim_shop_header_layout','header1')=='header1'){
		?>
		<style>
			.header_info {
				display: flex;
			    align-items: center;
			    justify-content: space-between;
			    padding: 12px 0px;	
			    flex-wrap: wrap;
			}
			.main_site_header{
				background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_header1_bg_color','#2e6d87')); ?>;
				color: <?php echo esc_attr(get_theme_mod('grasim_shop_header1_text_color','#ffffff')); ?>;
				box-shadow: 0 4px 44px 0 rgb(0 0 0 / 14%);
			}
			.main_site_header a{
				color: <?php echo esc_attr(get_theme_mod('grasim_shop_header1_Link_color','#ffffff')); ?>;
			}
			.main_site_header a:hover{
				color: <?php echo esc_attr(get_theme_mod('grasim_shop_header1_linkhover_color','#afe7ff')); ?>;
			}
			.top_header{
				background-color: <?php echo esc_attr(get_theme_mod('header1_top_bar_bg_color','#ffffff')); ?>;
				color: <?php echo esc_attr(get_theme_mod('header1_top_bar_text_color','#2e6d87')); ?>;
			}
		</style>
		<?php
	}
	if(get_theme_mod('footer_bg_image')){
		?>
		<style>
			footer#colophon{
				background:url(<?php echo  esc_attr(get_theme_mod('footer_bg_image'));?>) rgb(0 0 0 / 0.75);
	    		background-position: <?php echo esc_attr(get_theme_mod('footer_bg_position','center center')); ?>;
	    		background-size: <?php echo esc_attr(get_theme_mod('footer_bg_size','cover')); ?>;
	    		background-attachment: <?php echo esc_attr(get_theme_mod('footer_bg_attachment','scroll')); ?>;
	    		background-blend-mode: multiply;
			}
		</style>
		<?php
	}else{
		?>
		<style>
			footer#colophon{
				background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_footer_bg_color','#2e6d87')); ?>;
			}
		</style>
		<?php
	}
	if(get_theme_mod( 'grasim_shop_container_containe',true ) == ''){
    	?>
		<style type="text/css">
	    	.blog .grasim_shop_container_data {
			    display: none;
			}
	    </style>
        <?php
    } 
   	if(get_theme_mod( 'grasim_shop_container_description',false ) == ''){
    	?>
		<style type="text/css">
	    	.blog article .entry-content {
			    display: none;
			}
	    </style>
        <?php
    }
    if(get_theme_mod( 'grasim_shop_container_date',true ) == ''){
    	?>
		<style type="text/css">
	    	.blog span.posted-on {
			    display: none;
			}
	    </style>
        <?php
    }
    if(get_theme_mod( 'grasim_shop_container_authore',false ) == ''){
    	?>
		<style type="text/css">
			.blog span.byline {
				display: none;
			}
		 </style>
        <?php
    }
    if(get_theme_mod( 'grasim_shop_container_category',true ) == ''){
    	?>
		<style type="text/css">
			.blog span.cat-links {
				display: none;
			}
		 </style>
        <?php
    } 
    if(get_theme_mod( 'grasim_shop_container_comments',false ) == ''){
    	?>
		<style type="text/css">
			.blog span.comments-link {
				display: none;
			}
		 </style>
        <?php
    }  
    if(get_theme_mod( 'grasim_shop_post_sidebar_width_'.get_post_type(),'30')){
    	$secondary_width = get_theme_mod('grasim_shop_post_sidebar_width_'.get_post_type(),'30');
		$primary_width   = absint( 100 - $secondary_width );
		?>
		<style type="text/css">
			aside.widget-area{
				width: <?php echo esc_attr($secondary_width);?>%;
			}
			main#primary{
				width: <?php echo esc_attr($primary_width);?>%;
			}
		</style>
		<?php
	}
	if(get_theme_mod('grasim_shop_container_width_layout','content_width')=='content_width'){
		?>
		<style>
			.grasim_shop_container_info{
				max-width: <?php echo esc_attr(get_theme_mod('grasim_shop_container_contact_width','1100'));?>px;
				margin-left: auto;
				margin-right: auto;
				padding: 20px 0px;
			}
			.featured-section, .about_data, .our_portfolio_data, .our_team_info, .our_services_info, .our_testimonial_info, .our_sponsors_info, .widget_product_data {
				max-width: <?php echo esc_attr(get_theme_mod('grasim_shop_container_contact_width','1100')); ?>px;
			    margin-left: auto;
			    margin-right: auto;
			}
			main#primary {
			    background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_boxed_container_bg_color','#eeeeee')); ?>;
			    margin: 15px;
	    		padding: 15px;
			}
		    aside.widget-area li{
		    	background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_boxed_container_bg_color','#eeeeee')); ?>;
		    	margin: 8px 0px;
		    	transition: 0.3s all ease-in-out;
		    }
		    .wp-block-group__inner-container ul, .wp-block-search__inside-wrapper, .no-comments.wp-block-latest-comments, .wp-block-group__inner-container ol, .no-comments.wp-block-latest-comments {
			    margin: 0px;
			    padding: 0px;
			    padding-left: 0px !important;
			}
			.wp-block-group__inner-container ul li, .wp-block-group__inner-container ol li {
			    padding: 7px 10px;
			}
			.wp-block-group__inner-container ul li:hover, .wp-block-group__inner-container ol li:hover {
			    padding-left: 20px;
			}
			.wp-block-search__inside-wrapper {
			    margin: 15px 0px;
			}
			.wp-block-search__label {
			    width: 100%;
			    display: block;
			    font-size: 28px;
			    font-weight: bold;
			}
			aside.widget-area section h2, aside.widget-area label.wp-block-search__label {
			    padding: 18px 0px;
			}
			@media only screen and (max-width: 768px){
				.main_containor.list_view article {
				    display: flex;
				    justify-content: space-between;
				    flex-direction: column;
				}
				.main_containor.list_view article figure.post-thumbnail {
				    width: 100%;
				}
				.main_containor.list_view article .main_container {
				    width: 100%;
				}
			}
		</style>
		<?php
	}
	if(get_theme_mod('grasim_shop_container_width_layout','content_width')=='boxed_layout'){
		?>
		<style>
			.grasim_shop_container_info{
				max-width: <?php echo esc_attr(get_theme_mod('grasim_shop_container_contact_width','1100'));?>px;
				margin-left: auto;
				margin-right: auto;
				padding: 20px 0px;
			}
			.featured-section, .about_data, .our_portfolio_data, .our_team_info, .our_services_info, .our_testimonial_info, .our_sponsors_info,.widget_product_data {
				max-width: <?php echo esc_attr(get_theme_mod('grasim_shop_container_contact_width','1100')); ?>px;
			    margin-left: auto;
			    margin-right: auto;
			}
			.grasim_shop_container_info.boxed_layout main#primary {			    
			    background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_boxed_layout_bg_color','#eeeeee')); ?>;
			    padding: 20px;
			    margin: 10px;
			}
			.blog .grasim_shop_container_info.boxed_layout main#primary article {
			    padding: 10px;
			}
			aside.widget-area {
			    background-color:<?php echo esc_attr(get_theme_mod('grasim_shop_boxed_layout_bg_color','#eeeeee')); ?>;
			    margin: 10px;
			}

			.blog .grasim_shop_container_info.boxed_layout.list_view main#primary article {
			    margin-bottom: 60px;
			    padding: 0px;
			}
			.featured-section, .about_data, .our_portfolio_data, .our_team_info, .our_services_info, .our_testimonial_info, .our_sponsors_info, .grasim_shop_product_data {
			    max-width: <?php echo esc_attr(get_theme_mod('grasim_shop_container_contact_width','1100'));?>px;
				margin-left: auto;
				margin-right: auto;
			}
			.blog .grasim_shop_container_info.boxed_layout.list_view .main_container {
			    padding-left: 40px;
			}
			.blog .grasim_shop_container_info.boxed_layout.grid_view article{
				margin-bottom: 25px;
			}
			aside.widget-area li{
		    	transition: 0.3s all ease-in-out;
		    }
			.wp-block-search__label {
			    width: 100%;
			    display: block;
			    font-size: 28px;
			    font-weight: bold;
			}
			aside.widget-area section h2, aside.widget-area label.wp-block-search__label {
			    padding: 18px 0px;
			}
			.wp-block-group__inner-container ul, .wp-block-search__inside-wrapper, .no-comments.wp-block-latest-comments, .wp-block-group__inner-container ol, .no-comments.wp-block-latest-comments {
			    margin: 0px;
			    padding: 0px;
			    padding-left: 0px !important;
			}
			.wp-block-group__inner-container ul li:hover, .wp-block-group__inner-container ol li:hover {
			    padding-left: 20px;
			}
			.wp-block-search__inside-wrapper {
			    margin: 15px 0px;
			}
			@media only screen and (max-width: 768px){
				.main_containor.list_view article {
				    display: flex;
				    justify-content: space-between;
				    flex-direction: column;
				}
				.main_containor.list_view article figure.post-thumbnail {
				    width: 100%;
				}
				.main_containor.list_view article .main_container {
				    width: 100%;
				}
				.grasim_shop_container_info.boxed_layout main#primary article {
				    padding: 0px; 
				    margin-bottom: 60px;
				}
				.grasim_shop_container_info.boxed_layout.grid_view main#primary article{
					padding: 0px;
				}
			}
		</style>
		<?php
	}
	if(get_theme_mod('grasim_shop_container_width_layout','content_width')=='full_width'){
		?>
		<style>
			.grasim_shop_container_info.full_width main#primary article {
			    padding: 0px;
			    margin-bottom: 60px;
			}
			.blog .grasim_shop_container_info.full_width.list_view .main_container {
			    padding-left: 40px;
			}
			.wp-block-search__label {
			    width: 100%;
			    display: block;
			    font-size: 28px;
			    font-weight: bold;
			}
			aside.widget-area li{
		    	transition: 0.3s all ease-in-out;
		    }
		    .wp-block-search__inside-wrapper {
			    margin: 15px 0px;
			}
			aside.widget-area section h2, aside.widget-area label.wp-block-search__label {
			    padding: 18px 0px;
			}
			.wp-block-group__inner-container ul, .wp-block-search__inside-wrapper, .no-comments.wp-block-latest-comments, .wp-block-group__inner-container ol, .no-comments.wp-block-latest-comments {
			    margin: 0px;
			    padding: 0px;
			    padding-left: 0px !important;
			}
			.wp-block-group__inner-container ul li:hover, .wp-block-group__inner-container ol li:hover {
			    padding-left: 20px;
			}

			@media only screen and (max-width: 768px){
				.main_containor.list_view article {
				    display: flex;
				    justify-content: space-between;
				    flex-direction: column;
				}
				.main_containor.list_view article figure.post-thumbnail {
				    width: 100%;
				}
				.main_containor.list_view article .main_container {
				    width: 100%;
				}
				.grasim_shop_container_info.full_width {
				    padding: 20px;
				    margin: 0px;
				}
			}
		</style>
		<?php
	}
	if(get_theme_mod( 'grasim_shop_breadcrumb_bg_image')){
    	?>
		<style type="text/css">
		.breadcrumb_info{
			background: url(<?php echo esc_attr(get_theme_mod('grasim_shop_breadcrumb_bg_image'))?>) rgb(0 0 0 / 0.75);
			background-position: <?php echo esc_attr(get_theme_mod('grasim_shop_img_bg_position','center center')); ?>;
		    background-attachment: <?php echo esc_attr(get_theme_mod('grasim_shop_breadcrumb_bg_attachment','scroll'));?>;
		    background-size: <?php echo esc_attr(get_theme_mod('grasim_shop_breadcrumb_bg_size','cover'));?>;
		    background-blend-mode: multiply;
		}
		</style>
		<?php
    }else{
    	?>
		<style type="text/css">
    	.breadcrumb_info{
			background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_breadcrumb_bg_color','#c8c9cb')); ?>;
		}
		</style>
		<?php
    }
    if(get_theme_mod('grasim_shop_top_bar_width_layout','content_width')=='content_width'){
		?>
		<style>
			.topbar_info_data {
			    max-width: <?php echo esc_attr(get_theme_mod('grasim_shop_top_bar_contact_width','1100')); ?>px;
			    margin-left: auto;
			    margin-right: auto;
			}
		</style>
		<?php
	}
	if(get_theme_mod('grasim_shop_header_width_layout','content_width')=='content_width'){
		?>
		<style>
			.header_info {
			    max-width: <?php echo esc_attr(get_theme_mod('grasim_shop_header_contact_width','1100')); ?>px;
			    margin-left: auto;
			    margin-right: auto;
			}
		</style>
		<?php
	}
	if(!is_home()){
		?>
		<style>
			.featured_slider_image .hentry-inner .entry-container{
				margin: 70px 20px 0px;
			}
		</style>
		<?php
	}
	if(get_theme_mod('grasim_shop_footer_width_layout','content_width')=='content_width'){
		?>
		<style>
			footer#colophon .site-info {
			    max-width: <?php echo esc_attr(get_theme_mod('grasim_shop_footer_contact_width','1100')); ?>px;
			    margin-left: auto;
			    margin-right: auto;
			}
		</style>
		<?php
	}  
	if(get_post_meta(get_the_ID(),'breadcrumb_select',true)=='no'){
		?>
		<style>			
			.breadcrumb_info{
			    display: none;
			}	   
		</style>
		<?php
	}
    if(get_theme_mod( 'display_scroll_button',true) == ''){
		?>
		<style>			
			.scrolling-btn {
    			display: none;
			}	   
		</style>
		<?php
	}
	if(get_theme_mod( 'display_cart_icon',true) == ''){
    	?>
		<style type="text/css">
			.add_cart_icon{
				display: none !important;
			}
		</style>
		<?php
    }
    if(get_theme_mod( 'display_mobile_cart_icon',true) == ''){
		?>
		<style type="text/css">
			@media only screen and (max-width: 768px){
				.add_cart_icon{
					display: none !important;
				}
			}
		</style>
		<?php
	}
	if(get_theme_mod( 'display_mobile_cart_icon',true) == true){
		?>
		<style type="text/css">
			@media only screen and (max-width: 768px){
				.add_cart_icon{
					display: block !important;
				}
			}
		</style>
		<?php
	}
	if(get_theme_mod( 'display_mobile_search_icon', true) == true){
		?>
		<style type="text/css"> 
			@media only screen and (max-width: 768px){
				div#cl_serch{
					display: block !important;
				}
			}
		</style>
		<?php
	}
	if(get_theme_mod( 'display_mobile_search_icon', true) == ''){
		?>
		<style type="text/css"> 
			@media only screen and (max-width: 768px){
				div#cl_serch{
					display: none;
				}
			}
		</style>
		<?php
	}
	if(get_theme_mod( 'display_search_icon',true) == ''){ 
    	?>
		<style type="text/css">
			div#cl_serch {
			   display: none;
			}
		 </style>
        <?php
    }
	?>
	<style>
		aside.widget-area section h1,aside.widget-area section h2,aside.widget-area section h3,aside.widget-area section h4,aside.widget-area section h5,aside.widget-area section h6, aside.widget-area label.wp-block-search__label{
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_sidebar_heading_text_color','#ffffff')); ?>;
			background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_sidebar_heading_background_color','#2e6d87')); ?>;
			padding-left: 10px !important;
    		border-radius: 6px 6px 0px 0px;
		}
		.current-menu-ancestor > a, .current-menu-item > a, .current_page_item > a {
			color: <?php echo esc_attr(get_theme_mod('header_menu_active_color','#afe7ff')); ?> !important;
		}
		.main-navigation .nav-menu ul.sub-menu{
			background-color: <?php echo esc_attr(get_theme_mod('header_desktop_submenu_bg_color','#ffffff')); ?>;
		}
		.main-navigation ul ul a{
			color: <?php echo esc_attr(get_theme_mod('header_desktop_submenu_text_color','#2e6d87')); ?> !important;
		}
		body a, time.entry-date.published:before, time.entry-date.published:before, span.cat-links:before, span.comments-link:before, span.byline:before {
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_link_color','#3c3c3c')); ?> ;
			text-decoration: none;
		} 
		body a:hover {
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_link_hover_color','#2e6d87')); ?> ;
		}
		body {
			font-size: <?php echo esc_attr(get_theme_mod('grasim_shop_body_font_size','15')); ?>px;
			font-weight: <?php echo esc_attr(get_theme_mod('grasim_shop_body_font_weight','400')); ?>;
			text-transform: <?php echo esc_attr(get_theme_mod('grasim_shop_body_text_transform','inherit')); ?>;
		}
		h1{
			font-size: <?php echo esc_attr(get_theme_mod('grasim_shop_heading1_font_size','35')); ?>px;
			font-weight: <?php echo esc_attr(get_theme_mod('grasim_shop_heading1_font_weight','bold')); ?>;
			text-transform: <?php echo esc_attr(get_theme_mod('grasim_shop_heading1_text_transform','inherit')); ?>;
		}
		h2{
			font-size: <?php echo esc_attr(get_theme_mod('grasim_shop_heading2_font_size','28')); ?>px;
			font-weight: <?php echo esc_attr(get_theme_mod('grasim_shop_heading2_font_weight','bold')); ?>;
			text-transform: <?php echo esc_attr(get_theme_mod('grasim_shop_heading2_text_transform','inherit')); ?>;
		}
		h3{
			font-size: <?php echo esc_attr(get_theme_mod('grasim_shop_heading3_font_size','25')); ?>px;
			font-weight: <?php echo esc_attr(get_theme_mod('grasim_shop_heading3_font_weight','400')); ?>;
		}
		/*a.social_icon i{
			background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_social_icon_bg_color','#fff')); ?>;
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_social_icon_color','#2e6d87')); ?>;
			border-color: <?php echo esc_attr(get_theme_mod('grasim_shop_social_icon_bg_color','#fff')); ?>;
		}
		a.social_icon i:hover{
			background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_social_icon_bg_hover_color','#2e6d87')); ?>;
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_social_icon_hover_color','#fff')); ?>;
			border-color: <?php echo esc_attr(get_theme_mod('grasim_shop_social_icon_bg_hover_color','#2e6d87')); ?>;
		}*/
		.grasim_shop_container_data {
		    background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_container_bg_color','rgb(255,255,255,0.34)')); ?>;
		    color: <?php echo esc_attr(get_theme_mod('grasim_shop_container_text_color','#3c3c3c')); ?>;
		}
		.main_containor.grid_view{
		    display: grid;
		    grid-template-columns: repeat(<?php echo esc_attr(get_theme_mod('grasim_shop_container_grid_view_col','3'));?>, 1fr);
		    grid-column-gap :<?php echo esc_attr(get_theme_mod('grasim_shop_container_grid_view_col_gap','20'));?>px;
		}
		.blog .grasim_shop_container_info.content_width .main_containor article{
			background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_boxed_container_bg_color','#eeeeee')); ?>;
			margin-bottom: 20px;
		}
		.blog .grasim_shop_container_info.content_width main#primary {
		    background: none;
		}
		.call_menu_btn{
			background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_callmenu_btn_bg_color','#ffffff')); ?>;
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_callmenu_btn_color','#2e6d87')); ?> !important;
			border: 1px solid  <?php echo esc_attr(get_theme_mod('grasim_shop_call_btn_border_color','#ffffff')); ?>;
		}
		.call_menu_btn:hover{
			background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_callmenu_btn_bghover_color','#2e6d87')); ?>;
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_call_btn_texthover_color','#ffffff')); ?> !important;
		}	
		img.custom-logo {
		    width: <?php echo esc_attr(get_theme_mod('grasim_shop_logo_width','150')); ?>px;
		}

		/*--------------------------------------------------------------
		# button start
		--------------------------------------------------------------*/
		button, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button,.nav-previous a, .nav-next a, .buttons, .woocommerce a.button, .woocommerce button, .woocommerce .single-product button, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce button.button,.woocommerce button.button.alt.disabled{
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_button_text_color','#ffffff')); ?>;
			background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_button_bg_color','#2e6d87')); ?>;
			border-radius: <?php echo esc_attr(get_theme_mod('grasim_shop_button_border_radius','2')); ?>px;
			padding: <?php echo esc_attr(get_theme_mod('grasim_shop_button_padding','10px 15px')); ?>;
		}
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .wp-block-search .wp-block-search__button:hover,.nav-previous a:hover, .nav-next a:hover, .buttons:hover, .woocommerce a.button:hover, .woocommerce button:hover, .woocommerce .single-product button:hover, .woocommerce button.button.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button:hover,.woocommerce button.button.alt.disabled:hover {
		    background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_button_bg_hover_color','#ffffff')); ?>;
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_button_texthover_color','#2e6d87')); ?>;
			/*border: <?php echo esc_attr(get_theme_mod('grasim_shop_borderwidth','2')); ?>px solid <?php echo esc_attr(get_theme_mod('grasim_shop_button_border_hover_color','#ffffff')); ?>;*/
		}
		button:after, input[type="button"]:after, input[type="reset"]:after, input[type="submit"]:after, .wp-block-search .wp-block-search__button:after,.nav-previous a:after, .nav-next a:after, .buttons:after, .woocommerce a.button:after, .woocommerce button:after, .woocommerce .single-product button:after, .woocommerce button.button.alt:after, .woocommerce a.button.alt:after, .woocommerce button.button:after,.woocommerce button.button.alt.disabled:after {
		    border: <?php echo esc_attr(get_theme_mod('grasim_shop_borderwidth','2')); ?>px solid <?php echo esc_attr(get_theme_mod('grasim_shop_button_border_color','#2e6d87')); ?>;
		    border-radius: <?php echo esc_attr(get_theme_mod('grasim_shop_button_border_radius','2')); ?>px;
		}
		button:hover:after, input[type="button"]:hover:after, input[type="reset"]:hover:after, input[type="submit"]:hover:after, .wp-block-search .wp-block-search__button:hover:after,.nav-previous a:hover:after, .nav-next a:hover:after, .buttons:hover:after, .woocommerce a.button:hover:after, .woocommerce button:hover:after, .woocommerce .single-product button:hover:after, .woocommerce button.button.alt:hover:after, .woocommerce a.button.alt:hover:after, .woocommerce button.button:hover:after,.woocommerce button.button.alt.disabled:hover:after {
		   border: <?php echo esc_attr(get_theme_mod('grasim_shop_borderwidth','2')); ?>px solid <?php echo esc_attr(get_theme_mod('grasim_shop_button_border_hover_color','#3c3c3c')); ?>;
		}
		span.separator,span.separator:before,span.separator:after {
		    background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_heading_underline_color','#2e6d87')); ?> ;
		}

		.woocommerce .woocommerce-message {
		    border-top-color: <?php echo esc_attr(get_theme_mod('grasim_shop_button_bg_color','#2e6d87')); ?>;
		}
		.woocommerce .woocommerce-message::before{
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_button_bg_color','#2e6d87')); ?> ;
		}
		.woocommerce .woocommerce-info, .woocommerce-noreviews, p.no-comments {
		    background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_button_bg_color','#2e6d87')); ?> ;
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_button_text_color','#ffffff')); ?> ;
		}
		/*--------------------------------------------------------------
		# button end
		--------------------------------------------------------------*/

		/*--------------------------------------------------------------
		# breadcrumb start
		--------------------------------------------------------------*/
		.breadcrumb_info{
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_breadcrumb_text_color','#ffffff')); ?>;
		}
		section#breadcrumb-section a {
		    color: <?php echo esc_attr(get_theme_mod('grasim_shop_breadcrumb_link_color','#ffffff')); ?>;
    		text-decoration: none;
    		border: 2px solid <?php echo esc_attr(get_theme_mod('grasim_shop_breadcrumb_link_color','#ffffff')); ?>;
    		padding: 7px;
    		border-radius: 100px;
		}
		.breadcrumb_info ol.breadcrumb-list {
			background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_breadcrumb_icon_background_color','#2e6d87'));?>;
			border: 1px solid <?php echo esc_attr(get_theme_mod('grasim_shop_breadcrumb_icon_background_color','#2e6d87'));?>;
		}
		/*--------------------------------------------------------------
		# breadcrumb end
		--------------------------------------------------------------*/

		/*--------------------------------------------------------------
		# featured section Start
		--------------------------------------------------------------*/
	    .section-featured-wrep:hover i{
	    	background-color: unset !important;
	    }
	    .section-featured-wrep:hover .featured-icon {
		    background: <?php echo esc_attr(get_theme_mod('featured_section_icon_bg_hover_color',$default_setting['featured_section_icon_bg_hover_color'])); ?>;
		}
		.section-featured-wrep i{
			border: unset !important;
			background-color: unset !important;
		}
		.featured-icon{
			background: <?php echo esc_attr(get_theme_mod('featured_section_icon_bg_color',$default_setting['featured_section_icon_bg_color'])); ?>;
		}
		.section-featured-wrep:hover{
			background: unset !important;
    		color: unset !important;
		}
		.section-featured-wrep:before {
			background: <?php echo esc_attr(get_theme_mod('featured_section_bg_hover_color',$default_setting['featured_section_bg_hover_color'])); ?>;	
		}
		.section-featured-wrep:hover .featured-thumbnail{
			color: <?php echo esc_attr(get_theme_mod('featured_section_text_hover_color',$default_setting['featured_section_text_hover_color'])); ?>;
		}
		/*--------------------------------------------------------------
		# featured section end
		--------------------------------------------------------------*/

		/*--------------------------------------------------------------
		# Portfolio Start
		--------------------------------------------------------------*/
			.our_portfolio_btn a{	
				background: unset !important;
			}
			.our_portfolio_btn a i{	
				background: <?php echo esc_attr(get_theme_mod('our_portfolio_icon_bg_color',$default_setting['our_portfolio_icon_bg_color'])); ?> !important;
			}			
		/*--------------------------------------------------------------
		# Portfolio end
		--------------------------------------------------------------*/

		/*--------------------------------------------------------------
		# Services Start
		--------------------------------------------------------------*/
		.side.back.services-section-data:hover {
		    color: <?php echo esc_attr(get_theme_mod('our_services_contain_text_hover_color','#ffffff'));?>;
		}
		.our_services_section .card:hover {
			background-color: <?php echo esc_attr(get_theme_mod('our_services_contain_bg_hover_color','#2e6d87'));?> !important;
		}
		.our_services_data a:hover{
			color: unset !important;
		}
		.our_services_section .card:hover .our_services_title a{
			color: <?php echo esc_attr(get_theme_mod('our_services_link_hover_color','#ffffff')); ?>!important;
		}

		/*--------------------------------------------------------------
		# Services Start
		--------------------------------------------------------------*/

		/*--------------------------------------------------------------
		# Our Team Start
		--------------------------------------------------------------*/
			.our_team_icon_contain{
				background-image: linear-gradient(0deg, #000000BF 0%, <?php echo esc_attr(get_theme_mod('our_team_contain_bg_color','#2e6d87'));?> 140%);
			}
			.our_teams_contain, .our_team_contain_info {
			   /* background: <?php echo esc_attr(get_theme_mod('our_team_contain_bg_color','#2e6d87'));?>;*/
			   color: <?php echo esc_attr(get_theme_mod('our_team_contain_text_color','#ffffff'));?>;
			}
			.our_teams_contain:hover .our_team_title h3, .our_teams_contain:hover .our_team_headline p{
				color: unset !important;
			}
		/*--------------------------------------------------------------
		# Our Team Start
		--------------------------------------------------------------*/

		/*--------------------------------------------------------------
		# Testimonial Start
		--------------------------------------------------------------*/
		.testimonials_title h3{
			color: <?php echo esc_attr(get_theme_mod('our_team_testimonial_title_text_color','#000000'));?>;
		}
		.testimonials_title h4{
			color: <?php echo esc_attr(get_theme_mod('our_testimonial_subheadline_text_color','#000000'));?>;
		}
		.image_testimonials {
		    background: unset !important;
		}
		.our_testimonials_container{
			background: unset !important;
		}
		.our_testimonials_container p{
			background: <?php echo esc_attr(get_theme_mod('our_testimonial_alpha_color_setting',$default_setting['our_testimonial_alpha_color_setting']));?>;
		}
		.our_testimonials_container p:before {
			border-color: <?php echo esc_attr(get_theme_mod('our_testimonial_alpha_color_setting',$default_setting['our_testimonial_alpha_color_setting']));?> transparent transparent <?php echo esc_attr(get_theme_mod('our_testimonial_alpha_color_setting',$default_setting['our_testimonial_alpha_color_setting']));?>;
		}
		/*.testimonials_disc{
			background: <?php echo esc_attr(get_theme_mod('our_testimonial_alpha_color_setting',$default_setting['our_testimonial_alpha_color_setting']));?>; 
		}*/
		.image_testimonials img{
			border-color: <?php echo esc_attr(get_theme_mod('our_team_testimonial_image_bg_color',$default_setting['our_team_testimonial_image_bg_color']));?>; 
		}

		/*--------------------------------------------------------------
		# Testimonial end
		--------------------------------------------------------------*/

		/*--------------------------------------------------------------
		# footer start
		--------------------------------------------------------------*/
		footer#colophon{			
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_footer_text_color','#ffffff')); ?>;
			padding: 10px;
		}
		footer#colophon a{
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_footer_link_color','#ffffff')); ?>;
		}
		footer#colophon a:hover{
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_footer_link_hover_color','#000000')); ?>;
		}
		.scrolling-btn{
			background-color: <?php echo esc_attr(get_theme_mod('grasim_shop_scroll_button_bg_color','#08445d'));?> !important;
			color: <?php echo esc_attr(get_theme_mod('grasim_shop_scroll_button_color','#ffffff')); ?> !important;
		}

		/*--------------------------------------------------------------
		# footer end
		--------------------------------------------------------------*/

		@media only screen and (max-width: 768px){
	    	body {
				font-size: <?php echo esc_attr(get_theme_mod('grasim_shop_mobile_font_size','14')); ?>px;
			} 
			h1{
				font-size: <?php echo esc_attr(get_theme_mod('grasim_shop_mobile_heading1_font_size','20')); ?>px;
			} 
			h2{
				font-size: <?php echo esc_attr(get_theme_mod('grasim_shop_mobile_heading2_font_size','18')); ?>px;
			}
			h3{
				font-size: <?php echo esc_attr(get_theme_mod('grasim_shop_mobile_heading3_font_size','14')); ?>px;
			}
			.mobile_menu{
				background-color: <?php echo esc_attr(get_theme_mod('header_mobile_navmenu_background_color','#2e6d87'));?>;
			}
			.main-navigation .sub-menu li, .main-navigation ul ul ul.toggled-on li {
		        background-color: <?php echo esc_attr(get_theme_mod('header_mobile_submenu_background_color','#afe7ff')); ?>;
		    }
		    .mobile_menu ul li a{
		    	color: <?php echo esc_attr(get_theme_mod('header_mobile_navmenu_color','#ffffff')); ?> !important;		
		    }
		    .mobile_menu ul .current-menu-ancestor > a, .mobile_menu ul .current-menu-item > a, .mobile_menu ul .current_page_item > a {
			    color: <?php echo esc_attr(get_theme_mod('header_mobile_navmenu_active_color','#afe7ff'));?> !important;
			}
	    }
	</style>
	<?php
	if (!class_exists('WooCommerce'))  return;
    //if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		if(is_product() || is_shop() || is_cart() || is_checkout()){
			if(empty(get_post_meta(get_the_ID(),'sidebar_select',true))){
		        ?>
		        <style> 
			        aside.widget-area{
			            display: none;
			        }
			        main#primary {
					    width: 100% !important;
					}
		        </style>
		        <?php
		    }
	    }
	//}
}
add_action( 'wp_head', 'grasim_shop_customize_css');