<?php

function hmc_theme_setup() {
    add_theme_support('menus'); // Enables menu support
	register_nav_menus(array(
        'primary' => __('Primary Menu', 'hmc'),
    ));
	register_nav_menus([
		'footer_menu' => __('Footer Menu', 'hmc'),
	]);
}
add_action('after_setup_theme', 'hmc_theme_setup');
add_theme_support('post-thumbnails');

function hmc_enqueue_assets() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('search-toggle', get_stylesheet_directory_uri() . '/assets/js/custom.js');
    wp_enqueue_style('hmc-style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'hmc_enqueue_assets');

function hmc_enqueue_jquery() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'hmc_enqueue_jquery');

function add_bootstrap_classes_to_menu($classes, $item, $args) {
	if ($args->theme_location === 'primary') {
	  $classes[] = 'nav-item';
	}
	return $classes;
  }
  add_filter('nav_menu_css_class', 'add_bootstrap_classes_to_menu', 10, 3);
  
  function add_bootstrap_link_class($atts, $item, $args) {
	if ($args->theme_location === 'primary') {
	  $atts['class'] = 'nav-link';
	}
	return $atts;
  }
  add_filter('nav_menu_link_attributes', 'add_bootstrap_link_class', 10, 3);
  
  function hmc_add_dropdown_icon($title, $item, $args, $depth) {
    if (in_array('menu-item-has-children', $item->classes) && $args->theme_location === 'primary') {
		$title .= ' <i class="fas fa fa-angle-down"></i>';
	}
    return $title;
}
add_filter('nav_menu_item_title', 'hmc_add_dropdown_icon', 10, 4);