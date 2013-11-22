	<!-- FOOTER -->
	<footer>
		
		<div class="footer-widget-area">
		
			<div class="container">
			
				<div class="row">
				
					<?php get_sidebar('left-footer'); ?>

					<?php get_sidebar('center-footer'); ?>
					
					<?php get_sidebar('right-footer'); ?>
					
				</div> <!-- end row -->
				
			</div> <!-- end container -->
			
		</div> <!-- end footer-widget-area --> 
		
		<div class="copyright-container clearfix">
			
			<div class="container">
			
				<p class="top-link-footer"><a href="#top"><?php _e('Go To Top', 'mike-blog'); ?></a></p>
      	<p class="text-center muted">&copy Copyright <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></p>
			
			</div> <!-- end container -->
			
		</div> <!-- end copyright-container -->
		
	</footer>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

	<?php wp_footer(); ?>

</body>
</html>