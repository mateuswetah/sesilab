<?php

add_action('blocksy:loop:card:start', function() {
    
    if ( get_post_type() !== 'tainacan-collection' || is_search() )
        return;

    $source = [
		'strategy' => 'customizer',
		'prefix' => 'tnc_col_' . get_the_ID() . '_item_archive'
	];

    $color = blocksy_akg_or_customizer(
        'pageTitleOverlay',
        $source,
    );

    if ( isset($color['backgroundColor']) && isset($color['backgroundColor']['default']) && isset($color['backgroundColor']['default']['color']) ) : ?>
        <style>
            .tainacan-collection.entry-card.post-<?php echo get_the_ID(); ?> .ct-media-container::after {
                background-color: <?php echo $color['backgroundColor']['default']['color']; ?> !important;
            }
        </style>
    <?php endif; 
});