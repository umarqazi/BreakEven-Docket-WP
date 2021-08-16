<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package breakevenpro-theme
 */

$services_section_title = get_field('services_section_title');
$services_section_description = get_field('services_section_description');

?>

<section class="sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2 text-center">
                <h2 class="section-title"><?php echo $services_section_title; ?></h2>
                <div class="title-line-8"></div>
                <p><?php echo $services_section_description; ?></p>
                <br>
            </div>
            <div class="clearfix"></div>

            <?php if( have_rows('breakevenpro_services') ) {

                while (have_rows('breakevenpro_services')) {
                    the_row();
                    $service_image = get_sub_field('service_image');
                    $service_image_crop = aq_resize($service_image, 265, 200, true);
                    $service_title = get_sub_field('service_title');
                    $service_short_description = get_sub_field('service_short_description');
                    $service_page_link = get_sub_field('service_page_link');
                    ?>

                    <div class="col-md-3 col-sm-6">
                        <div class="feature-box4 tc_fuel_features bmargin text-center">
                            <div class="col-md-12 nopadding">
                                <img src="<?php echo $service_image_crop; ?>" alt=""
                                     class="img-responsive"/>
                            </div>
                            <div class="margin-top3"></div>
                            <h5><?php echo $service_title; ?></h5>
                            <p><?php echo wp_trim_words($service_short_description,15); ?></p>
                            <br/>
                            <a class="btn btn-red" href="<?php echo $service_page_link; ?>">Read more</a>
                        </div>
                    </div>
                <?php }
            }
            ?>

        </div>
    </div>
</section>

<div class="clearfix"></div>

