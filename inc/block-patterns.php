<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @since 0.1.0
 */

if ( function_exists( 'register_block_pattern_category' ) ) {
	/**
	 * Register Block Pattern Category.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function sesilab_register_block_pattern_category() {
		register_block_pattern_category(
			'sesilab',
			array( 'label' => esc_html__( 'SESI LAB', 'sesilab' ) )
		);
		register_block_pattern_category(
			'biocanomia',
			array( 'label' => esc_html__( 'Biocanomia', 'sesilab' ) )
		);
		register_block_pattern_category(
			'caminho',
			array( 'label' => esc_html__( 'Caminhos', 'sesilab' ) )
		);
	}
	add_action( 'init', 'sesilab_register_block_pattern_category' );
}