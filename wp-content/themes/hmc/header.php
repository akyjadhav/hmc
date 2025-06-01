<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-lg navbar-dark header">
        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo" 
                    class="me-2 navbar-brand">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
                    'container' => false
                ));
                ?>
                <ul class="navbar-nav">
                    <li class="menu-item search-toggle">
                        <form id="search-form" role="search" method="get" action="<?php echo home_url('/'); ?>">
                            <input type="search" name="s" placeholder="Search...">
                            <span id="search-icon"><i class="fas fa-search"></i></span>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>