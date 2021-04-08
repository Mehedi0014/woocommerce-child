<?php
	/**
	 * Enqueue scripts and styles.
	 */
	function desing_world_child_script() {
		$parenthandle = 'desing_world-style';
		$theme = wp_get_theme();

		wp_enqueue_style( 'fontAwesome_min_css', get_stylesheet_directory_uri() . '/assets/fontAwesome/css/font-awesome.min.css',false,'4.7.1','all');
		wp_enqueue_style( 'custom_google_fonts', 'https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400;600;700;800&display=swap', array() );
		wp_enqueue_style( 'bootstrap_min_css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', false, '4.3.1', 'all');
		wp_enqueue_style( 'owl_carousel_min_css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', false, '4.3.1', 'all');
		wp_enqueue_style( 'animate_min_css', get_stylesheet_directory_uri() . '/assets/css/animate.min.css', false, '4.3.1', 'all');

		wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', array(), _S_VERSION );
		wp_enqueue_style( 'desing_world-style-child', get_stylesheet_uri(), array( $parenthandle ), $theme->get('Version') );
		wp_style_add_data( 'desing_world-style', 'rtl', 'replace' );



		wp_enqueue_script( 'jquery_min_js', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', false, 1.2, true);
		wp_enqueue_script( 'jquery_cookie_min_js', get_stylesheet_directory_uri() . '/assets/js/jquery.cookie.min.js',  array ( 'jquery_min_js' ), 1.4, true);
		wp_enqueue_script( 'popper_min_js', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery_min_js' ), 1.14, true);
		wp_enqueue_script( 'bootstrap_min_js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery_min_js' ), 3.3, true);
		wp_enqueue_script( 'lightbox_plus_jquery_min_js', get_stylesheet_directory_uri() . '/assets/js/lightbox-plus-jquery.min.js', array ( 'jquery_min_js' ), 2.3, true);
		wp_enqueue_script( 'owl_carousel_min_js', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery_min_js' ), 3.3, true);
		wp_enqueue_style( 'custom_google_fonts_maps', 'https://maps.google.com/maps/api/js?key=AIzaSyAqBzIK21scZM9Td-uICzwQCwQkl_n1TcY', array() );
		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery_min_js' ), 1.0, true); // parent theme theke load korano hoyeche.
		wp_enqueue_script( 'child_main_js', get_stylesheet_directory_uri() . '/assets/js/child-main.js', array ( 'jquery_min_js' ), 1.0, true);

	}
	add_action( 'wp_enqueue_scripts', 'desing_world_child_script' );