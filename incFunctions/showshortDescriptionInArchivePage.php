<?php
    /**
	===> Show short description in archive/shop page and close link (title, short description, price theke anchore tag er link remove kore diachi).
	*/
	function mehedi_shop_page_short_desc_with_close_link(){
			add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 9);
			add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_single_excerpt');
			add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_open', 4);
	}
	add_action('init', 'mehedi_shop_page_short_desc_with_close_link');