<?php
if ( ! function_exists( 'IFT_social_icon_activate' ) ) {
	function IFT_social_icon_activate(){
		$is_admin = current_user_can('manage_options');
		if(get_theme_mod( 'display_social_icon',true ) == true){ 
			?>
			<div class="header_social_icon">
				<div class="social_icon_info">
					<div class="social_data">
						<?php 
						$social_icon_section_content  = get_theme_mod( 'social_icon_section_content',inpersttion_theme_get_icon_default());
						if ( ! empty( $social_icon_section_content ) ) {
							$social_icon_section_content = json_decode( $social_icon_section_content );
							foreach ( $social_icon_section_content as $info_item ) {
								if(get_theme_mod( 'social_icon_section_content') != '' || ( get_theme_mod( 'social_icon_section_content',inpersttion_theme_get_icon_default())!='' && $is_admin == true)){
									?>
									<a class="social_icon" href="<?php echo esc_attr($info_item->link);?>" target="_blank">
										<i class="fa <?php echo esc_attr($info_item->icon_value);?>"></i>
									</a>
									<?php
								}
							}
						} ?>
					</div>
				</div>
			</div>
			<?php 
		}
	}
}