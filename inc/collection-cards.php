<?php
/**
 * Configurações para ser possível determinar o tamanho, a cor e a posição dos cartões das coleções
 */

// Adiciona campos personalizados para as coleções 
function sesilab_collections_register_hook() {
    if ( function_exists( 'tainacan_register_admin_hook' ) )
        tainacan_register_admin_hook( 'collection', 'sesilab_collections_form', 'end-right' );
}
add_action( 'tainacan-register-admin-hooks', 'sesilab_collections_register_hook');

// Salva os dados dos campos personalizados
function sesilab_collections_save_data( $object ) {
    if ( ! function_exists( 'tainacan_get_api_postdata' ) )
        return;
    
    $post = tainacan_get_api_postdata();
    if ( $object->can_edit() ) {
        if ( isset( $post->{'collection_card_is_wide'} ) ) {
            update_post_meta( $object->get_id(), 'collection_card_is_wide', $post->{'collection_card_is_wide'});
        }
        if ( isset( $post->{'collection_card_order'} ) ) {
            update_post_meta( $object->get_id(), 'collection_card_order', $post->{'collection_card_order'});
        }
    }
}
add_action( 'tainacan-insert-tainacan-collection', 'sesilab_collections_save_data');

// Adiciona os campos personalizados na resposta da API
function sesilab_collections_add_meta_to_response( $extra_meta, $request ) {
    $extra_meta = array(
        'collection_card_is_wide',
        'collection_card_order'
    );
    return $extra_meta;
}
add_filter( 'tainacan-api-response-collection-meta', 'sesilab_collections_add_meta_to_response', 10, 2 );

// O formulário onde serão mostrados os campos personalizados
function sesilab_collections_form() {
    if ( ! function_exists( 'tainacan_get_api_postdata' ) )
            return '';

    ob_start();
    ?>
    <div class="tainacan-sesilab-collection"> 
        <div class="field tainacan-collection--section-header">
            <h4><?php _e( 'SESI LAB Digital', 'sesilab' ); ?></h4>
            <hr>
        </div>
        <div class="field">
            <label class="label"><?php _e('Opções do cartão da coleção na grade de coleções:', 'sesilab'); ?></label>
            <div class="control is-clearfix">
                <label id="collection-card-size-default" class="collection-card-size-text b-radio radio">
                    <input
                        type="radio" 
                        value="default" 
                        name="<?php echo esc_attr('collection_card_is_wide'); ?>"
                        checked>
                    <span class="check"></span>
                    <span class="control-label"><?php _e( 'Padrão', 'sesilab' ); ?></span>
                </label>
                <label id="collection-card-size-wide" class="collection-card-size-text b-radio radio">
                    <input
                        type="radio" 
                        value="wide" 
                        name="<?php echo esc_attr('collection_card_is_wide'); ?>">
                    <span class="check"></span>
                    <span class="control-label"><?php _e( 'Amplo', 'sesilab' ); ?></span>
                </label>
            </div>
            <div class="control is-clearfix">
                <label id="collection-card-order-label" for="collection-card-order-input"  class="collection-card-order label"><?php _e( 'Ordem (forçada)', 'sesilab' ); ?></label>
                <input
                    class="input"
                    id="collection-card-order-input"
                    type="number" 
                    value="0" 
                    name="<?php echo esc_attr('collection_card_order'); ?>"
                    checked>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

// Usa dos dados salvos para aplicar estilos e classes nos cartões das coleções
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

    $is_collection_card_wide = get_post_meta( get_the_ID(), 'collection_card_is_wide');
    $is_collection_card_wide = is_array($is_collection_card_wide) && count($is_collection_card_wide) ? $is_collection_card_wide[0] : $is_collection_card_wide;
    $is_collection_card_wide = $is_collection_card_wide === 'wide' ? true : false;

    if ( $is_collection_card_wide ) : ?>
        <style>
            .tainacan-collection.entry-card.post-<?php echo get_the_ID(); ?> {
                grid-column: span 2 !important;
            }
        </style>
    <?php endif;

    $collection_card_forced_order = get_post_meta( get_the_ID(), 'collection_card_order');
    $collection_card_forced_order = is_array($collection_card_forced_order) && count($collection_card_forced_order) ? $collection_card_forced_order[0] : 0;

    if ( $collection_card_forced_order ) : ?>
        <style>
            .tainacan-collection.entry-card.post-<?php echo get_the_ID(); ?> {
                order: <?php echo $collection_card_forced_order; ?> !important;
            }
        </style>
    <?php endif;
});
