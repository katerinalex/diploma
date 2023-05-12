<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package start_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php start_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_title('<h1>', '</h1>');
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'start-theme' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article>
