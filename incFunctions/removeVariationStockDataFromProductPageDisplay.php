<?php
	/**
	===> Remove variation stock data from product page display (In stock or out of stock ai lekha gulo single page theke remove korer poddoti)
	*/
	function sww_wc_remove_variation_stock_display( $data ) {
	    unset( $data['availability_html'] );
	    return $data;
	}
	add_filter( 'woocommerce_available_variation', 'sww_wc_remove_variation_stock_display', 99 );

	// nicher filter only WooCommerce 2.6 er uporer version e kaj kore.
	//add_filter( 'woocommerce_get_stock_html', '__return_empty_string' );