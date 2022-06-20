<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
$GLOBALS[ 'pagename' ] = "SA:NL:MEMEI:Blog:Category";





?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main list" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php

					$category = get_category( get_query_var( 'cat' ) );
					$catid = $category->cat_ID;

				    if(function_exists('rl_color')){
						$rl_category_color = rl_color($catid);
					}
					$catName = get_cat_name($catid);
					
					echo '<h1 class="page-title" style="color:'.$rl_category_color.'">'.$catName.'</h1>';

					$GLOBALS[ 'postCategory' ] = $catName ;

					//the_archive_title( '<h1 class="page-title" style="color:'.$rl_category_color.'">', '</h1>' );
				?>
			</header><!-- .page-header -->

		
			<?php

			$counter = 0;
			$extraCard = false;
			// Start the Loop.
			echo "<div id='listArticles'>";
			while ( have_posts() ) : the_post();


				// END  conditional

	

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */

				get_template_part( 'template-parts/content', get_post_format() );
				

			endwhile;
			echo "</div>";

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( '<', 'twentysixteen' ),
				'next_text'          => __( '>', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( ' ', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
