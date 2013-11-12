<?php get_header(); ?>

	<!-- MAIN CONTENT -->
	<div class="container">
	
		<div class="row">
		
			<div class="col-sm-12 col-md-12 article-container-fix">
				
				<div class="articles">
				
					<article class="clearfix">
						
						<header>
							
							<h1><?php _e('Page not found!', 'mike-framework'); ?></a></h1>
						
						</header>

						<hr>

						<?php _e("Oops, it seems you're looking for something that's not here. Please try again.", 'mike-framework'); ?>

						<div class="search-form-404">
							<?php get_search_form(); ?>
						</div>

					</article>
					
				</div> <!-- end articles -->
				
			</div> <!-- end span9 -->
			
		</div> <!-- end row -->
		
	</div> <!-- end container --> 

<?php get_footer(); ?>