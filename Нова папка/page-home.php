<?php /* Template Name: HomePage */

?>

<?php
/**
 * @package start_theme
 * 
 */

get_header(); ?>
<html>

<head>

</head>

<body>


    <div class="wrapper">
        <?php
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/content', 'mainbanner');

            get_template_part('template-parts/content', 'page');

        endwhile; // End of the loop.
        ?>

        <div class="tab-module">
            <div class="tab">
                <button class="tablinks active" onclick="openContent(event, 'News')">Новини</button>
                <!-- <button class="tablinks" onclick="openContent(event, 'Conference')">Конференції</button> -->
            </div>

        </div>
    </div>


</body>

</html>
<?php get_sidebar(); ?>
<?php get_footer(); ?>