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


	<a class="linkarticle" target="_blank" href="https://www.serasaempreendedor.com.br/credito-para-microempreendedor-me-mei">
	<div class="post-thumbnail-container">	
		<img src="<?php echo get_template_directory_uri()?>/imgs/thumb_credito.jpg" alt="acessso a crédito para MEI e ME">
	</div>

	<?php 

    echo '<span class="tagCategoria" style="background:#406eb3">Crédito</span>';
     ?>

	<header class="entry-header">
		<h2 class="entry-title">
		Empréstimos - Acesso a crédito facilitado para MEI ou ME
		</h2>

	</header><!-- .entry-header -->
	

	</a>

	<footer class="entry-footer">
		<?php echo date("d/m/Y") ?>


		<ul>
			<li>
				<span style="font-size: 11px">Divulgação</span>
			</li>

		</ul>




	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

