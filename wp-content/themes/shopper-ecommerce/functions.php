<?php
/**
 * Theme functions and definitions
 *
 * @package Shopper Ecommerce
 */

if ( ! function_exists( 'shopper_ecommerce_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function shopper_ecommerce_enqueue_styles() {
		wp_enqueue_style( 'modern-ecommerce-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'shopper-ecommerce-style', get_stylesheet_directory_uri() . '/style.css', array( 'modern-ecommerce-style-parent' ), '1.0.0' );
		require get_parent_theme_file_path( 'inc/extra_customization.php' );
		wp_add_inline_style( 'shopper-ecommerce-style',$modern_ecommerce_custom_style );

		// blocks css
        wp_enqueue_style( 'shopper-ecommerce-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'shopper-ecommerce-style' ), '1.0' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'shopper_ecommerce_enqueue_styles', 99 );

function shopper_ecommerce_setup() {
	add_theme_support( 'align-wide' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( "wp-block-styles" );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header' );
	add_theme_support('custom-background',array(
		'default-color' => 'ffffff',
	));
	add_image_size( 'shopper-ecommerce-featured-image', 2000, 1200, true );
	add_image_size( 'shopper-ecommerce-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'shopper-ecommerce' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height'  => true,
	) );

	/*
	* This theme styles the visual editor to resemble the theme style,
	* specifically font, colors, and column width.
	*/
	add_editor_style( array( 'assets/css/editor-style.css', modern_ecommerce_fonts_url() ) );
}
add_action( 'after_setup_theme', 'shopper_ecommerce_setup' );

function shopper_ecommerce_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'shopper_ecommerce_custom_header_args', array(
		'default-image'          => get_theme_file_uri( '/assets/images/header-img.png' ),
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 100,
		'flex-width'			 => true,
		'flex-height'			 => true,
		'wp-head-callback'       => 'modern_ecommerce_header_style',
	) ) );

	register_default_headers( array(
		'default-image' => array(
			'url'           => '%s/assets/images/header-img.png',
			'thumbnail_url' => '%s/assets/images/header-img.png',
			'description'   => __( 'Default Header Image', 'shopper-ecommerce' ),
		),
	) );
}

add_action( 'after_setup_theme', 'shopper_ecommerce_custom_header_setup' );

function shopper_ecommerce_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'shopper-ecommerce' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'shopper-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'shopper-ecommerce' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'shopper-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'shopper-ecommerce' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'shopper-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'shopper-ecommerce' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'shopper-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'shopper-ecommerce' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'shopper-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'shopper-ecommerce' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'shopper-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'shopper-ecommerce' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'shopper-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'shopper_ecommerce_widgets_init' );

function shopper_ecommerce_customize_register() {
  	global $wp_customize;

  	$wp_customize->remove_section( 'modern_ecommerce_pro' );
}
add_action( 'customize_register', 'shopper_ecommerce_customize_register', 11 );

function shopper_ecommerce_customize( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_stylesheet_directory_uri() ). '/assets/css/customizer.css');

	require get_theme_file_path( 'inc/custom-control.php' );

	$wp_customize->add_section('shopper_ecommerce_pro', array(
		'title'    => __('UPGRADE SHOPPER PREMIUM', 'shopper-ecommerce'),
		'priority' => 1,
	));

	$wp_customize->add_setting('shopper_ecommerce_pro', array(
		'default'           => null,
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control(new Shopper_Ecommerce_Pro_Control($wp_customize, 'shopper_ecommerce_pro', array(
		'label'    => __('SHOPPER ECOMMERCE PREMIUM', 'shopper-ecommerce'),
		'section'  => 'shopper_ecommerce_pro',
		'settings' => 'shopper_ecommerce_pro',
		'priority' => 1,
	)));

	// Featured Category Section
	$wp_customize->add_section( 'shopper_ecommerce_featured_cat_section' , array(
    	'title'      => __( 'Featured Category Section Settings', 'shopper-ecommerce' ),
		'priority'   => 6,
	) );

	$wp_customize->add_setting( 'shopper_ecommerce_section_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

	$wp_customize->add_control( new Shopper_Ecommerce_Customizer_Customcontrol_Section_Heading( $wp_customize, 'shopper_ecommerce_section_heading', array(
			'label'       => esc_html__( 'Featured Category Settings', 'shopper-ecommerce' ),	
			'section'     => 'shopper_ecommerce_featured_cat_section',
			'settings'    => 'shopper_ecommerce_section_heading',
		) ) );

	$wp_customize->add_setting(
		'shopper_ecommerce_featured_show_hide',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'modern_ecommerce_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Shopper_Ecommerce_Customizer_Customcontrol_Switch(
			$wp_customize,
			'shopper_ecommerce_featured_show_hide',
			array(
				'settings'        => 'shopper_ecommerce_featured_show_hide',
				'section'         => 'shopper_ecommerce_featured_cat_section',
				'label'           => __( 'Check To show Section', 'shopper-ecommerce' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'shopper-ecommerce' ),
					'off'    => __( 'Off', 'shopper-ecommerce' ),
				),
				'active_callback' => '',
			)
		)
	);

	$wp_customize->add_setting('shopper_ecommerce_featured_cat_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shopper_ecommerce_featured_cat_title',array(
		'label'	=> esc_html__('Section Title ','shopper-ecommerce'),
		'section'	=> 'shopper_ecommerce_featured_cat_section',
		'type'		=> 'text',
		'active_callback' => 'shopper_ecommerce_featured_dropdown',

	));

	$wp_customize->selective_refresh->add_partial( 'shopper_ecommerce_featured_cat_title', array(
  'selector' => '#featured-cat h2',
  'render_callback' => 'shopper_ecommerce_customize_partial_shopper_ecommerce_featured_cat_title',
) );

	$wp_customize->add_setting('shopper_ecommerce_featured_cat_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shopper_ecommerce_featured_cat_text',array(
		'label'	=> esc_html__('Section Text','shopper-ecommerce'),
		'section'	=> 'shopper_ecommerce_featured_cat_section',
		'type'		=> 'text',
		'active_callback' => 'shopper_ecommerce_featured_dropdown',
	));

	$wp_customize->add_setting('shopper_ecommerce_featured_cat_increament',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('shopper_ecommerce_featured_cat_increament',array(
		'label'	=> esc_html__('Featured Category Increament','shopper-ecommerce'),
		'section'	=> 'shopper_ecommerce_featured_cat_section',
		'type'		=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
		'active_callback' => 'shopper_ecommerce_featured_dropdown',
	));

	$shopper_ecommerce_volunteer = get_theme_mod('shopper_ecommerce_featured_cat_increament');
	for ($i=1; $i <= $shopper_ecommerce_volunteer ; $i++) {

		$wp_customize->add_setting('shopper_ecommerce_featured_cat_box_image'.$i, array(
			'default' => '',
			'sanitize_callback'	=> 'esc_url_raw',
			'capability' => 'edit_theme_options',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'shopper_ecommerce_featured_cat_box_image'.$i, array(
			'label' => __( 'Featured Category Image ', 'shopper-ecommerce' ).$i,
			'section' => 'shopper_ecommerce_featured_cat_section',
			'settings' => 'shopper_ecommerce_featured_cat_box_image'.$i,
		)));

		$wp_customize->add_setting('shopper_ecommerce_featured_cat_box_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('shopper_ecommerce_featured_cat_box_title'.$i,array(
			'label'	=> esc_html__('Title ','shopper-ecommerce').$i,
			'section'	=> 'shopper_ecommerce_featured_cat_section',
			'type'		=> 'text',
			'active_callback' => 'shopper_ecommerce_featured_dropdown',
		));

		$wp_customize->add_setting('shopper_ecommerce_featured_cat_box_title_link'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('shopper_ecommerce_featured_cat_box_title_link'.$i,array(
			'label'	=> esc_html__('URL ','shopper-ecommerce').$i,
			'section'	=> 'shopper_ecommerce_featured_cat_section',
			'type'		=> 'text',
			'active_callback' => 'shopper_ecommerce_featured_dropdown',
		));
	}
}
add_action( 'customize_register', 'shopper_ecommerce_customize' );

function shopper_ecommerce_enqueue_comments_reply() {
  if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
    // Load comment-reply.js (into footer)
    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
  }
}
add_action(  'wp_enqueue_scripts', 'shopper_ecommerce_enqueue_comments_reply' );

function shopper_ecommerce_featured_dropdown(){
	if(get_option('shopper_ecommerce_featured_show_hide') == true ) {
		return true;
	}
	return false;
}

define('SHOPPER_ECOMMERCE_PRO_LINK',__('https://www.ovationthemes.com/wordpress/shopkeeper-wordpress-theme/','shopper-ecommerce'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Shopper_Ecommerce_Pro_Control')):
    class Shopper_Ecommerce_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
            <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( SHOPPER_ECOMMERCE_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE SHOPPER PREMIUM','shopper-ecommerce');?> </a>
            </div>
            <div class="col-md">
                <img class="shopper_ecommerce_img_responsive " src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png">
            </div>
            <div class="col-md">
                <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('SHOPPER ECOMMERCE PREMIUM - Features', 'shopper-ecommerce'); ?></h3>
                <ul style="padding-top:10px">
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'shopper-ecommerce');?> </li>
                    <li class="upsell-shopper_ecommerce"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'shopper-ecommerce');?> </li>
                </ul>
            </div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( SHOPPER_ECOMMERCE_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE SHOPPER PREMIUM','shopper-ecommerce');?> </a>
            </div>
        </label>
    <?php } }
endif;

if ( ! defined( 'MODERN_ECOMMERCE_SUPPORT' ) ) {
define('MODERN_ECOMMERCE_SUPPORT',__('https://wordpress.org/support/theme/shopper-ecommerce/','shopper-ecommerce'));
}
if ( ! defined( 'MODERN_ECOMMERCE_REVIEW' ) ) {
define('MODERN_ECOMMERCE_REVIEW',__('https://wordpress.org/support/theme/shopper-ecommerce/reviews/','shopper-ecommerce'));
}
if ( ! defined( 'MODERN_ECOMMERCE_LIVE_DEMO' ) ) {
define('MODERN_ECOMMERCE_LIVE_DEMO',__('https://www.ovationthemes.com/demos/shopkeeper-ecommerce/','shopper-ecommerce'));
}
if ( ! defined( 'MODERN_ECOMMERCE_BUY_PRO' ) ) {
define('MODERN_ECOMMERCE_BUY_PRO',__('https://www.ovationthemes.com/wordpress/shopkeeper-wordpress-theme/','shopper-ecommerce'));
}
if ( ! defined( 'MODERN_ECOMMERCE_PRO_DOC' ) ) {
define('MODERN_ECOMMERCE_PRO_DOC',__('https://ovationthemes.com/docs/ot-shopkeeper-ecommerce-pro-doc/','shopper-ecommerce'));
}
if ( ! defined( 'MODERN_ECOMMERCE_THEME_NAME' ) ) {
define('MODERN_ECOMMERCE_THEME_NAME',__('Premium Shopkeeper Theme','shopper-ecommerce'));
}
