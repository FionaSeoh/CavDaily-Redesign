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
	<h3 class="sidebar-title">More by <?php $author = get_user_by( 'slug', get_query_var( 'author_name' ) );
	echo $author->first_name; ?> </h3>

	<?php $authorID = $author->ID ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php if ( get_the_author_meta( 'ID' ) == $authorID ) : ?>
			<div class="sidebar-post">
			 		<!-- Display the Post Thumbnail --> 
			 	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
				<div id="post" class="sidebar-image" style="background-image: url('<?php echo $thumb['0'];?>'); width: =100%; height: 90%;">
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
 	<?php endwhile; else : ?>


 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
	

</aside><!-- #secondary -->
