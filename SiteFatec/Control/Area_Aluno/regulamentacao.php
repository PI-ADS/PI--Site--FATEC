<?php
session_start();
include("../../BD/conexao.php");
if (isset($_SESSION["login"]) == 1) {
  include("../../View/Header_Footer/headerloged.php");
} else {
  include("../../View/Header_Footer/header.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modelos e documentos de graduação</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../View/Assets/Styles/regulamentacao.css" />
  <!-- <link rel="stylesheet" href="../global.css" /> -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous" />
</head>

<body>

  <div class="main-content">
    <h1 style="
          margin-top: 70px;
          color: rgba(140, 12, 12, 1);
          text-align: center;
          font-weight: bold;
        ">
      Modelo e Documentos de Graduação
    </h1>

    <ul>
      <li>
        <a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/tg/Relatorio%20de%20Orientacao%20TG_2019.pdf" target="_blank">
          Relatório de Orientação de Trabalho de Graduação
        </a>
        <i class="fa-solid fa-download"></i>
      </li>
      <li>
        <a href="http://www.fatecid.com.br/site/wp-content/uploads/2022/06/Declaracao-de-nao-plagio-Individual-1-1.docx">Declaração
          de Não Plágio<i class="glyphicon glyphicon glyphicon-download-alt"></i>
          – Individual</a>
        <i class="fa-solid fa-download"></i>
      </li>
      <li>
        <a href="http://www.fatecid.com.br/site/wp-content/uploads/2022/06/Declaracao-de-nao-plagio-Dupla-2-1.docx">Declaração
          de Não Plágio<i class="glyphicon glyphicon glyphicon-download-alt"></i>
          – Dupla</a>
        <i class="fa-solid fa-download"></i>
      </li>
      <li>
        <a href="https://view.officeapps.live.com/op/view.aspx?src=http%3A%2F%2Fwww.fatecid.com.br%2Fsite%2Fwp-content%2Fuploads%2Fdownloads%2Ftg%2FFrequencia%2520referente%2520a%2520Orientacao.doc&wdOrigin=BROWSELINK" target="_blank" rel="noopener noreferrer">Frequência referente à Orientação
          <i class="glyphicon glyphicon glyphicon-download-alt"></i></a>
        <i class="fa-solid fa-download"></i>
      </li>
      <li>
        <a href="https://view.officeapps.live.com/op/view.aspx?src=http%3A%2F%2Fwww.fatecid.com.br%2Fsite%2Fwp-content%2Fuploads%2F2020%2F06%2Fmodelo2020.pptx&wdOrigin=BROWSELINK" target=" _blank" rel="noopener noreferrer">Modelo de Apresentação em ppt<i class="glyphicon glyphicon glyphicon-download-alt"></i></a>
        <i class="fa-solid fa-download"></i>
      </li>
    </ul>
  </div>

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

  <script src="https://kit.fontawesome.com/650f3fb109.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>