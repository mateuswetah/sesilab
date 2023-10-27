<?php

/**
 * Registers the curadorias post type.
 */
function sesilab_curadoria_post_type_init() {


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
add_action( 'init', 'sesilab_curadoria_post_type_init' );
