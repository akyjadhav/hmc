<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo"
                    class="me-2 navbar-brand">
            </a>

            <nav id="navmenu" class="navmenu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                    'menu_id' => '',
                    'fallback_cb' => false,
                    'walker' => new Custom_Nav_Walker(), // We'll define this next
                ]);
                ?>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                <ul class="navbar-nav">
                    <li class="menu-item search-toggle">
                        <form id="search-form" role="search" method="get" action="<?php echo home_url('/'); ?>">
                            <input type="search" name="s" placeholder="Search...">
                            <span id="search-icon"><i class="fas fa-search"></i></span>
                        </form>
                    </li>
                </ul>
            </nav>

        </div>
    </header>
