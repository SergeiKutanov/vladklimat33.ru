<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.topbar.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.offcanvas.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.equalizer.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.accordion.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Russo+One&subset=cyrillic' rel='stylesheet' type='text/css'>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
</head>
<body>

<!--Navigation-->
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <div class="show-for-small">
            <nav class="tab-bar">
                <section class="left-small">
                    <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
                </section>
                <section class="middle tab-bar-section">
                    <span class="title">Меню</span>
                </section>
            </nav>
            <!-- Off Canvas Menu -->
            <aside class="left-off-canvas-menu">
                <!-- whatever you want goes here -->
                <?php
                wp_nav_menu(
                    array(
                        'sort_column'       => 'menu_order',
                        'container'         => false,
                        'menu_class'        => 'off-canvas-list',
                        'theme-location'    => 'primary-menu',
                        'walker'            => new Top_Menu_Walker()
                    )
                );
                ?>
            </aside>
        </div>

        <div id="header" class="contain-to-grid sticky">
            <div id="header-contact">
                <div class="row">
                    <div class="small-12 medium-4 columns">
                        <p class="org-name">Норд</p>
                        <h1 class="org-name show-for-small-only">Установка кондционеров</h1>
                        <p id="org-address">г. Владимир<br>ул. Безыменского, д. 17г</p>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <div class="row">
                            <div class="small-12 medium-6 columns">
                                <p id="org-phone">
                                    <span>Телефон</span>
                                </p>
                                <p class="header-contact-data"><a href="tel:89206280088">8(920)628-00-88</a></p>
                                <ul>
                            </div>
                            <div class="small-12 medium-6 columns">
                                <p id="org-phone">
                                    <span>Email</span>
                                </p>
                                <p class="header-contact-data"><a href="mailto:pigmalionus@mail.ru">pigmalionus@mail.ru</a></p>
                                <ul>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 medium-2 columns hide-for-small">
                        <ul id="brands" class="small-block-grid-">
                            <li id="dantex"><img src="<?php bloginfo('template_url'); ?>/img/dantex.png"></li>
                            <li id="electrolux"><img src="<?php bloginfo('template_url'); ?>/img/electrolux.png""/></li>
                            <li id="ballu"><img src="<?php bloginfo('template_url'); ?>/img/ballu.png""/></li>
                        </ul>
                    </div>
                </div>
                <div class="row hide-for-small">
                    <div class="small-12 columns">
                        <nav class="top-bar" data-topbar data-options="sticky_on: large">
                            <section class="top-bar-section">
                                <?php wp_nav_menu(
                                    array(
                                        'sort_column'   => 'menu_order',
                                        'container'     => false,
                                        'menu_class'    => 'right',
                                        'theme_location'=> 'primary-menu',
                                        'menu_id'       => 'top-menu',
                                        'walker'        => new Top_Menu_Walker()
                                    )
                                ); ?>
                            </section>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="header_bg" class="hide-for-small">
                <div id="header-banner">
                    <div id="banner-info">
                        <p><span>СКИДКИ</span> оптовикам и установщикам</p>
                        <p id="banner-second"><span>УСТАНОВКА</span><br>от 6000 р.</p>
                    </div>
                </div>
<!--                <div class="row">-->
<!--                    <nav class="top-bar" data-topbar data-options="sticky_on: large">-->
<!--                        <section class="top-bar-section">-->
<!--                            --><?php //wp_nav_menu(
//                                array(
//                                    'sort_column'   => 'menu_order',
//                                    'container'     => false,
//                                    'menu_class'    => 'right',
//                                    'theme_location'=> 'primary-menu',
//                                    'menu_id'       => 'top-menu',
//                                    'walker'        => new Top_Menu_Walker()
//                                )
//                            ); ?>
<!--                        </section>-->
<!--                    </nav>-->
<!--                </div>-->
                <div class="row">
                    <span id="header_teaser">Установка кондиционеров <br><span>во Владимире</span></span>
                </div>
            </div>
        </div>