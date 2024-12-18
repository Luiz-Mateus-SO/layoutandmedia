<?php 
  function theme_scripts() {
    wp_register_script('modernizr', get_template_directory_uri() . '/js/libs/modernizr.custom.45655.js', [], false, true);
    wp_register_script('plugins', get_template_directory_uri() . '/js/plugins.js', [], false, true);
    wp_register_script('main', get_template_directory_uri() . '/js/main.js', ['jquery', 'plugins'], false, true);

    wp_enqueue_script('modernizr');
    wp_enqueue_script('main');
  }
  add_action('wp_enqueue_scripts', 'theme_scripts');

  function theme_css() {
    wp_register_style('theme-style', get_template_directory_uri() . '/style.css', [], false, false);
    wp_enqueue_style('theme-style');
  }
  add_action('wp_enqueue_scripts', 'theme_css');

  //Funções para Limpar o Header
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'start_post_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');

  // Habilitar Menus
  add_theme_support('menus');

  // Resgistrar Menu
  function register_my_menu() {
    register_nav_menu('menu-principal', __( 'Menu Principal', 'layout-and-media' ));
  }
  add_action( 'init', 'register_my_menu' );

  // Custom Image Sizes
  function my_custom_sizes() {
    add_image_size('large', 1400, 380, true);
    add_image_size('medium', 768, 380, true);
  }
  add_action('after_setup_theme', 'my_custom_sizes');
?>