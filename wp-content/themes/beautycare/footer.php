<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BeautyCare
 */
$beautycare_footer_widgets_enabled = get_theme_mod('designexo_footer_widgets_enabled', true);  
$beautycare_footer_container_size = get_theme_mod('designexo_footer_container_size', 'container');
$beautycare_footer_copright_enabled = get_theme_mod('designexo_footer_copright_enabled', true);
$beautycare_footer_copright_text = get_theme_mod('designexo_footer_copright_text', __('Copyright &copy; 2023 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> BeautyCare theme by <a target="_blank" href="//themearile.com/">ThemeArile</a>', 'beautycare'));
$beautycare_scroll_to_top_enabled = get_theme_mod('designexo_scroll_to_top_enabled', true); 
?>
	<!--Footer-->
	<footer class="site-footer light">

	<?php if($beautycare_footer_widgets_enabled == true): ?>
		<div class="<?php echo esc_attr($beautycare_footer_container_size); ?>">
			<!--Footer Widgets-->			
			<div class="row footer-sidebar">
			   <?php get_template_part('sidebar','footer');?>
			</div>
		</div>
		<!--/Footer Widgets-->
	<?php endif; ?>		
		

    <?php if($beautycare_footer_copright_enabled == true): ?>
		<!--Site Info copyright-->
		<div class="site-info text-center">
			<?php echo wp_kses_post($beautycare_footer_copright_text); ?>				
		</div>
		<!--/Site Info copyright-->			
	<?php endif; ?>	
			
	</footer>
	<!--/Footer-->		
	<?php if($beautycare_scroll_to_top_enabled == true): ?>
		<!--Page Scroll to Top-->
		<div class="page-scroll-up"><a href="#totop"><i class="fa fa-angle-up"></i></a></div>
		<!--/Page Scroll to Top-->
    <?php endif; ?>	
	
<?php wp_footer(); ?>

</body>
</html>