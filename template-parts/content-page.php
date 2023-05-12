<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package start_theme
 */

?>

<div class="text-page">
	<?php start_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'start-theme'),
			'after'  => '</div>',
		));
		?>
	</div><!-- .entry-content -->
</div>