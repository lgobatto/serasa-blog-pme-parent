<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		
		<!-- mais post -->
		<?php 

		if(is_single()){
			get_template_part( 'template-parts/content', 'widget-lead' ); 
		} ?>
		

		<!-- categorias -->
		<?php 
		if(is_home() || is_archive()){
			get_template_part( 'template-parts/content', 'widget-categorias' ); 
		}
		?>

		<!-- banner LP -->
		<?php get_template_part( 'template-parts/content', 'banner-rich-content' ); ?>

		<!-- mais lidas -->
		<?php get_template_part( 'template-parts/content', 'widget-maisLidas' ); ?>

		<!-- mais download -->
		<?php get_template_part( 'template-parts/content', 'widget-download' ); ?>

		<!-- mais calendario -->
		<?php get_template_part( 'template-parts/content', 'widget-agendaCalendario' ); ?>
		
		


	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
