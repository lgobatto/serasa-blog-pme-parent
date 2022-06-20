<?php
$actual_link = "https://".$_SERVER[HTTP_HOST].preg_replace("/\?(.*)/", "",$_SERVER[REQUEST_URI]);

//<div class="fb-comments" data-href="https://blog.serasaempreendedor.com.br/" data-width="" data-numposts="5"></div> 

?>

<div class="fb-comments" data-href="<?php echo $actual_link;?>" data-width="900" data-numposts="5"></div>


