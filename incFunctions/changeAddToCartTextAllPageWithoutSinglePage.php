<?php
	/** 
	 ===> change [add to cart] text all page like shop, category page etc. 
	*/
	function mehedi_add_to_cart_text_change(){
		global $product;
    	if( $product->is_type( 'variable' )) {
        	return "Select-Option";
    	}else {
    		return "Order Now";
    	}
    }
    add_filter('woocommerce_product_add_to_cart_text', 'mehedi_add_to_cart_text_change');