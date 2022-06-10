<!DOCTYPE html>
<html lang="pt-br">

<?php
/*
  session_start(); 
  include("../config/banco.php");
  if(isset($_SESSION["login"]) == 1){   
    include("../headerloged.php");
  }else{  
    include("../header.php");
  }*/

include_once("header.php");

?>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/650f3fb109.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
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
            <a href="http://biblio.cps.sp.gov.br/" class="font-btn">BliblioCPS</a>
          </button>
        </div>

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a href="http://www.arquivoestado.sp.gov.br/web/" class="font-btn">Arquivo Estado SP</a>
          </button>
        </div>

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a href="./tg-ptg.php" class="font-btn">Trabalhos de Graduacao</a>
          </button>
        </div>
      </div>
    </div>

  </div>

  <br>

  <!-- INICIO FOOTER -->

  <?php
  include("../footer.php");
  ?>