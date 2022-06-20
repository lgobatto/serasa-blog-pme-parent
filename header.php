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

<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
	
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

		
	<!--- /////////////////////////////////////////////////////////// -->
	<!--- /////////////////////////////////////////////////////////// -->
	<!--- ////////////////////HEADER///////////////////////////////// -->
	<!--- /////////////////////////////////////////////////////////// -->

	<!-- 
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

	-->


<header  class="header">
	<nav>
		<div class="container">
			
			<div class="logo">
				<a href="/">
				<img id="logoSerasaColor" class="color" src="/images/logo-color.svg" alt="logo serasa experian">
				</a>
			</div>

			<div id="menuSite" class="menuItens">
				
				<a class="mob iconeHamburger" href="javascript:void(0)" onclick="toggleMenu()">menu</a>
				<div id="menuItensHolder" class="menuItensHolder menuItens">
					<ul id="mainMenu" class="mainMenu">
						<li id="itemSolucoes" class="hasSubmenu" onclick="openSolucoesMenu()">
							<span>Soluções para empresas</span>

							<div id="submenuSolucoes" class="submenu solucoes">
								<div class="containerMenu">					
									<div class="menuLista">
										<ul>
										<li class="externalLink"><a href="/consulta-serasa/">Consulta de CNPJ ou CPF</a></li>
											<li class="externalLink"><a href="/monitoramento-de-clientes/">Monitore seus clientes </a></li>
											<li class="externalLink"><a href="/mailing-prospeccao-clientes/">Prospecção de clientes</a></li>
											<li class="externalLink"><a href="/saude-do-seu-negocio/">Monitore sua empresa</a></li>
											<li class="externalLink"><a href="/recuperacao-de-dividas/">Recuperação de dívidas</a></li>
											<li class="externalLink"><a href="/serasa-score/">Serasa Score PJ / empresas</a></li>
											<li class="externalLink"><a target="_blank" href="https://serasa.certificadodigital.com.br/?idcmp=:c15:m01:serasaempresas:Menu::&utm_medium=parc&utm_source=serasaempresas&utm_campaign=menu">Certificado Digital</a></li>
											<li class="externalLink"><a href="/outras-solucoes/">Outras soluções</a></li>	
										</ul>
									</div>
									<div class="menuDestaques">
										<div>
											<a href="/consulta-serasa/">
												<img alt="consulta CNPJ e CPF" src="/images/img_menu_destaque_consulta.jpg" srcset="/images/img_menu_destaque_consulta@2x.jpg 2x, /images/img_menu_destaque_consulta@3x.jpg 3x" >
												
												Consulte CNPJ/CPF dos clientes e fornecedores
											</a> 
										</div>
										<div>
											<a href="/mailing-prospeccao-clientes/">
												<img alt="certificado Digital" src="/images/home-new/desktop_img_menu_destaque_prospeccao-clientes.jpg" srcset="/images/home-new/desktop_img_menu_destaque_prospeccao-clientes@2x.jpg 2x" >
												
												Aumente o seu mailing para vender mais com menos riscos 
											</a>
										</div>
										<div>
											<a href="/outras-solucoes/">
												<img alt="regularize suas dívidas" src="/images/img_menu_destaque_regularize-dividas.jpg" srcset="/images/img_menu_destaque_regularize-dividas@2x.jpg 2x, /images/img_menu_destaque_regularize-dividas@3x.jpg 3x" >
												
												Regularize as dívidas de seus clientes de forma rápida e segura 
											</a>
										</div>
										
									</div>
								</div>
							</div>

						</li>
						<li id="itemPlanos" class="hasSubmenu" onclick="openPlanosMenu()">
							<span>Planos</span>

							<div id="submenuPlanos" class="submenuPlanos solucoes">
								<div>					
									<div>
										<ul>
											<li class="externalLink"><a href="/planos/avulso">Avulso (pré-pago)</a></li>
											<li class="externalLink"><a href="/planos/assinatura">Assinatura (pós-pago)</a></li>
										</ul>
									</div>
								</div>
							</div>

						</li>
						<li class="linkDireto externalLink menuBlog">
							<a href="/blog/" >Blog empresas</a>
						</li>
					</ul>
					<ul class="cadastroLogin">
						<li id="btAcessar" class="acessar"> 
							<a href="https://www.serasaempreendedor.com.br/login" class="loginCTA bgRosa">Já sou cliente</a>
						</li>	
						<li id="btCadastrar" class="cadastrar"> 
							<a href="https://www.serasaempreendedor.com.br/cadastro-deslogado" onclick="headerCadastro()" class="cadastrarCTA bgBranco">Cadastrar</a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</nav>	
</header>


	<!-- /////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////// -->



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
				<div class="menuCategorias">
					<span class="headerCategorias mob" onclick="openMenuMobile()">Categorias</span>
					<?php echo wp_nav_menu(array( 'theme_location' => 'menuNovo' )); ?>
				</div>
				<div>
					<div class="BuscaCategorias mob">
						<button type="button" onclick="openBuscaMobile()" class="search-submit"><span class="screen-reader-text">Pesquisar</span></button>
					</div>

					<?php get_search_form();?>
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
