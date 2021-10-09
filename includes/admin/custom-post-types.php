<?php
/**
 * custom-post-types.php
 */

function musicrelease_create_post_types() {
    
    /**
    *   RELEASE
    */  
    $labels = array(
        'name'               => _x( 'Releases', 'post type general name', 'rolodoom' ),
        'singular_name'      => _x( 'Release', 'post type singular name', 'rolodoom' ),
        'menu_name'          => _x( 'Releases', 'admin menu', 'rolodoom' ),
        'name_admin_bar'     => _x( 'Release', 'add new on admin bar', 'rolodoom' ),
        'add_new'            => _x( 'Add New', 'release', 'rolodoom' ),
        'add_new_item'       => __( 'Add New Release', 'rolodoom' ),
        'new_item'           => __( 'New Release', 'rolodoom' ),
        'edit_item'          => __( 'Edit Release', 'rolodoom' ),
        'view_item'          => __( 'View Release', 'rolodoom' ),
        'all_items'          => __( 'All Releases', 'rolodoom' ),
        'search_items'       => __( 'Search Releases', 'rolodoom' ),
        'parent_item_colon'  => __( 'Parent Releases:', 'rolodoom' ),
        'not_found'          => __( 'No releases found.', 'rolodoom' ),
        'not_found_in_trash' => __( 'No releases found in Trash.', 'rolodoom' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'rolodoom' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'release' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		'menu_icon'          => 'dashicons-media-audio',
    );

    register_post_type( 'release', $args );	

} 

add_action( 'init', 'musicrelease_create_post_types');