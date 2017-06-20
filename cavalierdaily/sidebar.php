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

 	<?php if ( in_category( 'featured' ) ) : ?>
 		<div class="post featured-post">
 	<?php else : ?>
 		<div class="post">
 	<?php endif; ?>

 	<!-- Display the Post Thumbnail -->
 	<div class="sidebar-image"><?php the_post_thumbnail( 'thumbnail' );?>

 	<!-- Display the Title as a link to the Post's permalink. -->
 	</div><div class="sidebar-article-text">
	 	<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>


	 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. 

	 	<small><?php the_author(); ?> - <?php the_time('m/d/Y'); ?></small> -->


	 	<!-- Display an excerpt from the article -->
	 	<div class="entry">
	 		<?php the_excerpt(); ?>
	 	</div>
 	</div>

 	</div>
 	<!-- Stop The Loop (but note the "else:" - see next line). -->

 <?php endwhile; else : ?>


 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
</aside><!-- #secondary -->
