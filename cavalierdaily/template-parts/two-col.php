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
                    <div class="title"
                            style=""><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a>
                    </div>

                        <!-- <a href="http://localhost:8888/cavdaily/2017/06/21/%e2%80%8bstudent-council-hosts-vigil-in-memory-of-otto-warmbier/">​Student Council hosts vigil in memory of Otto Warmbier</a> -->

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
