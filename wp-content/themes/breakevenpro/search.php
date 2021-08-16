<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package breakevenpro-theme
 */

$home_url = get_bloginfo('url');
wp_redirect($home_url);

get_header();
?>

    <section id="primary" class="content-area">
        <section class="sec-padding">
            <div class="container">
                <div class="row">

                    <main id="content" class="col-md-8 col-xs-12 bmargin">

                        <?php if ( have_posts() ) : ?>

                            <header class="page-header">
                                <h1 class="page-title">
                                    <?php
                                    /* translators: %s: search query. */
                                    printf( esc_html__( 'Search Results for: %s', 'breakevenpro-theme' ), '<span>' . get_search_query() . '</span>' );
                                    ?>
                                </h1>
                                <div class="title-line-8 marginbottom left"></div><div class="clearfix"></div>
                            </header><!-- .page-header -->

                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                get_template_part( 'template-parts/content', 'search' );

                            endwhile; ?>

                            <div class="clearfix"></div>
                            <div class=" divider-line solid light margin opacity-7"></div>

                            <?php
                            wp_pagenavi();

                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>

                    </main>
                    <!--end left column-->

                    <?php get_sidebar('blog'); ?>

                </div>
            </div>
        </section>
    </section><!-- #primary -->
<?php
get_footer();
