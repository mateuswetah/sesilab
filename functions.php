<?php
if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

/**
 * Enqueue scripts and styles.
 *
 */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'sesilab-style', get_stylesheet_uri() );
});

// Block Patterns.
require get_stylesheet_directory() . '/inc/block-patterns.php';