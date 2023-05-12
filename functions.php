<?php

/**
 * start theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package start_theme
 */

if (!function_exists('start_theme_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function start_theme_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on start theme, use a find and replace
		 * to change 'start-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('start-theme', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'start-theme'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('start_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'start_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function start_theme_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('start_theme_content_width', 640);
}
add_action('after_setup_theme', 'start_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function start_theme_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'start-theme'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'start-theme'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'start_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function start_theme_scripts()
{
	wp_enqueue_style('start-theme-style', get_stylesheet_uri());

	wp_enqueue_style('start-theme-style-my', get_template_directory_uri() . '/css/theme.css', array(), '1');

	wp_enqueue_style('start-theme-homepage', get_template_directory_uri() . '/css/homepage.css');
	wp_enqueue_style('start-theme-contacts', get_template_directory_uri() . '/css/contacts.css');
	wp_enqueue_style('start-theme-laboratorija-melexis', get_template_directory_uri() . '/css/laboratorija-melexis.css');
	wp_enqueue_style('start-theme-international-scientific-cooperation', get_template_directory_uri() . '/css/international-scientific-cooperation.css');
	wp_enqueue_style('start-theme-osvitni-programy', get_template_directory_uri() . '/css/osvitni-programy.css');
	wp_enqueue_style('start-theme-osvitni-starosti', get_template_directory_uri() . '/css/starosti.css');
	wp_enqueue_style('start-theme-scientific-school', get_template_directory_uri() . '/css/scientific-school.css');
	wp_enqueue_style('start-theme-academic-council', get_template_directory_uri() . '/css/academic-council.css');
	wp_enqueue_style('start-theme-scientific-directions', get_template_directory_uri() . '/css/scientific-directions.css');
	wp_enqueue_style('start-theme-polozhennja-pro-imenni-stipendii', get_template_directory_uri() . '/css/polozhennja-pro-imenni-stipendii.css');
	wp_enqueue_style('start-theme-rozklad', get_template_directory_uri() . '/css/rozklad.css');
	wp_enqueue_style('start-theme-navchalnij-plan', get_template_directory_uri() . '/css/navchalnij-plan.css');
	wp_enqueue_style('start-theme-navchalna-dokumentacja', get_template_directory_uri() . '/css/navchalna-dokumentacja.css');
	wp_enqueue_style('start-theme-diploms', get_template_directory_uri() . '/css/diploms.css');
	wp_enqueue_style('start-theme-projects', get_template_directory_uri() . '/css/projects.css');
	wp_enqueue_style('start-theme-achievements', get_template_directory_uri() . '/css/achievements.css');
	wp_enqueue_style('start-theme-official-information', get_template_directory_uri() . '/css/official-information.css');
	wp_enqueue_style('start-theme-istorja-kafedri', get_template_directory_uri() . '/css/istorja-kafedri.css');
	wp_enqueue_style('start-theme-personal', get_template_directory_uri() . '/css/personal.css');
	wp_enqueue_style('start-theme-pracevlashtuvannja', get_template_directory_uri() . '/css/pracevlashtuvannja.css');
	wp_enqueue_style('start-theme-chomu-sp', get_template_directory_uri() . '/css/chomu-sp.css');
	wp_enqueue_style('start-theme-phd', get_template_directory_uri() . '/css/phd.css');
	wp_enqueue_style('start-theme-bakalavr', get_template_directory_uri() . '/css/bakalavr.css');
	wp_enqueue_style('start-theme-magistr', get_template_directory_uri() . '/css/magistr.css');
	wp_enqueue_style('start-theme-vidguki', get_template_directory_uri() . '/css/vidguki.css');
	wp_enqueue_style('start-theme-publications', get_template_directory_uri() . '/css/publications.css');
	wp_enqueue_style('start-theme-student-publications', get_template_directory_uri() . '/css/student-publications.css');
	wp_enqueue_style('start-theme-zaochna-forma-navchannja', get_template_directory_uri() . '/css/zaochna-forma-navchannja.css');
	wp_enqueue_style('start-theme-footer', get_template_directory_uri() . '/css/footer.css');
	wp_enqueue_style('start-theme-header', get_template_directory_uri() . '/css/header.css');


	wp_enqueue_style('start-theme-style-media', get_template_directory_uri() . '/css/media.css');
	wp_enqueue_script('start-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);
	wp_enqueue_script('start-theme-homepage', get_template_directory_uri() . '/js/homepage.js');
	wp_enqueue_script('start-theme-diploma', get_template_directory_uri() . '/js/list-of-diplomas.js');
	wp_enqueue_script('start-theme-expandable-block', get_template_directory_uri() . '/js/expandable-block.js');
	wp_enqueue_script('start-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);
	wp_enqueue_script('start-theme-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'start_theme_scripts');

function add_custom_taxonomies()
{
	register_taxonomy('diploma', 'post', array(
		'hierarchical' => true,
		
		'labels' => array(
			'name' => _x('Diploma categories', 'Diploma categories'),
			'singular_name' => _x('Diploma category', 'Diploma category'),
			'search_items' =>  __('Search diploma categories'),
			'all_items' => __('All diploma categories'),
			'parent_item' => __('Parent diploma category'),
			'parent_item_colon' => __('Parent diploma category:'),
			'edit_item' => __('Edit diploma category'),
			'update_item' => __('Update diploma category'),
			'add_new_item' => __('Add new diploma category'),
			'new_item_name' => __('New diploma category'),
			'menu_name' => __('Diploma categories'),
		),
		'show_in_rest' => true,
		'show_admin_column' => true,
		'menu_position' => 2,
		'rewrite' => array(
			'slug' => 'diplomas',
			'hierarchical' => true
		),
	));
	
	register_taxonomy('syllabus', 'syllabus_post', array(
	        'label'                 => '',
	        'labels'                => [
    			'name'              => 'Syllabus categories',
    			'singular_name'     => 'Syllabus categorie',
    			'search_items'      => 'Search Syllabus categorie',
    			'all_items'         => 'All Syllabus categorie',
    			'view_item '        => 'View Syllabus categorie',
    			'parent_item'       => 'Parent Syllabus categorie',
    			'parent_item_colon' => 'Parent Syllabus categorie:',
    			'edit_item'         => 'Edit Syllabus categorie',
    			'update_item'       => 'Update Syllabus categorie',
    			'add_new_item'      => 'Add New Syllabus categorie',
    			'new_item_name'     => 'New Syllabus categorie Name',
    			'menu_name'         => 'Syllabus categories',
    			'back_to_items'     => '← Back to Syllabus categories',
		    ],
    		'hierarchical'          => true,
    		'rewrite' => array(
    			'slug' => 'syllabuses',
    			'hierarchical' => true
    		),
	    )
    );
    
    register_post_type( 'syllabus-post', [
		'label'  => null,
		'labels' => [
			'name'               => 'Syllabus', // основное название для типа записи
			'singular_name'      => 'Syllabus', // название для одной записи этого типа
			'add_new'            => 'Add new syllabus', // для добавления новой записи
			'add_new_item'       => 'Add new syllabus', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit syllabus', // для редактирования типа записи
			'new_item'           => 'New syllabus', // текст новой записи
			'view_item'          => 'View syllabus', // для просмотра записи этого типа.
			'search_items'       => 'Search syllabus', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in the bin', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Syllabus', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-welcome-learn-more',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['syllabus'],
		'has_archive'         => false,
		'rewrite'             => ['slug' => 'syllabus', 'hierarchical' => true],
		'query_var'           => true,
	] );
}
add_action('init', 'add_custom_taxonomies', 0);


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*if( !defined(THEME_IMG_PATH)){
	define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images' );
   }*/

if (function_exists('register_nav_menus')) {
	register_nav_menus(
		array( // создаём любое количество областей
			'main_menu' => 'Главное меню', // 'имя' => 'описание'

		)
	);
}
