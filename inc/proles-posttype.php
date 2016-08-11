<?php

add_action('init', 'proles_addposttype');

function proles_addposttype(){
	$labels = array(
		'name'               => _x( 'Lyrics', 'post type general name', 'the-proletariat' ),
		'singular_name'      => _x( 'Lyric', 'post type singular name', 'the-proletariat' ),
		'menu_name'          => _x( 'Lyrics', 'admin menu', 'the-proletariat' ),
		'name_admin_bar'     => _x( 'Lyric', 'add new on admin bar', 'the-proletariat' ),
		'add_new'            => _x( 'Add New', 'lyric', 'the-proletariat' ),
		'add_new_item'       => __( 'Add New Lyric', 'the-proletariat' ),
		'new_item'           => __( 'New Lyric', 'the-proletariat' ),
		'edit_item'          => __( 'Edit Lyric', 'the-proletariat' ),
		'view_item'          => __( 'View Lyric', 'the-proletariat' ),
		'all_items'          => __( 'All Lyrics', 'the-proletariat' ),
		'search_items'       => __( 'Search Lyrics', 'the-proletariat' ),
		'parent_item_colon'  => __( 'Parent Lyrics:', 'the-proletariat' ),
		'not_found'          => __( 'No lyrics found.', 'the-proletariat' ),
		'not_found_in_trash' => __( 'No lyrics found in Trash.', 'the-proletariat' )
	);
	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'the-proletariat' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'lyric' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);
	register_post_type('lyric', $args);


	$labels = array(
		'name'               => _x( 'Reviews', 'post type general name', 'the-proletariat' ),
		'singular_name'      => _x( 'Review', 'post type singular name', 'the-proletariat' ),
		'menu_name'          => _x( 'Reviews', 'admin menu', 'the-proletariat' ),
		'name_admin_bar'     => _x( 'Review', 'add new on admin bar', 'the-proletariat' ),
		'add_new'            => _x( 'Add New', 'review', 'the-proletariat' ),
		'add_new_item'       => __( 'Add New Review', 'the-proletariat' ),
		'new_item'           => __( 'New Review', 'the-proletariat' ),
		'edit_item'          => __( 'Edit Review', 'the-proletariat' ),
		'view_item'          => __( 'View Review', 'the-proletariat' ),
		'all_items'          => __( 'All Reviews', 'the-proletariat' ),
		'search_items'       => __( 'Search Reviews', 'the-proletariat' ),
		'parent_item_colon'  => __( 'Parent Reviews:', 'the-proletariat' ),
		'not_found'          => __( 'No reviews found.', 'the-proletariat' ),
		'not_found_in_trash' => __( 'No reviews found in Trash.', 'the-proletariat' )
	);
	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'the-proletariat' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'review' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);
	register_post_type('review', $args);


	$labels = array(
		'name'               => _x( 'Flyers', 'post type general name', 'the-proletariat' ),
		'singular_name'      => _x( 'Flyer', 'post type singular name', 'the-proletariat' ),
		'menu_name'          => _x( 'Flyers', 'admin menu', 'the-proletariat' ),
		'name_admin_bar'     => _x( 'Flyer', 'add new on admin bar', 'the-proletariat' ),
		'add_new'            => _x( 'Add New', 'flyer', 'the-proletariat' ),
		'add_new_item'       => __( 'Add New Flyer', 'the-proletariat' ),
		'new_item'           => __( 'New Flyer', 'the-proletariat' ),
		'edit_item'          => __( 'Edit Flyer', 'the-proletariat' ),
		'view_item'          => __( 'View Flyer', 'the-proletariat' ),
		'all_items'          => __( 'All Flyers', 'the-proletariat' ),
		'search_items'       => __( 'Search Flyers', 'the-proletariat' ),
		'parent_item_colon'  => __( 'Parent Flyers:', 'the-proletariat' ),
		'not_found'          => __( 'No flyers found.', 'the-proletariat' ),
		'not_found_in_trash' => __( 'No flyers found in Trash.', 'the-proletariat' )
	);
	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'the-proletariat' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'flyer' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);
	register_post_type('flyer', $args);


	$labels = array(
		'name'                  => _x( 'Shows', 'Post Type General Name', 'the-proletariat' ),
		'singular_name'         => _x( 'Show', 'Post Type Singular Name', 'the-proletariat' ),
		'menu_name'             => __( 'Shows', 'the-proletariat' ),
		'name_admin_bar'        => __( 'Post Type', 'the-proletariat' ),
		'archives'              => __( 'Item Archives', 'the-proletariat' ),
		'parent_item_colon'     => __( 'Parent Item:', 'the-proletariat' ),
		'all_items'             => __( 'All Items', 'the-proletariat' ),
		'add_new_item'          => __( 'Add New Item', 'the-proletariat' ),
		'add_new'               => __( 'Add New', 'the-proletariat' ),
		'new_item'              => __( 'New Item', 'the-proletariat' ),
		'edit_item'             => __( 'Edit Item', 'the-proletariat' ),
		'update_item'           => __( 'Update Item', 'the-proletariat' ),
		'view_item'             => __( 'View Item', 'the-proletariat' ),
		'search_items'          => __( 'Search Item', 'the-proletariat' ),
		'not_found'             => __( 'Not found', 'the-proletariat' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'the-proletariat' ),
		'featured_image'        => __( 'Featured Image', 'the-proletariat' ),
		'set_featured_image'    => __( 'Set featured image', 'the-proletariat' ),
		'remove_featured_image' => __( 'Remove featured image', 'the-proletariat' ),
		'use_featured_image'    => __( 'Use as featured image', 'the-proletariat' ),
		'insert_into_item'      => __( 'Insert into item', 'the-proletariat' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'the-proletariat' ),
		'items_list'            => __( 'Items list', 'the-proletariat' ),
		'items_list_navigation' => __( 'Items list navigation', 'the-proletariat' ),
		'filter_items_list'     => __( 'Filter items list', 'the-proletariat' ),
	);
	$args = array(
		'label'                 => __( 'Show', 'the-proletariat' ),
		'labels'                => $labels,
		'supports'              => array( ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'show', $args );

}