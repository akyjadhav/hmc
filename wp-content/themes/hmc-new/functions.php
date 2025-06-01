<?php

function hmc_theme_setup() {
    add_theme_support('menus'); 
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
    wp_enqueue_script('jquery');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
    wp_enqueue_style('aos-css', get_stylesheet_directory_uri() . '/assets/vendor/aos/aos.css');
    wp_enqueue_style('all-css', get_stylesheet_directory_uri() . '/assets/vendor/fontawesome-free/css/all.min.css');
    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css');
    wp_enqueue_style('hmc-style', get_stylesheet_uri());
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
    wp_enqueue_script('search-toggle', get_stylesheet_directory_uri() . '/assets/vendor/aos/aos.js');
    wp_enqueue_script('swiper-bundle', get_stylesheet_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js');
    wp_enqueue_script('purecounter_vanilla', get_stylesheet_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js');
    wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/assets/js/custom.js');
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js');

}
add_action('wp_enqueue_scripts', 'hmc_enqueue_assets');

function hmc_enqueue_jquery() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'hmc_enqueue_jquery');

class Custom_Nav_Walker extends Walker_Nav_Menu {
  public function start_lvl( &$output, $depth = 0, $args = null ) {
      $indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul>\n";
  }

  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
      $classes = empty($item->classes) ? [] : (array) $item->classes;

      // Add dropdown class
      if (in_array('menu-item-has-children', $classes)) {
          $classes[] = 'dropdown';
      }

      $class_names = join(' ', array_filter($classes));
      $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

      $output .= "<li{$class_names}>";

      $attributes  = !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
      $title = apply_filters('the_title', $item->title, $item->ID);

      $output .= '<a' . $attributes . '>';
      $output .= $title;

      // Add icon if item has children
      if (in_array('menu-item-has-children', $classes)) {
          $output .= ' <i class="bi bi-chevron-down toggle-dropdown"></i>';
      }

      $output .= '</a>';
  }

  public function end_el( &$output, $item, $depth = 0, $args = null ) {
      $output .= "</li>\n";
  }

  public function end_lvl( &$output, $depth = 0, $args = null ) {
      $output .= "</ul>\n";
  }
}

function theme_register_menus() {
  register_nav_menus([
      'primary' => __('Primary Menu', 'your-theme-textdomain'),
      'footer_menu' => __('Footer Menu', 'your-theme-textdomain'),
  ]);
}
add_action('after_setup_theme', 'theme_register_menus');
