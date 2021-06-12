<?php
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
	add_action('woocommerce_after_shop_loop_item_title', 'add_star_rating', 5 );
	function add_star_rating()
	{
	global $woocommerce, $product;
	$average = $product->get_average_rating();

	echo '<div class="archivePageStarRating m-auto star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
	}