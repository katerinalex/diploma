<?php /* Template Name: Diplomas */

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
                    <p>Слідкуй за рубрикою <a href="/category/konferencii/">Конференції</a>. Завжди корисна інформація, ключові дати та активні контакти!</p>
                    <p><br></p>
                </div>
            </div>
        </div>
        <div class="text-page">
            <h1>Дипломні проекти</h1>
            <h4>Дипломні проекти студентів кафедри Системного Проектування різних років навчання.</h4>

             <div class="diploma-list"> 
                <ul>
                    <?php
                    $args = array(
                        'echo'         => true,
                        'hierarchical' => true,
                        'orderby'      => 'id',
                        'order'        => 'ASC',
                        'show_count'   => false,
                        'title_li'     => '',
                        'taxonomy'     => 'diploma'
                    );

                    wp_list_categories($args);
                    ?>
                </ul>
            </div> 

        </div>
    </div>

    <?php get_footer(); ?>
</body>

</html>