<div class="modal-content modal-content-emailShare">
       
<div  class="content-alert alert-success">
  <div  class="modal-header-download justify-content-end">

    <h2>Compartilhe essa matéria por email</h2>

    <!----><button  class="close-modal" type="button"><span  class="text-close color-white">Fechar</span><span  aria-hidden="true" class="fa fa-times-circle color-white ml-2"></span></button>
  </div>
  <div  class="modal-body">
    <div  class="row">
      

      
   <?php 
    echo  'Compartilhe o artigo -  ';
    ?>      
  <div>

    <form id="compartilharEmail">
      <h3>Meus dados</h3>
      <input type="text" name="seunome" id="seunome" placeholder="Coloque o seu nome"/>
      <input type="text" name="seuemail" id="seuemail" placeholder="Coloque o seu e-mail"/>
      
      <h3>E-mails dos meus amigos</h3>
      <input type="text" name="amigo1" id="amigo1" placeholder="Coloque o email do seu amigo"/>

      <input type="submit" value="Compartilhar essa matéria" class="submit-button"/>


    <?php
        /*
         * Enable error reporting
         */
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
     
        /*
         * Setup email addresses and change it to your own
         */
        $from = "contato@serasaempreendedor.com.br";
        $to = "mgorzoni@mail.com";
        $subject = "Simple test for mail function";
        $message = "This is a test to check if php mail function sends out the email";
        $headers = "From:" . $from;
     
        /*
         * Test php mail function to see if it returns "true" or "false"
         * Remember that if mail returns true does not guarantee
         * that you will also receive the email
         */
        if(mail($to,$subject,$message, $headers))
        {
            echo "Test email send.";
        } 
        else 
        {
            echo "Failed to send.";
        }
    ?>

    </form>
  
    
  

  <script type="text/javascript" >
    document.querySelector('#form86 #field3').value = CurrentURLSemQueryString+"?cadastroeloquaDownload=true&idDownload=<?php echo $id ?>&nomeArquivo=<?php echo urlencode($nomeArquivo)?>";
    document.querySelector('#form86 #field4').value = "<?php echo $nomeArquivo ?>";


    jQuery('#form86').submit(function() {

      if( !validateForm(jQuery('#form86 #field0').val(),"txt")){
        //não valido
        jQuery('#form86 #field0').parent().prepend('<p id="aviso" class="aviso">Coloque seu nome completo</p>');
        clearAviso();
        return false;
      }
      else if(!validateForm(jQuery('#form86 #field1').val(),"email")){
        //não valido
        jQuery('#form86 #field1').parent().prepend('<p id="aviso" class="aviso">Coloque um e-mail válido</p>');
        clearAviso();
        return false;
      }

      analyticsCliquesGenericos("CadastroEloqua","Sidebar-Download");

      return true;

    })
  </script>
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


