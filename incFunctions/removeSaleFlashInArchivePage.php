<?php
	/**
	===> Remove sale flash in archive page.
	*/
	remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
	//Remove Sales Flash in single product page	
	function woo_custom_hide_sales_flash() {
	    return false;
	}
	add_filter('woocommerce_sale_flash', 'woo_custom_hide_sales_flash');