<?php

add_filter( 'woocommerce_upsell_display_args', 'wc_change_number_related_products', 20 );

function wc_change_number_related_products( $args ) { 
	$args['posts_per_page'] = 10; // How many porducts display
	$args['columns'] = 5; // How many products display per row
	return $args;
}