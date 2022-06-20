<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/vanilla-masker.min.js"></script>
	<?php wp_head(); ?>


<!-- Hotjar Tracking Code for https://www.serasaempreendedor.com.br/ -->
<script>
(function(h,o,t,j,a,r){
h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
h._hjSettings={hjid:1199170,hjsv:6};
a=o.getElementsByTagName('head')[0];
r=o.createElement('script');r.async=1;
r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
a.appendChild(r);
})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

	
</head>


<?php 
	$currentUrl = getCurrentURL();
	$currentUrlEncoded =  urlencode($currentUrl);
 ?>

<script type="text/javascript">
var templateUrl = '<?= get_bloginfo("template_url"); ?>';
var CurrentURLSemQueryString = '<?php echo $currentUrl ;?>';
</script>



<body <?php body_class(); ?>>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3&appId=1168842769952041"></script>

<div id="page" class="site">

		<header>
		<div class="site-inner">

			<nav class="menuLocal">
				
				<div class="logo">
					<a class="logo" title="Home" href="https://empresas.serasaexperian.com.br/"><img alt="Serasa Empreendedor" class="logo-header" src="https://empresas.serasaexperian.com.br/images/logo-color.svg"></a>
				</div>

				<div id="menuLocalLista" class="menuLocalLista">
					<?php echo wp_nav_menu(array( 'theme_location' => 'menuPrincipal' )); ?>
				</div>
				<div id="abrirMenuMobile" class="AbrirMenuMobile">
				</div>
				<div class="menuLocalLogin">
					<a href="https://www.serasaempreendedor.com.br/login">Entrar</a>
				</div>



			</nav>
		</div>
		</header>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-inner">
				<div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; 
					?>
				</div>

				
			</div><!-- .site-header-main -->
		</header><!-- .site-header -->

		<nav class="breadcrumb <?php echo is_home()?"isHome":""; ?> <?php echo is_single()?"isSingle":""; ?>">
			<div class="site-inner">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('
				<p id="breadcrumbs">','</p>
				');
				}
				?>
			</div>
		</nav>

		<div id="content" class="site-content site-inner">
