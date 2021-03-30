<?php
	/**
	 ===> Change "You may also like..." In upsell products
	 */
	add_filter( 'woocommerce_product_upsells_products_heading', 'bbloomer_translate_may_also_like' ); 
	function bbloomer_translate_may_also_like() {
	   //return 'Customers also purchased...';
	   $translated = esc_html__( 'Customers also purchased... ');
	   return $translated;
	}