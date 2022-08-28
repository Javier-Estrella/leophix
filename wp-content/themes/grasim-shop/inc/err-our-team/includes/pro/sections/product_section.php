<?php
if ( ! function_exists( 'IFT_woocommerce_product_section_activate' ) ) {
	function IFT_woocommerce_product_section_activate(){
		?>
		<div class="woocommerce_product_sections">
			<div class="widget_product_data">
				<?php dynamic_sidebar('woocommerce_product'); ?>
			</div>		
		</div>
	<?php
	}
}