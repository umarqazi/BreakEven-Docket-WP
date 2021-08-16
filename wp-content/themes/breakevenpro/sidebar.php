<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package breakevenpro-theme
 */

if ( ! is_active_sidebar( 'page-sidebar' ) ) {
	return;
}
?>

<aside id="sidebar" class="widget-area col-sm-3 bmargin">
	<?php dynamic_sidebar( 'page-sidebar' ); ?>
</aside><!-- #secondary -->
