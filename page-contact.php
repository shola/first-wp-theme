<?php 
/*
	Template Name: Contact Page
*/
?>

<!-- custom page template that takes precedence over single.php and index.php -->

<?php get_header(); ?>

	<!-- MAIN CONTENT -->
	<div class="container">
	
		<div class="row">
		
			<div class="col-sm-9 col-md-9 article-container-fix">
				
				<div class="articles">
				
					<?php if(have_posts()) : while(have_posts()) : the_post();  ?>
					<article class="clearfix">
						
						<header>
							
							<h1><?php the_title(); ?></a></h1>
							<?php if(current_user_can('edit_post', $post->ID)) {
																// BEFORE                         AFTER
								edit_post_link(__('Edit This', 'mike-framework'), '<p class="article-meta-extra">',	'</p>'); 
							}?>
						
						</header>

						<hr class="image-replacement"/>
						
						<?php the_content(); ?>
						
						<hr/>

						<form action="" method="post" id="contact-form">
							<p>
								<input type="text" value="" name="contact-author" id="contact-author" />
								<label for="contact-author">Name *</label>
							</p>
							<p>
								<input type="text" value="" name="contact-email" id="contact-email" />
								<label for="contact-email">Email *</label>
							</p>
							<p>
								<input type="text" value="" name="contact-url" id="contact-url" />
								<label for="contact-url">Website</label>
							</p>
							<p>
								<textarea name="contact-message" id="contact-message" cols="30" rows="10"></textarea>
							</p>
							
							<p><input type="submit" value="Send Message" /></p>
						</form>

					</article>

				<?php endwhile; else : ?>

					<article>
						<h1><?php _e('No posts were found', 'mike-framework'); ?></h1>
					</article>

				<?php endif; ?>
					
				</div> <!-- end articles -->
				
				<div class="comments-area" id="comments">
					
					<?php comments_template('', true); ?>
					
				</div> <!-- end comments-area -->
				
			</div> <!-- end span9 -->
			
			<aside class="col-sm-3 col-md-3 main-sidebar">
				
				<?php get_sidebar(); ?>

			</aside>
			
		</div> <!-- end row -->
		
	</div> <!-- end container --> 

<?php get_footer(); ?>