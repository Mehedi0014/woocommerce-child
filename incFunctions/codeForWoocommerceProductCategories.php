<?php
	/*
	===> Code for woocommerce product categories
	*/
add_action( 'woocommerce_archive_description', 'shopPageAjaxCategories', 25 );
function shopPageAjaxCategories(){
	echo "<div id='shopPageAjaxCategories'>";
	echo do_shortcode( '[product_categories parent="0" columns="0" hide_empty="0"]' );
	echo "</div>";
}


// Hide category product count in product archives
add_filter( 'woocommerce_subcategory_count_html', '__return_false' );


// Remove Product Category Images
// remove_action( 'woocommerce_before_subcategory_title', 'woocommerce_subcategory_thumbnail', 10 );


// Hide a category
add_filter( 'get_terms', 'ts_get_subcategory_terms', 10, 3 );
function ts_get_subcategory_terms( $terms, $taxonomies, $args ) {
	$new_terms = array();
	if ( in_array( 'product_cat', $taxonomies ) /*&& is_admin() &&is_shop()*/ ) {
		foreach( $terms as $key => $term ) {
			if ( !in_array( $term->slug, array( 'uncategorized', 'mwb_wgm_giftcard' ) ) ) {
				$new_terms[] = $term;
			}
		}
		$terms = $new_terms;
	}
	return $terms;
}