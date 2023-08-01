<?php

/**
 * Block Styles
 */
if ( function_exists('register_block_style') ) {
    /**
     * Register block styles.
     *
     * @since 1.0.0
     *
     * @return void
     */
    function sesilab_block_styles() {

        register_block_style(
            'core/cover',
            array(
                'name'  => 'sesilab-cover-contain',
                'label' =>  __('Imagem contida', 'sesilab'),
                'is_default' => false,
                'inline_style' => '.wp-block-cover.is-style-sesilab-cover-contain > .wp-block-cover__image-background { object-fit: none; }'                
            )
        );

    }
    add_action('init', 'sesilab_block_styles');
}