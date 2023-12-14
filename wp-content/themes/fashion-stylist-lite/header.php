<?php
/**
 * The header for our theme
 *
 * @subpackage Fashion Designer Studio
 * @since 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fashion-designer-studio' ); ?></a>
	<?php if( get_option('fashion_designer_studio_theme_loader',true) != 'off'){ ?>
		<div class="preloader">
			<div class="load">
			  <hr/><hr/><hr/><hr/>
			</div>
		</div>
	<?php }?>
	<div id="page" class="site">
		<div id="header">
			<?php if( get_theme_mod('fashion_designer_studio_top_discount_text') != '' || get_theme_mod('fashion_designer_studio_top_phone_number') != '' || get_theme_mod('fashion_designer_studio_top_timing') != '' ){ ?>
				<div class="top_bar py-2">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
								<?php if( get_theme_mod('fashion_designer_studio_top_discount_text') != '' ){ ?>
									<span><?php echo esc_html(get_theme_mod('fashion_designer_studio_top_discount_text','')); ?></span>
								<?php }?>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 align-self-center text-center text-md-right">
								<?php if( get_theme_mod('fashion_designer_studio_top_phone_number') != '' ){ ?>
									<span class="mr-3"><i class="<?php echo esc_attr(get_theme_mod('fashion_designer_studio_phone_icon','fas fa-phone')); ?> mr-2"></i><?php echo esc_html(get_theme_mod('fashion_designer_studio_top_phone_number','')); ?></span>
								<?php }?>
								<?php if( get_theme_mod('fashion_designer_studio_top_timing') != '' ){ ?>
									<span><i class="<?php echo esc_attr(get_theme_mod('fashion_designer_studio_timimg_icon','fas fa-clock')); ?> mr-2"></i><?php echo esc_html(get_theme_mod('fashion_designer_studio_top_timing','')); ?></span>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			<?php }?>
			<div class="wrap_figure">
				<div class="menu_header py-2">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-4 col-9 align-self-center mb-2 mb-md-0">
								<div class="logo py-3 py-lg-0">
							        <?php if ( has_custom_logo() ) : ?>
					            		<?php the_custom_logo(); ?>
						            <?php endif; ?>
					              	<?php $blog_info = get_bloginfo( 'name' ); ?>
										<?php if( get_option('fashion_designer_studio_logo_title',false) != 'off'){ ?>
						                <?php if ( ! empty( $blog_info ) ) : ?>
						                  	<?php if ( is_front_page() && is_home() ) : ?>
						                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						                  	<?php else : ?>
					                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					                  		<?php endif; ?>
						                <?php endif; ?>
													<?php } ?>
						                <?php
					                  		$description = get_bloginfo( 'description', 'display' );
						                  	if ( $description || is_customize_preview() ) :
						                ?>
										<?php if( get_option('fashion_designer_studio_logo_text',true) != 'off'){ ?>
					                  	<p class="site-description">
					                    	<?php echo esc_html($description); ?>
					                  	</p>
														<?php } ?>
					              	<?php endif; ?>
							    </div>
							</div>
							<div class="col-lg-7 col-md-5 col-sm-5 col-3 align-self-center">
									<div class="toggle-menu gb_menu text-md-right">
										<button onclick="fashion_designer_studio_gb_Menu_open()" class="gb_toggle p-2"><i class="fas fa-ellipsis-h"></i><p class="mb-0"><?php esc_html_e('Menu','fashion-designer-studio'); ?></p></button>
									</div>
				   				<?php get_template_part('template-parts/navigation/navigation'); ?>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-3 align-self-center text-center text-md-right">
								<?php if( get_option('fashion_designer_studio_cart_enable',false) != 'off'){ ?>
									<?php
										if ( class_exists( 'WooCommerce' ) ) { ?>
										<?php global $woocommerce; ?>
										<a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="header-cart mr-3"><i class="fas fa-shopping-basket"></i> <span><?php echo esc_html( $woocommerce->cart->cart_contents_count ); ?></span></a>
									<?php }?>
								<?php }?>
								<?php if( get_option('fashion_designer_studio_login_enable',false) != 'off'){ ?>
									<?php
										if ( class_exists( 'WooCommerce' ) ) { ?>
										<?php if ( is_user_logged_in() ) { ?>
											<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" class="mr-3"><i class="fas fa-user"></i></a>
										<?php } else { ?>
											<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" class="mr-3"><i class="fas fa-sign-out-alt"></i></a>
										<?php } ?>
									<?php } ?>
								<?php }?>
								<?php if( get_theme_mod('fashion_designer_studio_wishlist_url') != '' ){ ?>
									<a href="<?php echo esc_html(get_theme_mod('fashion_designer_studio_wishlist_url','')); ?>"><i class="far fa-heart"></i></a>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
