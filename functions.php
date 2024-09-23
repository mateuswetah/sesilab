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

	if ( is_singular( 'biocanomia' ) ) 
		wp_enqueue_style( 'sesilab-biocanomia', get_stylesheet_directory_uri() . '/assets/css/biocanomia-single.css' );
	
	if ( is_singular( 'caminho' ) )  {
		wp_enqueue_style( 'sesilab-caminho', get_stylesheet_directory_uri() . '/assets/css/caminho-single.css' );
		wp_enqueue_script( 'sesilab-caminhos-personagens', get_stylesheet_directory_uri() . '/assets/js/caminhos-personagens.js', array(), '', true );
	}
});

/**
 * Enqueue content assets but only in the Editor.
 */
function sesilab_enqueue_editor_content_assets() {
    if ( is_admin() ) {
        $current_screen = get_current_screen();

		if (
			$current_screen &&
			$current_screen->base &&
			in_array( $current_screen->base, ['post', 'post-new'] )
		) {
			if ( $current_screen->post_type === 'biocanomia' )
				wp_enqueue_style( 'sesilab-biocanomia', get_stylesheet_directory_uri() . '/assets/css/biocanomia-single.css' );

			if ( $current_screen->post_type === 'caminho' ) {
				wp_enqueue_style( 'sesilab-caminho', get_stylesheet_directory_uri() . '/assets/css/caminho-single.css' );
				wp_enqueue_script( 'sesilab-caminho-block-variations', get_stylesheet_directory_uri() . '/assets/js/block-variations.js', array( 'wp-blocks', 'wp-dom-ready' ), wp_get_theme()->get( 'Version' ), true );
			}
		}
		
	}
}
add_action( 'enqueue_block_assets', 'sesilab_enqueue_editor_content_assets' );


// Google Tag Manager
require get_stylesheet_directory() . '/inc/google-tag.php';

// Post Type "Curadorias" e "Biocanomia".
require get_stylesheet_directory() . '/inc/post-types.php';

// Block Patterns.
require get_stylesheet_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_stylesheet_directory() . '/inc/block-styles.php';

// Collection Colors and Wide cards
require get_stylesheet_directory() . '/inc/collection-cards.php';

// Customizações para o Conteúdo H5P
require get_stylesheet_directory() . '/inc/h5p-tweaks.php';