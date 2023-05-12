<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start_theme
 */

?>



<footer id="colophon" class="site-footer">
	<div class="info-row">
		<h6 class="tar">
			<?php echo date("Y"); ?> © Кафедра Cистемного проектування
		</h6>
	</div>
</footer><!-- #colophon -->


<?php wp_footer(); ?>