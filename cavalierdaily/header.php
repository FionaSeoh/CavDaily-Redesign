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
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script>
	 $( document ).ready(function() {
	 
	     $( ".lines" ).click(function( event) {
	 
	         $(".hidden").toggleClass("hide");
	         event.preventDefault();
	 
	    });
	 
	});
</script>

<div class="hidden hide">
	<div class="nav-contain-logo"><img height="140px" width="140px" src="<?php bloginfo('template_directory'); ?>/images/invert.png">
	</div>
	<div class="nav-contain">
		<div class="clmn">
			<a href=""><span><strong>News</strong></span></a>
			<ul>
				<li>Grounds</li>
				<li>Local</li>
				<li>State & National</li>
				<li>Student Council</li>
				<li>Honor Committee</li>
				<li>Health & Sciences</li>
			</ul>
		</div><div class="clmn">
			<a href=""><span><strong>Sports</strong></span></a>
			<ul>
				<li>Lacrosse</li>
				<li>Baseball</li>
				<li>Softball</li>
				<li>Tennis</li>
				<li>Golf</li>
				<li>Rowing</li>
				<li>Track & Field</li>
			</ul>
		</div><div class="clmn">
			<a href=""><span><strong>Opinion</strong></span></a>
			<ul>
				<li>Weekly</li>
				<li>Guest</li>
				<li>Lead Editorials</li>
				<li>Letters to the Editor</li>
			</ul>
		</div><div class="clmn">
			<a href=""><span><strong>Life</strong></span></a>
			<ul>
				<li>Features</li>
				<li>Columns</li>
				<li>Spotlights</li>
				<li>Love Connection</li>
				<li>Focus</li>
				<li>Humor</li>
			</ul>
		</div><div class="clmn">
			<a href=""><span><strong>A&E</strong></span></a>
			<ul>
				<li>Reviews</li>
				<li>Features</li>
				<li>Community</li>
				<li>Q&A</li>
			</ul>
		</div>
	</div>
</div>
<div class="hamburger-menu">
		<a href=""><div class="lines"><img  height='30px' width='30px' src="<?php bloginfo('template_directory'); ?>/images/lines.png" /></div></a>
	<div class="mag-glass"><img  height='26px' width='26px' src="<?php bloginfo('template_directory'); ?>/images/mag-glass.png" /></div>
</div>

 <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cavalierdaily' ); ?></a>
		
	<header id="masthead" class="site-header" role="banner">
		
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img  height='110px' width='110px' src="<?php bloginfo('template_directory'); ?>/images/logo.png" />
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
