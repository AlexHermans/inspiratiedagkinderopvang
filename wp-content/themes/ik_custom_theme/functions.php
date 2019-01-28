<?php

define ('theme_dir', get_stylesheet_directory_uri());

// Registratie van de CSS
function ik_enqueue_css(){
  wp_enqueue_style('reset', 'https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css');
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  // Registratie van specifieke CSS'en
  if (is_page('home')){
    wp_enqueue_style('fs', theme_dir.'/assets/css/splash.css');
  }
}

add_action('wp_enqueue_scripts', 'ik_enqueue_css');

// Initiatie van de menu's
function ik_theme_setup() {
  register_nav_menus( array(
    'header' => 'Header menu',
    'footer' => 'Footer menu'
  ) );
 }

add_action( 'after_setup_theme', 'ik_theme_setup' );

// allow post thumbnails
add_theme_support('post-thumbnails');

//originele categorie taxonomy van naam verwisselen
function revcon_change_cat_label() {
    global $submenu;
    $submenu['edit.php'][15][0] = 'Doelgroepen'; // Rename categories to Authors
}
add_action( 'admin_menu', 'revcon_change_cat_label' );

function revcon_change_cat_object() {
    global $wp_taxonomies;
    $labels = &$wp_taxonomies['category']->labels;
    $labels->name = 'Doelgroepen';
    $labels->singular_name = 'Doelgroep';
    $labels->add_new = 'Add Doelgroep';
    $labels->add_new_item = 'Add Doelgroep';
    $labels->edit_item = 'Edit Doelgroep';
    $labels->new_item = 'Author';
    $labels->view_item = 'View Doelgroep';
    $labels->search_items = 'Search Doelgroep';
    $labels->not_found = 'No Doelgroep found';
    $labels->not_found_in_trash = 'No Doelgroep found in Trash';
    $labels->all_items = 'All Doelgroep';
    $labels->menu_name = 'Doelgroep';
    $labels->name_admin_bar = 'Doelgroep';
}
add_action( 'init', 'revcon_change_cat_object' );

// Registratie van scripts
function ik_enqueue_scripts(){

  wp_enqueue_script('cookies', "https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js");

  wp_enqueue_script('ajax_cfas', theme_dir.'/assets/js/ajax/choose-from-all-sessions.ajax.js', array('jquery'));
  wp_localize_script('ajax_cfas', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));

  wp_enqueue_script('ajax_enroll', theme_dir.'/assets/js/ajax/enroll.ajax.js', array('jquery'));
  wp_localize_script('ajax_enroll', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));

  wp_enqueue_script('ajax_filter', theme_dir.'/assets/js/ajax/filter.ajax.js', array('jquery'));
  wp_localize_script('ajax_filter', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));

  wp_enqueue_script('ajax_search', theme_dir.'/assets/js/ajax/search.ajax.js', array('jquery'));
  wp_localize_script('ajax_search', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'ik_enqueue_scripts');

// AJAX functions
function ik_ajax_cfas(){
  $ronde_id = $_REQUEST['ronde_id'];

  $args =
  array(
    'tax_query' => array(
      array(
        'taxonomy' => 'rondes',
        'field' => 'slug',
        'terms' => 'ronde-'.$ronde_id
      ),
    ),
    'post_type' => 'sessie',
    'post_status' => 'publish'
  );

  set_query_var('args', $args);
  get_template_part('template-parts/session', 'cfas');

  die();
}

add_action('wp_ajax_ik_ajax_cfas', 'ik_ajax_cfas');
add_action('wp_ajax_nopriv_ik_ajax_cfas', 'ik_ajax_cfas');

function ik_ajax_gsi(){
  $session_id = $_REQUEST['session_id'];

  $args = array(
    'post_type' => 'sessie',
    'post_status' => 'publish',
    'p' => $session_id,
  );

  set_query_var('args', $args);
  get_template_part('template-parts/session', 'gsi');

  die();
}

add_action('wp_ajax_ik_ajax_gsi', 'ik_ajax_gsi');
add_action('wp_ajax_nopriv_ik_ajax_gsi', 'ik_ajax_gsi');

function ik_ajax_enroll(){
  $to = $_REQUEST['to'];
  $subject = $_REQUEST['subject'];
  $body = $_REQUEST['body'];
  $headers = array('Content-Type: text/html; charset=UTF-8', 'Bcc:hanne.vannuffel@vvsg.be', 'Bcc:congres@vvsg.be');
  $headers = array('Content-Type: text/html; charset=UTF-8');

  if (wp_mail($to, $subject, $body, $headers)){
    echo '200';
  } else {
    echo 'Probleem: mail niet verstuurd';
  }

  die();
}

add_action('wp_ajax_ik_ajax_enroll', 'ik_ajax_enroll');
add_action('wp_ajax_nopriv_ik_ajax_enroll', 'ik_ajax_enroll');

function ik_ajax_filter(){

  $args = array(
    'tax_query' => $_REQUEST['filters'],
    'post_type' => 'sessie',
    'post_status' => 'publish'
  );

  set_query_var('args', $args);
  get_template_part('template-parts/session', 'all-sessions');

  die();
}

add_action('wp_ajax_ik_ajax_filter', 'ik_ajax_filter');
add_action('wp_ajax_nopriv_ik_ajax_filter', 'ik_ajax_filter');

function ik_ajax_search(){
  $args = array(
    's' => $_REQUEST['query'],
    'post_type' => 'sessie',
    'post_status' => 'publish'
  );

    set_query_var('args', $args);
    get_template_part('template-parts/session', 'all-sessions');

    die();
}

add_action('wp_ajax_ik_ajax_search', 'ik_ajax_search');
add_action('wp_ajax_nopriv_ik_ajax_search', 'ik_ajax_search');
?>
