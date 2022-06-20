<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
$GLOBALS[ 'pagename' ] = "SA:NL:MEMEI:Blog:Search";

$GLOBALS[ 'searchTerms' ] = $_GET['s'];
$GLOBALS[ 'searchResults' ] ;

?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main list" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">

				<h1 class="page-title searchTitle"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php get_search_form(); ?>

			<?php
			// Start the loop.
			echo "<div id='listArticles'>";
			while ( have_posts() ) : the_post();

				$GLOBALS[ 'searchResults' ] = "true";

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', 'search' );
				get_template_part( 'template-parts/content', '' );

			// End the loop.
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
			$GLOBALS[ 'searchResults' ] = "false";
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
