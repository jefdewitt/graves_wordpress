<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css" media="screen" />

	<!--
		*
		*
		*
		*
		*
		TEST TEST TEST TEST TEST TEST
		*
		*
		*
		*
		*
		*
	-->

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAcnTIumI8pgIB8ckFqGXv4OBXP1Kj36g&callback=initialize"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body <?php body_class(); ?>>

		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<?php if ( is_front_page() ) { ?>

			<header id="home" class="header" role="banner">
				<div class="site-header-main">

					<div class="header--wrap">
	  		            <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/graves-logo.png">
	  		            <div class="tagline">
							<img src="<?php bloginfo('template_directory'); ?>/images/graves-logo.png">
							<p>There Is No Substitute For Authenticity</p>
							<h1 style="opacity: 0;">Graves Architects</h1>
							<p style="opacity: 0;">Graves Architects</p>
						</div>
	  		        </div>

		<?php } else { ?>

			<header class="site-header">

		<?php } ?>

			<a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/graves-logo.png"></a>


			<?php if ( is_front_page() ) { ?>

				<span id="down-arrow" class="down-arrow"></span>

			<?php } ?>

			</header><!-- .site-header -->

			<div id="site-header-menu" class="site-header-menu">

				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_class'     => 'nav',
								'data-state'	 => 'hide',
							 ) );
						?>
					</nav><!-- .main-navigation -->
				<?php endif; ?>

			</div><!-- .site-header-menu -->

			<a id="mobile-btn" href="">
				<div></div>
				<div></div>
				<div></div>
			</a>

  		<div class="graves-wrapper">
