<?php

/**
 * Diploma taxonomy archive
 */
get_header(); ?>

<?php
function get_taxonomy_parents($id, $link = false, $separator = '/', $nicename = false)
{

	$format = $nicename ? 'slug' : 'name';

	$args = array(
		'separator' => $separator,
		'link'      => $link,
		'format'    => $format,
	);

	return get_term_parents_list($id, 'diploma', $args);
}
?>

<section id="primary" class="wrapper">
	<div class="bannerScience">
		<div class="column">
			<div class="text-banner">
				<p><br></p>
				<p><b>Не знаєш де опублікувати свою роботу?</b></p>
				<p>Слідкуй за рубрикою <a href="#">Конференції</a>. Завжди корисна інформація, ключові дати та активні контакти!</p>
				<p><br></p>
			</div>
		</div>
	</div>
	<div class="text-page" role="main">

		<h2>
			<span>
				<?php
				$category = get_queried_object();
				echo rtrim(get_taxonomy_parents($category->term_id, false, ' > '), ' > ');

				?>
			</span>
		</h2>

		<hr>

		<?php
		query_posts($query_string . '&orderby=title&order=ASC');

		while (have_posts()) : the_post(); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<hr>

		<?php endwhile; ?>

		<div class="pagination">
			<?php
			$big = 999999999; // need an unlikely integer

			echo paginate_links(array(
				'base'         => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
				'total'        => $wp_query->max_num_pages,
				'current'      => max(1, get_query_var('paged')),
				'format'       => '?paged=%#%',
				'show_all'     => false,
				'prev_next'    => true,
				'prev_text'    => "« Попередня",
				'next_text'    => "Наступна »"
			));
			?>
		</div>
	</div>
</section>


<?php get_footer(); ?>