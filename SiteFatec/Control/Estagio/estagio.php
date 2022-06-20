<!-- @format -->

<!DOCTYPE html>
<html lang="pt-br">

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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../View/Assets/Styles/Outros.css">
  <title>Estágio</title>
</head>

<body>

  <br>
  <div class="conteudo2">

    <h1>ESTÁGIO</h1>

    <br>

    <h3>Cronograma</h3>
    <br />

    <div style="margin-left: 1em ;">
      <p>
        PERIODICIDADE DE ENTREGA DOS RELATÓRIOS DE ESTÁGIO SUPERVISIONADO – 1º
        SEM/2022
      </p>
      <p>06 a 11/06 – Entrega de documentos para validação de estágio</p>
      <br>
      <div class="tit">
        <h4>ATENÇÃO ALUNOS:</h4>
      </div>
      <p>
        Para cumprimento da disciplina, enviar os documentos através do e-mail:
        <a href="malito:f105.estagio@fatec.sp.gov.br ">
          <strong>f105.estagio@fatec.sp.gov.br</strong>
        </a>
      </p>
    </div>

    <br>
    <h3>Documentos para validacao do estágio</h3>
    <br />
    <ul class="doc" style="display: none; ">
      <li>
        Plano de atividades -
        <a class="bold" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/estagio/PlanodeAtividades.docx">
          Clique Aqui &#11015;</a>
      </li>
      <br />
      <li>
        Relatório Final -
        <a class="bold" href="https://view.officeapps.live.com/op/view.aspx?src=http%3A%2F%2Fwww.fatecid.com.br%2Fsite%2Fwp-content%2Fuploads%2Fdownloads%2Festagio%2FRelatorioFinal.docx&wdOrigin=BROWSELINK" target="_blank">
          Clique Aqui &#11015;</a>
      </li>
    </ul>
    <br>
    <a id='btn-div' class="btn btn-outline-secondary lermais-pos2" ; style="font-size:0.6em">+</a>

    <br>
    <br>
    <h3>Documentos para contrato de estágio</h3>
    <br />
    <ul class="doc1" style="display: none; ">
      <li> Modelo de Termo de Compromisso de Estágio -
        <a class="bold" href="http://www.fatecid.com.br/site/wp-content/uploads/2022/02/modelo_termo_de_compromisso_2022.docx">
          Clique Aqui &#11015;</a>
      </li>
      <br />

      <li> Modelo de Termo ADITIVO -
        <a class="bold" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/estagio/modelo_termo_aditivo_indaiatuba_11092018.docx">
          Clique Aqui &#11015;</a>
      </li>
      <br />

      <li> Modelo de Carta de Rescisão de Contrato de Estágio -
        <a class="bold" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/estagio/rescisao_de_estagio.docx">
          Clique Aqui
          &#11015;</a>
      </li>
    </ul>
    <br>
    <a id='btn-div1' class="btn btn-outline-secondary lermais-pos2" style="font-size:0.6em" ;>+</a>

    <br>
    <br />
    <div class="container" style="margin-left: 2em;">
      <div class="row">
        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a href="http://www.planalto.gov.br/ccivil_03/_Ato2007-2010/2008/Lei/L11788.htm" target="_blank" class="font-btn">LEI DO ESTÁGIO</a> </button>
        </div>

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a href="../Vagas/vagas.php" class="font-btn">Vagas</a>

          </button>
        </div>
      </div>
    </div>

  </div>
  <br>

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

</body>

</html>

<script>
  var btn = document.getElementById('btn-div');
  var doc = document.querySelector('.doc');
  btn.addEventListener('click', function() {

    if (doc.style.display === 'block') {
      doc.style.display = 'none';
    } else {
      doc.style.display = 'block';
    }
  });
</script>

<script>
  var btn = document.getElementById('btn-div1');
  var doc1 = document.querySelector('.doc1');
  btn.addEventListener('click', function() {

    if (doc1.style.display === 'block') {
      doc1.style.display = 'none';
    } else {
      doc1.style.display = 'block';
    }
  });
</script>