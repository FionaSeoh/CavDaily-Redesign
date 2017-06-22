<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cavalierdaily
 */

get_header(); ?>
	<div class="main-container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

					<?php
					endif;
					?><h1> Start Matthew's Loop</h1><?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;
					?><h1> End Matthew's Loop</h1><?php
					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;

				/* Start Fiona's Loop */
				while ( have_posts() ) : the_post();
				// <h1> Beginning of Outer Index Loop</h1>
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/two-col', get_post_format() );
				endwhile;

				the_posts_navigation();
				?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<div class="side-bar-container">
			<?php
			get_sidebar(); ?>
		</div>
	</div>
	<?php
get_footer(); ?>
