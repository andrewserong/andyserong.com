<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package andyserong.com
 */

get_header(); ?>

	<div id="primary" class="content-area__full-width">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			$nav_settings = array(
				"prev_text" => "<i class='fa fa-chevron-left nav-prev__icon' aria-hidden='true'></i><div class='nav-btn-text'>%title</div>",
				"next_text" => "<div class='nav-btn-text'>%title</div><i class='fa fa-chevron-right nav-next__icon' aria-hidden='true'></i>"
			);

			the_post_navigation( $nav_settings );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
