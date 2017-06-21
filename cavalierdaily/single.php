<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cavalierdaily
 */

get_header(); ?>
<div class="main-container">
		<div id="primary" class="content-area">
        <div class="articleTitle">
            <?php echo the_title( $before, $after, $echo ); ?> 
                    <div class="articleSubTitle">
            <?php echo $author = get_the_author(); ?>
            <h4><?php cavalierdaily_posted_on(); ?></h4>
        </div>
        </div>
        
        <div class="share-buttons">
            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
                          <a class="twitter-share-button"
              href="https://twitter.com/intent/tweet?text=Hello%20world"
              data-size="large">
        Tweet</a>
            <a class="email-share-button" href="https://api.addthis.com/oexchange/0.8/forward/email/offer?url=http%3A%2F%2Fwww.addthis.com%2F&pubid=ra-42fed1e187bae420&title=AddThis%20%7C%20Home&ct=1" target="_blank" ><img src="https://cache.addthiscdn.com/icons/v3/thumbs/32x32/email.png" border="0" alt="Email"/></a>
            <a class="google-plus-share-button" href="https://api.addthis.com/oexchange/0.8/forward/google_plusone_share/offer?url=http%3A%2F%2Fwww.addthis.com%2F&pubid=ra-42fed1e187bae420&title=AddThis%20%7C%20Home&ct=1" target="_blank"><img src="https://cache.addthiscdn.com/icons/v3/thumbs/32x32/google_plusone_share.png" border="0" alt="Google+"/></a>
            </div>

            
			<main id="main" class="site-main" role="main">
            
            <div class="singleArticlePic">
                <?php
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail();
                    } else { 
                        the_content();
                    }
                ?>
            </div>
            <p class="articleText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sollicitudin vulputate velit eu posuere. Ut volutpat neque et rutrum efficitur. Mauris non leo ante. Maecenas in ipsum quis erat euismod porta. Aliquam ullamcorper laoreet massa ornare mattis. Cras scelerisque pharetra quam, vitae sodales felis condimentum sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean vehicula nisl at urna consectetur fermentum. Sed mattis lacus sit amet orci porta, quis imperdiet dui efficitur. Nulla facilisi. Vestibulum sit amet quam faucibus, dignissim lorem eu, commodo orci. Pellentesque non neque sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque purus massa, consectetur eget nibh vitae, faucibus efficitur metus.
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sollicitudin vulputate velit eu posuere. Ut volutpat neque et rutrum efficitur. Mauris non leo ante. Maecenas in ipsum quis erat euismod porta. Aliquam ullamcorper laoreet massa ornare mattis. Cras scelerisque pharetra quam, vitae sodales felis condimentum sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean vehicula nisl at urna consectetur fermentum. Sed mattis lacus sit amet orci porta, quis imperdiet dui efficitur. Nulla facilisi. Vestibulum sit amet quam faucibus, dignissim lorem eu, commodo orci. Pellentesque non neque sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque purus massa, consectetur eget nibh vitae, faucibus efficitur metus.
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sollicitudin vulputate velit eu posuere. Ut volutpat neque et rutrum efficitur. Mauris non leo ante. Maecenas in ipsum quis erat euismod porta. Aliquam ullamcorper laoreet massa ornare mattis. Cras scelerisque pharetra quam, vitae sodales felis condimentum sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean vehicula nisl at urna consectetur fermentum. Sed mattis lacus sit amet orci porta, quis imperdiet dui efficitur. Nulla facilisi. Vestibulum sit amet quam faucibus, dignissim lorem eu, commodo orci. Pellentesque non neque sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque purus massa, consectetur eget nibh vitae, faucibus efficitur metus.</p>
                <div class="comments">
                <?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
                    endif;
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
