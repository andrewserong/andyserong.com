<?php
/**
 * Template part for displaying a listing of a post (just its title and a link)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package andyserong.com
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		
		<div class="listing-row">
		
			<p>
			<?php
			if ( 'post' === get_post_type() ) : ?>
			<div class="listing-meta entry-meta">
				<?php andyserong_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif;

			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>');
			endif;
			?>
			</p>

		</div>

	</header><!-- .entry-header -->

</article><!-- #post-<?php the_ID(); ?> -->
