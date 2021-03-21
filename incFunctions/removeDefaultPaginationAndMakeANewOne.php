<?php
	/**
	===> Remove default pagination and make a new one for archive page.
	*/
	remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );

	function mehedi_pagination(){
	    global $wp_query;

	    if ( $wp_query->max_num_pages <= 1 ) return;

	    $big = 999999999; // need an unlikely integer

	    $pages = paginate_links( array(
	        'base'        => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	        'format'      => '?paged=%#%',
	        'current'     => max( 1, get_query_var('paged') ),
	        'total'       => $wp_query->max_num_pages,
	        'type'        => 'array',
	        'prev_next' => true,
	        'prev_text' => __('<i class="fa fa-chevron-left"></i>'),
	        'next_text' => __('<i class="fa fa-chevron-right"></i>'),
	    ) );
	    
	    if( is_array( $pages ) ) {
	        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');

	        	echo '<div id="paginationContainer" class="mt-4 mb-5 d-flex justify-content-center">';
	        		echo '<ul class="list-group list-group-horizontal">';
				        foreach ( $pages as $page ) {
				            echo "<li class='list-group-item'>";
				            	echo "$page";
				            echo "</li>";
				        }
	       			echo '</ul>';
		       	echo '</div>';
	    }
	}
	add_action( 'init_pagination', 'mehedi_pagination', 10 );
	// ai function ta woocommerce -> template -> archive-product.php te call kora hoyeche.
	// Infinity scroll add korar karone ai function ti comment kore deya holo.