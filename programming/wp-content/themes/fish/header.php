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
                <a class="logo" href="/"><?php echo get_bloginfo('name'); ?></a>
            </div>
        </div>
        <div class="nav-scroller py-1 mb-2 row">
            <div class="col-12">
                <?php
                $menuParameters = [
                    'theme_location' => 'menu-1',
                    'menu' => 'main',
                    'container' => false,
                    'echo' => false,
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'main-nav nav d-flex justify-content-center',
                    'menu_id' => 'primary-menu',
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'depth' => 0,
                    'add_li_class' => 'main-nav__element p-md-3 p-sm-2 p-1'
                ];
                echo wp_nav_menu($menuParameters);
                ?>
            </div>
        </div>
    </div>
</header>
<main>