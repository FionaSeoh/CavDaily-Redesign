<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cavalierdaily
 */

?>
<div class="postHolder">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="smallerArticleHolders">

	<header class="entry-header smallerCategoryArticles">
        <div class="linkHolder smallerCatTitle">
        <?php ?>
            <div class="smollImage">
        <?php
        echo get_the_post_thumbnail();
        ?>
                </div>
         <?php
        
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title movedown">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url(   get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
        ?></div><?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta categoryAuthor">
            <?php echo $author = get_the_author(); ?> | 
            <?php cavalierdaily_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
    </div>
    

	<div class="entry-content sameee">
		<?php
//			the_content( sprintf(
//				wp_kses(
//					/* translators: %s: Name of current post. Only visible to screen readers */
//					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cavalierdaily' ),
//					array(
//						'span' => array(
//							'class' => array(),
//						),
//					)
//				),
//				get_the_title()
//			) );
//
//			wp_link_pages( array(
//				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cavalierdaily' ),
//				'after'  => '</div>',
//			) );
		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
</div>
