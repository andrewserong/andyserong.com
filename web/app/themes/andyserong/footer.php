<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package andyserong.com
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer site-footer-trees" style="background-image: url('<?php echo get_bloginfo('template_url') ?>/img/trees-subdued.jpg');" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'andyserong' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Somewhat warmly powered by %s', 'andyserong' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'andyserong' ), 'andyserong', '<a href="https://twitter.com/andrewserong">Andrew Serong</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
