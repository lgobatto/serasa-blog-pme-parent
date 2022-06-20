<div class="modal-content modal-content-download">
       
<div  class="content-alert alert-success">
  <div  class="modal-header-download justify-content-end">

    <h2>Faça o Download agora!</h2>

    <!----><button  class="close-modal" type="button"><span  class="text-close color-white">Fechar</span><span  aria-hidden="true" class="fa fa-times-circle color-white ml-2"></span></button>
  </div>
  <div  class="modal-body">
    <div  class="row">
      

      
   <?php 
    $nomeArquivo = $_POST["nomeArquivo"];
    $id = $_POST["id"];
    echo  "Baixe o aquivo : ".$nomeArquivo;
    ?>      
      
      

  <div>
  <form id="formDownload" class="elq-form" >
    <input value="SEMPFormLead_download_VF24.09.2018" type="hidden" name="elqFormName"  />
    <input value="840921098" type="hidden" name="elqSiteId"  />
    <input name="elqCampaignId" type="hidden"  />
    

    <div id="formElement0" class="sc-view form-design-field sc-static-layout item-padding sc-regular-size" >
      <div class="field-wrapper" >
      </div>
      <div class="individual field-wrapper" >
        <div class="_100 field-style" >
          <p class="field-p" >
            <input id="field0" name="Name" type="text" placeholder="Nome*" value="" class="field-size-top-large"  />
          </p>
        </div>
      </div>
    </div>

    <div id="formElement1" class="sc-view form-design-field sc-static-layout item-padding sc-regular-size" >
      <div class="field-wrapper" >
      </div>
      <div class="individual field-wrapper" >
        <div class="_100 field-style" >
          <p class="field-p" >
 
            <input id="field2" name="emailAddress" placeholder="Email*" type="email" value="" class="field-size-top-large"  />

          </p>
        </div>
      </div>
    </div>

    <div id="formElement2" class="sc-view form-design-field sc-static-layout item-padding sc-regular-size" >
      <div class="field-wrapper" >
      </div>
      <div class="individual field-wrapper" >
        <div class="_100 field-style" >
          <p class="field-p" >

            <select id="field3" name="tipoEmpresa" >
            <option value="disabled" disabled selected>Escolha uma opção*</option>

                    <option value="Não sou formalizado" >Não tenho CNPJ</option>
                    <option value="MEI"> Sou MEI </option>
                    <option value="ME"> Sou/faço parte de Microempresa </option>
                    <option value="PequenaEmpresa"> Sou/faço parte de Pequena Empresa </option>
                    <option value="MediaEmpresa"> Sou/faço parte de Média Empresa </option>
                  </select>

          </p>
        </div>
      </div>
    </div>

    <div id="formElement3" class="sc-view form-design-field sc-static-layout  sc-regular-size" >

      <div class="individual field-wrapper" >
        <div class="_100 field-style" >
          <p class="field-p" >
            <input id="field5" type="hidden" name="hiddenField" value="Lead_Serasa_Empreendedor_Download"  />
          </p>
        </div>
      </div>
    </div>

    <div id="formElement4" class="sc-view form-design-field sc-static-layout  sc-regular-size" >
      <div class="field-wrapper" >
      </div>
      <div class="individual field-wrapper" >
        <div class="_100 field-style" >
          <p class="field-p" >
            <input id="field4" type="hidden" name="hiddenField2" value=""  />
          </p>
        </div>
      </div>
    </div>

    <div id="formElement5" class="sc-view form-design-field sc-static-layout  sc-regular-size" >
      <div class="field-wrapper" >
      </div>
      <div class="individual field-wrapper" >
        <div class="_100 field-style" >
          <p class="field-p" >
            <input id="field6" type="hidden" name="hiddenField3" value=""  />
          </p>
        </div>
      </div>
    </div>


    <span class="disclaimer">Ao fazer o download aceito receber atualizações do Serasa Experian no meu e-mail.</span>

    <div id="formElement6" class="sc-view form-design-field sc-static-layout item-padding sc-regular-size" >
      <div class="field-wrapper" >
      </div>
      <div class="individual field-wrapper" >
        <div class="_100 field-style" >
          <p class="field-p" >
            <input type="button" onclick="valideDownload()" value="Fazer Download" class="submit-button"/>
            
          </p>
        </div>
      </div>
    </div>
  </form>

  <script type="text/javascript" >
    document.querySelector('#formDownload #field4').value = CurrentURLSemQueryString+"?cadastroeloquaDownload=true&idDownload=<?php echo $id ?>&nomeArquivo=<?php echo urlencode($nomeArquivo)?>";

    document.querySelector('#formDownload #field6').value = "<?php echo $nomeArquivo ?>";


    function valideDownload() { 

            if( !validateForm(jQuery('#formDownload #field0').val(),"txt")){
              //não valido
              jQuery('#formDownload #field0').parent().prepend('<p id="aviso" class="aviso">Coloque seu nome completo</p>');
              clearAviso();
              return false;
            }
            if(!validateForm(jQuery('#formDownload #field2').val(),"email")){
              //não valido
              jQuery('#formDownload #field2').parent().prepend('<p id="aviso" class="aviso">Coloque um e-mail válido</p>');
              clearAviso();
              return false;
            }
            if(!validateForm(jQuery('#formDownload #field3').val(),"select")){
              //não valido
              jQuery('#formDownload #field3').parent().prepend('<p id="aviso" class="aviso">Selecione alguma opção</p>');
              clearAviso();
              return false;
            }

            analyticsCliquesGenericos("CadastroEloqua","Sidebar-Download");

            customarg = {formId: "blog:download"};
            document.DataLayer.custom = customarg;
            document.dispatchEvent(new CustomEvent('leadFormInst', { 'detail': document.DataLayer }));



            try{
              var payload = {
                  "Nome":jQuery('#formDownload #field0').val(),
                  "Email":jQuery('#formDownload #field2').val(),
                  "Celular":"",
                  "CNPJ":"",
                  "Setor":"",
                  "Qtd_Funcionarios":"",
                  "Ramo_Atuacao":"",
                  "Faturamento":"",
                  "Cargo":"",
                  "VendePara":"",
                  "URL_Origem":window.location.href,
                "Acao_Usuario":"download",
                "ValorAcao_Usuario": "<?php echo $nomeArquivo ?>",
                "URL_Download": "https://empresas.serasaexperian.com.br/blog/?ddownload=<?php echo $id; ?>"
              };

              var xhttp = new XMLHttpRequest();
              xhttp.open("POST", "https://cloud.comunicacao.serasaexperian.com.br/blog/smartcapture/post", true);
              xhttp.setRequestHeader("Accept", "application/json, text/javascript, */*; q=0.01");
              xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

              xhttp.onreadystatechange = function() {
                  if (this.readyState == 4 ) {
                  //funcinou - ação final///

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





            /*
          try{
            let validade = true;
            let data = {
              elqFormName: "SEMPFormLead_download_VF24.09.2018",
              elqSiteID: "840921098",
              elqCustomerGUID: "",
              elqCookieWrite: "0",
              Name: jQuery('#formDownload #field0').val(),
              emailAddress: jQuery('#formDownload #field2').val(),
              tipoEmpresa: jQuery('#formDownload #field3').val(),
              hiddenField: jQuery('#formDownload #field5').val(),
              hiddenField2: jQuery('#formDownload #field4').val(),
              hiddenField3: jQuery('#formDownload #field6').val()
            }
            jQuery.ajax({
              type: 'POST',
              url: 'https://s840921098.t.eloqua.com/e/f2',
              data: data,
              success: true
            });
          }catch(e){}; */

          // abre download
          jQuery.ajax({
            method: "POST",
            url: "https://empresas.serasaexperian.com.br/blog/wp-content/themes/blogEmpreendedor/template-parts/content-cadastro-eloqua-download.php",
            data: { nomeArquivo: "<?php echo $nomeArquivo; ?>", idDownload: <?php echo  $id; ?> }
          })
            .done(function( data ) {
              closeModal();

                //setCookie//
                setCookie("popupDesabilitado","true",9999);

              jQuery("#modalContainer").append(data);
            });
        }
  </script>
</div>





  </div>
</div>
</div>

<script>
  jQuery('.modal-content-download .close-modal').click(function(){

    closeModal();
  });

  function closeModal(){
    jQuery('.modal-content-download').remove();
  }

</script>