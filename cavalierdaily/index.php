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
				<div id="featured">
				<!-- start Matthew's featured article loop -->
	                <?php
	                query_posts('posts_per_page=1&cat=1'); /*1, 2*/
	                if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	                    <div class="articleImageHomePage" style="background:url(' <?php the_post_thumbnail_url();?>');
	                        background-size: cover;
	                        background-position: center center;
	                        width: 90%;
	                        height: 380px;"
	                        >
	                <div class="articleTitleHomePage">
	                    <div class="orangeBox">
	                        <h2 class="orangeArticleTitle" style=""><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h2>  
	                        <h2 class="orangeBoxArticleAuthor">Posted by: <?php the_author_posts_link(); ?> | <?php the_date();?></h2>
	                    </div>
	                
	                </div>
	                    </div>
	                <!-- <p><?php the_excerpt(); ?></p> -->
	                <?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
	                </div>

					<?php
                if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>

						<?php
						endif;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );


					endif; ?>

				<div class="two-col-main">
					<?php
					/* Start Fiona's Loop */
					$args = array('posts_per_page' => 2);
            		$loop = new WP_Query($args);
            		while($loop->have_posts()):$loop->the_post();
						// <h1> Beginning of Outer Index Loop</h1>
							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/two-col', get_post_format() );
						endwhile;

                    ?>
   
				<div class="two-col-1180">
					<?php
					/* Start Fiona's Loop */
						$args2 = array('posts_per_page' => 2);
	            		$loop2 = new WP_Query($args2);
	            		while($loop2->have_posts()):$loop2->the_post();
			
						// <h1> Beginning of Outer Index Loop</h1>
							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/1180-two-col', get_post_format() );
						endwhile;

						the_posts_navigation();
						?>
				</div>
                
			</main><!-- #main -->
		</div><!-- #primary -->
		<div class="side-bar-container">
			<?php
			get_sidebar(); ?>
		</div>
	</div>
	<?php
get_footer(); ?>
