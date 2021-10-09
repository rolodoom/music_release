<?php
/**
 *  custom-taxonomy.php
 */


// create custom taxonomies

function musicrelease_create_custom_taxonomies() {

    /**
    *   ENSEMBLE
    */
    $labels = array(
        'name'              => _x( 'Ensembles', 'taxonomy general name', 'rolodoom' ),
        'singular_name'     => _x( 'Ensemble', 'taxonomy singular name', 'rolodoom' ),
        'search_items'      => __( 'Search Ensembles', 'rolodoom' ),
        'all_items'         => __( 'All Ensembles', 'rolodoom' ),
        'parent_item'       => __( 'Parent Ensemble', 'rolodoom' ),
        'parent_item_colon' => __( 'Parent Ensemble:', 'rolodoom' ),
        'edit_item'         => __( 'Edit Ensemble', 'rolodoom' ),
        'update_item'       => __( 'Update Ensemble', 'rolodoom' ),
        'add_new_item'      => __( 'Add New Ensemble', 'rolodoom' ),
        'new_item_name'     => __( 'New Ensemble Name', 'rolodoom' ),
        'menu_name'         => __( 'Ensemble', 'rolodoom' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 
                                        'slug' => 'ensemble',
                                        'with_front' => false
                                    ),
    );

    register_taxonomy( 'ensemble', 'score', $args );  

    /**
    *   BAND
    */
    $labels = array(
        'name'              => _x( 'Bands', 'taxonomy general name', 'rolodoom' ),
        'singular_name'     => _x( 'Band', 'taxonomy singular name', 'rolodoom' ),
        'search_items'      => __( 'Search Bands', 'rolodoom' ),
        'all_items'         => __( 'All Bands', 'rolodoom' ),
        'parent_item'       => __( 'Parent Band', 'rolodoom' ),
        'parent_item_colon' => __( 'Parent Band:', 'rolodoom' ),
        'edit_item'         => __( 'Edit Band', 'rolodoom' ),
        'update_item'       => __( 'Update Band', 'rolodoom' ),
        'add_new_item'      => __( 'Add New Band', 'rolodoom' ),
        'new_item_name'     => __( 'New Band Name', 'rolodoom' ),
        'menu_name'         => __( 'Band', 'rolodoom' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 
                                        'slug' => 'band',
                                        'with_front' => false
                                    ),
    );

    register_taxonomy( 'band', 'release', $args );   
   

    /**
    *   GENRES
    */

    $labels = array(
        'name'                       => _x( 'Genres', 'taxonomy general name', 'rolodoom' ),
        'singular_name'              => _x( 'Genre', 'taxonomy singular name', 'rolodoom' ),
        'search_items'               => __( 'Search Genres', 'rolodoom' ),
        'popular_items'              => __( 'Popular Genres', 'rolodoom' ),
        'all_items'                  => __( 'All Genres', 'rolodoom' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Genre', 'rolodoom' ),
        'update_item'                => __( 'Update Genre', 'rolodoom' ),
        'add_new_item'               => __( 'Add New Genre', 'rolodoom' ),
        'new_item_name'              => __( 'New Genre Name', 'rolodoom' ),
        'separate_items_with_commas' => __( 'Separate genres with commas', 'rolodoom' ),
        'add_or_remove_items'        => __( 'Add or remove genres', 'rolodoom' ),
        'choose_from_most_used'      => __( 'Choose from the most used genres', 'rolodoom' ),
        'not_found'                  => __( 'No genres found.', 'rolodoom' ),
        'menu_name'                  => __( 'Genres', 'rolodoom' ),
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'genre' ),
    );

    register_taxonomy( 'genre', 'score', $args );    

    /**
    *   FORMATS
    */

    $labels = array(
        'name'                       => _x( 'Formats', 'taxonomy general name', 'rolodoom' ),
        'singular_name'              => _x( 'Format', 'taxonomy singular name', 'rolodoom' ),
        'search_items'               => __( 'Search Formats', 'rolodoom' ),
        'popular_items'              => __( 'Popular Formats', 'rolodoom' ),
        'all_items'                  => __( 'All Formats', 'rolodoom' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Format', 'rolodoom' ),
        'update_item'                => __( 'Update Format', 'rolodoom' ),
        'add_new_item'               => __( 'Add New Format', 'rolodoom' ),
        'new_item_name'              => __( 'New Format Name', 'rolodoom' ),
        'separate_items_with_commas' => __( 'Separate formats with commas', 'rolodoom' ),
        'add_or_remove_items'        => __( 'Add or remove formats', 'rolodoom' ),
        'choose_from_most_used'      => __( 'Choose from the most used formats', 'rolodoom' ),
        'not_found'                  => __( 'No formats found.', 'rolodoom' ),
        'menu_name'                  => __( 'Formats', 'rolodoom' ),
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'format' ),
    );

    register_taxonomy( 'format', 'release', $args );    

}  

add_action( 'init', 'musicrelease_create_custom_taxonomies');
