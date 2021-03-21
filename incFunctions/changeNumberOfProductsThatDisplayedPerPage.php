<?php
    /**
	 ===> Change number of products that are displayed per page (shop page)
	 */
	add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
	function new_loop_shop_per_page( $cols ) {
	  $cols = 12;
	  return $cols;
	}