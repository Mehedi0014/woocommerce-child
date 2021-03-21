<?php
	 /**
	  ===> Change Related Products Heading, with adding the product name
	*/
	add_filter(  'gettext',  'change_related_products_title', 10, 3 );
	function change_related_products_title( $translated, $text, $domain  ) {
	    if( $text === 'Related products' && $domain === 'woocommerce' ){
	        $translated = esc_html__( 'These go well with: ', $domain ) . ' ' . esc_html( get_the_title() );
	    }
	    return $translated;
	}