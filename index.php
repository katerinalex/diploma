<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package start_theme
 */

get_header();
?>

<div id="primary" class="wrapper">
	<div class="banner">
		<div class="column">
			<div class="text-banner">
				<p><strong>Кафедра Системного проектування</strong> — одна з найпрестижніших кафедр КПІ ім. Ігоря Сікорського, яка першою в Україні розпочала підготовку фахівців з комп'ютерних систем проектування у 1972 році.
					Кафедра СП здійснює підготовку фахівців для науково-дослідної, проектної і організаційно-управлінської діяльності у галузі застосування сучасних інформаційних технологій у проектуванні найрізноманітніших об'єктів штучного середовища людини і інформатизації функціонування організацій та установ.</p>

			</div>
		</div>
	</div>

	<div id="main" class="text-page">

		<?php
		if (have_posts()) :

			while (have_posts()) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part('template-parts/content', get_post_type());

			endwhile;

			the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>

	</div><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
