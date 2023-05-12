<?php /* Template Name: StudentPublications */

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
        <div class="text-page">

            <div class="pages" id="yearsOfStudentsPublication">
                <button class="pageslinks active" onclick="openPage(event, '2013')">2013</button>
                <button class="pageslinks" onclick="openPage(event, '2012')">2012</button>
                <button class="pageslinks" onclick="openPage(event, '2011')">2011</button>
                <button class="pageslinks" onclick="openPage(event, '2010')">2010</button>
                <button class="pageslinks" onclick="openPage(event, '2009')">2009</button>
            </div>

            <br>

            <?php
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/content', 'page');

            endwhile; // End of the loop.
            ?>
        </div>
    </div>

    <?php get_footer(); ?>
</body>

</html>