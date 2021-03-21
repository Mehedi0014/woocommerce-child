<?php
	/**
	===> Disable Variable Product Price Range on the WooCommerce Single Product Pages Only
	*/
	add_action( 'woocommerce_before_single_product', 'my_remove_variation_price' );
	function my_remove_variation_price() {
	  global $product;
	  if ( $product->is_type( 'variable' ) ) {
	    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price' );
	  }
	}