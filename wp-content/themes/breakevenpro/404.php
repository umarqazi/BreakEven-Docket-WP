<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package breakevenpro-theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="container text-center">
					<div class="custom-inner-content">
					<div style="width:100%;padding:50px 15px;">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'breakevenpro-theme' ); ?></h1>
						</header><!-- .page-header -->
						<p>Apologies, but the page you requested could not be found. Click here to go <strong><a href="<?php echo get_bloginfo('url'); ?>">homepage.</a></strong></p>

					</div><!-- .page-content -->
					</div>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
