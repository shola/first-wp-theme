<?php 
	
	define('THEMEROOT', get_stylesheet_directory_uri());
	define('IMAGES', THEMEROOT . '/images');

	function register_my_menus() {
		register_nav_menus(array(
			'top-menu' => __('Top Menu', 'mike-framework'),
			'main-menu' => __('Main Menu', 'mike-framework')
		));
	}
	add_action('init', 'register_my_menus');

	if (function_exists('register_sidebar')) {
		register_sidebar(
			array(
				'name' => __('Main Sidebar', 'mike-framework'),
				'id' => 'main-sidebar',
				'description' => __('The main sidebar area', 'mike-framework'),
				'before_widget' => '<div class="sidebar-widget">',
				'after_widget' => '</div> <!-- end sidebar-widget -->',
				'before_title' => '<h4>',
				'after_title' => '</h4>' 
		));

		register_sidebar(
			array(
				'name' => __('Left Footer', 'mike-framework'),
				'id' => 'left-footer',
				'description' => __('The left footer area', 'mike-framework'),
				'before_widget' => '<div class="footer-sidebar-widget col-sm-3 col-md 3">',
				'after_widget' => '</div> <!-- end sidebar-widget -->',
				'before_title' => '<h4>',
				'after_title' => '</h4>'
		));

		register_sidebar(
			array(
				'name' => __('Right Footer', 'mike-framework'),
				'id' => 'right-footer',
				'description' => __('right footer area', 'mike-framework'),
				'before_widget' => '<div class="footer-sidebar-widget col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6">',
				'after_widget' => '</div> <!-- end sidebar-widget -->',
				'before_title' => '<h4>',
				'after_title' => '</h4>'
		));
	}

	if(function_exists('add_theme_support')) {
		add_theme_support('post-formats', array('link', 'quote', 'gallery'));

		add_theme_support('post-thumbnails', array('post'));
	}

	// Function to control display of comments 
	function adaptive_comments(){
		
	}

?>