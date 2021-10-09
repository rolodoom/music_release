<?php


// VARIABLES
define("CACHEKILLER", '?date=' . date('YmdHis'));


// GET IMAGE URL BY SLUG
if ( ! function_exists( 'get_image_url_by_slug' ) ) {
    function get_image_url_by_slug( $slug, $size='') {

        $args = array(
            'post_type' => 'attachment',
            'name' => sanitize_title($slug),
            'posts_per_page' => 1,
            'post_status' => 'inherit',
        );
        $_head = get_posts( $args );
        $header = $_head ? array_pop($_head) : null;
        // return $header ? wp_get_attachment_url($header->ID) : '';
        return $header ? wp_get_attachment_image_src( $header->ID, $size)[0] : '';
    }
}


// SLUG
if ( ! function_exists( 'get_the_slug' ) ) {
    function get_the_slug(){
        global $post;
        return $post->post_name;
    }
}

// NO BR
if ( ! function_exists( 'textarea_br' ) ) {
    function textarea_br($string){
        return str_replace("\n", '<br>',  $string);
    }
}

// GET CUSTOM TAXONOMY
if ( ! function_exists( 'get_the_custom_taxonomy' ) ) {
    function get_the_custom_taxonomy($ID){

        $separator_char = ' | ';

        $output = '';
        $args = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all');
        $terms = wp_get_post_terms( $ID, 'format', $args );

        foreach($terms as $tax){
            $output .= strtoupper($tax->name);
            if (next($terms)==true) $output .= $separator_char;
        }

        return $output;
    }
}




