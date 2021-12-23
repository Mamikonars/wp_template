<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head() ?>
    <?php if (is_404()) : ?>
        <style>
            /* 404 page */
            .not-found {
                width: 100%;
                height: 300px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                margin-bottom: 55px;
            }

            .not-found_info {
                font-size: 55px;
                font-weight: 600;
                line-height: 3;
                text-align: center;
            }

            .not-found_description {
                font-size: 33px;
                text-align: center;
            }

            .home {
                height: 140px;
                margin-bottom: 30px;
            }
        </style>
    <?php endif ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <div class="homepage" id="home">
            <header class="container-layout" id="header">
                <?php if (has_custom_logo()) {
                    the_custom_logo();
                } ?>
                <nav class="header__nav nav-bar">
                    <div class="toggle-menu">
                        <div class="line line1"></div>
                        <div class="line line2"></div>
                        <div class="line line3"></div>
                    </div>
                    <!-- <ul class="nav-list">
                        <li class="nav-list__item">
                            <a href="#home" class="nav-list__link">Home</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="#offer" class="nav-list__link">What We Offer</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="#gallery" class="nav-list__link">Gallery</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="#crew" class="nav-list__link">About Us</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="#testimonials" class="nav-list__link">Testimonials</a>
                        </li>
                        <li class="nav-list__item">
                            <a href="#contact" class="nav-list__link">Contact Us</a>
                        </li>
                    </ul> -->
                    <?php
                    $locations = get_nav_menu_locations();
                    $menu_id = $locations['header_menu'];
                    $menu_items = wp_get_nav_menu_items($menu_id);
                    $http_s = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 's' : '') . '://';
                    $url = $http_s . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                    if ($menu_items) :
                    ?>
                        <ul class="nav-list">
                            <?php foreach ($menu_items as $item) :
                            ?>
                                <li class="nav-list__item">
                                    <a href="<?php echo $item->url ?>" class="nav-list__link"><?php echo $item->title ?></a>
                                </li>
                            <?php endforeach ?>
                            <ul><?php pll_the_languages(array('show_flags' => 1, 'show_names' => 0)); ?></ul>
                        </ul>
                    <?php endif ?>

                </nav>
            </header>