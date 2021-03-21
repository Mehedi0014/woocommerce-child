<?php
	/**
	===> After Place order page/Checkout (Checkout theke order conform korar por j page ase tar jonno coding)
	===> Add div for desing, Before/Top part of Order details
	*/
	function top_part_of_order_details_open_container(){
		echo '
			<div id="topPartOfOrderDetails" class="container mb-5">
		';
	}
	add_action('woocommerce_before_thankyou', 'top_part_of_order_details_open_container', 9);

	function top_part_of_order_details_close_container(){
		echo '
			</div>
		';
	}
	add_action('woocommerce_thankyou_cod', 'top_part_of_order_details_close_container', 5);