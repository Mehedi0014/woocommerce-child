<?php
	/**
	 * Enqueue scripts and styles.
	 */
	function mone_scripts_child() {
		$parenthandle = 'desing_world-style';
		$theme = wp_get_theme();

		wp_enqueue_style( 'fontAwesome-min-css', get_template_directory_uri() . '/assets/fontAwesome/css/font-awesome.min.css',false,'4.7.1','all');
		wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400;600;700;800&display=swap', array() );
		wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '4.3.1', 'all');
		wp_enqueue_style( 'owl-carousel-min-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', false, '4.3.1', 'all');
		wp_enqueue_style( 'animate-min-css', get_template_directory_uri() . '/assets/css/animate.min.css', false, '4.3.1', 'all');

		wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', array(), _S_VERSION );
		wp_enqueue_style( 'desing_world-style-child', get_stylesheet_uri(), array( $parenthandle ), $theme->get('Version') );
		wp_style_add_data( 'desing_world-style', 'rtl', 'replace' );

		wp_enqueue_script( 'jquery-min-js', get_template_directory_uri() . '/assets/js/jquery.min.js', false, 1.1, true);
		wp_enqueue_script( 'jquery-cookie-min-js', get_template_directory_uri() . '/assets/js/jquery.cookie.min.js',  array ( 'jquery-min-js' ), 1.4, true);
		wp_enqueue_script( 'popper-min-js', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery-min-js' ), 1.14, true);
		wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery-min-js' ), 3.3, true);
		wp_enqueue_script( 'owl-carousel-min-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery-min-js' ), 3.3, true);
		wp_enqueue_style( 'custom-google-fonts', 'https://maps.google.com/maps/api/js?key=AIzaSyAqBzIK21scZM9Td-uICzwQCwQkl_n1TcY', array() );
		wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery-min-js' ), 1.0, true);
		wp_enqueue_script( 'child-main-js', get_stylesheet_directory_uri() . '/assets/js/child-main.js', array ( 'jquery-min-js' ), 1.0, true);

	}
	add_action( 'wp_enqueue_scripts', 'mone_scripts_child' );