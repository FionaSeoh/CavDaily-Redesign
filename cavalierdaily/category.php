<?php
/**
 * The template for displaying archive pages
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
		if ( have_posts() ) : ?>

			<header class="page-header categoryTitle">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
            get_header();
            if (have_posts()) :
               while (have_posts()) :
                  echo get_the_title( $post_id );
                  the_post();
                  the_title();
                  the_content();
                  the_excerpt();
               endwhile;
            endif;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

		<div class="side-bar-container">
			<?php
			get_sidebar(); ?>
		</div>

</div>

<?php
get_footer(); ?>
