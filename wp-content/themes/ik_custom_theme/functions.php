<?php

define ('theme_dir', get_stylesheet_directory_uri());

// Registratie van de CSS
function fs_enqueue_css(){
  wp_enqueue_style('reset', 'https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css');
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  // Registratie van specifieke CSS'en
  if (is_page('home')){
    wp_enqueue_style('fs', theme_dir.'/assets/css/splash.css');
  }
}

add_action('wp_enqueue_scripts', 'fs_enqueue_css');

function ik_theme_setup() {
  register_nav_menus( array(
    'header' => 'Header menu',
    'footer' => 'Footer menu'
  ) );
 }

add_action( 'after_setup_theme', 'ik_theme_setup' );

// allow post thumbnails
add_theme_support('post-thumbnails');

?>
