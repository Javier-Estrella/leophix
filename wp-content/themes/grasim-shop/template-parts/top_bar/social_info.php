<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grasim_shop
 */

$social_icon  = get_theme_mod( 'social_icon_section', 4 );
?>
<div class="topbar_info_data">
	<div class="header_topbar_info">
		<div class="header_contact_data">
			<?php 
			$is_admin = current_user_can('manage_options');  
			if(get_theme_mod( 'grasim_shop_contact_info_number') != '' || ( get_theme_mod( 'grasim_shop_contact_info_number','044632353231111')!='' && $is_admin == true)){
					?>
					<div class="contact_info">
						<i class="fa fa-phone"></i>
						<p><?php echo esc_html(get_theme_mod( 'grasim_shop_contact_info_number','044632353231111' )); ?></p>
					</div>
					<?php
			}
			if(get_theme_mod( 'grasim_shop_email_info') != '' || ( get_theme_mod( 'grasim_shop_email_info','3235323@gmail.com')!='' && $is_admin == true)){ ?> 
				<div class="email_info">
					<i class="fa fa-envelope"></i>
					<p><?php echo esc_html(get_theme_mod( 'grasim_shop_email_info','3235323@gmail.com' )); ?></p>
				</div>
			<?php } ?>
		</div>		
	</div>
	<?php 
	//include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
//	if (is_plugin_active( 'err-our-team/err-our-team.php')) {
		echo esc_attr(IFT_social_icon_activate());
	//}
	?>
</div>