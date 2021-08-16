<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package breakevenpro-theme
 */

$post_thumbnail = get_the_post_thumbnail_url();
$imageresize = aq_resize($post_thumbnail, 720, 360, true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if($imageresize){ ?>
            <div class="blog-holder-12">
                <div class="image-holder">
                    <a href="<?php the_permalink(); ?>">

                        <div class="overlay bg-opacity-1">
                            <?php if(!is_page(get_the_ID())){ ?>
                                <div class="post-date-box three">
                                    <?php the_time("j"); ?>
                                    <span><?php the_time("M, Y"); ?></span>
                                </div>
                            <?php } ?>
                        </div>

                        <img width="1000" class="img-responsive" src="<?php echo $imageresize; ?>" alt="">

                    </a>
                </div>
            </div>

            <div class="clearfix"></div>
            <br/>
        <?php } ?>
        <h2 class="post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
    </header>

    <?php if(!is_page(get_the_ID())){ ?>
        <div class="blog-post-info">
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php echo "View all posts by ".get_the_author(); ?>" rel="author"><i class="fa fa-user"></i> By <?php echo get_the_author(); ?></a>
        </div>
    <?php } ?>

    <p><?php the_excerpt(); ?></p>
    <br/>
    <a class="btn" href="<?php the_permalink(); ?>">Read More</a>

    <?php if ( get_edit_post_link() ) { ?>
        <footer class="entry-footer">
            <br>
            <?php
            edit_post_link(
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Edit <span class="screen-reader-text">%s</span>', 'breakevenpro-theme' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer><!-- .entry-footer -->
    <?php } ?>
</article>
<div class="clearfix"></div>
<div class="col-divider-margin-5"></div>