<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package breakevenpro-theme
 */

?>

<section class="parallax-section10">
    <div class="section-overlay bg-opacity-5">
        <div class="container sec-tpadding-2 sec-bpadding-2">
            <div class="row">

                <div class="col-md-6">
                    <h3 class="section-title text-left text-white">What People Says</h3>
                    <div class="title-line-8 left lessmargin white"></div>
                    <div class="clearfix"></div>
                    <div id="owl-demo7" class="owl-carousel">
                        <?php
                        $args = array(
                            'post_type' => 'breakevenpro_testimonial',
                            'posts_per_page' => '3',
                            'tax_query' => array(
                            ),
                        );
                        $loop = new WP_Query( $args );
                        if($loop->have_posts()){
                            while ($loop->have_posts()) {
                                $loop->the_post();
                                $company_name = get_field('company_name');
                                ?>
                                <div class="item">
                                    <div class="testimonials4 text-left">
                                        <span class="text-white"><?php the_content(); ?></span>

                                        <h5 class="less-mar1 text-white"><?php the_title(); ?></h5>
                                        <span class="text-white"><?php echo $company_name; ?></span>
                                    </div>
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <h3 class="section-title text-left text-white">Our Clients</h3>
                    <div class="title-line-8 left lessmargin white"></div>
                    <div class="clearfix"></div>

                    <div id="owl-demo3" class="owl-carousel">
                        <?php
                        $args = array(
                            'post_type' => 'breakevenpro_clients',
                            'posts_per_page' => '-1',
                            'tax_query' => array(
                            ),
                        );
                        $loop = new WP_Query( $args );
                        if($loop->have_posts()){ ?>
                        <div class="item">
                            <?php
                            $count = 0;
                            while ($loop->have_posts()) {
                            $loop->the_post();
                            $post_thumbnail = get_the_post_thumbnail_url();
                            $imageresize = aq_resize($post_thumbnail, 175, 70, true);
                            if($count == 0 || $count==3){

                            if ($count==3) echo "</div>"; ?>

                            <div class="tc_fuel_clients client-list2 <?php if($count==3) echo 'lastrow'; ?>">
                                <?php } ?>

                                <div class="col-xs-4 nopadding text-center">
                                    <img src="<?php echo $imageresize; ?>" alt=""/>
                                </div>

                                <?php if($count==5) {
                                    echo "</div><br/><br/></div>";
                                    echo "<div class='item nopadding'>";
                                    $count = 0;
                                }else {
                                    $count++;
                                }
                                } ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<div class="clearfix"></div>