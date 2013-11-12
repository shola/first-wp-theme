<?php 
/*
	Template Name: Archives Page
*/
?>

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
						
						<h4><?php _e('Archives by Month', 'mike-framework'); ?></h4>
						<ul>
						    <?php wp_get_archives('type=monthly'); ?>
						</ul>

						<hr />

						<h4><?php _e('Archives by Subject', 'mike-framework'); ?></h4>
						<ul>
							<?php wp_list_categories(); ?>
						</ul>
						
					</article>
				<?php endwhile; endif; ?>

				</div> <!-- end articles -->
				
			</div> <!-- end span9 -->
			
			<aside class="col-sm-3 col-md-3 main-sidebar">
				
				<?php get_sidebar(); ?>

			</aside>
			
		</div> <!-- end row -->
		
	</div> <!-- end container --> 

<?php get_footer(); ?>