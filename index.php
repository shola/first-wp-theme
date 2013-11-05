<?php get_header(); ?>

<!-- MAIN CONTENT -->
	<div class="container">
	
		<div class="row">
		
			<div class="span9col-sm-9 col-md-9 article-container-fix">
				
				<div class="articles">

					<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
						<article class="clearfix">

							<header>
								
								<?php 
									if (comments_open() && !post_password_required()) {
										comments_popup_link('0', '1', '%', 'article-meta-comments');
									}
								?>
								<p class="article-meta-categories"><?php the_category('&nbsp;/&nbsp;'); ?></p>
								<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<p class="article-meta-extra"><?php the_time(get_option('date_format')); ?>, by <?php the_author_posts_link(); ?></p>
								
							</header>
							
							<?php if(has_post_thumbnail()) : ?>
								<figure class="article-preview-image">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								</figure>
							
							<?php endif; ?>	
							
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
							<p><a href="">Read more...</a></p>
							
						</article>
						
						<hr class="fancy-hr" />
					<?php endwhile; else : ?>
						<h1><?php _e('No posts were found', 'mike-framework') ?></h1>
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
						
						<p class="articles-nav-prev"><a href="">&laquo; Older Posts</a></p>
						<p class="articles-nav-next"><a href="">Newer Posts &raquo;</a></p>
						
					</div> <!-- end articles-nav -->
					
				</div> <!-- end articles -->
				
			</div> <!-- end col-sm-9 col-md-9 -->
			
			<aside class="col-sm-3 col-md-3 main-sidebar">
				
				<?php get_sidebar(); ?>

			</aside>
			
		</div> <!-- end row -->
		
	</div> <!-- end container -->

<?php get_footer(); ?>