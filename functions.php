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
		// $comment: comment to be displayed
		// $args: list of arguments
		// $depth: level of nesting of particular comment
		// // get_comment_type needs to access a global variable, comment. we need to assign that
		// // variable the value of $comment that is read in as a parameter to this function. this
		// // was not necessary for me, but could be an important bug fix later.
		// $GLOBALS['comment'] = $comment;
		
		if (get_comment_type() == 'pingback' || get_comment_type() == 'trackback') : ?>

			pingbacks

		<?php elseif (get_comment_type() == "comment") : ?>

			<li id='comment-<?php comment_ID(); ?>'>
				<article <?php comment_class('clearfix'); ?>>
					<header>
						<h5><?php comment_author_link(); ?></h5>
						<p>
							<span>on <?php comment_date(); ?> at <?php comment_time(); ?> - </span>
							<!-- adds a reply link from a comment to the post it comments on -->
							<?php comment_reply_link(array_merge(
																										$args, array('depth' => $depth, 
																																 'max_depth' => $args['max_depth']))); ?>
						</p> 
					</header>

					<figure class="comment-avatar">
						<?php 
							// if this is true, the comment is a child and gets a smaller avatar
							($comment->comment_parent != 0) ? $avatar_size = 64 : $avatar_size = 80;

							echo get_avatar($comment, $avatar_size);

						?>
					</figure>

					<?php if($comment->comment_approved == '0') : ?>
						<!-- 0 means it is not approved -->
						<p class="awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'mike-framework'); ?></p>
					<?php endif; ?>

					<?php comment_text(); ?>

				</article>							
			<!-- </li> this li tag must be removed because WP will automatically add it-->

		<?php endif;
	}

?>