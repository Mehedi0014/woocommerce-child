<?php
	/*
	===> Move Variable Product Price One place to another
	*/
	function move_variation_price() {
	    remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
	    add_action( 'woocommerce_before_variations_form', 'woocommerce_single_variation', 10 );
	}
	add_action( 'woocommerce_before_add_to_cart_form', 'move_variation_price' );