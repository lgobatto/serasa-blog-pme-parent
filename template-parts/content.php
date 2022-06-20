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

	<a class="linkarticle" href="<?php echo get_permalink() ?>">
	<div class="post-thumbnail-container">	
	<?php echo the_post_thumbnail('thumbnailsListaGrande'); ?>
	
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

		 ?>
		</h2>

	</header><!-- .entry-header -->
	

	</a>

	<footer class="entry-footer">
		<?php echo get_the_date(); ?>


		<ul>
			
			<li>
					<a onclick="analyticsCliquesGenericos('<?php echo get_the_title(); ?>','compartilharPost-linkedin')" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?> linkedin" target="_blank">

					<img src="https://empresas.serasaexperian.com.br/blog/wp-content/themes/blogEmpreendedor/imgs/icon_linkedin.png" alt="compartilhe no linkedin" srcset="https://empresas.serasaexperian.com.br/blog/wp-content/themes/blogEmpreendedor/imgs/icon_linkedin.png , https://empresas.serasaexperian.com.br/blog/wp-content/themes/blogEmpreendedor/imgs/icon_linkedin_2x.png 2x, https://empresas.serasaexperian.com.br/blog/wp-content/themes/blogEmpreendedor/imgs/icon_linkedin_3x.png 3x">
				</a>
	
			</li>

			<li>
				<a onclick="analyticsCliquesGenericos('<?php echo get_the_title(); ?>','compartilharPost-facebook-Lista')" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank">
					<img src="https://empresas.serasaexperian.com.br/blog/wp-content/themes/blogEmpreendedor/imgs/icon_FB.png" alt="compartilhe no facebook" srcset="https://empresas.serasaexperian.com.br/blog/wp-content/themes/blogEmpreendedor/imgs/icon_FB.png , https://empresas.serasaexperian.com.br/blog/wp-content/themes/blogEmpreendedor/imgs/icon_FB_2x.png 2x , https://empresas.serasaexperian.com.br/blog/wp-content/themes/blogEmpreendedor/imgs/icon_FB_3x.png 3x">
				</a>
	
			</li>
			<li class="whatsapp">
				<a onclick="analyticsCliquesGenericos('<?php echo get_the_title(); ?>','compartilharPost-whatsapp-Lista')" href="whatsapp://send?text=<?php echo urlencode(get_permalink()); ?>" target="_blank">
					<img src="https://empresas.serasaexperian.com.br/blog/wp-content/themes/blogEmpreendedor/imgs/icon_whatsapp.png" alt="compartilhe no whatsapp" srcset="https://empresas.serasaexperian.com.br/blog/wp-content/themes/blogEmpreendedor/imgs/icon_whatsapp.png , https://empresas.serasaexperian.com.br/blog/wp-content/themes/blogEmpreendedor/imgs/icon_whatsapp_2x.png 2x, https://empresas.serasaexperian.com.br/blog/wp-content/themes/blogEmpreendedor/imgs/icon_whatsapp_3x.png 3x">
				</a>
			
			</li>

		</ul>




	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

