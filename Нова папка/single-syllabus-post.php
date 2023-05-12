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
		    the_title('<h1>', '</h1>');
            $fileData = get_field('file');
            var_dump($fileData);
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
