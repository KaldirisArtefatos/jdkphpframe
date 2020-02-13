<?php
  require 'libs/JDK_config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <!-- ----------------------------------------------------------------------------- HEAD DA PAGINA --------------------------------------------------------- -->
  <?php include "html/link_head.html" ?>

  </head>
  <body >
  <!-- ----------------------------------------------------------------------------- CONTEUDO DA PAGINA  ----------------------------------------------------- -->
    
    <?php
      $login=0;
      if ($login==1)
        {
          include "html/topo_jumbo.html";
        }
        else
        {
          include "html/topo_navbarfix.html";
        }
       
    ?>
    
    <!-- Page Content -->
    <div class="container" >
      <?php include "html/card.html" ?>
      <?php include "html/colunas_4.html" ?>
      <?php include "html/modal_01.html" ?>
    </div>

  <!-- ----------------------------------------------------------------------------- FECHANDO A PAGINA ------------------------------------------------------- -->
    <?php include "html/rodape.html" ?>

  </body>
</html>