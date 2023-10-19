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

	wp_enqueue_script( 'sesilab-gtranslate', get_stylesheet_directory_uri() . '/assets/js/gtranslate.js', array(), '', true );
});

// Post Type "Curadorias".
require get_stylesheet_directory() . '/inc/post-types.php';

// Block Patterns.
require get_stylesheet_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_stylesheet_directory() . '/inc/block-styles.php';

// Collection Colors
require get_stylesheet_directory() . '/inc/collection-colors.php';