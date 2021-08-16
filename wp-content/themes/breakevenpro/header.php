<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package breakevenpro-theme
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    $favicon_web = of_get_option('favicon_web');
    if($favicon_web){
        ?>
        <link rel="shortcut icon" href="<?php echo $favicon_web; ?>"/>
    <?php } ?>

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- stylesheets -->
    <link rel="stylesheet" media="screen" href="<?php bloginfo('template_url'); ?>/assets/js/bootstrap/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/js/mainmenu/menu.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/default.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/layouts.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/shortcodes.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="<?php bloginfo('template_url'); ?>/assets/css/responsive-leyouts.css" type="text/css" />

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/js/masterslider/style/masterslider.css" />
    <link href="<?php bloginfo('template_url'); ?>/assets/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/js/smart-forms/smart-forms.css">
    <link href="<?php bloginfo('template_url'); ?>/assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/responsive.css" />
    <?php wp_head(); ?>
</head>

<body>
<div class="site_wrapper">
    <div class="topbar light custom_top_bar">
        <div class="container">
            <div class="topbar-left-items pull-left">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'topbar-menu',
                    'container' => false,
                    'menu_class' => 'nav navbar-nav'
                ));
                ?>
            </div>
			 <!--end left-->
			 <div class="topbar-right-items pull-right">
				<div class="header-right">
                    <?php
                    $contact_number = of_get_option('contact_number');
                    ?>
					<p><a href="tel:<?php echo $contact_number; ?>"><span>GET STARTED TODAY!</span><span><?php echo $contact_number; ?></span></a></p>
                </div>
			</div>
            <!--end right-->
        </div>
    </div>
    <div class="clearfix"></div>

    <div id="header">
        <div class="container">
            <div class="navbar navbar-default yamm custom-navbar">
                <?php $website_logo = of_get_option('website_logo'); ?>
                <div class="navbar-header">
                    <a href="<?php echo bloginfo('url'); ?>" class="navbar-brand"><img src="<?php echo $website_logo; ?>" alt=""/></a>
                </div>
            </div>
        </div>
    </div>
    <div class="below-header">
        <h3>For the astute contractor<sub>®</sub></h3>
    </div>

    <div class="clearfix"></div>
