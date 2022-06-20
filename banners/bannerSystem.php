<?php 
header('X-Frame-Options: SAMEORIGIN');

$banners =  array(

	array('url'=>"banner_consulta.png",
		'link'=>"https://empresas.serasaexperian.com.br/consulta-serasa?idcmpint=t1:i01:m01:banner:blog:banner-consulta:post",
		'peso'=>'1'),
	array('url'=>"banner_consulta_animado.gif",
		'link'=>"https://empresas.serasaexperian.com.br/consulta-serasa?idcmpint=t1:i01:m01:banner:blog:banner-consultaAnimado:post",
		'peso'=>'1'),

	/*array('url'=>"banner_credito.png",
		'link'=>"https://www.serasaempreendedor.com.br/credito-para-microempreendedor-me-mei?idcmpint=t1:i01:m01:banner:blog:credito:post",
		'peso'=>'1'),
	array('url'=>"banner_credito_ainmado.gif",
		'link'=>"https://www.serasaempreendedor.com.br/credito-para-microempreendedor-me-mei?idcmpint=t1:i01:m01:banner:blog:creditoAnimado:post",
		'peso'=>'1'),*/

	array('url'=>"banner_institucional.png",
		'link'=>"https://empresas.serasaexperian.com.br/?idcmpint=t1:i01:m01:banner:blog:institucional:post",
		'peso'=>'1'),
	array('url'=>"banner_institucional_ainmado.gif",
		'link'=>"https://empresas.serasaexperian.com.br/?idcmpint=t1:i01:m01:banner:blog:institucionalAnimado:post",
		'peso'=>'1'),

	array('url'=>"banner_saude.png",
		'link'=>"https://www.serasaempreendedor.com.br/saude-do-seu-negocio-consulta-serasa-cnpj-cpf-seu-nome-esta-sujo?idcmpint=t1:i01:m01:banner:blog:saude:post",
		'peso'=>'1'),
	array('url'=>"banner_saude_ainmado.gif",
		'link'=>"https://www.serasaempreendedor.com.br/saude-do-seu-negocio-consulta-serasa-cnpj-cpf-seu-nome-esta-sujo?idcmpint=t1:i01:m01:banner:blog:saudeAnimado:post",
		'peso'=>'1'),

	array('url'=>"banner_score.png",
		'link'=>"https://www.serasaempreendedor.com.br/consultar-score-serasa-cnpj-me-mei?idcmpint=t1:i01:m01:banner:blog:score:post",
		'peso'=>'1'),
	array('url'=>"banner_score_ainmado.gif",
		'link'=>"https://www.serasaempreendedor.com.br/consultar-score-serasa-cnpj-me-mei?idcmpint=t1:i01:m01:banner:blog:scoreAnimado:post",
		'peso'=>'1')
);

$idSelected = rand(0,sizeof($banners)-1);


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 
 	<base target="_parent">
 </head>
<body style="padding: 0; margin: 0; text-align: center;">
 <a href="<?php echo $banners[$idSelected]['link'] ?>">
 	<img src="<?php echo $banners[$idSelected]['url'] ?>">
 </a>
 </body>
 </html>
