<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cavalierdaily
 */

get_header(); ?>
<div class="main-container mainContainer404">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header kennyMessage">
                    <div class="teddy"></div>
					<h1 class="page-title"><?php esc_html_e( '404 Error! Oops! We can\'t find this! Kenny is fixing the problem with his fidget spinner.' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content pageContent404">
					<p class="search-sentence"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'cavalierdaily' ); ?></p>
                <br>
					<?php
						get_search_form();
                    ?>
                    <div class="makeDotsGoAway">
                        <?php
						the_widget( 'WP_Widget_Recent_Posts' );
                        ?>
                    </div>
						
                    <?php
                    // Only show the widget if site has multiple categories.
						if ( cavalierdaily_categorized_blog() ) :
					?>

					<div class="widget same3 widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'cavalierdaily' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php
						endif;

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'cavalierdaily' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
