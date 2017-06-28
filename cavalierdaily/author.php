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
		<div id="primary" class="content-area content-area-author">
			<main id="main" class="site-main" role="main">
			
				<div class="author-name">
						<h2 class="title-name"><?php echo get_the_author(); ?></h2>
						<h4 class="author-blurb">
							<?php the_author_posts_link(); ?>
							<?php
							// $blurb =  types_render_usermeta_field( "author-blurb", array( ) );
							// echo $blurb; ?>
						</h4>
				</div>

				<div class="left-content-area">
					<div class="headshot">
						<?php 
							$authorID = get_the_author_meta( 'ID' );
							$headshot = get_avatar( get_the_author_meta( 'ID' ), 300); 
						if ($headshot == "") {
							$avatar = get_bloginfo( 'template_url');
							$avatar .= '/images/no-avatar.jpg';
							$headshot = "<img src=\"" . $avatar . "\" />";
						}
						echo $headshot;
						?>
					</div>
				</div>

				<div class="right-content-area">
					<h2 class="title-name about-the-author">Author Bio:</h2>
					<div class="author-bio">
						<h3 class="authorDesc"><?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?></h3>
					</div>
					
				</div>
			</main>
		</div>

		<div class="side-bar-container">
			<?php
			get_sidebar("author"); ?>
		</div>
	</div>

<?php
get_footer(); ?>

