<?php
/**
 * Função para adicionar estilos personalizados ao conteúdo H5P
 */
function sesilab_alter_h5p_styles(&$styles, $libraries, $embed_type) {
  $styles[] = (object) array(
    /*
     * Path can be relative to wp-content/uploads/h5p or absolute or set using
     * WordPress functions
     */
    'path' => get_stylesheet_directory_uri() . '/assets/css/h5p.css',
    'version' => '?ver=' . wp_get_theme()->get('Version')
  );
}
add_action('h5p_alter_library_styles', 'sesilab_alter_h5p_styles', 10, 3);