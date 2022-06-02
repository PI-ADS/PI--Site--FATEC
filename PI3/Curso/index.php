<?php
session_start();
include("config/banco.php");
if (isset($_SESSION["login"]) == 1) {
  include("./headerloged.php");
} else {
  include("./header.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="./global.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div class="main-content">

    <div class="containerButtons">
      <a href="../Detalhes-Curso/logistica.html">
        <button class="cursoButton">
          Logística aeroportuária
        </button>
      </a>
      <a href="../Detalhes-Curso/gestao.html">
        <button class="cursoButton">
          Gestão de serviços
        </button>
      </a>
      <a href="../Detalhes-Curso/redes.html">
        <button class="cursoButton">
          Redes de computadores
        </button>
      </a>
    </div>
    <div class="containerButtons2">
      <a href="../Detalhes-Curso/ads.html">
        <button class="cursoButton">
          Análise e desenvolvimento de sistemas
        </button>
      </a>
      <a href="../Detalhes-Curso/ge.html">
        <button class="cursoButton">
          Gestão empresarial
        </button>
      </a>
      <a href="../Detalhes-Curso/comex.html">
        <button class="cursoButton">
          Comércio exterior
        </button>
      </a>
    </div>
  </div>
  <?php
  include("footer.php");
  ?>
  <script src="https://kit.fontawesome.com/650f3fb109.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>