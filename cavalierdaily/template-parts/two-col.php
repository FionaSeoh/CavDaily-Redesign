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
<!-- <h1> Beginning of Two Column Loop</h1> -->
<!-- <div class="two-col-main"> -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="orange">
    </div>

                <div class="">
                    <div class="title">
                        <a title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="author-time">
                           by <?php the_author_posts_link(); ?> | <?php the_time('F j, Y'); ?>
                    </div>
                    <div class="content">
                        <?php
                        $threshold = 340;
                        if (strlen(get_the_content()) >= $threshold) {
                            while(substr(get_the_content(), $threshold, 1) != " ")
                                $threshold--;
                        }
                        $content = substr(get_the_content(),0,$threshold)."...";
                        echo $content; ?>
                    </div>
                    <!-- <br> -->
    <!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->


<!-- <h1> End of Two Column Loop</h1> -->
