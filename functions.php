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
				'before_widget' => '<div class="sidebar-widget">',
				'after_widget' => '</div> <!-- end sidebar-widget -->',
				'before_title' => '<h4>',
				'after_title' => '</h4>'
		));
	}

?>