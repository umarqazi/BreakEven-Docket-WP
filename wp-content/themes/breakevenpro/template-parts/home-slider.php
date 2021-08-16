<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package breakevenpro-theme
 */
if( have_rows('homepage_slider') ) {
    ?>

    <div class="master-slider ms-skin-default" id="masterslider">
        <?php
        $count_slide = 0;
        while (have_rows('homepage_slider')) {
            the_row();
            $count_slide++;
            $slide_image = get_sub_field('slide_image');
            $slide_title = get_sub_field('slide_title');
            $slide_sub_title = get_sub_field('slide_sub_title');
            $slide_description = get_sub_field('slide_description');
            $slide_button_text = get_sub_field('slide_button_text');
            $slide_button_url = get_sub_field('slide_button_url');
            ?>
            <div class="ms-slide slide-1" data-delay="5">
                <div class="slide-pattern"></div>
                <img src="<?php echo $slide_image; ?>" alt="" />

                <h3 class="ms-layer text1"
                    style="top: 200px;<?php if ($count_slide%2==0) {echo 'right: 230px';} else{ echo 'left: 230px';} ?>"
                    data-type="text"
                    data-delay="500"
                    data-duration="1230"
                    data-effect="rotate3dtop(-100,0,0,40,t)"
                    data-ease="easeOutExpo">
                    <?php echo $slide_sub_title; ?>
                </h3>

                <h3 class="ms-layer text2"
                    style="top: 245px;<?php if ($count_slide%2==0) {echo 'right: 230px';} else{ echo 'left: 230px';} ?>"
                    data-type="text"
                    data-delay="1000"
                    data-duration="1230"
                    data-effect="rotate3dtop(-100,0,0,40,t)"
                    data-ease="easeOutExpo">
                    <?php echo $slide_title; ?>
                </h3>

                <h3 class="ms-layer <?php echo ($count_slide%2==0) ? 'text7': 'text3' ?>"
                    style="top: 313px;<?php if ($count_slide%2==0) {echo 'right: 230px';} else{ echo 'left: 230px';} ?>"
                    data-type="text"
                    data-effect="top(45)"
                    data-duration="2000"
                    data-delay="1500"
                    data-ease="easeOutExpo">
                    <?php echo $slide_description; ?>
                </h3>

                <a href="<?php echo $slide_button_url; ?>"
                   class="ms-layer sbut5"
                   style="top: 395px;<?php if ($count_slide%2==0) {echo 'right: 230px';} else{ echo 'left: 230px';} ?>"
                   data-type="text"
                   data-delay="2000"
                   data-ease="easeOutExpo"
                   data-duration="1200"
                   data-effect="scale(1.5,1.6)">
                    <?php echo $slide_button_text; ?>
                </a>
            </div>

        <?php } ?>
    </div>

    <div class="clearfix"></div>
<?php } ?>