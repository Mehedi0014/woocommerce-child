<?php
	/**
	 ===> Rename "My Account" If Logged Out @ Nav Menu ===============================
	*/
	add_filter( 'wp_nav_menu_items', 'bbloomer_dynamic_menu_item_label', 9999, 2 ); 
	function bbloomer_dynamic_menu_item_label( $items, $args ) { 
	   if ( ! is_user_logged_in() ) { 
	      $items = str_replace( "My account", "Login", $items ); 
	   } 
	   return $items; 
	}