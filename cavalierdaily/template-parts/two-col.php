<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy

 *
 * @package cavalierdaily
 */

?>

<style>
@import url('https://fonts.googleapis.com/css?family=Abhaya+Libre');
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="orange">
	</div>

		<?php $args = array('posts_per_page' => 4);
            $loop = new WP_Query($args);
            //while($loop->have_posts()):$loop->the_post();
            ?>
                <div class="">
                    <div class="title">
                        <a title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="author-time">
                           by <?php the_author(); ?> | <?php the_time('F j, Y'); ?>
                    </div>
                    <div class="content">
                        <?php
                        $threshold = 120;
                        if (strlen(get_the_content()) >= $threshold) {
                            while(substr(get_the_content(), $threshold, 1) != " ")
                                $threshold--;
                        }
                        $content = substr(get_the_content(),0,$threshold)."...";
                        echo $content; ?>
                    </div>
                </div>
                <br>
    	<?php //endwhile; ?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php cavalierdaily_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
