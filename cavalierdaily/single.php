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
            <?php echo $author = get_the_author(); ?>
        </div>
			<main id="main" class="site-main" role="main">

			<?php
			while (have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
            ?> <p class="articleText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sollicitudin vulputate velit eu posuere. Ut volutpat neque et rutrum efficitur. Mauris non leo ante. Maecenas in ipsum quis erat euismod porta. Aliquam ullamcorper laoreet massa ornare mattis. Cras scelerisque pharetra quam, vitae sodales felis condimentum sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean vehicula nisl at urna consectetur fermentum. Sed mattis lacus sit amet orci porta, quis imperdiet dui efficitur. Nulla facilisi. Vestibulum sit amet quam faucibus, dignissim lorem eu, commodo orci. Pellentesque non neque sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque purus massa, consectetur eget nibh vitae, faucibus efficitur metus.
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sollicitudin vulputate velit eu posuere. Ut volutpat neque et rutrum efficitur. Mauris non leo ante. Maecenas in ipsum quis erat euismod porta. Aliquam ullamcorper laoreet massa ornare mattis. Cras scelerisque pharetra quam, vitae sodales felis condimentum sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean vehicula nisl at urna consectetur fermentum. Sed mattis lacus sit amet orci porta, quis imperdiet dui efficitur. Nulla facilisi. Vestibulum sit amet quam faucibus, dignissim lorem eu, commodo orci. Pellentesque non neque sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque purus massa, consectetur eget nibh vitae, faucibus efficitur metus.
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sollicitudin vulputate velit eu posuere. Ut volutpat neque et rutrum efficitur. Mauris non leo ante. Maecenas in ipsum quis erat euismod porta. Aliquam ullamcorper laoreet massa ornare mattis. Cras scelerisque pharetra quam, vitae sodales felis condimentum sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean vehicula nisl at urna consectetur fermentum. Sed mattis lacus sit amet orci porta, quis imperdiet dui efficitur. Nulla facilisi. Vestibulum sit amet quam faucibus, dignissim lorem eu, commodo orci. Pellentesque non neque sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque purus massa, consectetur eget nibh vitae, faucibus efficitur metus.</p>
                <div class="comments">
                <?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
                    endif;

			endwhile; // End of the loop.
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
