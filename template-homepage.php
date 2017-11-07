<?php
/* Template Name: Homepage */

/** 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nbskscores
 */

get_header(); ?>

	
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'home' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	

<?php
get_sidebar();
get_footer();
