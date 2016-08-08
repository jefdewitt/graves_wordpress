<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>


		<div id="main-content" class="main-content">

			<?php if ( is_page( 'Our Work' ) ) { ?>

			<section id="work" class="graves-work">

				<div class="work--wrap">

					  <?php

					  $custom_fields = get_post_custom(390);
					  $fields = get_fields();
					  //$url = bloginfo('template_directory');

						if( $fields ) {

							for ( $i = 1; $i <= 23; $i++ ) {

								$link = 'link_' . $i;
								$image = 'image_' . $i;
								$overlay = 'overlay_' . $i;

							?>
								<a href="<?php bloginfo('template_directory');?><?php echo get_field($link);?> ">
									<div class="image__placeholder">
										<img src="<?php echo get_field($image); ?>">
										<p class="image__placeholder--overlay"><?php echo get_field($overlay);?></p>
								 	</div>
								</a>

							<?php
							}
						}

						?>

				</div>

			</section>

			<?php } ?>

	<?php get_sidebar( 'content-bottom' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
