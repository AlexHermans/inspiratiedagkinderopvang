<?php
/*
Plugin Name: NIET_VERWIJDEREN_IK_SSP_register_custom_post_types
*/

  function ik_create_post_type_session(){
      $labels = array(
        'name'                => _x( 'Sessies', 'Post Type General Name', 'ik_custom_theme' ),
        'singular_name'       => _x( 'Sessie', 'Post Type Singular Name', 'ik_custom_theme' ),
        'menu_name'           => __( 'Sessies', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Bovenliggende Sessie', 'ik_custom_theme' ),
        'all_items'           => __( 'Alle Sessies', 'ik_custom_theme' ),
        'view_item'           => __( 'Bekijk Sessie', 'ik_custom_theme' ),
        'add_new_item'        => __( 'Nieuwe Sessie', 'ik_custom_theme' ),
        'add_new'             => __( 'Nieuw', 'ik_custom_theme' ),
        'edit_item'           => __( 'Bewerk Sessie', 'ik_custom_theme' ),
        'update_item'         => __( 'Update Sessie', 'ik_custom_theme' ),
        'search_items'        => __( 'Zoek Sessie', 'ik_custom_theme' ),
        'not_found'           => __( 'Niet gevonden', 'ik_custom_theme' ),
        'not_found_in_trash'  => __( 'Niet gevonden in Prullenbak', 'ik_custom_theme' ),
        );

      $args = array(
    		'labels'             => $labels,
        'description'        => __( 'Description.', 'Afzonderlijke sessies' ),
    		'public'             => true,
    		'publicly_queryable' => true,
    		'show_ui'            => true,
    		'show_in_menu'       => true,
    		'query_var'          => true,
    		'rewrite'            => array( 'slug' => 'sessie' ),
    		'capability_type'    => 'post',
    		'has_archive'        => true,
    		'hierarchical'       => false,
    		'menu_position'      => null,
        'taxonomies'         => array('category'),
    		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
      );

    register_post_type('sessie',$args);
  }

  function ik_create_post_type_praktijk(){
      $labels = array(
        'name'                => _x( 'Praktijken', 'Post Type General Name', 'ik_custom_theme' ),
        'singular_name'       => _x( 'Praktijk', 'Post Type Singular Name', 'ik_custom_theme' ),
        'menu_name'           => __( 'Praktijken', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Bovenliggende Praktijk', 'ik_custom_theme' ),
        'all_items'           => __( 'Alle Praktijken', 'ik_custom_theme' ),
        'view_item'           => __( 'Bekijk Praktijk', 'ik_custom_theme' ),
        'add_new_item'        => __( 'Nieuwe Praktijk', 'ik_custom_theme' ),
        'add_new'             => __( 'Nieuw', 'ik_custom_theme' ),
        'edit_item'           => __( 'Bewerk Praktijk', 'ik_custom_theme' ),
        'update_item'         => __( 'Update Praktijk', 'ik_custom_theme' ),
        'search_items'        => __( 'Zoek Praktijk', 'ik_custom_theme' ),
        'not_found'           => __( 'Niet gevonden', 'ik_custom_theme' ),
        'not_found_in_trash'  => __( 'Niet gevonden in Prullenbak', 'ik_custom_theme' ),
        );

      $args = array(
    		'labels'             => $labels,
        'description'        => __( 'Description.', 'Afzonderlijke sessies' ),
    		'public'             => true,
    		'publicly_queryable' => true,
    		'show_ui'            => true,
    		'show_in_menu'       => true,
    		'query_var'          => true,
    		'rewrite'            => array( 'slug' => 'praktijk' ),
    		'capability_type'    => 'post',
    		'has_archive'        => true,
    		'hierarchical'       => false,
    		'menu_position'      => null,
        'taxonomies'         => array('category'),
    		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
      );

    register_post_type('praktijk',$args);
  }

  function ik_create_post_type_wistjedatje(){
      $labels = array(
        'name'                => _x( 'Wistjedatjes', 'Post Type General Name', 'ik_custom_theme' ),
        'singular_name'       => _x( 'Wistjedatje', 'Post Type Singular Name', 'ik_custom_theme' ),
        'menu_name'           => __( 'Wistjedatjes', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Bovenliggende Wistjedatje', 'ik_custom_theme' ),
        'all_items'           => __( 'Alle Wistjedatjes', 'ik_custom_theme' ),
        'view_item'           => __( 'Bekijk Wistjedatje', 'ik_custom_theme' ),
        'add_new_item'        => __( 'Nieuwe Wistjedatje', 'ik_custom_theme' ),
        'add_new'             => __( 'Nieuw', 'ik_custom_theme' ),
        'edit_item'           => __( 'Bewerk Wistjedatje', 'ik_custom_theme' ),
        'update_item'         => __( 'Update Wistjedatje', 'ik_custom_theme' ),
        'search_items'        => __( 'Zoek Wistjedatje', 'ik_custom_theme' ),
        'not_found'           => __( 'Niet gevonden', 'ik_custom_theme' ),
        'not_found_in_trash'  => __( 'Niet gevonden in Prullenbak', 'ik_custom_theme' ),
        );

      $args = array(
    		'labels'             => $labels,
        'description'        => __( 'Description.', 'Wist je dat je' ),
    		'public'             => true,
    		'publicly_queryable' => true,
    		'show_ui'            => true,
    		'show_in_menu'       => true,
    		'query_var'          => true,
    		'rewrite'            => array( 'slug' => 'wistjedatje' ),
    		'capability_type'    => 'post',
    		'has_archive'        => true,
    		'hierarchical'       => false,
    		'menu_position'      => null,
        'taxonomies'         => array('category'),
    		'supports'           => array( 'title', 'editor', 'author' )
      );

    register_post_type('wistjedatje',$args);
  }

  add_action('init', 'ik_create_post_type_session');
  add_action('init', 'ik_create_post_type_praktijk');
  add_action('init', 'ik_create_post_type_wistjedatje');

?>
