<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package breakevenpro-theme
 */

$footer_logo = of_get_option('footer_logo');
$copyright_text = of_get_option('copyright_text');

?>

<div id="footer">
    <div class="row">
        <div class="footer-logo">
            <img src="<?php echo $footer_logo; ?>" alt="" />
        </div>
        <p class="copy-text"><?php echo $copyright_text; ?></p>
    </div>
</div>

<a href="#" class="scrollup"></a>
<!-- end scroll to top of the page-->

</div>
<!--end site wrapper-->

<!-- ========== Js Files ========== -->

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/universal/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/mainmenu/customeUI.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/mainmenu/jquery.sticky.js"></script>

<?php if(is_front_page()){ ?>
<script src="<?php bloginfo('template_url'); ?>/assets/js/masterslider/masterslider.min.js"></script>
<script type="text/javascript">
    (function($) {
        "use strict";
        var slider = new MasterSlider();
        // adds Arrows navigation control to the slider.
        slider.control('arrows');
        slider.control('bullets');

        slider.setup('masterslider', {
            width: 1600, // slider standard width
            height: 650, // slider standard height
            space: 0,
            speed: 45,
            layout: 'fullwidth',
            loop: true,
            preload: 0,
            autoplay: true,
            view: "parallaxMask"
        });
    })(jQuery);

</script>
<?php } ?>

<script src="<?php bloginfo('template_url'); ?>/assets/js/animations/js/animations.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/animations/js/appear.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/scrolltotop/totop.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/owl-carousel/owl.carousel.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/scripts/jquery.smooth-scroll.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/owl-carousel/custom.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/jquery.fancybox.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/custom.js" type="text/javascript"></script>

<script src="<?php bloginfo('template_url'); ?>/assets/js/scripts/functions.js" type="text/javascript"></script>

<?php wp_footer(); ?>

</body>
</html>
