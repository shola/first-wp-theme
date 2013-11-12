<?php 
/*
	Template Name: Contact Page
*/
?>

<?php 
	// Function for email address validation
	function isEmail($verify_email) {
	
		return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$verify_email));
	
	}

	$error_name = false;
	$error_email = false;
	$error_message = false;

	if (isset($_POST['contact-submit'])) {
		echo "form submit";
	}

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

						<form action="<?php the_permalink(); ?>" method="post" id="contact-form">
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

							<!-- used to verify that form was submitted -->
							<input type="hidden" name="contact-submit" id="contact-submit" value="true">

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