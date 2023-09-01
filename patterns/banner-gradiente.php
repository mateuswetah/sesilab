<?php
/**
 * Title: Banner com Gradiente
 * Slug: sesilab/banner-gradiente
 * Categories: banners, sesilab
 */

$image_tags = esc_url( get_stylesheet_directory_uri() ) . '/assets/images/tags.svg';
$image_loja_bg = esc_url( get_stylesheet_directory_uri() ) . '/assets/images/loja-bg-image.png';
?>

<!-- wp:cover {"url":"<?php echo esc_url( $image_loja_bg ); ?>","id":1528,"dimRatio":0,"focalPoint":{"x":1,"y":0.52},"minHeight":314,"minHeightUnit":"px","isDark":false,"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"is-style-sesilab-cover-contain"} -->
<div class="wp-block-cover is-light is-style-sesilab-cover-contain" style="border-radius:24px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:314px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1528" alt="" src="<?php echo esc_url( $image_loja_bg ); ?>" style="object-position:100% 52%" data-object-fit="cover" data-object-position="100% 52%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"color":{"gradient":"linear-gradient(90deg,rgb(245,244,246) 48%,rgba(234,234,234,0) 100%)"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"540px","justifyContent":"left"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(90deg,rgb(245,244,246) 48%,rgba(234,234,234,0) 100%);padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}},"dimensions":{"minHeight":"314px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:314px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|palette-color-4"}}},"typography":{"textTransform":"uppercase"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"palette-color-4","fontSize":"medium"} -->
<h2 class="wp-block-heading has-text-align-left has-palette-color-4-color has-text-color has-link-color has-medium-font-size" style="margin-top:0;margin-bottom:0;text-transform:uppercase"><img class="wp-image-1521" style="width: NaNpx;" src="<?php echo esc_url( $image_tags ); ?>" alt=""> Título</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|palette-color-3"}}}},"textColor":"palette-color-3"} -->
<p class="has-palette-color-3-color has-text-color has-link-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->