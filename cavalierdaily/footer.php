<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cavalierdaily
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-container">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cavalierdaily' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'cavalierdaily' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'cavalierdaily' ), 'cavalierdaily', '<a href="https://automattic.com/">Underscores.me</a>' );
			?>
			<br>Contact us through our mailing address at: The Cavalier Daily, PO Box 400703, Charlottesville, VA 22904
		</div><!-- .site-info --><div class="final-nav">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container' => false,
						) );
					?>
		</div>

	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php //wp_footer(); ?>

</body>
</html>
