<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cavalierdaily
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link href="https://fonts.googleapis.com/css?family=Abhaya+Libre" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cavalierdaily' ); ?></a>
		
	<header id="masthead" class="site-header" role="banner">
		<div class="hamburger-menu">
			<div class="lines"><img  height='30px' width='30px' src="<?php bloginfo('template_directory'); ?>/images/lines.png" /></div>
			<div class="mag-glass"><img  height='26px' width='26px' src="<?php bloginfo('template_directory'); ?>/images/mag-glass.png" /></div>
		</div>
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img  height='120px' width='120px' src="<?php bloginfo('template_directory'); ?>/images/logo.png" />
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1></a>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img  height='120px' width='120px' src="<?php bloginfo('template_directory'); ?>/images/logo.png" />
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1></a>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><strong><?php echo $description; /* WPCS: xss ok. */ ?></strong></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
		<?php
			if ( is_front_page() && is_home() ) : ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cavalierdaily' ); ?></button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav><!-- #site-navigation -->
		<?php 
			endif; ?>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
