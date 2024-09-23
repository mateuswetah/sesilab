<?php

/**
 * Registra os tipos de post personalizados do SESILAB
 */
function sesilab_custom_post_types_init() {

    sesilab_registers_curadoria_post_type();
    sesilab_registers_biocanomia_post_type();
    sesilab_registers_caminho_post_type();

}
add_action( 'init', 'sesilab_custom_post_types_init' );

/**
 * Registra o tipo de post Curadoria
 */
function sesilab_registers_curadoria_post_type() {

    $image_sesi_labs_imaginando_futuro_1 = esc_url( get_stylesheet_directory_uri() ) . '/assets/images/sesi-labs-imaginando-futuro1.png';
    $image_sesi_labs_imaginando_futuro_2 = esc_url( get_stylesheet_directory_uri() ) . '/assets/images/sesi-labs-imaginando-futuro2.png';
    $image_sesi_labs_card_bg_aprender_fazendo = esc_url( get_stylesheet_directory_uri() ) . '/assets/images/bg-aprender-fazendo.png';

    // Registers curadoria post type 
    $args = array(
        'labels'             => array(
            'name'                  => _x( 'Curadorias', 'Post type general name', 'sesilab' ),
            'singular_name'         => _x( 'Curadoria', 'Post type singular name', 'sesilab' ),
            'menu_name'             => _x( 'Curadorias', 'Admin Menu text', 'sesilab' ),
            'name_admin_bar'        => _x( 'Curadoria', 'Add New on Toolbar', 'sesilab' ),
            'add_new'               => __( 'Adicionar Nova', 'sesilab' ),
            'add_new_item'          => __( 'Adicionar Nova Curadoria', 'sesilab' ),
            'new_item'              => __( 'Nova Curadoria', 'sesilab' ),
            'edit_item'             => __( 'Editar Curadoria', 'sesilab' ),
            'view_item'             => __( 'Ver Curadoria', 'sesilab' ),
            'all_items'             => __( 'Todos as Curadorias', 'sesilab' ),
            'search_items'          => __( 'Pesquisar Curadorias', 'sesilab' ),
            'parent_item_colon'     => __( 'Curadorias raiz:', 'sesilab' ),
            'not_found'             => __( 'Nenhuma Curadoria encontrado.', 'sesilab' ),
            'not_found_in_trash'    => __( 'Nenhuma Curadoria encontrado na lixeira.', 'sesilab' ),
            'featured_image'        => _x( 'Imagem de capa do Curadoria', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'set_featured_image'    => _x( 'Configurar imagem de capa', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'remove_featured_image' => _x( 'Remover imagem de capa', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'use_featured_image'    => _x( 'Usar como imagem de capa', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'archives'              => _x( 'Lista de Curadorias', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'sesilab' ),
            'insert_into_item'      => _x( 'Inserir na Curadoria', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'sesilab' ),
            'uploaded_to_this_item' => _x( 'Enviado para esta Curadoria', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'sesilab' ),
            'filter_items_list'     => _x( 'Filtrar lista de Curadorias', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'sesilab' ),
            'items_list_navigation' => _x( 'Navegação na lista de Curadorias', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'sesilab' ),
            'items_list'            => _x( 'Lista de Curadorias', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'sesilab' ),
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'curadorias' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'show_in_rest'       => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'template'           => [
            [
                'core/heading',
                [
                    'placeholder' => 'Percurso de visita',
                    'content' => 'Percurso de visita',
                    'level' => 1
                ]
            ],
            [
                'core/group',
                [
                    'layout' => [
                        'type' => 'constrained',
                        'justifyContent' => 'center'
                    ],
                    'align' => 'wide',
                    'style' => [
                        'spacing' => [
                            'blockGap' => 'var:preset|spacing|60'
                        ]
                    ]
                ],
                [
                    [
                        'core/media-text',
                        [
                            'mediaType' => 'image',
                            'mediaPosition' => 'left',
                            'verticalAlignment' => 'center',
                            'imageFill' => true,
                            'mediaSizeSlug' => 'large',
                            'mediaWidth' => '38',
                            'focalPoint' => [
                                'x' => 0.76,
                                'y' => 0.45
                            ],
                            'style' => [
                                'spacing' => [
                                    'padding' => [
                                        'top' => '0',
                                        'bottom' => '0',
                                    ]
                                ],
                                'textColor' => 'palette-color-9',
                                'backgroundColor' => 'palette-color-10',
                            ]
                        ],
                        [
                            [
                                'core/group',
                                [
                                    'layout' => [
                                        'type' => 'constrained',
                                    ],
                                    'style' => [
                                        'spacing' => [
                                            'padding' => [
                                                'top' => 'var:preset|spacing|70',
                                                'bottom' => 'var:preset|spacing|70'
                                            ]
                                        ],
                                    ]
                                ],
                                [
                                    [
                                        'core/heading',
                                        [
                                            'placeholder' => 'Nome do Aparato',
                                            'level' => 2,
                                            'style' => [
                                                'typography' => [
                                                    'textTransform' => 'uppercase'
                                                ],
                                                'layout' => [
                                                    'selfStretch' => 'fit',
                                                    'flexSize' => null
                                                ],
                                                'spacing' => [
                                                    'margin' => [
                                                        'top' => '0',
                                                        'bottom' => '0'
                                                    ]
                                                ]
                                            ],
                                            'textColor' => 'palette-color-9',
                                            'fontSize' => 'medium'
                                        ]
                                    ],
                                    [ 'core/spacer', [ 'height' => '25px' ] ],
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => 'Descrição inicial sobre o aparato.',
                                            'style' => [
                                                'typography' => [
                                                    'fontSize' => '18px'
                                                ]
                                            ]
                                        ]
                                    ],
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => 'Conceito-chave: nome do conceito chave.',
                                            'style' => [
                                                'typography' => [
                                                    'fontSize' => '18px'
                                                ]
                                            ]
                                        ]
                                    ],
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => 'Mais detalhamentos sobre o aparato...',
                                            'style' => [
                                                'typography' => [
                                                    'fontSize' => '18px'
                                                ]
                                            ]
                                        ]
                                    ],
                                    [
                                        'core/buttons',
                                        [
                                            'layout' => [
                                                'type' => 'flex',
                                                'justifyContent' => 'right'
                                            ]
                                        ],
                                        [
                                            [
                                                'core/button',
                                                [
                                                    'placeholder' => 'Saiba mais',
                                                    'target' => '_blank',
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ],
                    [
                        'core/media-text',
                        [
                            'mediaType' => 'image',
                            'mediaPosition' => 'right',
                            'verticalAlignment' => 'center',
                            'imageFill' => true,
                            'mediaSizeSlug' => 'large',
                            'mediaWidth' => '38',
                            'focalPoint' => [
                                'x' => 0.76,
                                'y' => 0.45
                            ],
                            'style' => [
                                'spacing' => [
                                    'padding' => [
                                        'top' => '0',
                                        'bottom' => '0',
                                    ]
                                ],
                                'textColor' => 'palette-color-9',
                                'backgroundColor' => 'palette-color-18',
                            ]
                        ],
                        [
                            [
                                'core/group',
                                [
                                    'layout' => [
                                        'type' => 'constrained',
                                    ],
                                    'style' => [
                                        'spacing' => [
                                            'padding' => [
                                                'top' => 'var:preset|spacing|70',
                                                'bottom' => 'var:preset|spacing|70'
                                            ]
                                        ],
                                    ]
                                ],
                                [
                                    [
                                        'core/heading',
                                        [
                                            'placeholder' => 'Nome do Segundo Aparato',
                                            'level' => 2,
                                            'style' => [
                                                'typography' => [
                                                    'textTransform' => 'uppercase'
                                                ],
                                                'layout' => [
                                                    'selfStretch' => 'fit',
                                                    'flexSize' => null
                                                ],
                                                'spacing' => [
                                                    'margin' => [
                                                        'top' => '0',
                                                        'bottom' => '0'
                                                    ]
                                                ]
                                            ],
                                            'textColor' => 'palette-color-9',
                                            'fontSize' => 'medium'
                                        ]
                                    ],
                                    [ 'core/spacer', [ 'height' => '25px' ] ],
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => 'Descrição inicial sobre o aparato.',
                                            'style' => [
                                                'typography' => [
                                                    'fontSize' => '18px'
                                                ]
                                            ]
                                        ]
                                    ],
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => 'Conceito-chave: nome do conceito chave.',
                                            'style' => [
                                                'typography' => [
                                                    'fontSize' => '18px'
                                                ]
                                            ]
                                        ]
                                    ],
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => 'Mais detalhamentos sobre o aparato...',
                                            'style' => [
                                                'typography' => [
                                                    'fontSize' => '18px'
                                                ]
                                            ]
                                        ]
                                    ],
                                    [
                                        'core/buttons',
                                        [
                                            'layout' => [
                                                'type' => 'flex',
                                                'justifyContent' => 'right'
                                            ]
                                        ],
                                        [
                                            [
                                                'core/button',
                                                [
                                                    'placeholder' => 'Saiba mais',
                                                    'target' => '_blank',
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ],
                ]
            ],
            [
                'core/spacer',
                [
                    'height' => '26px'
                ]
            ],
            [
                'core/heading',
                [
                    'placeholder' => 'Integração com o currículo',
                    'content' => 'Integração com o currículo',
                    'level' => 2,
                ]
            ],
            [
                'core/heading',
                [
                    'placeholder' => 'STEAM',
                    'content' => 'STEAM',
                    'level' => 3,
                ]
            ],
            [
                'core/paragraph',
                [
                    'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ...',
                ]
                ],
            [
                'core/heading',
                [
                    'placeholder' => 'CTSA',
                    'content' => 'CTSA',
                    'level' => 3,
                ]
            ],
            [
                'core/paragraph',
                [
                    'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ...',
                ]
            ],
            [
                'core/heading',
                [
                    'placeholder' => 'BNCC',
                    'content' => 'BNCC',
                    'level' => 3,
                ]
            ],
            [
                'core/paragraph',
                [
                    'placeholder' => 'As principais habilidades específicas trabalhadas neste percurso são:',
                    'content' => 'As principais habilidades específicas trabalhadas neste percurso são:',
                ]
            ],
            [
                'core/group',
                [
                    'layout' => [
                        'type' => 'flex',
                        'flexWrap' => 'nowrap',
                        'verticalAlignment' => 'stretch',
                    ]
                ],
                [
                    [
                        'core/group',
                        [
                            'layout' => [
                                'type' => 'constrained',
                            ],
                            'style' => [
                                'layout' => [
                                    'selfStretch' => 'fixed',
                                    'flexSide' => '50%'
                                ],
                                'border' => [
                                    'radius' => '12px'
                                ],
                            ],
                            'backgroundColor' => 'palette-color-6',
                        ],
                        [
                            [
                                'core/heading',
                                [
                                    'level' => 4,
                                    'placeholder' => 'Habilidade 1'
                                ]
                            ],
                            [
                                'core/paragraph',
                                [
                                    'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ...',
                                ]
                                ],
                            [
                                'core/buttons',
                                [
                                    'layout' => [
                                        'type' => 'flex',
                                        'justifyContent' => 'right'
                                    ]
                                ],
                                [
                                    [
                                        'core/button',
                                        [
                                            'placeholder' => 'Veja mais...',
                                            'target' => '_blank',
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ],
                    [
                        'core/group',
                        [
                            'layout' => [
                                'type' => 'constrained',
                            ],
                            'style' => [
                                'layout' => [
                                    'selfStretch' => 'fixed',
                                    'flexSide' => '50%'
                                ],
                                'border' => [
                                    'radius' => '12px'
                                ],
                            ],
                            'backgroundColor' => 'palette-color-6',
                        ],
                        [
                            [
                                'core/heading',
                                [
                                    'level' => 4,
                                    'placeholder' => 'Habilidade 2'
                                ]
                            ],
                            [
                                'core/paragraph',
                                [
                                    'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ...',
                                ]
                                ],
                            [
                                'core/buttons',
                                [
                                    'layout' => [
                                        'type' => 'flex',
                                        'justifyContent' => 'right'
                                    ]
                                ],
                                [
                                    [
                                        'core/button',
                                        [
                                            'placeholder' => 'Veja mais...',
                                            'target' => '_blank',
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            [
                'core/spacer',
                [
                    'height' => '36px'
                ]
            ],
            [
                'core/cover',
                [
                    'url' => $image_sesi_labs_card_bg_aprender_fazendo,
                    'dimRatio' => 30,
                    'overlayColor' => 'palette-color-17',
                    'focalPoint' => [
                        'x' => 0,
                        'y' => 0.44
                    ],
                    'contentPosition' => 'center center',
                    'isDark' => false,
                    'align' => 'full',
                    'style' => [
                        'color' => [
                            'duotone' => 'unset'
                        ]
                    ],
                    'textColor' => 'palette-color-4',
                    'className' => 'is-style-sesilab-cover-contain',
                    'layout' => [
                        'type' => 'default'
                    ]
                ],
                [
                    [
                        'core/columns',
                        [
                            'style' => [
                                'spacing' => [
                                    'blockGap' => [
                                        'top' => 'var:preset|spacing|60',
                                        'left' => 'var:preset|spacing|80'
                                    ]
                                ]
                            ]
                        ],
                        [
                            [
                                'core/column',
                                [
                                    'width' => '66.66%'
                                ],
                                [
                                    [
                                        'core/heading',
                                        [
                                            'level' => 2,
                                            'content' => 'Relacionados',
                                            'placeholder' => 'Relacionados'
                                        ]
                                    ],
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non gravida sapien. Sed eget consectetur ante. Etiam lobortis, quam in varius dignissim, eros quam sollicitudin purus, vel cursus nisl odio sed turpis. Sed molestie dapibus sapien id facilisis. Quisque pretium semper lectus in facilisis.',
                                            'style' => [
                                                'typography' => [
                                                    'fontSize' => '18px'
                                                ]
                                            ],
                                            'textColor' => 'palette-color-9'
                                        ]
                                    ],
                                    [
                                        'core/paragraph',
                                        [
                                            'placeholder' => 'Maecenas congue laoreet magna, eu porttitor felis bibendum non. In tincidunt ultricies urna. Nulla quis diam ac sem elementum tincidunt eu nec enim. Cras sed magna magna. Nullam aliquet lorem massa, non euismod magna pellentesque ut. Donec lacinia dui nec facilisis pretium.',
                                            'style' => [
                                                'typography' => [
                                                    'fontSize' => '18px'
                                                ]
                                            ],
                                            'textColor' => 'palette-color-9'
                                        ]
                                    ]
                                ]
                            ],
                            [
                                'core/column',
                                [
                                    'width' => '33.33%',
                                    'isVerticalAlignmentCenter' => true
                                ],
                                [
                                    [
                                        'tainacan/dynamic-items-list',
                                        [
                                            'maxColumnsCount' => 2,
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    );

    register_post_type( 'curadorias', $args );
}

function sesilab_registers_biocanomia_post_type() {

    // Registers biocanomia post type 
    $args = array(
        'labels'             => array(
            'name'                  => _x( 'Biocanomia', 'Post type general name', 'sesilab' ),
            'singular_name'         => _x( 'Biocanomia', 'Post type singular name', 'sesilab' ),
            'menu_name'             => _x( 'Biocanomia', 'Admin Menu text', 'sesilab' ),
            'name_admin_bar'        => _x( 'Biocanomia', 'Add New on Toolbar', 'sesilab' ),
            'add_new'               => __( 'Adicionar Nova', 'sesilab' ),
            'add_new_item'          => __( 'Adicionar Nova Biocanomia', 'sesilab' ),
            'new_item'              => __( 'Nova Biocanomia', 'sesilab' ),
            'edit_item'             => __( 'Editar Biocanomia', 'sesilab' ),
            'view_item'             => __( 'Ver Biocanomia', 'sesilab' ),
            'all_items'             => __( 'Todos as Biocanomia', 'sesilab' ),
            'search_items'          => __( 'Pesquisar Biocanomia', 'sesilab' ),
            'parent_item_colon'     => __( 'Biocanomia raiz:', 'sesilab' ),
            'not_found'             => __( 'Nenhuma Biocanomia encontrado.', 'sesilab' ),
            'not_found_in_trash'    => __( 'Nenhuma Biocanomia encontrado na lixeira.', 'sesilab' ),
            'featured_image'        => _x( 'Imagem de capa do Biocanomia', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'set_featured_image'    => _x( 'Configurar imagem de capa', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'remove_featured_image' => _x( 'Remover imagem de capa', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'use_featured_image'    => _x( 'Usar como imagem de capa', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'archives'              => _x( 'Lista de Biocanomia', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'sesilab' ),
            'insert_into_item'      => _x( 'Inserir na Biocanomia', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'sesilab' ),
            'uploaded_to_this_item' => _x( 'Enviado para esta Biocanomia', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'sesilab' ),
            'filter_items_list'     => _x( 'Filtrar lista de Biocanomia', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'sesilab' ),
            'items_list_navigation' => _x( 'Navegação na lista de Biocanomia', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'sesilab' ),
            'items_list'            => _x( 'Lista de Biocanomia', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'sesilab' ),
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'biocanomia' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'show_in_rest'       => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-buddicons-replies',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'biocanomia', $args );
}

function sesilab_biocanomia_filter_theme_json_theme( $theme_json ) {

    if ( !is_singular('biocanomia') )
        return $theme_json;

	$new_data = array(
		'styles' => array(
			'elements' => array(
				'h1' => array(
                    'typography' => array(
                        'fontSize' => 'clamp(2.625rem, 2.7778rem + -0.4444vw, 2.5rem)',
                        'fontWeight' => 400
                    ),
                    'color' => array(
                        'text' => 'var(--theme-palette-color-12)'
                    )
				),
				'h2' => array(
                    'typography' => array(
                        'fontSize' => 'clamp(2.5rem, 2.8056rem + -0.8889vw, 2.25rem)',
                        'fontWeight' => 500,
                    ),
                    'color' => array(
                        'text' => 'var(--theme-palette-color-4)'
                    )
				),
				'h3' => array(
                    'typography' => array(
                        'fontSize' => 'clamp(2rem, 1.7708rem + 0.6667vw, 2.1875rem)',
                        'fontWeight' => 400,
                    ),
                    'color' => array(
                        'text' => 'var(--theme-palette-color-4)'
                    )
				),
                'h4' => array(
                    'typography' => array(
                        'fontSize' => 'clamp(1.625rem, 1.3194rem + 0.8889vw, 1.875rem)',
                        'fontWeight' => 700,
                    ),
                    'color' => array(
                        'text' => 'var(--theme-palette-color-4)'
                    )
				),
                'h5' => array(
                    'typography' => array(
                        'fontSize' => 'clamp(1.3125rem, 1.0069rem + 0.8889vw, 1.5625rem)',
                        'fontWeight' => 700,
                    ),
                    'color' => array(
                        'text' => 'var(--theme-palette-color-13)'
                    )
				),
                'h6' => array(
                    'typography' => array(
                        'fontSize' => 'clamp(1.125rem, 0.9722rem + 0.4444vw, 1.25rem)',
                        'fontWeight' => 900,
                    ),
                    'color' => array(
                        'text' => 'var(--theme-palette-color-13)'
                    )
				)
			),
		),
	);

	return $theme_json->update_with( $new_data );
}
add_filter( 'wp_theme_json_data_theme', 'sesilab_biocanomia_filter_theme_json_theme' );

/**
 * Modifica a paleta de cores do editor de acordo com o post type
 */
function sesilab_biocanomia_conditional_editor_color_palette($current_screen) {

    // Only run this in the admin area and specifically on post editing or creation screens
    if ( $current_screen && $current_screen->base && in_array( $current_screen->base, ['post', 'post-new'] ) ) {

        // Check if we're editing/creating a post of a specific custom post type
        if ( $current_screen->post_type === 'biocanomia' ) {

            // Register the default or a different color palette for other post types
            add_theme_support( 'editor-color-palette', [
                [
                    'color' => '#1e75b5',
                    'name' => 'Palette Color 1',
                    'slug' => 'palette-color-1',
                ],
                [
                    'color' => '#185b8b',
                    'name' => 'Palette Color 2',
                    'slug' => 'palette-color-2',
                ],
                [
                    'color' => '#4f4e51',
                    'name' => 'Palette Color 3',
                    'slug' => 'palette-color-3',
                ],
                [
                    'color' => '#31621e',
                    'name' => 'Palette Color 4',
                    'slug' => 'palette-color-4',
                ],
                [
                    'color' => '#dbdbdb',
                    'name' => 'Palette Color 5',
                    'slug' => 'palette-color-5',
                ],
                [
                    'color' => '#f5f4f6',
                    'name' => 'Palette Color 6',
                    'slug' => 'palette-color-6',
                ],
                [
                    'color' => '#ffffff',
                    'name' => 'Palette Color 7',
                    'slug' => 'palette-color-7',
                ],
                [
                    'color' => '#ffffff',
                    'name' => 'Palette Color 8',
                    'slug' => 'palette-color-8',
                ],
                [
                    'color' => '#1e1e1e',
                    'name' => 'Palette Color 9',
                    'slug' => 'palette-color-9',
                ],
                [
                    'color' => '#76add9',
                    'name' => 'Palette Color 10',
                    'slug' => 'palette-color-10',
                ],
                [
                    'color' => '#06384a',
                    'name' => 'Palette Color 11',
                    'slug' => 'palette-color-11',
                ],
                [
                    'color' => '#213c18',
                    'name' => 'Palette Color 12',
                    'slug' => 'palette-color-12',
                ],
                [
                    'color' => '#47821f',
                    'name' => 'Palette Color 13',
                    'slug' => 'palette-color-13',
                ],
                [
                    'color' => '#75ad00',
                    'name' => 'Palette Color 14',
                    'slug' => 'palette-color-14',
                ],
                [
                    'color' => '#5c6223',
                    'name' => 'Palette Color 15',
                    'slug' => 'palette-color-15',
                ],
                [
                    'color' => '#a7a765',
                    'name' => 'Palette Color 16',
                    'slug' => 'palette-color-16',
                ],
                [
                    'color' => '#c5c79d',
                    'name' => 'Palette Color 17',
                    'slug' => 'palette-color-17',
                ],
                [
                    'color' => '#dfeaba',
                    'name' => 'Palette Color 18',
                    'slug' => 'palette-color-18',
                ],
                [
                    'color' => '#492814',
                    'name'  => __( 'Palette Color 19', 'sesilab' ),
                    'slug'  => 'palette-color-19',
                ],
                [
                    'color' => '#703903',
                    'name'  => __( 'Palette Color 20', 'sesilab' ),
                    'slug'  => 'palette-color-20',
                ],
                [
                    'color' => '#9b5d2e',
                    'name'  => __( 'Palette Color 21', 'sesilab' ),
                    'slug'  => 'palette-color-21',
                ],
                [
                    'color' => '#c9aa7d',
                    'name'  => __( 'Palette Color 22', 'sesilab' ),
                    'slug'  => 'palette-color-22',
                ],
                [
                    'color' => '#890108',
                    'name'  => __( 'Palette Color 23', 'sesilab' ),
                    'slug'  => 'palette-color-23',
                ],
                [
                    'color' => '#d10015',
                    'name'  => __( 'Palette Color 24', 'sesilab' ),
                    'slug'  => 'palette-color-24',
                ],
                [
                    'color' => '#f70000',
                    'name'  => __( 'Palette Color 25', 'sesilab' ),
                    'slug'  => 'palette-color-25',
                ],
                [
                    'color' => '#d25211',
                    'name'  => __( 'Palette Color 26', 'sesilab' ),
                    'slug'  => 'palette-color-26',
                ],
                [
                    'color' => '#fb4c00',
                    'name'  => __( 'Palette Color 27', 'sesilab' ),
                    'slug'  => 'palette-color-27',
                ],
                [
                    'color' => '#ff8b00',
                    'name'  => __( 'Palette Color 28', 'sesilab' ),
                    'slug'  => 'palette-color-28',
                ],
                [
                    'color' => '#f7a700',
                    'name'  => __( 'Palette Color 29', 'sesilab' ),
                    'slug'  => 'palette-color-29',
                ],
                [
                    'color' => '#eeb900',
                    'name'  => __( 'Palette Color 30', 'sesilab' ),
                    'slug'  => 'palette-color-30',
                ],
            ] );

        }
    }
}
add_action( 'current_screen', 'sesilab_biocanomia_conditional_editor_color_palette' );

/**
 * Cria o tipo de post "Caminho"
 */
function sesilab_registers_caminho_post_type() {

    // Registers caminho post type 
    $args = array(
        'labels'             => array(
            'name'                  => _x( 'Caminhos', 'Post type general name', 'sesilab' ),
            'singular_name'         => _x( 'Caminho', 'Post type singular name', 'sesilab' ),
            'menu_name'             => _x( 'Caminhos', 'Admin Menu text', 'sesilab' ),
            'name_admin_bar'        => _x( 'Caminho', 'Add New on Toolbar', 'sesilab' ),
            'add_new'               => __( 'Adicionar Novo', 'sesilab' ),
            'add_new_item'          => __( 'Adicionar Novo Caminho', 'sesilab' ),
            'new_item'              => __( 'Nova Caminho', 'sesilab' ),
            'edit_item'             => __( 'Editar Caminho', 'sesilab' ),
            'view_item'             => __( 'Ver Caminho', 'sesilab' ),
            'all_items'             => __( 'Todos os Caminhos', 'sesilab' ),
            'search_items'          => __( 'Pesquisar Caminho', 'sesilab' ),
            'parent_item_colon'     => __( 'Caminho raiz:', 'sesilab' ),
            'not_found'             => __( 'Nenhumo Caminho encontrado.', 'sesilab' ),
            'not_found_in_trash'    => __( 'Nenhumo Caminho encontrado na lixeira.', 'sesilab' ),
            'featured_image'        => _x( 'Imagem de capa do Caminho', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'set_featured_image'    => _x( 'Configurar imagem de capa', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'remove_featured_image' => _x( 'Remover imagem de capa', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'use_featured_image'    => _x( 'Usar como imagem de capa', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'archives'              => _x( 'Lista de Caminhos', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'sesilab' ),
            'insert_into_item'      => _x( 'Inserir no Caminho', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'sesilab' ),
            'uploaded_to_this_item' => _x( 'Enviado para este Caminho', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'sesilab' ),
            'filter_items_list'     => _x( 'Filtrar lista de Caminhos', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'sesilab' ),
            'items_list_navigation' => _x( 'Navegação na lista de Caminhos', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'sesilab' ),
            'items_list'            => _x( 'Lista de Caminhos', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'sesilab' ),
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'caminho' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'show_in_rest'       => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-randomize',
        'supports'           => array( 'title', 'editor' ),
        'template'           => array(
            array(
                'core/pattern',
                array(
                    'slug' => 'sesilab/caminho-basico'
                ),
            )
        )
    );

    register_post_type( 'caminho', $args );
}


/**
 * Modifica a paleta de cores do editor de acordo com o post type
 */
function sesilab_caminho_conditional_editor_color_palette($current_screen) {

    // Only run this in the admin area and specifically on post editing or creation screens
    if ( $current_screen && $current_screen->base && in_array( $current_screen->base, ['post', 'post-new'] ) ) {

        // Check if we're editing/creating a post of a specific custom post type
        if ( $current_screen->post_type === 'caminho' ) {

            // Register the default or a different color palette for other post types
            add_theme_support( 'editor-color-palette', [
                [
                    'color' => '#781764',
                    'name' => 'Palette Color 1',
                    'slug' => 'palette-color-1',
                ],
                [
                    'color' => '#ba0280',
                    'name' => 'Palette Color 2',
                    'slug' => 'palette-color-2',
                ],
                [
                    'color' => '#1f110c',
                    'name' => 'Palette Color 3',
                    'slug' => 'palette-color-3',
                ],
                [
                    'color' => '#9d9b9b',
                    'name' => 'Palette Color 4',
                    'slug' => 'palette-color-4',
                ],
                [
                    'color' => '#dbdbdb',
                    'name' => 'Palette Color 5',
                    'slug' => 'palette-color-5',
                ],
                [
                    'color' => '#b1b1b1',
                    'name' => 'Palette Color 6',
                    'slug' => 'palette-color-6',
                ],
                [
                    'color' => '#dddedd',
                    'name' => 'Palette Color 7',
                    'slug' => 'palette-color-7',
                ],
                [
                    'color' => '#ffffff',
                    'name' => 'Palette Color 8',
                    'slug' => 'palette-color-8',
                ],
                [
                    'color' => '#773500',
                    'name' => 'Palette Color 9',
                    'slug' => 'palette-color-9',
                ],
                [
                    'color' => '#a94a09',
                    'name' => 'Palette Color 10',
                    'slug' => 'palette-color-10',
                ],
                [
                    'color' => '#9d5d2e',
                    'name' => 'Palette Color 11',
                    'slug' => 'palette-color-11',
                ],
                [
                    'color' => '#d6823a',
                    'name' => 'Palette Color 12',
                    'slug' => 'palette-color-12',
                ],
                [
                    'color' => '#e4a05c',
                    'name' => 'Palette Color 13',
                    'slug' => 'palette-color-13',
                ],
                [
                    'color' => '#ffd9af',
                    'name' => 'Palette Color 14',
                    'slug' => 'palette-color-14',
                ],
                [
                    'color' => '#f26c2d',
                    'name' => 'Palette Color 15',
                    'slug' => 'palette-color-15',
                ],
                [
                    'color' => '#ff9033',
                    'name' => 'Palette Color 16',
                    'slug' => 'palette-color-16',
                ],
                [
                    'color' => '#e48c00',
                    'name' => 'Palette Color 17',
                    'slug' => 'palette-color-17',
                ],
                [
                    'color' => '#bd850f',
                    'name' => 'Palette Color 18',
                    'slug' => 'palette-color-18',
                ],
                [
                    'color' => '#dc2c25',
                    'name'  => __( 'Palette Color 19', 'sesilab' ),
                    'slug'  => 'palette-color-19',
                ],
                [
                    'color' => '#b25442',
                    'name'  => __( 'Palette Color 20', 'sesilab' ),
                    'slug'  => 'palette-color-20',
                ],
                [
                    'color' => '#57903b',
                    'name'  => __( 'Palette Color 21', 'sesilab' ),
                    'slug'  => 'palette-color-21',
                ],
                [
                    'color' => '#6cab49',
                    'name'  => __( 'Palette Color 22', 'sesilab' ),
                    'slug'  => 'palette-color-22',
                ],
                [
                    'color' => '#8c963c',
                    'name'  => __( 'Palette Color 23', 'sesilab' ),
                    'slug'  => 'palette-color-23',
                ],
                [
                    'color' => '#00748c',
                    'name'  => __( 'Palette Color 24', 'sesilab' ),
                    'slug'  => 'palette-color-24',
                ],
                [
                    'color' => '#419ac3',
                    'name'  => __( 'Palette Color 25', 'sesilab' ),
                    'slug'  => 'palette-color-25',
                ]
            ] );

        }
    }
}
add_action( 'current_screen', 'sesilab_caminho_conditional_editor_color_palette' );

/**
 * Desabilita o header e footer por completo para o tipo de post Caminhos
 */
function sesilab_caminho_filter_the_content() {
    if ( is_singular('caminho') ) {
        add_filter( 'blocksy:builder:header:enabled', function() { return false; });
        add_filter( 'blocksy:builder:footer:enabled', function() { return false; });
    }
}
add_action( 'blocksy:head:end', 'sesilab_caminho_filter_the_content' );

/* Remove a funcionalidade de srcset para as imagens de personagem do caminho */
function sesilab_caminho_remover_srcset( $sources ) {
    if ( is_singular('caminho') )
        return false;
    
    return $sources;
}
add_filter( 'wp_calculate_image_srcset', 'sesilab_caminho_remover_srcset', 10, 1 );