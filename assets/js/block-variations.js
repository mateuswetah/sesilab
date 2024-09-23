wp.domReady( () => {
	wp.blocks.registerBlockVariation( 'core/image', {
        name:       'sesilab/personagem-caminho',
        title:      'Personagem do caminho',
        icon: 'smiley',
        keywords:   [ 'sesilab', 'caminho', 'personagem', 'bioca' ],
        attributes: {
            className: 'caminho-personagens',
            aspectRatio: '1',
            sizeSlug: 'full'
        },
        scope: [ 'inserter', 'block', 'transform' ],
        isActive: ( blockAttributes ) =>
            blockAttributes.className && 'caminho-personagens' === blockAttributes.className &&
            blockAttributes.aspectRatio && '1' === blockAttributes.aspectRatio
    } );
} );