<?php 
// Prevent the direct loading of this file, only for WP to use
if(!empty($_SERVER['SCRIPT-FILENAME']) && basename($_SERVER['SCRIPT-FILENAME']) == 'comments.php') {
	die(__('You cannot access this file directly', 'mike-framework'));
}

// Check if post is password protected
if (post_password_required()) : ?>
	<p>
		<?php _e('This post is password protected. Enter the possword to view the comments.', 'mike-framework'); ?>
		<?php return; ?>
	</p>

<?php endif; ?>