<?php

/**
 * Diploma taxonomy archive
 */
get_header(); 
$taxonomy_name = 'syllabus';
$posts_per_page = -1;
?>

<?php
function get_taxonomy_parents($id, $link = false, $separator = '/', $nicename = false)
{

	$format = $nicename ? 'slug' : 'name';

	$args = array(
		'separator' => $separator,
		'link'      => $link,
		'format'    => $format,
	);

	return get_term_parents_list($id, $taxonomy_name, $args);
}
?>

<section id="primary" class="wrapper">
	<div class="text-page" role="main">

		<h2>
			<span class="with_url">
				<?php
    				$category = get_queried_object();
    				echo '<a href="/syllabuses">Силабуси</a> > '.rtrim(get_taxonomy_parents($category->term_id, true, ' > '), ' > ');
				?>
			</span>
		</h2>

		<hr>

		<?php
		    if (!have_posts()) {
		        echo '<h3 class="at_url">Силабуси відсутні</h3>';
		    }
        	$hasChildren = get_term_children($category->term_id, $taxonomy_name);
            sort($hasChildren);
            if (count($hasChildren) > 0) {
                echo '<ul>';
                foreach($hasChildren as $childrenTermId) {
                    $term = get_term_by( 'id', $childrenTermId, $taxonomy_name);
	                echo '<li><a class="at_url" href="' . get_term_link( $term->term_id, $term->taxonomy ) . '">' . $term->name . '</a></li>';
                }
                echo '</ul>';
        ?>
            
        <?php }
            else {
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                'post_type' => 'syllabus-post',
                'post_status' => array('publish'),
                'orderby' => 'title',
                'order' => 'ASC',
                'paged' => $paged,
                'posts_per_page' => $posts_per_page,
                'tax_query' => array(
                    array(
                    'taxonomy' => $taxonomy_name,
                    'field' => 'term_id',
                    'terms' => $category->term_id,
                     )
                  )
                );
                $query = new WP_Query( $args );
                // $glossaryposts = get_posts( $args ); 
            if ($query->have_posts()):
    		while ($query->have_posts()) : $query->the_post(); ?>
    
    			
     			    <div class="entry">
         				<?php 
         				    $fileData = get_field('file', get_the_ID());
         				    if ($fileData['url']) the_title('<h3><a class="at_url" href="'.$fileData['url'].'" target="_blank">', '</a></h3>'); 
         				    else  the_title('<h3>', '</h3>'); 
     				    ?>
         			</div>
     			    <hr>
    
    
    		<?php endwhile;endif; ?>
    
    		<div class="pagination">
    			<?php
    			$big = 999999999; // need an unlikely integer
    
    			echo paginate_links(array(
    				'base'         => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    				'total'        => $query->max_num_pages,
    				'current'      => max(1, get_query_var('paged')),
    				'format'       => '?paged=%#%',
    				'show_all'     => false,
    				'prev_next'    => true,
    				'prev_text'    => "« Попередня",
    				'next_text'    => "Наступна »"
    			));
    			?>
    		</div>
    		<?php }?>
	</div>
</section>


<?php get_footer(); ?>