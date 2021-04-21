<?php

	/** .............................................................................................................
	===> customize image size in shop page, single page, gallery image etc
	*/

	/*
		woocommerce_thumbnail – used in the product ‘grids’ in places such as the shop page.
		woocommerce_single – used on single product pages.
		woocommerce_gallery_thumbnail – used below the main image on the single product page to switch the galle
	*/

	/*
		function CustomizeImageSizeForDifferentPage() {
		    add_theme_support(
		    	'woocommerce',
		    	array(
		        	'thumbnail_image_width' => 150,
		        	'gallery_thumbnail_image_width' => 100,
		        	'single_image_width'    => 'full'
		    	) 
		    );
		}
		add_action( 'after_setup_theme', 'CustomizeImageSizeForDifferentPage', 99 );
	*/


	function CustomizeImageSizeForDifferentPage() {
		add_theme_support(
			'woocommerce',
			array(
				'thumbnail_image_width' => 600
			)
		);
	}
	add_action( 'after_setup_theme', 'customizeImageSizeForDifferentPage', 99 );