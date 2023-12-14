<?php
/**
 * Displays footer site info
 *
 * @subpackage Shopper Ecommerce
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info py-4 text-center">
	<?php
        echo esc_html( get_theme_mod( 'modern_ecommerce_footer_text' ) );
        printf(
            /* translators: %s: Ecommerce WordPress Theme. */
            '<a href="' . esc_attr__( 'https://www.ovationthemes.com/wordpress/free-shopkeeper-wordpress-theme/', 'shopper-ecommerce' ) . '"> %s</a>',
            esc_html__( 'Ecommerce WordPress Theme', 'shopper-ecommerce' )
        );
    ?>
</div>
