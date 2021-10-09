<?php



add_action( 'wp_enqueue_scripts', 'musicrelease_enqueue_scripts', 100 );

function musicrelease_enqueue_scripts(){
    
    global $post;
    if ( $post->post_type == 'release' ) {


    }
    
}