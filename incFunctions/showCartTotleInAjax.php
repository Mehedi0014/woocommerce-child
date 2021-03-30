<?php
	/**
	===> Show cart contents / total Ajax (Cart e kotogulo porduct add holo ta menu te show kora)
	 */
	add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

	function woocommerce_header_add_to_cart_fragment( $fragments ) {
	    global $woocommerce;
	    ob_start();
	    ?>
	    <span class="topMenuCartItemsShow"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	    <?php
	    $fragments['span.topMenuCartItemsShow'] = ob_get_clean();
	    return $fragments;
	}