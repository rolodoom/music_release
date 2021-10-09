<?php

add_action( 'init', 'musicrelease_init' );
function musicrelease_init(){

    add_image_size( 'favicon', 32, 32, true);
    add_image_size( 'release', 600, 600, true);
    
}