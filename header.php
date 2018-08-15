<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_get_document_title(); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css"/>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,latin-ext" rel="stylesheet">
   <?/* <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/public/css/app.min.css">*/?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/node_modules/bootstrap/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/node_modules/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/magnific.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/style.css">
</head>
<body <?php body_class(); ?>>

<header class="header">
    <div class="header-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-left d-none d-lg-block">
                    <div class="header_gos">
                        <img src="<?= get_template_directory_uri() ?>/public/images/medal.png" alt="stonegrad">
                        <span>Stone Grad поставщик в<br>39 государтвенных контрактах</span>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <a href="/" class="logo">
                        <img src="<?php echo ot_get_option( "logo"); ?>" alt="stonegrad">
                    </a>
                </div>
                <div class="col-md-4 text-right d-none d-lg-block">
                    <a class="header-phone" href="tel: <?php echo ot_get_option( "phone_header"); ?>">
                        <i class="fa fa-phone"></i><?php echo ot_get_option( "phone_header"); ?>
                    </a>
                    <span class="header-address"><?php echo ot_get_option( "address"); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="header-down">
        <div class="container">
            <div class="d-none d-lg-block">
                <?php wp_nav_menu(['menu'=>'main']); ?>
            </div>
            <div class="row d-lg-none">
                <div class="col-4 text-left">
                    <a href="#" class="menu_open">
                        <i class="fa fa-bars"></i> Меню
                    </a>
                </div>
                <div class="col-8 text-right">
                    <a href="tel: <?php echo ot_get_option( "phone_header"); ?>" class="mob-header-phone">
                        <i class="fa fa-phone"></i> <?php echo ot_get_option( "phone_header"); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-menu">
    <div class="container">
        <div class="mobile-menu-controls">
            <div class="row">
                <div class="col-8">
                    <img src="<?php echo ot_get_option( "logo"); ?>" alt="stonegrad">
                </div>
                <div class="col-4">
                    <a href="#" class="close_menu"><i class="fa fa-times"></i></a>
                </div>
            </div>
        </div>
        <div class="mobile-menu-body">
            <?php wp_nav_menu(['menu'=>'main']); ?>
        </div>
    </div>
</div>