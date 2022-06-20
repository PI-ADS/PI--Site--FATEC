<?php
session_start();
include("../../../../BD/conexao.php");
if (isset($_SESSION["login"]) == 1 || isset($_SESSION["loginFunc"]) == 1) {
  include("../../../View/Header_Footer/headerloged.php");
} else {
  include("../../../../View/Header_Footer/header.php");
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
  <link rel="stylesheet" href="./styles3.css">
  <!-- <link rel="stylesheet" href="../global.css"> -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <div class="titulo-curso2">
    <p>Matriz Gestão Empresarial</p>
  </div>

  <div class="buttons-modal">
    <div class="containerButtons">
      <button type="button" data-toggle="modal" data-target="#exampleModal" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Informática Aplicada a gestão
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal1" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Sociedade Tecnologia e Inovação
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal2" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Atividades Acadêmico-Científico-Culturais
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal11" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Métodos para a produção do Conhecimento
      </button>
    </div>

    <div class="containerButtons2">
      <button type="button" data-toggle="modal" data-target="#exampleModal3" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Sistemas de Informação
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal4" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Direito Empresarial
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal5" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Projeto de Trabalho de Graduação
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal10" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Sistemas Integrados de Gestão
      </button>
    </div>

    <div class="containerButtons3">
      <button type="button" data-toggle="modal" data-target="#exampleModal6" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Matemática
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal7" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Matemática Financeira
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal8" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Estatística aplicada a Gestão
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal9" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Logística
      </button>
    </div>

    <nav class="nav-pag" aria-label="...">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../../ge.php">Voltar</a>
        <li class="page-item">
          <a class="page-link" href="index.php" tabindex="-1">1</a>
        </li>
        <li class="page-item"><a class="page-link" href="page2.php">2</a></li>
        <li class="page-item disabled"><a class="page-link" href="page3.php">3</a></li>
      </ul>
    </nav>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Informática Aplicada a Gestão</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Informática Aplicada a Gestão</strong> você irá aprender..<br><br>
              <strong>Professor(a):</strong> ... <Br>
              <strong>Lates:</strong><a href="#" target="_blank">VEJA AQUI</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sociedade Tecnologia e Inovação</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Sociedade Tecnologia e Inovação</strong> você irá aprender..<br><br>
              <strong>Professor(a):</strong> ... <Br>
              <strong>Lates:</strong><a href="#" target="_blank">VEJA AQUI</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Atividades Acadêmico-Científico-Culturais</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Atividades Acadêmico-Científico-Culturais</strong> você irá aprender..<br><br>
              <strong>Professor(a):</strong> ... <Br>
              <strong>Lates:</strong><a href="#" target="_blank">VEJA AQUI</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Métodos para a Produção do Conhecimento</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Métodos para a Produção do Conhecimento</strong> você irá aprender..<br><br>
              <strong>Professor(a):</strong> ... <Br>
              <strong>Lates:</strong><a href="#" target="_blank">VEJA AQUI</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sistemas de Informação</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Sistemas de Informação</strong> você irá aprender..<br><br>
              <strong>Professor(a):</strong> ... <Br>
              <strong>Lates:</strong><a href="#" target="_blank">VEJA AQUI</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Direito Empresarial</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Direito Empresarial</strong> você irá aprender..<br><br>
              <strong>Professor(a):</strong> ... <Br>
              <strong>Lates:</strong><a href="#" target="_blank">VEJA AQUI</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Projeto de Trabalho de Graduação</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Projeto de Trabalho de Graduação</strong> você irá aprender..<br><br>
              <strong>Professor(a):</strong> ... <Br>
              <strong>Lates:</strong><a href="#" target="_blank">VEJA AQUI</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sistemas Integrados de Gestão</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Sistemas Integrados de Gestão</strong> você irá aprender..<br><br>
              <strong>Professor(a):</strong> ... <Br>
              <strong>Lates:</strong><a href="#" target="_blank">VEJA AQUI</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Matemática</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Matemática</strong> você irá aprender..<br><br>
              <strong>Professor(a):</strong> ... <Br>
              <strong>Lates:</strong><a href="#" target="_blank">VEJA AQUI</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Matemática Financeira</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Matemática Financeira</strong> você irá aprender..<br><br>
              <strong>Professor(a):</strong> ... <Br>
              <strong>Lates:</strong><a href="#" target="_blank">VEJA AQUI</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Estatística Aplicada a Gestão</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Estatística Aplicada a Gestão</strong> você irá aprender..<br><br>
              <strong>Professor(a):</strong> ... <Br>
              <strong>Lates:</strong><a href="#" target="_blank">VEJA AQUI</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logística</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Logística</strong> você irá aprender..<br><br>
              <strong>Professor(a):</strong> ... <Br>
              <strong>Lates:</strong><a href="#" target="_blank">VEJA AQUI</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
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

    <script src="https://kit.fontawesome.com/650f3fb109.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>