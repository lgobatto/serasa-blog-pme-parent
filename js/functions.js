/* global screenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

	var scrollLevel = 900;

	var popupExiste = false;

	var submenuSolucoes = "";
	var submenuPlanos = "";
	var headerElement =  "";
	var currentScroll_position = 0;
	var overlayMenu = "";
	var timeout1;
	var timeout;
	var iconeHamburguer;


	window.addEventListener('scroll', function (e) {
	  setScrollState();
	  hideSubMenu();
	})


jQuery(function() {

	submenuSolucoes = document.querySelector("#submenuSolucoes");
	submenuPlanos = document.querySelector("#submenuPlanos");
	headerElement =  document.querySelector("header");
	overlayMenu = document.querySelector("#overlayMenu");

	overlayMenu.onclick = function(){
		hideSubMenu();
	}

	var menuBT = jQuery('#abrirMenuMobile');
	var menuMobile = jQuery("#menuLocalLista");

	//alert("aqui");
	popupExiste = document.querySelector("#popup");
	if(popupExiste){
		startPopUp();
	}


	if(document.querySelector("#videoHome")){
		getVideosHome();
	}


	//maskFields////////////////////////////////////////
	var celulares = document.querySelectorAll("input.celular");
	if(celulares){
		for (var i = 0; i < celulares.length; i++) {
			VMasker(celulares[i]).maskPattern("(99) 99999-9999");
		}	
	}
	var cnpj = document.querySelectorAll("input.cnpj");
	if(cnpj){
		for (var i = 0; i < cnpj.length; i++) {
			VMasker(cnpj[i]).maskPattern("99.999.999/9999-99");
		}	
	}

	//comportamento para validação
	var inputs = document.querySelectorAll("input ,select");

	for (var i = 0; i < inputs.length; i++) {
		inputs[i].onkeypress = function (){
			this.classList.remove("avisoField");
		}
	}

	



	menuBT.click(function(){

		menuMobile.toggle();

		menuBT.toggleClass('open');

	})
	if(jQuery("#downloads").length){

		createDownloadSchema();
	}

	jQuery("img").on("contextmenu",function(){
       return false;
	}); 


	if(jQuery(".type-post .entry-content").length){

		if( checkMobile() ) {
		 // some code..
			jQuery(".type-post .entry-content").find('p:nth-child(2)').prepend('<iframe width="300" height="250" class="bannerSystem" frameborder="0" scrolling="no" src="'+templateUrl+'/banners/bannerSystem.php"></iframe>');		 	
		}else{
			jQuery(".type-post .entry-content").find('p').first().prepend('<iframe width="300" height="250" class="bannerSystem" frameborder="0" scrolling="no" src="'+templateUrl+'/banners/bannerSystem.php"></iframe>');
		}
	}
	/*
	if(jQuery(".whatsapp").length){
		if( !checkMobile() ) {
			jQuery(".whatsapp").hide();
		}
	}
	*/
	var popup = sessionStorage.getItem('popup');
	
	if(popup != "true" && popupExiste){

	window.onscroll = function() {
			if(window.scrollY >= scrollLevel){
				openPopUp();
			}
	}

	document.querySelector("body").addEventListener("mousemove",function (e) { 
			if(e.clientY < 40){
				openPopUp();
			}
		},false);
	}



	//lead footer //
	formLeadBindEvents('#formFooter');

	//lead footer //
	formLeadBindEvents('#formSide');
});



function toggleMenu(){


	if(!iconeHamburguer){
		iconeHamburguer = document.querySelector(".iconeHamburger");
	}

	if(iconeHamburguer.className.indexOf("btfechar") == -1 ){ //visible
		//open menu
		try{
			hj('trigger', 'menuMobileOpen-'+window.location.pathname);
		}
		catch (e) {}

		iconeHamburguer.classList.add("btfechar");
		document.querySelector("#menuItensHolder").style.display =  "block";
		
	}
	else{
		//close menu
		iconeHamburguer.classList.remove("btfechar");
		document.querySelector("#menuItensHolder").style.display =  "none";

	}
}


function openSolucoesMenu(){
	
	if(submenuSolucoes.getBoundingClientRect().y == 0 ){

		submenuSolucoes.style.display = "block";
		submenuPlanos.style.display = "none";

		if(!checkMobileView()){ //desktop
			itemSolucoes.classList.add("selected");
			itemPlanos.classList.remove("selected");
			clearTimeout(timeout1);
			clearTimeout(timeout);
			overlayMenu.style.display = "block";
			timeout = setTimeout(function(){ overlayMenu.classList.add("darker");},50);
		}
	} else{
		hideSubMenu();
	}

}

function openPlanosMenu() {
	if(submenuPlanos.getBoundingClientRect().y == 0) {
		submenuPlanos.style.display = "block";
		submenuSolucoes.style.display = "none";

		if(!checkMobileView()){ //desktop
			itemPlanos.classList.add("selected");
			clearTimeout(timeout1);
			clearTimeout(timeout);
			overlayMenu.style.display = "block";
			timeout = setTimeout(function(){ overlayMenu.classList.add("darker");},50);
		}
	} else{
		hideSubMenu();
	}
}


function hideSubMenu(){

	if(submenuSolucoes || submenuPlanos){
		submenuSolucoes.style.display = "none";
		submenuPlanos.style.display = "none";
	}

	if(itemSolucoes || itemPlanos){
		if(!checkMobileView()){ //desktop
			itemSolucoes.classList.remove("selected");
			itemPlanos.classList.remove("selected");
			clearTimeout(timeout);
			if(overlayMenu){
				timeout1 = setTimeout(function(){ overlayMenu.classList.remove("darker"); }, 20 );
				timeout = setTimeout(function(){ overlayMenu.style.display = "none";},300);
			}
		}
	}
}


function headerCadastro (){
	event.preventDefault();

	queryString = [];
	if (document.DataLayer.pageInfo.pathLogado){
		queryString.push("pathLogado="+document.DataLayer.pageInfo.pathLogado);
	}
	if (document.DataLayer.pageInfo.subSection2){
		queryString.push("lpAtribuicao="+document.DataLayer.pageInfo.subSection2);
	}
	
	queryStringVal = (queryString.length)?"?"+queryString.join("&"):"";	

	//console.log("-->"+queryStringVal);

	window.location.href = "https://www.serasaempreendedor.com.br/cadastro-deslogado"+queryStringVal;
}


function setScrollState () {

	if(headerElement){
		var scroll_position = (window.scrollY || document.documentElement.scrollTop) ? window.scrollY || document.documentElement.scrollTop : 0;

		var direction = (scroll_position > currentScroll_position)?"down":"up";

		currentScroll_position = scroll_position;

		if(scroll_position > 15 && direction == "down" ){
			headerElement.classList.add("hideTop");
			headerElement.classList.remove("fixedTop");
		}
		else if(scroll_position > 15 && direction == "up" ){
			headerElement.classList.add("fixedTop");
			headerElement.classList.remove("hideTop");
		}  
		else{
			headerElement.classList.remove("fixedTop");
			headerElement.classList.remove("hideTop");
		}
	}
 }






function startPopUp(){
	//alert("asdasd");
	var popup = sessionStorage.getItem('popup');
	
	if(popup != "true"){

		//alert("asdasd");
		//timer
		var popUpTimer = setTimeout(function(){ openPopUp() }, 15000);

		console.log("popUpTimer"+popUpTimer);

	}
}

function openPopUp(){

	var popup = sessionStorage.getItem('popup');

	console.log(popup)
	
	if(popup != "true"){

		document.querySelector("#popup").style.display = "block";
		setTimeout(function(){document.querySelector("#popup").classList.add("animate");},200);

		sessionStorage.setItem('popup', true);
	}
}

function closePopup (){
	analyticsCliquesGenericos("cliquePopup","fechar");
	document.querySelector("#popup").remove();
}


function openModal(tit,txt,colorHeader){

   var div =  document.createElement("div");
   div.setAttribute("id","modalFeedBack");
   div.className = "modalFeedBack";
   div.onclick = function () {
   		//fecharModal();
   }

   var divBox = document.createElement("div");
   divBox.className =  "modalFeedBackBox";

   var divHeader = document.createElement("div");
   divHeader.className = "modalFeedBackHeader "+colorHeader;
   divHeader.innerHTML = "<div onclick='fecharModal()' class='modalFeedBackClose'><img src='"+templateUrl+"/imgs/fechar_branco.svg' alt='fechar'></div>"+tit;

   var divContent = document.createElement("div");
   divContent.className = "modalFeedBackContent";
   divContent.innerHTML = txt;

   divBox.appendChild(divHeader);
   divBox.appendChild(divContent);

   div.appendChild(divBox);

   document.querySelector("body").appendChild(div);
}
function fecharModal(){
	if(document.querySelector("#modalFeedBack")){
		document.querySelector("#modalFeedBack").remove();
	}
}




function openModalLead(){
	//checkScroll = false;
	//jQuery("#modalContainer").load( "https://blog.serasaempreendedor.com.br/wp-content/themes/blogEmpreendedor/template-parts/content-widget-popupModal.php" );	
}

function checkMobile(){
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		return true;
	}
	else{
		return false;
	}
}

function getVideosHome(){

	var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function() {
        if (httpRequest.readyState === 4) {
            if (httpRequest.status === 200) {
                var data = JSON.parse(httpRequest.responseText);
                
                //console.log(data);

                //console.log(data.items.length);
                //console.log(data.items[0]);

                //videos
                var videosListUl = document.querySelector("#videosList ul");
                for (var i = 0; i < data.items.length; i++) {
                	

		 			var li = document.createElement("li");

		 			var thumb = document.createElement("div");
		 			thumb.classList.add("videoThumb");
		 			thumb.setAttribute("vidId",data.items[i].snippet.resourceId.videoId)

		 			thumb.onclick = function (){

		 				SetVideoDestaque(this.getAttribute("vidId"));
		 			}

		 			var imgThumb = document.createElement("img");
		 			imgThumb.setAttribute("src",data.items[i].snippet.thumbnails.default.url);
		 			imgThumb.setAttribute("alt",data.items[i].snippet.title);

		 			thumb.appendChild(imgThumb) 
		 			
		 			li.appendChild(thumb);

		 			var span = document.createElement("span");
		 			span.textContent = data.items[i].snippet.title;

		 			li.appendChild(span)

		 			videosListUl.appendChild(li);

		 			if(i == 0){
		 				SetVideoDestaque(data.items[i].snippet.resourceId.videoId);
		 			}

		 			if(checkMobileView()){
		 				if( i == 2){
		 					break;
		 				} 
		 			}
		 			else{
		 				if( i == 5){
		 					break;
		 				} 
		 			}
   
                }

            }
        }
    };
   	//httpRequest.open('GET', "/blog/getYoutubeFeed.php");
   	httpRequest.open('GET', templateUrl+"/js/youtube.json");
    httpRequest.send(); 
}

function SetVideoDestaque(id){
	var videosDestaque = document.querySelector("#videosDestaque");

	videosDestaque.innerHTML = '<iframe  src="https://www.youtube.com/embed/'+id+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}

function createDownloadSchema(){

	jQuery("#downloads").find('li').each(function(){

		var link = jQuery(this).find('a').attr('href');

		
		//remove href
		jQuery(this).find('a').attr('href',"javascript:void(0)");

		var nomeArquivo = jQuery(this).find('a').text();

		//console.log(link);

		var id = link.replace(/(.*)\=([0-9]{1,10})/gi,'$2');
		
		//console.log(id);

		jQuery(this).click(function(){
			openDownloadModal(nomeArquivo,id);
		})



	})
}


function openDownloadModal (nomeArquivo,id){

	//console.log(nomeArquivo+"--"+id);
	jQuery.ajax({url:templateUrl+"/template-parts/content-widget-lead-downloadModal.php", type: "post", 
			data: {"nomeArquivo": nomeArquivo , "id":id}},

		).done(function( data ) {

			jQuery('#modalContainer').append(data);

		});
}



function validateForm(valor, tipo, len) {

  switch (tipo) {

    case "txt":
      if (valor.length > 2) {
        return true;
      }
      break;
    case "len":
      if (valor.length == len) {
        return true;
      }
      break;
    case "select":

      if (valor !== null && valor !== "") {
        return true;
      }
      break;
    case "email":

      if (valor.length > 2) {

        if (valor.match(/\@[A-Za-z0-9]/gi) != null) {
          return true;
        }
      }
      break;
    case "nome":

      if (valor.length > 2) {

        if (valor.match(/[A-Za-z]\s[A-Za-z]/gi) != null) {
          return true;
        }
      }

      break;
  }
  return false;
}



/*
function validateForm (valor, tipo){

	switch (tipo){

		case "txt":
		console.log("TEXT");
			if(valor.length > 2 && valor != ""){
				return true;
			}
		break;
		case "select":
		console.log("Select");
			if(valor !== null){
				return true;
			}
		break;
		case "email":
		console.log("EMAIL");
			if(valor.length > 2){

				if(valor.match(/\@/gi) != null){
					return true;	
				}
			}

		break;
	}
	return false;
}
*/


function clearAviso(){
	setTimeout(function(){ jQuery('.aviso').fadeOut('fast', function() { jQuery(this).remove(); }   ) }, 2500);
}

function analyticsCliquesGenericos(str1,str2){
	try{

		var str1 = document.sanitizeToCamelCase(str1);
		var str2 = document.sanitizeToCamelCase(str2);
	
		var custom = {
			events: ['cliquesGenericos'],
        	itemClicado: 'BTN:EMP:Blog:'+ str1+':'+str2,
        	customLink:  'Blog | CliquesGenericos',
		}
	document.DataLayer.custom = custom;
	document.DataLayer.rule = 'customLink';

	jQuery(document).trigger("CliquesGenericos", document.DataLayer);

	}catch(e){console.log(e);}
} 

function analyticsDownloads(str){
	try{
		var str = document.sanitizeToCamelCase(str);
	
		var custom = {
			events: ['cliquesGenericos'],
        	itemClicado: 'BTN:MEMEI:Blog:Download-'+str,
        	fileDowloads:  'Blog |'+str,
		}
	document.DataLayer.custom = custom;
	document.DataLayer.rule = 'fileDownloads';

	jQuery(document).trigger("Downloads", document.DataLayer);

	}catch(e){console.log(e);}
} 


function copyText() {
  /* Get the text field */
  var copyText = document.getElementById("copyInput");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("o texto foi copiado, agora é só colar no seu site :)");
}



function closeModal(){
	jQuery('.modal-content').remove();
	
	setCookie("popupHoje","true",0);
}





/////////////////////////////////////////////////////////



function valideFormLeadSalesForce(id,acaoUsuario,ValorAcao_Usuario,formAction){

	event.preventDefault();

	valid = true;

	var container = document.querySelector("#"+id);

	var inputList = container.querySelectorAll("input[type='text'].validate , input[type='email'].validate , input[type='tel'].validate, select.validate");

	console.log(inputList);
	


	for (var i = 0; i < inputList.length; i++) {
		
		if (!validateForm(inputList[i].value, inputList[i].getAttribute("data-validtipo"), inputList[i].getAttribute("data-validlen"))) {
			inputList[i].classList.add("avisoField");
	    	valid = false;
		}
	}


    if(!valid){
    	return valid;
    }

    //analyticsCliquesGenericos(acaoUsuario , ":"+ValorAcao_Usuario);
    /*
    customarg = {formId: "blog:"+acaoUsuario};
	document.DataLayer.custom = customarg;
	document.dispatchEvent(new CustomEvent('leadFormInst', { 'detail': document.DataLayer }));
	*/
    try{
		var payload = {
		  	"Nome":(document.querySelector("#"+id+" .nome"))?document.querySelector("#"+id+" .nome").value:"",
		  	"Email":(document.querySelector("#"+id+" .email"))?document.querySelector("#"+id+" .email").value:"",
		  	"Celular":(document.querySelector("#"+id+" .celular"))?document.querySelector("#"+id+" .celular").value:"",
		  	"CNPJ":(document.querySelector("#"+id+" .cnpj"))?document.querySelector("#"+id+" .cnpj").value:"",
		  	"Setor":"",
		  	"Qtd_Funcionarios":"",
		  	"Ramo_Atuacao":"",
		  	"Faturamento":"",
		  	"Cargo":"",
		  	"VendePara":"",
		  	"URL_Origem":window.location.href,
			"Acao_Usuario":acaoUsuario,
			"ValorAcao_Usuario":ValorAcao_Usuario,
			"URL_Download":(document.querySelector("#"+id+" .download"))?document.querySelector("#"+id+" .download").value.replace("https://",""):""
		};

		var xhttp = new XMLHttpRequest();
		xhttp.open("POST", "https://cloud.comunicacao.serasaexperian.com.br/blog/smartcapture/post", true);
		xhttp.setRequestHeader("Accept", "application/json, text/javascript, */*; q=0.01");
		xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 ) {
				//funcinou - ação final///

				switch(formAction){
					case "agradecerCadastro":

						customarg = {formId: "Blog:"+acaoUsuario};
						document.DataLayer.custom = customarg;
	        	 		document.dispatchEvent(new CustomEvent('leadFormInst', { 'detail': document.DataLayer }));

						openModal("Obrigado por se cadastrar!","A partir de agora você vai receber no seu email novidades para sua empresa.", "green");
						if(document.querySelector("#popup")){
							closePopup();
						}
					break;
					case "downloadContent":
						customarg = {formId: "Blog:"+acaoUsuario};
						document.DataLayer.custom = customarg;
		        	 	document.dispatchEvent(new CustomEvent('leadFormInst', { 'detail': document.DataLayer }));

						//fazer o download///
						var download = container.querySelector(".download").value;
						openModal("Agradecemos o download","Nosso material foi preparado especialmente para a sua empresa.<br><span style='font-size:13px;'> Vamos enviar um e-mail com o conteúdo anexo para você ver depois. Caso não receba, verifique sua caixa de SPAM ou promoções.</span><br><br><a href='"+download+"' target='_blank' class='CTA bgRosa full txtCenter'>Fazer download agora</a>", "green");
						if(document.querySelector("#popup")){
							closePopup();
						}
						

					break;
					case "Popup2step":
						//pega valor do email
						var email = container.querySelector("input.email").value;

						document.querySelector("#popup .popupContent").classList.add("fullScreen")
						document.querySelector("#popup .popupInfos.start").style.display = "none";
						
						var fullForm =document.querySelector("#popup .popupInfos.fullForm");

						fullForm.querySelector("input.email").value = email;

						fullForm.classList.remove("hideMob"); 

					break;
				}




		    }
		  };
		xhttp.send(jsonToQueryString({
			formID: 0,
			targetID: "78F943A0-3C97-4F96-A1F7-032D190B271F",
			targetType: "dataExtension",
			attributes: JSON.stringify(payload),
			isJourneyBuilderIntegrated: 'false',
			withTriggeredSend: '',
			isJourneyBuilderIntegrated: false
		}));

	}catch(e){};

}

jsonToQueryString = function jsonToQueryString(json) {
return Object.keys(json).map(function(key) {
return encodeURIComponent(key) + '=' +
encodeURIComponent(json[key]);
}).join('&');
}









function formLeadBindEvents(id){

	if(document.querySelector(id)){
		//fecharModal
		closeMod = document.querySelector(id+" .close-modal");
		if(closeMod){
		closeMod.onclick = function(){closeModal();}
		}

		//url
		document.querySelector(id+" #field4").setAttribute("value",CurrentURLSemQueryString);
		


		// bind events on fields ///////////////////////
		inputs = document.querySelectorAll(id+" input , "+id+" select")

		for (var i = 0; i < inputs.length; i++) {

			if(inputs[i].tagName == "INPUT"){
				inputs[i].onkeypress = function(){

					console.log("input");

					this.classList.remove("fieldAviso");

					aviso = this.parentNode.querySelector(".aviso");
					if(aviso){
						aviso.parentNode.removeChild(aviso);
					}
				}
			}

			if(inputs[i].tagName == "SELECT"){
				inputs[i].onchange = function(){

					console.log("select");

					this.classList.remove("fieldAviso");

					aviso = this.parentNode.querySelector(".aviso");
					if(aviso){
						aviso.parentNode.removeChild(aviso);
					}
				}
			}
		}
	}
	
}


function getCookieValue(a) {
var b = document.cookie.match('(^|;)\\s*' + a + '\\s*=\\s*([^;]+)');
return b ? b.pop() : null;
}


function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getUrlParameter(name) {
name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
var results = regex.exec(window.location.search);
return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};

function checkMobileView() {
  /*
  if (width <= 1000) {
    return true;
  }
  else {
    return false;
  }
  */
  if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    return true;
  }
 else {
    return false;
  }
}


function downloadBoxDescricao (t){
	if(checkMobileView()){

		console.log(t.getBoundingClientRect());
		
		if(t.querySelector(".descricaoInfos").getBoundingClientRect().y == 0){
			t.querySelector(".descricaoInfos").style.display = "block";
		}
		else{
			t.querySelector(".descricaoInfos").style.display = "none";
		}
	}
}

function openMenuMobile() {
	if(checkMobileView()){
		var cont = document.querySelector(".menu-menunovo-container");
		if(cont.getBoundingClientRect().y == 0){
			cont.style.display = "block";
		}
		else{
			cont.style.display =  "none";
		}

	}
}

function openBuscaMobile () {
	if(checkMobileView()){
		var cont = document.querySelector(".site-header .search-form");
		if(cont.getBoundingClientRect().y == 0){
			cont.style.display = "grid";

			document.querySelector(".menu-menunovo-container").style.display =  "none";
		}
		else{
			cont.style.display =  "none";
		}

	}
}
