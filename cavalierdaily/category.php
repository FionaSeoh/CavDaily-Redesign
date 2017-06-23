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

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
        
			<?php
        endif;
			/* Start the Loop */
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */// create var for count
        $count = 0;

            // do your loop & increment the var
        if (have_posts()) : while (have_posts()) : the_post(); $count++;

        if ($count === 1) :
            // do code for only the first post...
            get_template_part( 'template-parts/content2', get_post_format() );
//        endif;
        else:
            get_template_part( 'template-parts/content3', 'none' );

            // do code for the rest of your posts...

            // end loop
        endif;
        endwhile; endif;
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
