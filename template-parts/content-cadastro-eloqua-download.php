<div class="modal-content">
       
<div  class="content-alert alert-success">
  <div  class="modal-header justify-content-end">
    <!----><button  class="close-modal" type="button"><span  class="text-close color-white">Fechar</span><span  aria-hidden="true" class="fa fa-times-circle color-white ml-2"></span></button>
  </div>
  <div  class="modal-body">
    <div  class="row">
      <div  class="col-xl-10 justify-content-center ml-auto mr-auto text-center">
        <h2  class="alert-title-ico"><span  class="round-box"><i  class="fa fa-check-circle-o"></i></span></h2>
        <!----><h3  class="title">Obrigado </h3>
        <!---->
        <!----><p  class="color-dark-grey">O seu download está pronto. <br>

          <a class="DownloadButton" onclick="analyticsDownloads('<?php echo urldecode($_POST['nomeArquivo'])?>')" target="_blank" href="<?php echo "https://empresas.serasaexperian.com.br/blog/?ddownload=".$_POST['idDownload'] ?>">Baixar Arquivo</a>

        </p>

        
       
      </div>
    </div>
  </div>
</div>
</div>

<script>
  jQuery('.close-modal').click(function(){

    closeModal();
  });

  function closeModal(){
    jQuery('.modal-content').remove();
  }

</script>