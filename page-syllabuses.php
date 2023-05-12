<?php
/* Template Name: Syllabuses */
get_header(); 
$taxonomy_name = 'syllabus';
// $taxonomy_name = 'syllabus-new';
?>

<section id="primary" class="wrapper">
	<div class="text-page" role="main">

		<?php the_title('<h2><span class="at_url">', '</span></h2>'); ?> 

		<hr>

		<?php
        	$terms = get_terms(array(
                                'taxonomy' => $taxonomy_name,
                                'hide_empty' => false,
                                'parent' => 0,
                            ) );
             //echo '<ul>';
            foreach($terms as $term) {
                echo '<p><a class="at_url" href="' . get_term_link( $term->term_id, $term->taxonomy ) . '">' . $term->name . '</a></p>';
            }
            //echo '</ul>';
        ?>
	</div>
</section>


<?php get_footer(); ?>