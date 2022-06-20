<section id="relacionadas" class="Relacionadas">
	<h2 class="widget-title">Matérias Relacionadas</h2>

	<div class="site-main listRelacionadas">	
	<?php 


	$args = array(
              'post_type' => 'post',
              'orderby'   => 'menu_order',
              'posts_per_page' => 3,
              'order'     => 'ASC'
            );
	

		// A Consulta
		query_posts( $args );

		// O Loop
		while ( have_posts() ) : the_post();
			
			get_template_part( 'template-parts/content', "relacionadas");

		endwhile;

		// Redefinindo Consulta
		wp_reset_query();
	?>
	</div>
</section>
