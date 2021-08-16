<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package breakevenpro-theme
 */

get_header();

?>

    <div id="primary">
        <section class="container">

            <div class="row custom-inner-content">

                <?php get_sidebar(); ?>

                <main id="content" class="col-sm-9 col-xs-12 bmargin">
                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'single' );

                        if(function_exists( 'wp_related_posts' )){
                            wp_related_posts();
                            echo "<hr>";
                        }

                    endwhile; // End of the loop.
                    ?>
                </main>
                <!--end left column-->
            </div>

        </section>
    </div><!-- #primary -->

<?php
get_footer();