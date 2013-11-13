<!-- if dynamic_sidebar doesn't exist, or you cannot DISPLAY the main side bar, then output a default widget -->

<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('main-sidebar')) : ?>
	

	<div class="sidebar-widget">
		<h4><?php _e('Search', 'mike-blog'); ?></h4>
		<?php get_search_form(); ?>
	</div>

<?php endif; ?>