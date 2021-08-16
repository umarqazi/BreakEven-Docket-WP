<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package breakevenpro-theme
 */

$news_title = get_field('news_title');
$news_description = get_field('news_description');

$args = array(
    'post_type' => 'post',
    'posts_per_page' => '3',
    'tax_query' => array(
    ),
);
$loop = new WP_Query( $args );
if($loop->have_posts()){
    ?>

    <section class="section-light sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="section-title"><?php echo $news_title; ?></h2>
                    <div class="title-line-8"></div>
                    <p class="sub-title"><?php echo $news_description; ?></p>
                </div>
                <?php

                while ( $loop->have_posts() ) {
                    $loop->the_post();

                    $post_thumbnail = get_the_post_thumbnail_url();
                    $imageresize = aq_resize($post_thumbnail, 360, 270, true);
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="pressRelease blog-holder1 noborder bmargin">
                            <a href="<?php the_permalink(); ?>">
                                <div class="image-holder">
                                    <div class="post-date-box violet">
                                        <?php if(!is_page(get_the_ID())){ ?>
                                            <?php the_time("j"); ?>
                                            <span><?php the_time("M, Y"); ?></span>
                                        <?php } ?>
                                    </div>
                                    <img src="<?php echo $imageresize; ?>" alt="" class="img-responsive"/>
                                </div>
                            </a>
                            <div class="content-box">
                                <h4 class="less-mar2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

                                <div class="blog-post-info">
                                    <span><i class="fa fa-user"></i><?php echo " by ".get_the_author(); ?></span>
                                </div>
                                <br/>

                                <p><?php echo post_short_des(25); ?></p>
                            </div>
                        </div>
                    </div>
                    <!--end item-->
                    <?php
                }
                wp_reset_query();
                ?>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>
<?php } ?>