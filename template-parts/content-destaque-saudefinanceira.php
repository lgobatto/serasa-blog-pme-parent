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


	<a class="linkarticle" target="_blank" href="https://www.serasaempreendedor.com.br/saude-do-seu-negocio-consulta-serasa-cnpj-cpf-seu-nome-esta-sujo">
	<div class="post-thumbnail-container">	
		<img src="<?php echo get_template_directory_uri()?>/imgs/thumb_saude.jpg" alt="saude o seu negócio - consulte o seu cnpj e CPF">
	</div>

	<?php 

    echo '<span class="tagCategoria" style="background:#26478D">Saúde Financeira</span>';
     ?>

	<header class="entry-header">
		<h2 class="entry-title">
		Saiba se sua empresa ou você estão negativados
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

