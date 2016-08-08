<?php
/**
 * The template for the front page
 *
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage Graves
 * @since Twenty Sixteen 1.0
 */

 get_header(); ?>

 <!-- <div id="primary" class="content-area">
 	<main id="main" class="site-main" role="main"> -->
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
        <section id="work" class="graves-work">

            <div class="work--wrap">
                <h2 class="section--title">Work</h2>
                <div>
                    <div class="image__container">
                        <a href="<?php bloginfo('template_directory'); ?><?php echo get_field('link_1') ?>">
                            <div class="image__placeholder">
                                <img src="<?php echo get_field('image_1'); ?>" alt="">
                                <p class="image__placeholder--overlay"><?php echo get_field('overlay_1'); ?></p>
                            </div>
                        </a>
                        <a href="<?php bloginfo('template_directory'); ?><?php echo get_field('link_2') ?>">
                            <div class="image__placeholder">
                                <img src="<?php echo get_field('image_2'); ?>" alt="">
                                <p class="image__placeholder--overlay"><?php echo get_field('overlay_2'); ?></p>
                            </div>
                        </a>
                        <a href="<?php bloginfo('template_directory'); ?><?php echo get_field('link_3') ?>">
                            <div class="image__placeholder">
                                <img src="<?php echo get_field('image_3'); ?>" alt="">
                                <p class="image__placeholder--overlay"><?php echo get_field('overlay_3'); ?></p>
                            </div>
                        </a>
                        <a href="<?php bloginfo('template_directory'); ?><?php echo get_field('link_4') ?>">
                            <div class="image__placeholder">
                                <img src="<?php echo get_field('image_4'); ?>" alt="">
                                <p class="image__placeholder--overlay"><?php echo get_field('overlay_4'); ?></p>
                            </div>
                        </a>
                        <a href="<?php bloginfo('template_directory'); ?><?php echo get_field('link_5') ?>">
                            <div class="image__placeholder">
                                <img src="<?php echo get_field('image_5'); ?>" alt="">
                                <p class="image__placeholder--overlay"><?php echo get_field('overlay_5'); ?></p>
                            </div>
                        </a>
                        <a href="<?php bloginfo('template_directory'); ?><?php echo get_field('link_6') ?>">
                            <div class="image__placeholder">
                                <img src="<?php echo get_field('image_6'); ?>" alt="">
                                <p class="image__placeholder--overlay"><?php echo get_field('overlay_6'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="additional-work">
                <div class="additional-work--copy">
                    <img src="<?php bloginfo('template_directory'); ?>/images/portfolio-white.png">
                    <p>WANT TO SEE MORE AMAZING WORK?</p>
                </div>
                <div class="additional-work--link">
                    <a href="<?php bloginfo('template_directory'); ?>/our-work">SEE ALL WORK</a>
                </div>
            </div>

        </section>
        <section id="about" class="about" style="background: url('<?php echo get_field("about_image"); ?>'); background-repeat: no-repeat; background-size: cover; background-position: left">
            <div class="about--content">
                <!-- <img src="<?php echo get_field('about_text');?>"> -->
                <div>
                    <p><?php echo get_field('about_text');?></p>
                </div>
            </div>
        </section>
        <section id="location" class="location">
            <div class="half-and-half--wrap">
                <div class="half-and-half first">
                    <div class="half-and-half--content">
                        <img src="<?php bloginfo('template_directory'); ?>/images/business-white.png">
                        <p><?php echo get_field('contact_left'); ?></p>
                    </div>
                </div>
                <div class="half-and-half second">
                    <div class="half-and-half--content">
                        <img src="<?php bloginfo('template_directory'); ?>/images/team-white.png">
                        <p><?php echo get_field('contact_right'); ?></p>
                    </div>
                </div>
            </div>

            <div class="map-wrap">
                <div id="map">
                     <div id="map-canvas">
                         <script>

                            var myLatLng = {lat: 38.043, lng: -84.500};

                            map = new google.maps.Map(document.getElementById('map'), {
                                center: myLatLng,
                                zoom: 15,
                                zoomControl: false,
                                scaleControl: false,
                                scrollwheel: false,
                                disableDoubleClickZoom: true
                            });

                            var marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                                title: 'Graves Architects & Planners\n270 South Limeston\nLexington, KY 40508\n859-554-7563'
                            });

                            var center;
                            function calculateCenter() {
                                center = map.getCenter();
                            }
                            google.maps.event.addDomListener(map, 'idle', function() {
                                calculateCenter();
                            });
                            google.maps.event.addDomListener(window, 'resize', function() {
                                map.setCenter(center);
                            });
                            google.maps.event.trigger(map, 'resize');

                        </script>

                    </div><?php // #map-canvas ?>
                 </div><?php // #map ?>
            </div><?php // .map-wrap ?>

            </section>

 	<?php //get_sidebar( 'content-bottom' ); ?>

 <?php //get_sidebar(); ?>

<?php get_footer(); ?>
