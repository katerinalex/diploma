<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package start_theme
 */

get_header();
?>
<div id="primary" class="wrapper">
	<main class="text-page">

		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', get_post_type());

		//the_post_navigation();


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
