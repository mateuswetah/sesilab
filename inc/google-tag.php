<?php

/**
 * Add google tag manager code in head tag.
 */
function sesilab_add_gtm_code() {
?>
	<!-- Google Tag Manager -->
	<script>
	(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-MBKQ95F7');
	</script>
	<!-- End Google Tag Manager -->
<?php
}
add_action( 'wp_head', 'sesilab_add_gtm_code' );

/**
 * Add google tag manager noscript just after opening body tag.
 */
function sesilab_add_gtm_code_noscript() {
?>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBKQ95F7" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
<?php
}
add_action( 'wp_body_open', 'sesilab_add_gtm_code_noscript' );