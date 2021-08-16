<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package breakevenpro-theme
 */

get_header();

?>

    <div id="primary" class="content-area">
        <section class="container container-md-height">
                <div class="row row-md-height custom-inner-content">

                    <?php get_sidebar(); ?>

                    <main id="content" class="col-md-9 col-md-height col-xs-12 bmargin custom-content">

                        <?php
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', 'page' );

                        endwhile; // End of the loop.
                        ?>
                        
                    </main>
                    <!--end left column-->

            </div>
        </section>
    </div><!-- #primary -->

<?php
get_footer();
