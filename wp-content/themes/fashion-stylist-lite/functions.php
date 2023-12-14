<?php
/**
 * Theme functions and definitions
 *
 * @package fashion_stylist_lite
 */ 

if ( ! function_exists( 'fashion_stylist_lite_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function fashion_stylist_lite_enqueue_styles() {
		wp_enqueue_style( 'fashion-designer-studio-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'fashion-stylist-lite-style', get_stylesheet_directory_uri() . '/style.css', array( 'fashion-designer-studio-style-parent' ), '1.0.0' );
		wp_enqueue_style( 'owl.carousel.css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.css' );

		// Theme Customize CSS.
		require get_parent_theme_file_path( 'inc/extra_customization.php' );
		wp_add_inline_style( 'fashion-stylist-lite-style',$fashion_designer_studio_custom_style );

		wp_enqueue_script( 'fashion-stylist-lite-script.js', get_theme_file_uri( '/assets/js/script.js' ), array( 'jquery' ), true );

		wp_enqueue_script( 'owl.carousel-js', get_theme_file_uri( '/assets/js/owl.carousel.js' ), array( 'jquery' ),true );


	}
endif;
add_action( 'wp_enqueue_scripts', 'fashion_stylist_lite_enqueue_styles', 99 );

function fashion_stylist_lite_setup() {
	add_theme_support( 'align-wide' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( "wp-block-styles" );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support('custom-background',array(
		'default-color' => 'ffffff',
	));
	add_image_size( 'fashion-stylist-lite-featured-image', 2000, 1200, true );
	add_image_size( 'fashion-stylist-lite-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'fashion-stylist-lite' ),
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
		'flex-height' => true,
	) );

	/*
	* This theme styles the visual editor to resemble the theme style,
	* specifically font, colors, and column width.
	*/
	add_editor_style( array( 'assets/css/editor-style.css', ) );
}
add_action( 'after_setup_theme', 'fashion_stylist_lite_setup' );

function fashion_stylist_lite_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'fashion-stylist-lite' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'fashion-stylist-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'fashion-stylist-lite' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'fashion-stylist-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'fashion-stylist-lite' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'fashion-stylist-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'fashion-stylist-lite' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'fashion-stylist-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'fashion-stylist-lite' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'fashion-stylist-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'fashion-stylist-lite' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'fashion-stylist-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'fashion-stylist-lite' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'fashion-stylist-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'fashion_stylist_lite_widgets_init' );

function fashion_stylist_lite_customize_register() {
  	global $wp_customize;

  	$wp_customize->remove_section( 'fashion_designer_studio_pro' );
  	$wp_customize->remove_section( 'fashion_designer_studio_slider_section' );	
  	$wp_customize->remove_section( 'fashion_designer_studio_urls' );

	$wp_customize->remove_setting( 'fashion_designer_studio_section_social_heading' );
	$wp_customize->remove_control( 'fashion_designer_studio_section_social_heading' );

	$wp_customize->remove_setting( 'fashion_designer_studio_facebook' );
	$wp_customize->remove_control( 'fashion_designer_studio_facebook' );
	
	$wp_customize->remove_setting( 'fashion_designer_studio_twitter' );
	$wp_customize->remove_control( 'fashion_designer_studio_twitter' );

	$wp_customize->remove_setting( 'fashion_designer_studio_youtube' );
	$wp_customize->remove_control( 'fashion_designer_studio_youtube' );

	$wp_customize->remove_setting( 'fashion_designer_studio_instagram' );
	$wp_customize->remove_control( 'fashion_designer_studio_instagram' );

}
add_action( 'customize_register', 'fashion_stylist_lite_customize_register', 11 );

function fashion_stylist_lite_customize( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_stylesheet_directory_uri() ). '/assets/css/customizer.css');

	require get_theme_file_path( 'inc/custom-control.php' );

	$wp_customize->add_section('fashion_stylist_lite_pro', array(
		'title'    => __('UPGRADE FASHION STYLIST PREMIUM', 'fashion-stylist-lite'),
		'priority' => 1,
	));

	$wp_customize->add_setting('fashion_stylist_lite_pro', array(
		'default'           => null,
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control(new Fashion_Stylist_Lite_Pro_Control($wp_customize, 'fashion_stylist_lite_pro', array(
		'label'    => __('FASHION STYLIST PREMIUM', 'fashion-stylist-lite'),
		'section'  => 'fashion_stylist_lite_pro',
		'settings' => 'fashion_stylist_lite_pro',
		'priority' => 1,
	)));

	$wp_customize->add_setting('fashion_designer_studio_mission_category_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('fashion_designer_studio_mission_category_title',array(
		'label'	=> __('Section Title','fashion-stylist-lite'),
		'section' => 'fashion_designer_studio_mission_section',
		'type' => 'text'
	));

	// Slider Section
	$wp_customize->add_section( 'fashion_stylist_lite_slider_section' , array(
    	'title'      => __( 'Slider Section Settings', 'fashion-stylist-lite' ),
		'priority'   => 4,
	) );
		$wp_customize->add_setting( 'fashion_stylist_lite_section_slide_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Fashion_Stylist_Lite_Customizer_Customcontrol_Section_Heading( $wp_customize, 'fashion_stylist_lite_section_slide_heading', array(
		'label'       => esc_html__( 'Slider Settings', 'fashion-stylist-lite' ),		
		'section'     => 'fashion_stylist_lite_slider_section',
		'settings'    => 'fashion_stylist_lite_section_slide_heading',
	) ) );

	$wp_customize->add_setting(
		'fashion_stylist_lite_slider_arrows',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'fashion_designer_studio_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Fashion_Stylist_Lite_Customizer_Customcontrol_Switch(
			$wp_customize,
			'fashion_stylist_lite_slider_arrows',
			array(
				'settings'        => 'fashion_stylist_lite_slider_arrows',
				'section'         => 'fashion_stylist_lite_slider_section',
				'label'           => __( 'Check To show Slider', 'fashion-stylist-lite' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'fashion-stylist-lite' ),
					'off'    => __( 'Off', 'fashion-stylist-lite' ),
				),
				'active_callback' => '',
			)
		)
	);

	$fashion_stylist_lite_categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($fashion_stylist_lite_categories as $category){
	if($i==0){
	  $default = $category->slug;
	  $i++;
	}
	$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('fashion_designer_studio_slider_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'fashion_designer_studio_sanitize_select',
	));
	$wp_customize->add_control('fashion_designer_studio_slider_setting',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => esc_html__('Select Category to display slider image','fashion-stylist-lite'),
		'section' => 'fashion_stylist_lite_slider_section',
		'active_callback' => 'fashion_stylist_lite_slider_dropdown',
	));

}
add_action( 'customize_register', 'fashion_stylist_lite_customize' );

function fashion_stylist_lite_enqueue_comments_reply() {
  if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
    // Load comment-reply.js (into footer)
    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
  }
}
add_action(  'wp_enqueue_scripts', 'fashion_stylist_lite_enqueue_comments_reply' );

function fashion_stylist_lite_slider_dropdown(){
	if(get_option('fashion_stylist_lite_slider_arrows') == true ) {
		return true;
	}
	return false;
}

if ( ! defined( 'FASHION_STYLIST_LITE_PRO_LINK' ) ) {
	define('FASHION_STYLIST_LITE_PRO_LINK',__('https://www.ovationthemes.com/wordpress/fashion-stylist-wordpress-theme/','fashion-stylist-lite'));
}

if ( ! defined( 'FASHION_DESIGNER_STUDIO_SUPPORT' ) ) {
define('FASHION_DESIGNER_STUDIO_SUPPORT',__('https://wordpress.org/support/theme/fashion-stylist-lite/','fashion-stylist-lite'));
}
if ( ! defined( 'FASHION_DESIGNER_STUDIO_REVIEW' ) ) {
define('FASHION_DESIGNER_STUDIO_REVIEW',__('https://wordpress.org/support/theme/fashion-stylist-lite/reviews/#new-post','fashion-stylist-lite'));
}
if ( ! defined( 'FASHION_DESIGNER_STUDIO_LIVE_DEMO' ) ) {
define('FASHION_DESIGNER_STUDIO_LIVE_DEMO',__('https://www.ovationthemes.com/demos/fashion-stylist-lite/','fashion-stylist-lite'));
}
if ( ! defined( 'FASHION_DESIGNER_STUDIO_BUY_PRO' ) ) {
define('FASHION_DESIGNER_STUDIO_BUY_PRO',__('https://www.ovationthemes.com/wordpress/fashion-stylist-wordpress-theme/','fashion-stylist-lite'));
}
if ( ! defined( 'FASHION_DESIGNER_STUDIO_PRO_DOC' ) ) {
define('FASHION_DESIGNER_STUDIO_PRO_DOC',__('#','fashion-stylist-lite'));
}
if ( ! defined( 'FASHION_DESIGNER_STUDIO_THEME_NAME' ) ) {
define('FASHION_DESIGNER_STUDIO_THEME_NAME',__('Premium Fashion Stylist Theme','fashion-stylist-lite'));
}

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Fashion_Stylist_Lite_Pro_Control')):
    class Fashion_Stylist_Lite_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
            <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( FASHION_STYLIST_LITE_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE FASHION STYLIST PREMIUM','fashion-stylist-lite');?> </a>
            </div>
            <div class="col-md">
                <img class="fashion_stylist_lite_img_responsive " src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png">
            </div>
            <div class="col-md">
                <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('FASHION STYLIST PREMIUM - Features', 'fashion-stylist-lite'); ?></h3>
                <ul style="padding-top:10px">
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'fashion-stylist-lite');?> </li>
                    <li class="upsell-fashion_stylist_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'fashion-stylist-lite');?> </li>
                </ul>
            </div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( FASHION_STYLIST_LITE_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE FASHION STYLIST PREMIUM','fashion-stylist-lite');?> </a>
            </div>
        </label>
    <?php } }
endif;


