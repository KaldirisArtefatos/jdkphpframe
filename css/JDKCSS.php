<?php
// Define que o arquivo terá a codificação de saída no formato CSS
header("Content-type: text/css");

$cor_fundo = '#E4F3FF';
$cor_texto = '#003333';
$imagem_link = '../img/link.jpg';
$cor_barras = '#103b8b';

?>


body{
        padding-top: 70px;
        background: <?php echo $cor_fundo; ?>;
    }
    
.navbar{
        background-color: <?php echo $cor_barras; ?>
    }
