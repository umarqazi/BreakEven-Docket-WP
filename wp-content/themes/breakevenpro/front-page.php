<?php
/**
 * Template Name: Homepage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package breakevenpro-theme
 */

get_header(); ?>

    <div id="primary">
        <section class="container">

            <div class="row custom-inner-content">

                <?php get_sidebar(); ?>

                <main id="content" class="col-sm-9 col-xs-12 bmargin">

                    <?php dynamic_sidebar( 'content-bar' ); ?>

                </main>
                <!--end left column-->
            </div>

        </section>
    </div><!-- #primary -->

<?php
get_footer();
