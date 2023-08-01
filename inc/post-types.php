<?php

/**
 * Registers the percursos Temáticos post type.
 */
function sesilab_percursos_post_type_init() {

    // Registers percursos post type 
    $args = array(
        'labels'             => array(
            'name'                  => _x( 'Percursos Temáticos', 'Post type general name', 'sesilab' ),
            'singular_name'         => _x( 'Percurso Temático', 'Post type singular name', 'sesilab' ),
            'menu_name'             => _x( 'Percursos Temáticos', 'Admin Menu text', 'sesilab' ),
            'name_admin_bar'        => _x( 'Percurso Temático', 'Add New on Toolbar', 'sesilab' ),
            'add_new'               => __( 'Adicionar Novo', 'sesilab' ),
            'add_new_item'          => __( 'Adicionar Novo Percurso Temático', 'sesilab' ),
            'new_item'              => __( 'Novo Percurso Temático', 'sesilab' ),
            'edit_item'             => __( 'Editar Percurso Temático', 'sesilab' ),
            'view_item'             => __( 'Ver Percurso Temático', 'sesilab' ),
            'all_items'             => __( 'Todos os Percursos Temáticos', 'sesilab' ),
            'search_items'          => __( 'Pesquisar Percursos Temáticos', 'sesilab' ),
            'parent_item_colon'     => __( 'Percursos Temáticos pais:', 'sesilab' ),
            'not_found'             => __( 'Nenhum Percurso Temático encontrado.', 'sesilab' ),
            'not_found_in_trash'    => __( 'Nenhum Percurso Temático encontrado na lixeira.', 'sesilab' ),
            'featured_image'        => _x( 'Imagem de capa do Percurso Temático', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'set_featured_image'    => _x( 'Configurar imagem de capa', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'remove_featured_image' => _x( 'Remover imagem de capa', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'use_featured_image'    => _x( 'Usar como imagem de capa', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'sesilab' ),
            'archives'              => _x( 'Lista de Percursos Temáticos', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'sesilab' ),
            'insert_into_item'      => _x( 'Inserir no Percurso Temático', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'sesilab' ),
            'uploaded_to_this_item' => _x( 'Enviado para este Percurso Temático', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'sesilab' ),
            'filter_items_list'     => _x( 'Filtrar lista de Percursos Temáticos', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'sesilab' ),
            'items_list_navigation' => _x( 'Navegação na lista de Percursos Temáticos', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'sesilab' ),
            'items_list'            => _x( 'Lista de Percursos Temáticos', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'sesilab' ),
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'percursos-tematicos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'show_in_rest'       => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'template'           => []
    );

    register_post_type( 'percursos-tematicos', $args );
}
add_action( 'init', 'sesilab_percursos_post_type_init' );
