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

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../View/Assets/Styles/Outros.css">
  <title>PDI</title>
</head>

<body>
  <div class="conteudo">
    <br>
    <h1>PDI</h1>

    <p>
      O PDI é um encontro de Planejamento de Desenvolvimento Institucional com
      a participação de professores, alunos, funcionários e representantes da
      sociedade civil para identificar as potencialidades, fragilidades,
      oportunidades e ameaças que envolvem a Fatec Indaiatuba e propor ações
      práticas de melhorias.
    </p>
    <p class="lermais" style="display: none;">O principal objetivo desse encontro é refletir
      sobre a melhor forma de atender as necessidades da população em termos
      de educação, buscando então estabelecer metas a curto e médio prazo para
      a instituição no que diz respeito à sua filosofia de trabalho, à missão
      a que se propõe, às diretrizes pedagógicas que orientam suas ações, à
      sua estrutura organizacional e às atividades acadêmicas que desenvolve
      e/ou que pretende desenvolver.
    </p>
    <a id='btn-div' class="btn btn-outline-secondary lermais-pos" ; style="font-size:0.6em">+</a>

    <br><br>

    <div class="container ">

      <h3>Consulte aqui outras Informacões</h3>
      <br>
      <div class="row">
        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a class="font-btn" href="http://www.fatecid.com.br/site/wp-content/uploads/2021/06/PLANO-DE-GESTAO-TEMPLATE-2021_2025.pdf" target="_black">Plano Diretor <br>(2021-2025)</a>
          </button>

        </div>

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a class="font-btn" href="http://www.fatecid.com.br/site/index.php/pdi-2018-2019/" target="_black">PDI <br> 2018-2019</a>
          </button>
        </div>

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a class="font-btn" href="http://www.fatecid.com.br/site/index.php/pdi/" target="_black">PDI <br> 2016-2018</a>
          </button>
          <br><br>
        </div>

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a class="font-btn" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/pdi/PDI%20TEMPLATE%202019-2023%20PRONTO.pdf" target="_black">Relatório <br>Diretor</a>
          </button>

        </div>

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a class="font-btn" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/pdi/Resultado%20das%20Metas%20do%20PDI%202018_2019.xlsx" target="_black">Resultado das Metas <br> PDI - 2018/2019</a>
          </button>

        </div>

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a class="font-btn" href="http://www.fatecid.com.br/site/index.php/regulamento_cpa/" target="_black">CPA - Comissão <br>Própria de Avaliacão</a>
          </button>
        </div>
      </div>
    </div>
    <br><br>

    <div class="container">
      <h4 class="h4">Conheca alguns vídeos sobre nossa instituicão</h4>


      <div class="row">
        <div class="col-lg">
          <iframe class="video-pdi" width="400" height="315" src="https://www.youtube.com/embed/o5Z40YjULcw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="col-lg">
          <iframe class="video-pdi" width="400" height="315" src="https://www.youtube.com/embed/ED-idCGqubc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

    </div>
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