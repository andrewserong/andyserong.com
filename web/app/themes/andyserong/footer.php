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
			<p class="social-media-links">
				<a href="https://twitter.com/andrewserong/" target="_blank">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a href="https://instagram.com/andrewserong/" target="_blank">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
				<a href="https://github.com/andrewserong/" target="_blank">
					<i class="fa fa-github" aria-hidden="true"></i>
				</a>
				<a href="https://codepen.io/andrewserong/" target="_blank">
					<i class="fa fa-codepen" aria-hidden="true"></i>
				</a>
			</p>
			<p class="barely-visible-footer">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'andyserong' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Somewhat warmly powered by %s', 'andyserong' ), 'WordPress' );
				?>
				</a>
				<br/>
				A <a href="https://github.com/andrewserong/andyserong.com">hand-made theme</a> built on top of <a href="http://underscores.me/" target="_blank">underscores</a>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
