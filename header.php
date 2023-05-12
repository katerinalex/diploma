<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start_theme
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	<?php
		wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap', false, null);
		wp_enqueue_style('fonts'); 
	?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'start-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class = "logos">
		    <div>
		        <div id="kpi-logo">
		            <img src="http://cad.kpi.ua/wp-content/uploads/2021/12/logo.png" alt="KPI logo" />     
			        <h2>КПІ ім. Ігоря Сікорського</h2>
		        </div>
		        <div id="iasa-logo">
		            <img src="http://cad.kpi.ua/wp-content/uploads/2021/12/IASA_Logo.png" alt="IASA logo" />     
			        <h2>Навчально-науковий інститут прикладного системного аналізу</h2>
		        </div>
		    </div>
		</div>
		<nav class="nav" id="nav">	
			<a href="<?php echo home_url() . '/home' ?>" class="nav__logo">
				<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18.6347 42.7125V35.1516L41.3503 14.3999V42.287H35.7859V39.1121H25.9665L31.0071 34.006H35.7859V26.8705L18.6347 42.7125Z" fill="#000007"/>
					<path d="M51.5614 27.9224C57.0941 27.9224 60.8 32.3068 60.8 38.4659C60.8 43.2679 58.2685 47.5479 54.6148 48.383C53.4404 48.6701 52.7097 48.8006 52.3704 48.8006H50.6016V43.8942H51.8484C54.406 43.8942 55.6848 41.6759 55.6848 37.2132C55.6848 37.0827 55.5804 34.9688 54.1189 33.6378C53.5187 33.0897 52.9967 32.8287 52.5009 32.8287H48.6384V48.8006H43.4449V27.9224H51.5614Z" fill="#000007"/>
					<path d="M11.6386 27.9224C6.10591 27.9224 2.40002 32.2024 2.40002 38.4659C2.40002 39.0661 2.47832 39.9795 2.6349 41.18C3.05247 44.4162 5.68835 47.7567 8.5852 48.383C9.7596 48.6701 10.5164 48.8006 10.8296 48.8006H43.5574V43.8942H11.3255C8.79398 43.8942 7.51519 41.6759 7.51519 37.2132C7.51519 36.9522 7.67178 36.2737 7.98495 35.1775C8.27203 34.1858 9.70741 32.8287 10.6991 32.8287H17.3541L19.7551 27.9224H11.6386Z" fill="#000007"/>
				</svg>
			</a>
			<?php wp_nav_menu("menu=main_menu"); ?>
			<a href="#" id='burger' ></a>
		</nav>
	
		
	</header><!-- #masthead -->

	
