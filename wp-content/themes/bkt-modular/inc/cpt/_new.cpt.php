<?php

function create_new_post_type() {
    $labels = array(
        'name'               => _x( 'News', 'post type general name' ),
        'singular_name'      => _x( 'New', 'post type singular name' ),
        'menu_name'          => _x( 'News', 'admin menu' ),
        'name_admin_bar'     => _x( 'News', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'news' ),
        'add_new_item'       => __( 'Add New New' ),
        'new_item'           => __( 'New New' ),
        'edit_item'          => __( 'Edit New' ),
        'view_item'          => __( 'View New' ),
        'all_items'          => __( 'All News' ),
        'search_items'       => __( 'Search News' ),
        'parent_item_colon'  => __( 'Parent News:' ),
        'not_found'          => __( 'No news found.' ),
        'not_found_in_trash' => __( 'No news found in Trash.' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'new' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'menu_icon'          => 'dashicons-megaphone',
    );

    register_post_type( 'new', $args );
}
add_action( 'init', 'create_new_post_type' );
