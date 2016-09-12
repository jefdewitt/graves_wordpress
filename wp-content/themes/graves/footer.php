<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	<h3 class="photog-credit"><?php echo get_field('photographer'); ?><h3>

		<footer id="contact" class="footer">

			<div>

	            <div class="footer--contact">
	                <a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/graves-logo.png"></a>
	                <div class="contact">
	                    <p>270 South Limestone</p>
	                    <p>Lexington, KY 40508</p>
	                    <p><a href="tel:1-859-554-7563">859-554-7563</a></p>
	                </div>
	            </div>
	            <div class="footer--social">
	                <ul class="social">
	                    <li><p>Social</p></li>
	                    <li><a href="https://www.facebook.com/gravesarchitects?ref=hl"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-white.png"></a></li>
	                    <li><a href="https://www.instagram.com/gravesarchitects/"><img src="<?php bloginfo('template_directory'); ?>/images/instagram-white.png"></a></li>
	                </ul>
	            </div>

			</div>

			<div class="signature">
            	<p>JD</p>
  	  			<p>Site by <a href="https://jefdewitt.com">Jef DeWitt</a></p>
  			</div>

		</footer><!-- .site-footer -->

		</div><?php // .main-content ?>

		</div><?php // .graves-wrapper ?>

		<?php wp_footer(); ?>

		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>

		<script>

		$(document).ready(function() {

			$('.nav').attr('data-state', 'hide');

			$("#mobile-btn").click(function() {
				$('.nav').attr('data-state', $('.nav').attr('data-state') == 'hide' ? 'show' : 'hide');
				return false;
			});

			$(".nav li a").click(function() {
				$('.nav').attr('data-state', $('.nav').attr('data-state') == 'hide' ? 'show' : 'hide');
			})


			//var button = $('#down-arrow');

			$('#down-arrow').click(function() {
				console.log('1');
				$('html, body').animate({
					scrollTop: $("#main-content").offset().top
				}, 2000);
				// Animation complete.
			});

			var navItem = $('a#work')

			$(navItem).click(function() {
				$('section#work').animate({
					scrollTop: $(this).offset().top
				}, 1000);
				// Animation complete.
			});


		});


		 </script>

	 </body>
</html>
