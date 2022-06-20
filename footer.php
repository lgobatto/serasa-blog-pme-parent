<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="footer" class="site-footer" role="contentinfo">

			<div class="leadFooter">
				<div class="site-inner">

					<h3>Faça da sua empresa um sucesso!</h3>
					Receba conteúdos selecionados exclusivamente para você diretamente no seu e-mail.

				
			<form id="formFooterSalesForce" class="" >

			    <div>
			        <input  name="Name" type="text" placeholder="Nome Completo" value="" class="nome validate" data-validtipo="nome" data-validlen="0"  />
			    </div>


				<div>
			        <input  name="emailAddress" placeholder="Melhor e-mail" type="email" value="" class="email validate"  data-validtipo="email" data-validlen="0" />
			          
			    </div>

				<div>
			        <input name="Celular" placeholder="Melhor telefone (opcional)" type="tel" value="" class="celular" />
			          
			    </div>
       
			    <div class="submitEloqua" >
			         
			        <input type="button" onclick="valideFormLeadSalesForce('formFooterSalesForce','Footer - inquire','Footer','agradecerCadastro')" value="Quero Receber" class="submit-button"/>
			         
			    </div>

			</form>		
			  


	
				</div>
			</div>

			<div class="enderecos">
			
			<div class="site-inner">
				<div>
					<span>Serasa Experian – São Paulo</span> 
					<br>
					Av. das Nações Unidas, 14.401 - Torre Sucupira - 24ºandar - Chácara Santo Antônio, São Paulo/SP <br> CEP: 04794-000
					<br>
					CNPJ: 62.173.620/0001-80
				</div>
				<div>
					<span>Serasa Experian – São Carlos</span>
					<br>
					Av. Doutor Heitor José Reali, 360, São Carlos/SP <br> CEP: 13571-385
					<br>
					CNPJ: 62.173.620/0093-06
				</div>
			</div>

			</div>

			<div class="disclaimer">
				©2018 Experian Information Solutions, Inc. Experian Marketing Services All rights reserved.
				<br>
				Experian and the Experian marks used herein are service marks or registered trademarks of Experian Informations Solutions, Inc.
				<br>
				Other product and company names mentioned herein are the property of their respective owners.

			</div>

		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>


<div id="overlayMenu" class="overlayMenu" style="display: none;"></div>





<!-- /////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////// -->



<!-- /////////////////---------------------------------------------------- -->
<!-- /////////////////---------------------------------------------------- -->
<!-- /////////////////---------------------------------------------------- -->



<script type="text/javascript">
	
	document.DataLayer = {
	   pageInfo : {
	                   "url": location.href,
	                    "pageName": "<?php echo $GLOBALS[ 'pagename' ] ;?>",
	                    "siteSection": "NL",
	                    "subSection": "Blog",
	                    "tipoDeCanal": "WEB"
	     }, rule : "pageLoad"

	   	<?php if(isset($GLOBALS[ 'searchTerms' ])){  // quando estou na busca ?>

	     ,custom: {
	         events: ['buscaInterna'],
	         searchTerms: '<?php echo $GLOBALS[ 'searchTerms' ] ?>',
	         customLink: 'Blog | Busca Interna',
	         results: '<?php echo $GLOBALS[ 'searchResults' ] ?>'
			},rule: "customLink"

	    <?php } else if(isset($GLOBALS[ 'postName' ])){  // quando estou no post ?>
	    	,custom:{
         		postCategory: "<?php echo $GLOBALS[ 'postCategory' ] ?>",
         		postName: "<?php echo $GLOBALS[ 'postName' ]."-".get_the_date('Y-m-d') ?>"

			}
	    <?php } else if(isset($GLOBALS[ 'postCategory' ])) {  //quando estou a categoria ?>
	    	,custom:{
         		postCategory: "<?php echo $GLOBALS[ 'postCategory' ] ?>"
			}
	    <?php } ?>
		}
		console.log(document.DataLayer);
</script>
			


<?php 
	

	if(isset($_GET['cadastroeloqua'])){

		get_template_part( 'template-parts/content', 'cadastro-eloqua' ); 
	}

	if(isset($_GET['cadastroeloquaDownload'])){

		get_template_part( 'template-parts/content', 'cadastro-eloqua-download' ); 
	}

	if(isset($_GET['emailShare'])){

		get_template_part( 'template-parts/content', 'compartilhar-emailModal' ); 
	}

 ?>
<script src="//assets.adobedtm.com/launch-ENda90b2bf13184316901385375b873590.min.js" async></script>

 <div id="modalContainer"></div>

</body>
</html>
