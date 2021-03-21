<?php
	/** 
	 ===> change [add to cart] text Only Single Page
	*/
	function mehedi_add_to_cart_text_change_single_page(){
        return "Order Now";
    }
    add_filter('woocommerce_product_single_add_to_cart_text', 'mehedi_add_to_cart_text_change_single_page');