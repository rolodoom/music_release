<?php
/**
 * @package MusicRelease
 */
/*
Plugin Name: Music Release
Plugin URI: https://rolandoramostorres.com
Description: A music release system
Version: 0.0.1
Author: Rolando Ramos Torres
Author URI: https://rolandoramostorres.com
Text Domain: musicrelease
Domain Path: /languages
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

// Setup
define( 'MUSICRELEASE_PLUGIN_URL', __FILE__ );

// Includes
include( 'includes/activate.php' );
include( 'includes/init.php' );
include( 'includes/admin/custom-post-types.php' );
include( 'includes/admin/custom-taxonomies.php' );

// Hooks


// Shortcodes
