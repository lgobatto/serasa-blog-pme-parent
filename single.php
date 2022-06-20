<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
$GLOBALS[ 'pagename' ] = "SA:NL:MEMEI:Blog:Post";
?>




<div id="primary" class="content-area post-area">
	<main id="main" class="site-main full-post" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// End of the loop.
		endwhile;
		?>


	</main><!-- .site-main -->

	<?php get_template_part( 'template-parts/content', 'widget-comentarios' );  ?>


	<?php get_template_part( 'template-parts/content', 'widget-relacionadas' );  ?>

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
