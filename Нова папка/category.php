<?php

/**
 * A Simple Category Template
 */

get_header(); ?>

<section id="primary" class="wrapper">
	<div class="text-page" role="main">

		<h2>
			<span>
				<?php
				$category = get_queried_object();
				echo rtrim(get_category_parents($category->term_id, false, ' > '), ' > ');

				?>
			</span>
		</h2>

		<hr>

		<?php

		while (have_posts()) : the_post(); ?>

			<div class="entry">
				<?php
				$moreLink = '</br><a href="' . get_the_permalink() . '">Читати далі...</a>';
                the_title('<h3>', '</h3>');
        $wordsInContent = wp_strip_all_tags(str_word_count(get_the_content(), 0));
        if ($wordsInContent > 60){
        	echo wp_trim_words( get_the_content(), 30, $moreLink);
        }
        else {
          echo wp_strip_all_tags(get_the_content()).$moreLink;
        }
				?>
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