<?php get_header(); ?>

<!-- MAIN CONTENT -->
	<div class="container">
	
		<div class="row">
		
			<div class="span9col-sm-9 col-md-9 article-container-fix">
				
				<div class="articles">

					<?php if (have_posts()) : ?>

						<div class="additionl-content">

							<h5> 
								<?php _e('Search Results for: ', 'mike-framework'); ?>
								<?php get_search_query(); ?>
							</h5>

						</div>

					<?php while(have_posts()) : the_post(); ?>

						<?php get_template_part('content', get_post_format()); ?>

					<?php endwhile; else : ?>

						<article>
							<h1><?php _e('No were found matching your criteria. Please try something else.', 'mike-framework') ?></h1>
						</article>

					<?php endif; ?>
					
					<hr class="fancy-hr" />
				
					

					<article>
						
						<header>
							
							<span class="post-format-quote"></span>
							<p class="article-meta-categories"><a href="">Category</a></p>
							<p class="article-meta-extra">September 20th, 2012, by <a href="">Adi Purdila</a></p>
							
						</header>
						
						<div class="quote-container">
							
							<blockquote>This is a very simple quote!</blockquote>
							<cite>- Adi Purdila</cite>
							
						</div> <!-- end quote-container -->
						
					</article>

					<hr class="fancy-hr" />

					<article>
						
						<header>
							
							<span class="post-format-url"></span>
							<p class="article-meta-categories"><a href="">Category</a></p>
							<p class="article-meta-extra">September 20th, 2012, by <a href="">Adi Purdila</a></p>
							
						</header>
						
						<div class="url-container">
							
							<p>This will be the link description!</p>
							<span><a href="http://webdesign.tutsplus.com">http://webdesign.tutsplus.com</a></span>
							
						</div> <!-- end quote-container -->
						
					</article>
					
					<hr class="fancy-hr" />
					
					<div class="articles-nav clearfix">
						
						<!-- in this case, previous posts are on the lowest numbered pages, which are the newest ones. -->
						<p class="articles-nav-prev"><?php next_posts_link(__('&larr; Older Posts', 'mike-framework')); ?></p>
						<p class="articles-nav-next"><?php previous_posts_link(__('Newer Posts &rarr;', 'mike-framework')); ?></p>
						
					</div> <!-- end articles-nav -->
					
				</div> <!-- end articles -->
				
			</div> <!-- end col-sm-9 col-md-9 -->
			
			<aside class="col-sm-3 col-md-3 main-sidebar">
				
				<?php get_sidebar(); ?>

			</aside>
			
		</div> <!-- end row -->
		
	</div> <!-- end container -->

<?php get_footer(); ?>