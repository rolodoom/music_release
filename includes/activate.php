<?php

function musicrelease_activate_plugin(){
    if( version_compare( get_bloginfo( 'version' ), '5.8.1', '<' ) ){
        wp_die( __('You must update Wordpress to use this plugin', 'musicrelease') );
    }
}
register_activation_hook( __FILE__, 'musicrelease_activate_plugin' );