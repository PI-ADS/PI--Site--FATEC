<!-- @format -->

<!DOCTYPE html>
<html lang="pt-br">
  
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
  </head>
  <body>

<header> <?php
  /*
    session_start(); 
    include("../config/banco.php");
    if(isset($_SESSION["login"]) == 1){   
      include("../headerloged.php");
    }else{  
      include("../header.php");
    }*/
  
    include_once ("header.php");
  ?> </header>

<br><br>

<div class="conteudo">
    <iframe 
      width="1046"
      height="600"
      src="https://urhsistemas.cps.sp.gov.br//dgsdad/SelecaoPublica/FATEC/PSS/inscricoesabertas.aspx"
    ></iframe>

    </div>

    <br><br>
    <footer>

<?php
  include("../footer.php");
?>
</footer>


  </body>
</html>
