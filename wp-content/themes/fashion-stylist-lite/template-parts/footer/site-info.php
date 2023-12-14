<?php
/**
 * Displays footer site info
 *
 * @subpackage Fashion Stylist Lite
 * @since 1.0
 * @version 1.4
 */

?>

<div class="site-info py-4 text-center">
	<?php
        echo esc_html( get_theme_mod( 'fashion_designer_studio_footer_text' ) );
        printf(
            /* translators: %s: Fashion Stylist WordPress Theme. */
            '<a href="' . esc_attr__( 'https://www.ovationthemes.com/wordpress/free-fashion-wordpress-theme/', 'fashion-stylist-lite' ) . '"> %s</a>',
            esc_html__( 'Fashion Stylist WordPress Theme', 'fashion-stylist-lite' )
        );
    ?>
</div>