<?php

	/**
	===> forcefully auto selected Bulling details state field like cart page address filed state information.
	===> https://stackoverflow.com/questions/67614359/cart-page-address-arent-show-in-checkout-page-billing-details-area-but-ship-to/67675430#67675430
	*/

	add_filter( 'default_checkout_billing_state', 'nazmul_change_default_checkout_state' );
	function nazmul_change_default_checkout_state() {
		$state = WC()->customer->get_shipping_state();
		return $state;
	}