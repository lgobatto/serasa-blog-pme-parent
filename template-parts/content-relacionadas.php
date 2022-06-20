<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>




<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<a onclick="analyticsCliquesGenericos('<?php echo get_the_title();?>','Materias Relacionadas')" href="<?php echo get_permalink() ?>">
	<div class="post-thumbnail-container">	
	<?php echo the_post_thumbnail('thumbnailsLista'); ?>
	</div>

	<?php 

	$cat = new WPSEO_Primary_Term('category', get_the_ID());
    $catid = $cat->get_primary_term();

    if(function_exists('rl_color')){
		$rl_category_color = rl_color($catid);
	}


    echo '<span class="tagCategoria" style="background:'.$rl_category_color.'">'.get_cat_name($catid).'</span>';
     ?>

	<header class="entry-header">
		<h2 class="entry-title">
		<?php 

		 the_title();



		//the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); 
		 ?>
		</h2>

	</header><!-- .entry-header -->

	</a>

	<footer class="entry-footer">
		<?php echo get_the_date(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

