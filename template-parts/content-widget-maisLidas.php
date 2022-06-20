<section id="maisLidas" class="widget widget_maisLidas">
	<h2 class="widget-title">Mais Lidas</h2>	
	<?php 


	$args = array(
              'post_type' => 'post',
              'orderby'   => 'menu_order',
              'posts_per_page' => 5,
              'order'     => 'ASC'
            );
	

		// A Consulta
		query_posts( $args );

		// O Loop
		while ( have_posts() ) : the_post();
			$cat = new WPSEO_Primary_Term('category', get_the_ID());
		    $catid = $cat->get_primary_term();

		    if(function_exists('rl_color')){
				$rl_category_color = rl_color($catid);
			}


			echo '<li class="postMaisLido"><a onclick="analyticsCliquesGenericos(\''.get_the_title().'\',\'MaisLidas-sideBar\')" href="'.get_permalink().'">'.get_the_title().' <br>  <span class="tagCategoria" style="background:'.$rl_category_color.'">'.get_cat_name($catid).'</span></a></li>' ;		    
		endwhile;

		// Redefinindo Consulta
		wp_reset_query();
	?>
</section>