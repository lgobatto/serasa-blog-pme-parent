<section id="categories-2" class="widget widget_categories">
	<h2 class="widget-title">Categorias</h2>	
	<?php 

	hierarchical_category_tree( 0 ); // the function call; 0 for all categories; or cat ID  

	function hierarchical_category_tree( $cat ) {
    // wpse-41548 // alchymyth // a hierarchical list of all categories //

  //$cats = get_categories('hide_empty=true&hierarchical=1&orderby=name&order=ASC&exclude=17&parent=' . $cat);

	$cats = get_categories(
  		array(
  			'hide_empty'=>true,
  			'hierarchical'=> 1,
  			'order'=>'ASC',
  			'exclude'=> array(17,32),
  			'parent' => $cat
  		));

  if( $cats ) {  


  	/*
	$args = array(
        'orderby'   => 'name', 
        'order'     => 'ASC', 
        'hierarchical' => true,
        'exclude' => 17,
        'hide_empty'    => 1,
        'depth' => 1
  	);
	$cats = get_categories($args);
	*/
		echo '<ul>'; 
			foreach ($cats as $key) {
				# code...

				if(function_exists('rl_color')){
					$category_color = rl_color($key->term_id);
				}
				
				echo '<li class="cat-item cat-item-'.$key->term_id.'"><span class="customBullet" style="background:'.$category_color.'"></span><a href="'.get_category_link($key->term_id).'">'.$key->name.'</a></li>' ;
				hierarchical_category_tree( $key->term_id );
			}
		echo '</ul>';
	}
	}
	?>
</section>