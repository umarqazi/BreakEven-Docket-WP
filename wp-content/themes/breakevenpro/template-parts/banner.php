<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package breakevenpro-theme
 */

$page_banner_img = of_get_option('page_banner_img');
$page_banner_title = get_field('page_banner_title');
$page_banner_description = get_field('page_banner_description');
?>

<section>
    <div class="header-inner two" <?php if($page_banner_img){ echo 'style="background-image: url('.$page_banner_img.')";'; } ?>>
        <div class="inner text-center">
            <h4 class="title text-white uppercase"><?php echo $page_banner_title; ?></h4>
            <h5 class="text-white"><?php echo $page_banner_description; ?></h5>
        </div>
        <div class="overlay bg-opacity-3"></div>
    </div>
</section>
<!-- end header inner -->
<div class="clearfix"></div>