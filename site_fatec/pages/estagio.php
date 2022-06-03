<!-- @format -->

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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
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
        <a class="bold" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/estagio/RelatorioFinal.docxx">
          Clique Aqui &#11015;</a>
      </li>
    </ul>
    <br>
    <a id='btn-div' class="btn btn-outline-secondary lermais-pos2" ; style="font-size:0.6em">\/</a>

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
    <a id='btn-div1' class="btn btn-outline-secondary lermais-pos2" style="font-size:0.6em" ;>\/</a>


    <br>
    <br />
    <div class="container" style="margin-left: 2em;">
      <div class="row">
        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a href="http://www.planalto.gov.br/ccivil_03/_Ato2007-2010/2008/Lei/L11788.htm" class="font-btn">LEI DO ESTÁGIO</a> </button>
        </div>

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam">
            <a href="./vagas.html" class="font-btn">Vagas</a>

          </button>
        </div>
      </div>
    </div>

  </div>


  <br>
  <footer>

    <?php
    include("../footer.php");
    ?>
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