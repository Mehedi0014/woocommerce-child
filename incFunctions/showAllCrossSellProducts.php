<?php
	/** .............................................................................................................
	 ===> by default woocommerce cross sell is only showing two random products on cart page.
	 ===> Show all cross sell porducts
	*/


    add_filter('woocommerce_cross_sells_total', 'showAllCrossSellProducts');
	function showAllCrossSellProducts() {
	    return -1;
	}