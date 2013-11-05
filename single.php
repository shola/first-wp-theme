<?php get_header(); ?>

	<!-- MAIN CONTENT -->
	<div class="container">
	
		<div class="row">
		
			<div class="span9 article-container-fix">
				
				<div class="articles">
				
					<article class="clearfix">
						
						<header>
							
							<a href="" class="article-meta-comments">10</a>
							<p class="article-meta-categories"><a href="">Category</a></p>
							<h1><a href="post.html">This is the article title</a></h1>
							<p class="article-meta-extra">September 20th, 2012, by <a href="">Adi Purdila</a></p>
							
						</header>
						
						<figure class="article-full-image">
							<a href=""><img src="http://lorempixel.com/782/210" alt="Preview image" /></a>
						</figure>
						
						<?php the_content(); ?>
						
						<p class="tag-container">Tags: <a href="">tag 1</a>, <a href="">tag 2</a></p>
							
						<div>
							
							<p class="post-navigation">Page 1 <a href="">Page 2</a></p>
							
						</div> <!-- end post-navigation -->
						
					</article>

					<div class="article-author">
						
						<h5>Article by <a href="">Adi Purdila</a></h5>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
						
					</div> <!-- end article-author -->
					
				</div> <!-- end articles -->
				
				<div class="comments-area" id="comments">
					
					<a href="#respond" class="article-add-comments">+</a>
					<h3>4 comments to this article</h3>
					
					<ol class="commentslist">
						<li>
							<article class="clearfix">
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

						<li>
							<article class="clearfix by-admin">
								<header>
									<h5><span>ADMIN</span><a href="">Adi Purdila</a></h5>
									<p><span>on Sep 12th, 2012 at 3:05 PM - </span><a href="">Reply</a></p>
								</header>
								
								<figure class="comment-avatar">
									<a href=""><img src="http://lorempixel.com/80/80" alt="Avatar" /></a>
								</figure>
								
								<p class="awaiting-moderation">Your comment is awaiting moderation.</p>
								
								<p>This is the actual comment. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
							</article>
							
							<ol>
								<li>
									<article class="clearfix">
										<header>
											<h5>Adi Purdila</h5>
											<p><span>on Sep 12th, 2012 at 3:05 PM - </span><a href="">Reply</a></p>
										</header>
										
										<figure class="comment-avatar">
											<a href=""><img src="http://lorempixel.com/64/64" alt="Avatar" /></a>
										</figure>
										
										<p>This is the actual comment. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
									</article>							
								</li>
							</ol>							
						</li>
					</ol>
					
					<div class="comments-nav-section clearfix">
						
						<p class="fl"><a href="">&larr; Older Comments</a></p>
						<p class="fr"><a href="">Newer Comments &rarr;</a></p>
						
					</div> <!-- end comments-nav-section -->
					
					<div id="respond">
						
						<h3>Leave a reply</h3>
						<form action="" method="post" id="comment-form">
							<p>
								<input type="text" value="" name="author" id="author" />
								<label for="author">Name *</label>
							</p>
							<p>
								<input type="text" value="" name="email" id="email" />
								<label for="email">Email *</label>
							</p>
							<p>
								<input type="text" value="" name="url" id="url" />
								<label for="url">Website</label>
							</p>
							<p>
								<textarea name="comment" id="comment" cols="30" rows="10"></textarea>
							</p>
							
							<p><input type="submit" value="Submit Comment" /></p>
						</form>
						
					</div> <!-- end respond -->
					
				</div> <!-- end comments-area -->
				
			</div> <!-- end span9 -->
			
			<aside class="span3 main-sidebar">
				
				<div class="sidebar-widget">
					
					 <h4>Search</h4>
					 
					 <form action="" id="search-form" method="get">
						 
						 <input type="text" value="search" onblur="if(this.value=='')this.value='search'" onfocus="if(this.value=='search')this.value=''" />
						 <input type="hidden" value="submit" />
						 
					 </form>
					
				</div> <!-- end sidebar-widget -->
				
				<div class="sidebar-widget">
					
					<h4>Connect With Us</h4>
					<p>Click the icons below to get in touch or follow us on our social networks.</p>
					
					<ul class="social-icons clearfix">
						<li><a href="" class="digg"></a></li>
						<li><a href="" class="facebook"></a></li>
						<li><a href="" class="twitter"></a></li>
						<li><a href="" class="digg"></a></li>
						<li><a href="" class="facebook"></a></li>
						<li><a href="" class="twitter"></a></li>
						<li><a href="" class="digg"></a></li>
						<li><a href="" class="facebook"></a></li>
						<li><a href="" class="twitter"></a></li>
					</ul>
					
				</div> <!-- end sidebar-widget -->
				
				<div class="sidebar-widget">
					
					<h4>Ad 125x125</h4>
					
					<ul class="ad-125 clearfix">
						<li>
							<figure class="ad-block">
								<a href=""><img src="http://lorempixel.com/125/125" alt="Ad 125" /></a>
							</figure>
						</li>

						<li class="alt">
							<figure class="ad-block">
								<a href=""><img src="http://lorempixel.com/125/125" alt="Ad 125" /></a>
							</figure>
						</li>

						<li>
							<figure class="ad-block">
								<a href=""><img src="http://lorempixel.com/125/125" alt="Ad 125" /></a>
							</figure>
						</li>

						<li class="alt">
							<figure class="ad-block">
								<a href=""><img src="http://lorempixel.com/125/125" alt="Ad 125" /></a>
							</figure>
						</li>
					</ul>
					
				</div> <!-- end sidebar-widget -->

				<div class="sidebar-widget">
					
					<h4>Ad 260x120</h4>
					
					<ul class="ad-260">
						<li>
							<figure class="ad-block">
								<a href=""><img src="http://lorempixel.com/260/120" alt="Ad 260" /></a>
							</figure>
						</li>
					</ul>
					
				</div> <!-- end sidebar-widget -->
				
				<div class="sidebar-widget">
					
					<h4>Simple list</h4>
					
					<ul>
						<li><a href="">Main link 1</a></li>
						<li>
							<a href="">Dropdown</a>
							<ul>
								<li><a href="">Level 2 item 1</a></li>
								<li>
									<a href="">Level 2 item 2</a>
									<ul>
										<li><a href="">Level 3 item 1</a></li>
										<li><a href="">Level 3 item 2</a></li>
									</ul>
								</li>
								<li><a href="">Level 2 item 3</a></li>
							</ul>
						</li>
						<li><a href="">Main link 3</a></li>
					</ul>
					
				</div> <!-- end sidebar-widget -->

			</aside>
			
		</div> <!-- end row -->
		
	</div> <!-- end container --> 
<?php get_footer(); ?>