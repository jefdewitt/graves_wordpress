<?php
/**
 * The template for the work page
 *
 * Template Name: Work Page
 *
 * @package WordPress
 * @subpackage Graves
 * @since Twenty Sixteen 1.0
 */

 get_header(); ?>

<?php if ( is_page( 'Our Work' ) ) { ?>

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
    </section>


    <?php } ?>

<?php get_footer(); ?>
