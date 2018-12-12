<?php
/*
Plugin Name: NIET_VERWIJDEREN_IK_SSP_register_custom_taxonomies
*/
function ik_create_time_taxonomy() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Tijdsvakken', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Tijdsvak', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Zoek Tijdsvakken', 'textdomain' ),
		'all_items'         => __( 'Alle Tijdsvakken', 'textdomain' ),
		'parent_item'       => __( 'Bovenliggend Tijdsvak', 'textdomain' ),
		'parent_item_colon' => __( 'Bovenliggend Tijdsvak:', 'textdomain' ),
		'edit_item'         => __( 'Bewerk Tijdsvak', 'textdomain' ),
		'update_item'       => __( 'Update Tijdsvak', 'textdomain' ),
		'add_new_item'      => __( 'Voeg nieuw Tijdsvak toe', 'textdomain' ),
		'new_item_name'     => __( 'Nieuwe Tijdsvak naam', 'textdomain' ),
		'menu_name'         => __( 'Tijdsvak', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'tijdsvak' ),
	);

	register_taxonomy( 'tijdsvakken', array( 'sessies' ), $args );
};

function ik_create_round_taxonomy() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Rondes', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Ronde', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Zoek Rondes', 'textdomain' ),
		'all_items'         => __( 'Alle Rondes', 'textdomain' ),
		'parent_item'       => __( 'Bovenliggende Ronde', 'textdomain' ),
		'parent_item_colon' => __( 'Bovenliggende Ronde:', 'textdomain' ),
		'edit_item'         => __( 'Bewerk Ronde', 'textdomain' ),
		'update_item'       => __( 'Update Ronde', 'textdomain' ),
		'add_new_item'      => __( 'Voeg nieuw Ronde toe', 'textdomain' ),
		'new_item_name'     => __( 'Nieuwe Ronde naam', 'textdomain' ),
		'menu_name'         => __( 'Ronde', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'ronde'),
	);

	register_taxonomy( 'rondes', array( 'sessies' ), $args );
};

function ik_create_target_audience_taxonomy() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Doelgroepen', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Doelgroep', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Zoek Doelgroepen', 'textdomain' ),
		'all_items'         => __( 'Alle Doelgroepen', 'textdomain' ),
		'parent_item'       => __( 'Bovenliggende Doelgroep', 'textdomain' ),
		'parent_item_colon' => __( 'Bovenliggend Doelgroep:', 'textdomain' ),
		'edit_item'         => __( 'Bewerk Doelgroep', 'textdomain' ),
		'update_item'       => __( 'Update Doelgroep', 'textdomain' ),
		'add_new_item'      => __( 'Voeg nieuw Doelgroep toe', 'textdomain' ),
		'new_item_name'     => __( 'Nieuwe Doelgroep naam', 'textdomain' ),
		'menu_name'         => __( 'Doelgroep', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'doelgoep'),
	);

	register_taxonomy( 'doelgroepen', array( 'sessies' ), $args );
};

function ik_create_location_taxonomy() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Locaties', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Locatie', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Zoek Locaties', 'textdomain' ),
		'all_items'         => __( 'Alle Locaties', 'textdomain' ),
		'parent_item'       => __( 'Bovenliggend Locatie', 'textdomain' ),
		'parent_item_colon' => __( 'Bovenliggend Locatie:', 'textdomain' ),
		'edit_item'         => __( 'Bewerk Locatie', 'textdomain' ),
		'update_item'       => __( 'Update Locatie', 'textdomain' ),
		'add_new_item'      => __( 'Voeg nieuw Locatie toe', 'textdomain' ),
		'new_item_name'     => __( 'Nieuwe Locatie naam', 'textdomain' ),
		'menu_name'         => __( 'Locatie', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'locatie'),
	);

	register_taxonomy( 'locaties', array( 'sessies' ), $args );
};

function ik_create_session_type_taxonomy() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Sessie Types', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Sessie Type', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Zoek Sessie Types', 'textdomain' ),
		'all_items'         => __( 'Alle Sessie Types', 'textdomain' ),
		'parent_item'       => __( 'Bovenliggend Sessie Type', 'textdomain' ),
		'parent_item_colon' => __( 'Bovenliggend Sessie Type:', 'textdomain' ),
		'edit_item'         => __( 'Bewerk Sessie Type', 'textdomain' ),
		'update_item'       => __( 'Update Sessie Type', 'textdomain' ),
		'add_new_item'      => __( 'Voeg nieuw Sessie Type toe', 'textdomain' ),
		'new_item_name'     => __( 'Nieuwe Sessie Type naam', 'textdomain' ),
		'menu_name'         => __( 'Sessie Type', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'sessie_type'),
	);

	register_taxonomy( 'sessie_types', array( 'sessies' ), $args );
};

add_action('init', 'ik_create_time_taxonomy');
add_action('init', 'ik_create_round_taxonomy');
add_action('init', 'ik_create_target_audience_taxonomy');
add_action('init', 'ik_create_location_taxonomy');
add_action('init', 'ik_create_session_type_taxonomy');

?>
