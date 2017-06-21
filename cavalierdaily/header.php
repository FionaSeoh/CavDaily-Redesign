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

	     var width = $(window).width();
	     if (width <=850) {
	     	$(".menu-item-has-children li").addClass("hide");

	     	// put stuff for accordion function here
	     	$( "#hamburger>li:nth-child(1)" ).click(function( event) {
	 	
		         $(".news-crews").removeClass("hide");
		         $(".sports-crews").addClass("hide");
		         $(".life-crews").addClass("hide");
		         $(".op-crews").addClass("hide");
		         $(".ae-crews").addClass("hide");
		         event.preventDefault();
		 
	     	});

	     	$( "#hamburger>li:nth-child(2)" ).click(function( event) {
		         $(".sports-crews").removeClass("hide");
		         $(".news-crews").addClass("hide");
		         $(".life-crews").addClass("hide");
		         $(".op-crews").addClass("hide");
		         $(".ae-crews").addClass("hide");

		         event.preventDefault();
		 
	     	});

	     	$( "#hamburger>li:nth-child(3)" ).click(function( event) {
	 	
		         $(".life-crews").removeClass("hide");
		         $(".sports-crews").addClass("hide");
		         $(".news-crews").addClass("hide");
		         $(".op-crews").addClass("hide");
		         $(".ae-crews").addClass("hide");
		         // $("#hamburger>li:nth-child(2)>a").removeClass("padding");
		         // $("#hamburger>li:nth-child(3)>a").removeClass("padding");
		         // $("#hamburger>li:nth-child(4)>a").addClass("padding");
		         // $("#hamburger>li:nth-child(5)>a").addClass("padding");
		         event.preventDefault();
		 
	     	});

	     	$( "#hamburger>li:nth-child(4)" ).click(function( event) {
	 	
		         $(".op-crews").removeClass("hide");
		         $(".sports-crews").addClass("hide");
		         $(".life-crews").addClass("hide");
		         $(".news-crews").addClass("hide");
		         $(".ae-crews").addClass("hide");
		         // $("#hamburger>li:nth-child(2)>a").removeClass("padding");
		         // $("#hamburger>li:nth-child(3)>a").removeClass("padding");
		         // $("#hamburger>li:nth-child(4)>a").removeClass("padding");
		         // $("#hamburger>li:nth-child(5)>a").toggleClass("padding");
		         event.preventDefault();
		 
	     	});

	     	$( "#hamburger>li:nth-child(5)" ).click(function( event) {
	 	
		         $(".ae-crews").toggleClass("hide");
		         $(".sports-crews").addClass("hide");
		         $(".life-crews").addClass("hide");
		         $(".op-crews").addClass("hide");
		         $(".news-crews").addClass("hide");
		         event.preventDefault();
		 
	     	});
	     	// here's where it ends
	     }

	     $(window).resize(function() {

	     	$("#hamburger>li:nth-child(1)>a").removeClass("padding");
	         $("#hamburger>li:nth-child(2)>a").removeClass("padding");
	         $("#hamburger>li:nth-child(3)>a").removeClass("padding");
	         $("#hamburger>li:nth-child(4)>a").removeClass("padding");
	         $("#hamburger>li:nth-child(5)>a").removeClass("padding");

		    if ($(window).width() > 850) {
		     $('.menu-item-has-children li').removeClass('hide');
		    }
		    else {$('.menu-item-has-children li').addClass('hide');}
		 });
	});

</script>

<div class="hidden hide">
	<div class="nav-contain-logo"><img height="140px" width="140px" src="<?php bloginfo('template_directory'); ?>/images/invert.png">
	</div>
	<div class="nav-contain">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'hamburger',
				'container' => false, 
				'menu_class' => 'nav',
			) );
		?>
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
