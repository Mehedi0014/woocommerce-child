<?php

/** .............................................................................................................
===> Add container or container-fluid or any tag for which wrapped all archive page.
*/
function add_container_for_wrapping_archive_page(){
	function add_container_for_all_archive_page_opening_tag(){
		echo '<div class="container-fluid productsWrapperContainer">';
	}
	add_action( 'woocommerce_before_main_content', 'add_container_for_all_archive_page_opening_tag' , 11 );


	function add_container_for_all_archive_page_closeing_tag(){
		echo '</div>';
	}
	add_action( 'woocommerce_after_main_content', 'add_container_for_all_archive_page_closeing_tag' , 1 );
}
add_action( 'init', 'add_container_for_wrapping_archive_page' );