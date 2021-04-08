<?php
	/**
	 ===> Remove default add to cart and create custom add to cart button
	*/
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	function mehedi_add_custom_add_to_cart_link(){
	    $button_permalink = get_permalink();
	    global $product;

	    if($product->is_type( 'variable' )) {
	        woocommerce_template_loop_add_to_cart();
	    }else{
	        $price = $product->get_price();
	        echo '
	            <a class="btn button" href="' . $button_permalink . '"> ORDRE </a>
	        ';
	    }
	}
	add_action('woocommerce_after_shop_loop_item', 'mehedi_add_custom_add_to_cart_link', 11);