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

<body>

  <br>
  <div class="conteudo">
    <h1>BIBLIOTECA</h1>
    <br>
    <p>
      A Biblioteca da Faculdade de Tecnologia de Indaiatuba (Biblioteca
      FATEC-ID) dispõe de um amplo e agradável espaço para estudos, com
      excelente iluminação, balcão de atendimento adaptado para portadores de
      deficiência física, guarda-volumes para maior comodidade dos alunos e
      computadores para a realização de pesquisas e trabalhos acadêmicos.
    </p>


    <p class="lermais" style="display: none; ">
      Seu acervo, com aproximadamente 10.100 itens, distribuídos entre livros
      técnicos e de literatura, obras de referência, periódicos, trabalhos
      acadêmicos e multimeios, oferece suporte informacional aos alunos,
      professores e funcionários, bem como, à comunidade externa, a quem
      também se destinam os produtos e serviços da Biblioteca FATEC-ID. Os
      materiais disponíveis na Biblioteca encontram-se em um Catálogo Online,
      cujo acesso é possível de qualquer computador conectado à internet.
    </p>
    <br>

    <a id='btn-div' class="btn btn-outline-secondary lermais-pos" ;>+</a>
    <br>

    <script>
      var btn = document.getElementById('btn-div');
      var lermais = document.querySelector('.lermais');
      btn.addEventListener('click', function() {

        if (lermais.style.display === 'block') {
          lermais.style.display = 'none';
        } else {
          lermais.style.display = 'block';
        }
      });
    </script>
    <br>

    <ul class="biblioteca">
      <h4>Horário de Funcionamento</h4>
      <li>Das 07h00 às 11h00</li>
      <li>Das 12h00 às 22h00</li>
    </ul>

    <div class="container">

      <div class="row">
        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a href="http://biblio.cps.sp.gov.br/" class="font-btn" target="_black">BliblioCPS</a>
          </button>
        </div>

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a href="http://www.arquivoestado.sp.gov.br/web/" class="font-btn" target="_black">Arquivo Estado SP</a>
          </button>
        </div>

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a href="../Graduacao/tg-ptg.php" class="font-btn">Trabalhos de Graduacao</a>
          </button>
        </div>
      </div>
    </div>

  </div>

  <br>

  <!-- INICIO FOOTER -->

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