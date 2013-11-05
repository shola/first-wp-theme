<!-- if dynamic_sidebar doesn't exist, or you cannot display the main side bar -->

<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('main-sidebar')) : ?>
		no widgets here
<?php endif; ?>