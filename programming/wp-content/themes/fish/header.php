<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <title><?php the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
    <!-- Template Basic Images End -->

</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-12 text-center">
                <a class="logo" href="/">FISH.STORE</a>
            </div>
        </div>
        <div class="nav-scroller py-1 mb-2 row">
            <div class="col-12">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                ));
                ?>
                <nav class="main-nav nav d-flex justify-content-center">
                    <a class="main-nav__element p-md-3 p-sm-2 p-1 main-nav__element--active" href="/">Home</a>
                    <a class="main-nav__element p-md-3 p-sm-2 p-1" href="#products">Products</a>
                    <a class="main-nav__element p-md-3 p-sm-2 p-1" href="#delivery">Delivery</a>
                    <a class="main-nav__element p-md-3 p-sm-2 p-1" href="#contacts">Contacts</a>
                </nav>
            </div>
        </div>
    </div>
</header>
<main>