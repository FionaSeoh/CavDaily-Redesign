<?php
/**
 * The template for displaying all events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#event
 *
 * @package cavalierdaily
 */

get_header(); ?>
<div class="main-container"> 
		<div id="primary" class="content-area">
        <div class="articleTitle">
            <?php echo the_title( $before, $after, $echo ); ?> 
            <?php types_render_field("my-date", array("style" => "calendar")); ?>
        </div>
        
        <div class="share-buttons">
            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large" data-mobile-iframe="true">
            	<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a>
            </div>
              <a class="twitter-share-button"
              href="https://twitter.com/intent/tweet?text=Hello%20world"
              data-size="large">Tweet</a>
            <a class="email-share-button" href="https://api.addthis.com/oexchange/0.8/forward/email/offer?url=http%3A%2F%2Fwww.addthis.com%2F&pubid=ra-42fed1e187bae420&title=AddThis%20%7C%20Home&ct=1" target="_blank" ><img src="https://cache.addthiscdn.com/icons/v3/thumbs/32x32/email.png" border="0" alt="Email"/></a>
            <a class="google-plus-share-button" href="https://api.addthis.com/oexchange/0.8/forward/google_plusone_share/offer?url=http%3A%2F%2Fwww.addthis.com%2F&pubid=ra-42fed1e187bae420&title=AddThis%20%7C%20Home&ct=1" target="_blank"><img src="https://cache.addthiscdn.com/icons/v3/thumbs/32x32/google_plusone_share.png" border="0" alt="Google+"/></a>
            </div>

            
			<main id="main" class="site-main" role="main">
            
            <div class="singleEventPic">
                <?php
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail();
                    } else { 
                        the_content( $more_link_text, $stripteaser );
                    }
                ?>
            </div>
            <div class="the-content">
            	<?php
            		if ( have_posts() ) :
            		 while ( have_posts() ) : 
            			the_post();
					  	the_content();
						endwhile;
					endif;

            	?>
            </div>
           
			</main><!-- #main -->
		</div><!-- #primary -->
		
</div>
<?php
get_footer(); ?>
