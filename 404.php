<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package start_theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="text-page">

			<section class="error-404 not-found">
				<div class="page-header">
				   <img class="error-404__img" src="<?php echo get_template_directory_uri(); ?>/404.png">
				</div><!-- .page-header -->

				<div class="page-content">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'start-theme' ); ?></h1>
					<p style = "text-align:center;">Перейти на <a class="at_url" href= "http://cad.kpi.ua/">Головну</a></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
