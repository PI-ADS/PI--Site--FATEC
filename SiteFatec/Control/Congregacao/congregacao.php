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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../View/Assets/Styles/Outros.css">
  <title>Congregação</title>
</head>

<body>
  <div class="conteudo">

    <br>
    <h1>CONGREGAÇÃO</h1>
    <br>
    <p>
      A Congregação é o órgão colegiado de supervisão das atividades
      acadêmico-administrativas, do ensino, da pesquisa e da extensão de
      serviços à comunidade, obedecidas as diretrizes gerais da política
      educacional do Ceeteps.
    </p>

    <p>
      Para maiores informações, acesse o Regimento da Instituição
      <a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/secretaria/regimento-fatecs%202016.pdf">Clique Aqui!</a>
    </p>
    <br><br>
    <h3>Visualize nossas atas aqui! ⇓</h3>
    <br>
    <ul class="atas">
      <li>
        <button class="btn btn-secondary ">
          <a href="http://www.fatecid.com.br/site/wp-content/uploads/2022/03/2022.zip">2022</a>
        </button>
      </li>
      <br />
      <li>
        <button class="btn btn-secondary ">
          <a href="http://www.fatecid.com.br/site/wp-content/uploads/2022/02/2021_11.zip ">2021</a>
        </button class="btn btn-secondary ">
      </li>
      <br />
      <li>
        <button class="btn btn-secondary ">
          <a href="http://www.fatecid.com.br/site/wp-content/uploads/2021/04/2020_05.zip">2020</a>
        </button>
      </li>



      <div class="lermais" style="display: none;">

        <br />
        <li>
          <button class="btn btn-secondary ">
            <a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2019_03.zip">2019</a>
          </button>
        </li>

        <br />
        <li>
          <button class="btn btn-secondary ">
            <a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2018.zip">2018</a>
          </button>
        </li>
        <br />




        <li>
          <button class="btn btn-secondary ">
            <a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2017.zip">2017</a>
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2016.zip">2016</a>
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2015.zip">2015</a>
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2014.zip">2014</a>
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2013.zip">2013</a>
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2012.zip">2012</a>
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2011.zip">2011</a>
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2010.zip">2010</a>
          </button>
        </li>
    </ul>

  </div>

  <a id='btn-div' class="btn btn-outline-secondary lermais-pos" style="font-size:0.6em" ;>+</a>

  <br>
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