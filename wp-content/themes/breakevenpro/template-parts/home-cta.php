<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package breakevenpro-theme
 */

$community_image = get_field('community_image');
$community_title = get_field('community_title');
$community_description = get_field('community_description');
$community_button_url = get_field('community_button_url');
?>

<section class="parallax-section4">
    <div class="section-overlay bg-opacity-6">
        <div class="container sec-tpadding-2 sec-bpadding-2">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="text-uppercase text-white text-bold4"><?php echo $community_title; ?></h2>
                    <p class="text-white"><?php echo $community_description; ?></p>
                    <br>
                    <a class="btn btn-red-2 btn-round" href="<?php echo $community_button_url; ?>">Sign Up Now!</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>