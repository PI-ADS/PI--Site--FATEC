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
  <title>Institucional</title>
</head>

<body>
  <br>

  <div class="conteudo">

    <h1>Institucional</h1>
    <br><br>
    <h2>Quem Somos</h2>


    <img class="img-inst" src="../../View/img/fatecid.jpeg" alt="">

    <p>
      A Faculdade de Tecnologia de Indaiatuba é resultante de intenção
      tripartite entre o Centro Estadual de Educação Tecnológica “Paula
      Souza”, Prefeitura Municipal de Indaiatuba e a AIMI- Associação das
      Indústrias do Município de Indaiatuba. </p>

    <p class="lermais" style="display: none;">
      Esses segmentos se organizaram em
      comissão para estudos da implantação do Curso Superior de Tecnologia em
      Automação de Escritórios e Secretariado, nomeada através da Portaria
      CEETEPS nº 49, de 18 de agosto de 1993 do Senhor Diretor
      Superintendente, assim composta: Prof. Paulo Yamamura, Prof. Luiz
      Santilli Junior, professores da FATEC – São Paulo; Profª Maria de
      Lourdes Baraldi Barbosa Côrrea e Profª Jane Shirely Escodro
      Pranstretter, da Prefeitura Municipal de Indaiatuba e Engº Sr. Koji
      Arita, representante da AIMI, encontrando a presidência sob a
      responsabilidade o primeiro.
    </p>
    <br>
    <a id='btn-div' class="btn btn-outline-secondary lermais-pos" ; style="font-size:0.6em">+</a>
    <br><br>
    <div class="container conteudo">

      <h3>Conheca parte da nossa historia</h3>
      <br>
      <div class="row">
        <div class="col-sm">
          <h4>Historico</h4>
          <img style="width:90%; margin-left:10%;" src="../../View/img/inst.jpg" alt="">
        </div>
        <div class="col-sm">
          <h4>Diretoria</h4>
          <img style="width: 90%; margin-left:10%;" src="../../View/img/inst2.jpeg" alt="">
        </div>
      </div>


    </div>
    <br>
    <br>
    <h3>Conheca nossos professores</h3>
    <br>
    <button class="btn btn-secondary btn-tam" style="margin-left:37%;"><a href="../../../SiteFatec/Control/Corpo_Docente/corpo-docente.php">Corpo Docente</a></button>
    <br>
    <br>
  </div>

  <div class="conteudo">
    <h3>Missão</h3>

    <p class="italic missao " style="display: none;">
      “Formar tecnólogos profissionalmente competentes, cidadãos com postura
      crítica, ética e humanística, responsáveis e comprometidos com o
      desenvolvimento sustentável, preparados para oferecerem soluções sociais
      e economicamente produtivas.”
    </p>

    <a id='btn-div1' class="btn btn-outline-secondary lermais-pos" ; style="font-size:0.4em">+</a>
    <br><br>
    <h3>Visão</h3>

    <p class="italic visao" style="display: none;">
      Ser uma instituição de excelência na geração e difusão de novas
      tecnologias, de inovações tecnológicas e de soluções social e
      economicamente produtivas com atuação na Educação Superior Tecnológica,
      em suas áreas de competência.
    </p>

    <a id='btn-div2' class="btn btn-outline-secondary lermais-pos" ; style="font-size:0.4em">+</a>
    <br><br>
    <h3>Objetivos</h3>

    <p class="italic objetivo" style="display: none;">
      Promover um ambiente de aprendizagem que favoreça o desenvolvimento das
      competências, habilidades e atitudes para o atendimento das demandas da
      sociedade. Integrar e participar do desenvolvimento regional
      sustentável, promovendo ações e oferecendo
    </p>

    <a id='btn-div3' class="btn btn-outline-secondary lermais-pos" ; style="font-size:0.4em">+</a>
    <br><br>

  </div>

  <div class="conteudo">

    <h3>Outras Informacões</h3>
    <br>
    <div class="container" style="margin-left: 1em;">

      <div class="row">

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam"><a href="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2022/04/manual_centro_paula_souza_gestao2019_atualizado-em-06-abril-2022.pdf" class="font-btn" target="_black">Manual de Identidade Visual</a></button>
        </div>
        <div class="col-sm">
          <button class="btn btn-secondary btn-tam"><a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/institucional/comuicacao_inclusiva.pdf" class="font-btn" target="_black">Guia de Comunicacão Inclusiva</a></button>

        </div>

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam" style="padding-top:2.2em; padding-right:2em;"><a href="../../../SiteFatec/Control/PDI/pdi.php" class="font-btn"> PDI <br></a></button>
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
  var lermais = document.querySelector('.lermais');
  btn.addEventListener('click', function() {

    if (lermais.style.display === 'block') {
      lermais.style.display = 'none';
    } else {
      lermais.style.display = 'block';
    }
  });
</script>

<script>
  var btn = document.getElementById('btn-div1');
  var missao = document.querySelector('.missao');
  btn.addEventListener('click', function() {

    if (missao.style.display === 'block') {
      missao.style.display = 'none';
    } else {
      missao.style.display = 'block';
    }
  });
</script>

<script>
  var btn = document.getElementById('btn-div2');
  var visao = document.querySelector('.visao');
  btn.addEventListener('click', function() {

    if (visao.style.display === 'block') {
      visao.style.display = 'none';
    } else {
      visao.style.display = 'block';
    }
  });
</script>

<script>
  var btn = document.getElementById('btn-div3');
  var objetivo = document.querySelector('.objetivo');
  btn.addEventListener('click', function() {

    if (objetivo.style.display === 'block') {
      objetivo.style.display = 'none';
    } else {
      objetivo.style.display = 'block';
    }
  });
</script>