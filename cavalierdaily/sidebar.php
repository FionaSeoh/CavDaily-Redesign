<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cavalierdaily
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<h3 class="sidebar-title">Trending Articles</h3>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 	<!-- Test if the current post is in category 3. -->
 	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
 	<!-- Otherwise, the div box is given the CSS class "post". -->

	 	<?php if ( in_category( 'Featured' ) && in_category('Trending') ) : ?>
	 		<div class="sidebar-featured-post">
	 			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
				<div id="post" class="featured-post-sidebar-image" style="background-image: url('<?php echo $thumb['0'];?>'); width: =100%; height: 100%;">
					<div class="featured-post-sidebar-title">
						<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					</div>
	 			</div>
	 		</div>
	 	<?php elseif (in_category('Trending')) : ?>
	 		<div class="sidebar-post">
			 		<!-- Display the Post Thumbnail -->
			 	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
				<div id="post" class="sidebar-image" style="background-image: url('<?php echo $thumb['0'];?>'); width: =100%; height: 100%;">
			 	<!-- Display the Title as a link to the Post's permalink. -->
			 	</div><div class="sidebar-article-text">
				 	<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

				 	<div class="entry">
				 		<?php the_excerpt(); ?>
				 	</div>
				</div>
	 		</div>

	 	<?php else: ?>
	 		<div class="sidebar-invisible"></div>

 	<?php endif; ?>

 	<!-- Stop The Loop (but note the "else:" - see next line). -->

 <?php endwhile; else : ?>


 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
</aside><!-- #secondary -->
