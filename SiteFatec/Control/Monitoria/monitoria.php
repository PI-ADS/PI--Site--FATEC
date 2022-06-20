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
  <title>Monitoria</title>
</head>
<br>

<body>
  <div>
    <h1>MONITORIA</h1>
  </div>
  <br><br>

  <div class="container conteudo">
    <h3>Documentos Monitoria de Disciplina</h3> <br>

    <div class="lermais" style="display:none;">
      <div class="row">

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a style="font-size:0.8em" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/monitoria/Anexo%203%20%E2%80%93%20Ficha%20de%20Inscri%C3%A7%C3%A3o%20Monitoria%20-%20disciplina.pdf">
              Ficha de Inscricao
            </a>
          </button>
        </div>


        <div class="col-sm">

          <button class="btn btn-secondary btn-tam">
            <a style="font-size:0.8em" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/monitoria/Anexo%205%20-%20Lista%20de%20Presen%C3%A7a.pdf">
              Lista de Presente
            </a>
          </button>
        </div>
        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a style="font-size:0.8em" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/monitoria/Anexo%206%20%E2%80%93%20Registro%20de%20Conte%C3%BAdo.pdf">
              Registro de Conteudo</a>
          </button>
        </div>
        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a style="font-size:0.8em" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/monitoria/Anexo%202%20-%20Relat%C3%B3rio%20Final%20-%20Monitoria%20de%20Disciplina.pdf">
              Relatorio Final
            </a>
          </button>
        </div>
        <br><br><br>
        <div class="col-sm">
          <button class="btn btn-secondary btn-tam" style="margin-left:38%">
            <a style="font-size:0.8em" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/monitoria/Resultado%20da%20monitoria.pdf">
              Resultado Monitoria
            </a>
          </button>
        </div>
      </div>
      <br>
    </div>

    <a id='btn-div' style="font-size:0.6em" class="btn btn-outline-secondary lermais-pos" ;>+</a>
    <br><br>
  </div>

  <div class=" container conteudo">

    <h3>Outras Informações</h3>
    <br>
    <div class="lermais1" style="display: none;">
      <div class="row">
        <div class="col-sm">
          <button class="btn btn-secondary btn-tam" style="margin-left: 50%;"><a style="font-size:0.8em; " href="http://www.fatecid.com.br/site/index.php/editais/"> Editais</a></button>
        </div>
        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a style="font-size:0.8em" href="http://www.fatecid.com.br/site/wp-content/uploads/2022/03/Horario-Monitoria-2022-1.pdf">
              Horário
            </a>
          </button>
        </div>
      </div>
      <br>
    </div>


    <a id='btn-div1' style="font-size:0.6em" class="btn btn-outline-secondary lermais-pos" ;>+</a>
    <br><br>

    <div class="container conteudo">
      <h1>Iniciacao Científica</h1> <br><br>
      <div class="row">

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam" style="padding-top:2em; padding-right:2em; justify-content: center; margin-left:50%; margin-right:30%"><a style="font-size:0.8em" href="../../../SiteFatec/Control/Portaria/portaria.php">Portarias </a> </button>

        </div>
        <div class="col-sm">
          <button class="btn btn-secondary btn-tam"><a style="font-size:0.8em" href="http://www.fatecid.com.br/site/wp-content/uploads/2020/05/ANEXOS-PROGRAMA-MONITORIA-IDTI-1SEM2020.doc">
              Ficha de Inscricao, Template e <br> Plano de Trabalho IDT
            </a></button>
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
  var lermais1 = document.querySelector('.lermais1');
  btn.addEventListener('click', function() {

    if (lermais1.style.display === 'block') {
      lermais1.style.display = 'none';
    } else {
      lermais1.style.display = 'block';
    }
  });
</script>