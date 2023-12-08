<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tomarosalon
 */
$footer = get_field('footer','option');
?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="foo_col newsletter_form_co">
						<?php if(!empty($footer['footer_logo'])):?>
							<img src="<?php echo $footer['footer_logo']['url'];?>">
						<?php endif;?>
						<h2>Become a tomaro salon</h2>
						<form >
							<input type="email" name="email_address" placeholder="Your Email Address">
							<input type="submit" value="submit">
						</form>
					</div>
				</div>
				<div class="col-md-6">

					<div class="foo_col_row">
						<?php if(!empty($footer['footer_details'])){
							foreach ($footer['footer_details'] as $footer_details) {
								?>
								<div class="foo_col">
									<?php echo $footer_details['details'];?>
								</div>
							<?php	
							}
						}
						?>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-md-6"></div>
				<div class="col-md-6">
					<div class="foot_social_sec">
						<h2><a href="#">Download App</a></h2>
						<hr/>
						<ul>
							<li>Follow Us:</li>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
						<span>
							<a class="book_btn" href="#">Book Online Now</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>