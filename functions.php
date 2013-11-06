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

	// Function to control display of individual comments 
	function adaptive_comments($comment, $args, $depth){
		// // get_comment_type needs to access a global variable, comment. we need to assign that
		// // variable the value of $comment that is read in as a parameter to this function. this
		// // was not necessary for me, but could be an important bug fix later.
		// $GLOBALS['comment'] = $comment;
		
		if (get_comment_type() == 'pingback' || get_comment_type() == 'trackback') : ?>

			pingbacks

		<?php elseif (get_comment_type() == "comment") : ?>

			<li id='comment-<?php comment_ID(); ?>'>
				<article <?php comment_class(); ?>>
					<header>
						<h5><a href="">Adi Purdila</a></h5>
						<p><span>on Sep 12th, 2012 at 3:05 PM - </span><a href="">Reply</a></p>
					</header>

					<figure class="comment-avatar">
						<a href=""><img src="http://lorempixel.com/80/80" alt="Avatar" /></a>
					</figure>

					<p class="awaiting-moderation">Your comment is awaiting moderation.</p>

					<p>This is the actual comment. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
				</article>							
			</li>

		<?php endif;
	}

?>