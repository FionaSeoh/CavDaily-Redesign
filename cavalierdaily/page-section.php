<?php
/* Template Name: Example Template 
@package cavalierdaily
@link https://codex.wordpress.org/Template_Hierarchy*/

get_header(); ?>
<div class="main-container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
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
