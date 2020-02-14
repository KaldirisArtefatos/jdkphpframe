<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->



<?php
require 'libs/JDK_config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- ----------------------------------------------------------------------------- HEAD DA PAGINA --------------------------------------------------------- -->
  <?php include "html/link_head.html" ?>

  <link href="css/login2.css" rel="stylesheet">

</head>

<body>
  <!-- ----------------------------------------------------------------------------- CONTEUDO DA PAGINA  ----------------------------------------------------- -->
  <?php
  $login = 0;
  if ($login == 1) {
    include "html/topo_jumbo.html";
  } else {
    include "html/topo_navbarfix.html";
  }
  ?>
//#region BABABABABA
  <!-- Page Content -->
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <!-- <img src="icons/alarm.svg" id="icon" width="40" height="40" alt="User Icon" /> -->
        <img src="icons/lock.svg" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="email">
        <input type="text" id="password" class="fadeIn third" name="login" placeholder="senha">
        <input type="submit" class="fadeIn fourth" value="Entrar">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Esqueceu a Senha ?</a>
      </div>
    </div>
  </div>
//#region




  <!-- ----------------------------------------------------------------------------- FECHANDO A PAGINA ------------------------------------------------------- -->
  <?php include "html/rodape.html" ?>

</body>

</html>