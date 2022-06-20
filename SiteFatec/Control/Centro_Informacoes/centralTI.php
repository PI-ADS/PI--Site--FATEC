<!-- @format -->
<?php
session_start();
include("../../BD/conexao.php");
if (isset($_SESSION["login"]) == 1) {
  include("../../View/Header_Footer/headerloged.php");
} else {
  include("../../View/Header_Footer/header.php");
}
?>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/650f3fb109.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../View/Assets/Styles/Outros.css">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<div class="conteudo">
  <h1>Central de TI</h1>
  <div id="container">
    <div class="col-md-12"></div>

    <div class="card" style="width: 31.33%;
        display: inline-block;
        font-size: 3vw;
        text-align: center;
        padding: 0vw 0vw 0vw 0vw;
        min-width:20vw;">
      <img src="../../View/img/room.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Normas dos Laboratórios</p>
        <a href="normas.php" class="btn btn-primary">Acessar</a>
      </div>
    </div>
    <div class="card" style="width: 31.33%;
        margin-left: 27px;
        display: inline-block;
        margin-right: 0vw;
        font-size: 3vw;
        text-align: center;
        padding: 0vw 0vw 0vw 0vw;
        min-width:20vw;
        float:right;">
      <img src="../../View/img/documentos.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Documentos Relacionados</p>
        <a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/info/check_in.pdf" class="btn btn-primary" target="_blank">Acessar</a>
      </div>
    </div>
    <div class="card" style="width: 31.33%;
        display: inline-block;
        margin-right: 0vw;
        font-size: 3vw;
        text-align: center;
        padding: 0vw 0vw 0vw 0vw;
        min-width:20vw;
        margin-left:5px;
        float:right;">
      <img src="../../View/img/chamado.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Abertura de Chamados</p>
        <a href="chamados.php" class="btn btn-primary">Acessar</a>
      </div>
    </div>
  </div>
</div>

<br><br>

<footer>
  <style type="text/css">
    titulo {
      color: #555555;
      font-family: 'Dosis', sans-serif;
      font-size: 15px;
      line-height: 28.8px;
      vertical-align: baseline;
      letter-spacing: normal;
      word-spacing: 0px;
      margin: 0px;
      padding: 0px;
    }

    p {
      color: #555555;
      font-family: 'Dosis', sans-serif;
      font-size: 15px;
      line-height: 28.8px;
      vertical-align: baseline;
      letter-spacing: normal;
      word-spacing: 0px;
      margin: 0px;
      padding: 0px;
    }

    .carousel-item {
      min-height: 280px;
    }
  </style>

  <!-- Barra Superior -->
  <div class="p-1" style="background-color: #B20000;"></div>
  <!-- Barra Superior -->

  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <div class="row">
      <div class="col-lg-5 text-left mr-5">
        <titulo><b>FACULDADE DE TECNOLOGIA DE INDAIATUBA</b></titulo>
        <br>
        <p><i class="fa fa-house mr-2"></i>Rua Dom Pedro I, 65 - Cidade Nova I | CEP 13334-100</p>
        <p><i class="fa fa-phone mr-2"></i>(19) 3885-1923 | (19) 99269-1700</p>
      </div>

      <div class="col-sm"></div>

      <div class="col-md-3 ml-5 text-right">
        <!-- Section: Social media -->
        <section class="mb-2">

          <!-- Facebook -->
          <a class="btn btn-outline-light btn-lg btn-floating m-1" style="background-color: #3b5998;" href="https://www.facebook.com/fatecdeindaiatuba/" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a>

          <!-- Instagram -->
          <a class="btn btn-outline-light btn-lg btn-floating m-1" style="background-color: #ac2bac;" href="https://www.instagram.com/fatecindaiatuba/" role="button" target="_blank"><i class="fab fa-fw fa-instagram"></i></a>

          <!-- Youtube -->
          <a class="btn btn-outline-light btn-lg btn-floating m-1" style="background-color: #d42b14;" href="https://www.youtube.com/channel/UChZP4dkp2IFvLslxm3i_Qdw" role="button" target="_blank"><i class="fab fa-fw fa-youtube"></i></a>

          <!-- Linkedin -->
          <a class="btn btn-outline-light btn-lg btn-floating m-1" style="background-color: #0082ca;" href="https://www.linkedin.com/school/fatec-indaiatuba/" role="button" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>

          <!-- WhatsApp -->
          <a class="btn btn-outline-light btn-lg btn-floating m-1" style="background-color: #07af69;" href="https://api.whatsapp.com/send?phone=5519992691700" role="button" target="_blank"><i class="fab fa-fw fa-whatsapp"></i></a>

          <!-- Telegram -->
          <a class="btn btn-outline-light btn-lg btn-floating m-1" style="background-color: #658fdd;" href="https://t.me/joinchat/PQvKKEnsqVR4fxrdYbuAVg" role="button" target="_blank"><i class="fab fa-fw fa-telegram"></i></a>
        </section>
        <!-- Section: Social media -->
      </div>
    </div>

  </div>
  <!-- Grid container -->
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #686868;">
    © Copyright 4° Semestre de ADS
    <br>
  </div>
  <!-- Copyright -->
</footer>