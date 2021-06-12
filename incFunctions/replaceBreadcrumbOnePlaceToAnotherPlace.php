<?php
	/**
	 ===> Replace breadcrumb one place to another place ============================================
	 */
	add_action( 'init', 'replaceBreadcrumbOnePlaceToAnotherPlace' );
	function replaceBreadcrumbOnePlaceToAnotherPlace(){
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
		add_action( 'woocommerce_archive_description', 'woocommerce_breadcrumb', 20 );
		add_action( 'woocommerce_before_single_product', 'woocommerce_breadcrumb', 20 );
		add_action( 'woocommerce_check_cart_items', 'woocommerce_breadcrumb', 20 );
		add_action( 'woocommerce_before_account_navigation', 'woocommerce_breadcrumb', 20 );
	}