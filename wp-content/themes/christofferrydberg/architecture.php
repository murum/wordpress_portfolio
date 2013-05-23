<?php

// register the project post type
function register_project() {
	$labels = array(
		'name' => 'Projekt',
		'singular_name' => 'Projekt',
		'add_new' => 'Skapa nytt',
		'add_new_item' => 'Skapa nytt Projekt',
		'edit_item' => 'Editera Projekt',
		'new_item' => 'Nytt Projekt',
		'all_items' => 'Alla Projekt',
		'view_item' => 'Visa Projekt',
		'search_items' => 'Sök Projekt',
		'not_found' =>  'Inga Projekt finns',
		'not_found_in_trash' => 'Inga Projekt i papperskorgen', 
		'parent_item_colon' => '',
		'menu_name' => 'Projekt'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 15,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
	); 
	register_post_type('Projekt', $args);
}
add_action('init', 'register_project');

// Add new taxonomy, make it hierarchical (like categories)
function register_project_type() {
	$labels = array(
		'name'                => 'Typer',
		'singular_name'       => 'Typ',
		'search_items'        => 'Sök Typer',
		'all_items'           => 'Alla Typer',
		'parent_item'         => 'Förälder Typ',
		'parent_item_colon'   => 'Förälder Typ:',
		'edit_item'           => 'Redigera Typ', 
		'update_item'         => 'Uppdatera Typ',
		'add_new_item'        => 'Skapa ny Typ',
		'new_item_name'       => 'Nytt Typnamn',
		'menu_name'           => 'Typ'
	); 	

	$args = array(
		'hierarchical'        => true,
		'labels'              => $labels,
		'show_ui'             => true,
		'show_admin_column'   => true,
		'query_var'           => true,
		'rewrite'             => array( 'slug' => 'typ' )
	);

	register_taxonomy( 'typ', array( 'projekt' ), $args );
}
add_action('init', 'register_project_type');

// Add new taxonomy for used technique
function register_project_technique() {
	$labels = array(
		'name'                => 'Tekniker',
		'singular_name'       => 'Teknik',
		'search_items'        => 'Sök teknik',
		'all_items'           => 'Alla tekniker',
		'parent_item'         => 'Förälder teknik',
		'parent_item_colon'   => 'Förälder teknik:',
		'edit_item'           => 'Redigera teknik', 
		'update_item'         => 'Uppdatera teknik',
		'add_new_item'        => 'Skapa ny teknik',
		'new_item_name'       => 'Nytt tekniknamn',
		'menu_name'           => 'Teknik'
	); 	

	$args = array(
		'hierarchical'        => true,
		'labels'              => $labels,
		'show_ui'             => true,
		'show_admin_column'   => true,
		'query_var'           => true,
		'rewrite'             => array( 'slug' => 'teknik' )
	);

	register_taxonomy( 'teknik', array( 'projekt' ), $args );
}
add_action('init', 'register_project_technique');