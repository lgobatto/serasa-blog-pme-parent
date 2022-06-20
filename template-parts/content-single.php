<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 

		$GLOBALS[ 'postName' ] = get_the_title();

		the_title( '<h1 class="title">', '</h1>' ); ?>

		<?php 

		$cat = new WPSEO_Primary_Term('category', get_the_ID());
	    $catid = $cat->get_primary_term();

	    if(function_exists('rl_color')){
			$rl_category_color = rl_color($catid);
		}
		$catName = get_cat_name($catid);

		$GLOBALS[ 'postName' ] = get_the_title();
		$GLOBALS[ 'postCategory'] = $catName;

		

	    echo '<span class="tagCategoria" style="background:'.$rl_category_color.'"><a style="color:#fff;" href="'. get_category_link($catid).'">'.$catName.'</a></span>';

	     ?>

	</header><!-- .entry-header -->

	<?php //twentysixteen_post_thumbnail("postDestaque");
		echo '<div class="post-thumbnail">';
		echo the_post_thumbnail('postDestaque');
		echo '</div>';
	?>

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<div style="text-align: right;"><span class="infosPost">Publicada em <?php echo get_the_date(); ?> - Fonte: <span class="vcard author author_name"><span class="fn"><?php echo get_the_author();?></span></span></span></div>

		<div class="compartilharPost" style="clear: both;">

				<?php 
				$currentUrl = getCurrentURL();
				$currentUrlEncoded =  urlencode($currentUrl);
			 	?>

				<div style="text-align: right;">Gostou desse conteúdo? <br> Compartilhe:</div>
				<div>
					<a onclick="analyticsCliquesGenericos('<?php echo $GLOBALS[ 'postName' ]; ?>','compartilharPost-facebook')" href="https://www.facebook.com/sharer.php?u=<?php echo $currentUrlEncoded ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri() ?>/imgs/icon_FB.png" alt="compartilhe no facebook"   srcset="<?php echo get_template_directory_uri() ?>/imgs/icon_FB.png , <?php echo get_template_directory_uri() ?>/imgs/icon_FB_2x.png 2x , <?php echo get_template_directory_uri() ?>/imgs/icon_FB_3x.png 3x">
					</a>
					
				</div>
				<div>
					<a onclick="analyticsCliquesGenericos('<?php echo $GLOBALS[ 'postName' ]; ?>','compartilharPost-twitter')" href="https://twitter.com/share?url=<?php echo $currentUrlEncoded ?>&text=null&via=site" target="_blank">
						<img src="<?php echo get_template_directory_uri() ?>/imgs/icon_twitter.png" alt="compartilhe no twitter"   srcset="<?php echo get_template_directory_uri() ?>/imgs/icon_twitter.png , <?php echo get_template_directory_uri() ?>/imgs/icon_twitter_2x.png 2x, <?php echo get_template_directory_uri() ?>/imgs/icon_twitter_3x.png 3x">
					</a>
				</div>
				<div>
					<a onclick="analyticsCliquesGenericos('<?php echo $GLOBALS[ 'postName' ]; ?>','compartilharPost-linkedin')" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $currentUrlEncoded ?>&title=null linkedin" target="_blank">
						<img src="<?php echo get_template_directory_uri() ?>/imgs/icon_linkedin.png" alt="compartilhe no linkedin" srcset="<?php echo get_template_directory_uri() ?>/imgs/icon_linkedin.png , <?php echo get_template_directory_uri() ?>/imgs/icon_linkedin_2x.png 2x, <?php echo get_template_directory_uri() ?>/imgs/icon_linkedin_3x.png 3x">
					</a>
				</div>
				<div class="whatsapp">
					<a onclick="analyticsCliquesGenericos('<?php echo $GLOBALS[ 'postName' ]; ?>','compartilharPost-whatsapp')" href="whatsapp://send?text=<?php echo $currentUrlEncoded ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri() ?>/imgs/icon_whatsapp.png" alt="compartilhe no whatsapp" srcset="<?php echo get_template_directory_uri() ?>/imgs/icon_whatsapp.png , <?php echo get_template_directory_uri() ?>/imgs/icon_whatsapp_2x.png 2x, <?php echo get_template_directory_uri() ?>/imgs/icon_whatsapp_3x.png 3x">
					</a>
				</div>

		</div>
		
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

