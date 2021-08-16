<?php
/**
 * Template part for displaying page content in page.php
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
                    <div class="overlay bg-opacity-1">
                        <div class="post-date-box three">
                            <?php the_time("j"); ?>
                            <span><?php the_time("M, Y"); ?></span>
                        </div>
                    </div>

                    <img width="1000" class="img-responsive" alt=""
                         src="<?php echo $imageresize; ?>">

                </div>
            </div>

            <div class="clearfix"></div>
            <br/>
        <?php } ?>

        <h1 class="post-title"><?php the_title(); ?></h1>
    </header>

    <div class="blog-post-info">
        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php echo "View all posts by ".get_the_author(); ?>" rel="author"><i class="fa fa-user"></i> By <?php echo get_the_author(); ?></a>
    </div>
    <hr>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'breakevenpro-theme' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
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
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
