		<div class="footer-widget-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-md 3">
						<p>footer widget 1</p>
					</div>
					<div class="col-sm-3 col-md 3">
						<p>footer widget 2</p>
					</div>
					<div class="col-sm-6 col-md 6">
						<p>footer widget 3</p>
					</div>
				</div>
			</div>
		</div>

		<footer id="footer">
	     <p class="top-link-footer"><a href="#top"><?php _e('Go To Top', 'mike-framework'); ?></a></p>
       <p class="text-center muted">&copy Copyright <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></p>
      <!-- </div>  --> 
    </footer>

    <!-- Bootstrap core JavaScript (need to WP_ENQUEUE)
    ================================================== -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
 
 	<?php wp_footer(); ?>
</body></html>