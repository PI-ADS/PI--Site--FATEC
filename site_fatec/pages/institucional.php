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
  <link rel="stylesheet" href="style.css">
  <title>Institucional</title>
</head>

<body>
  <br>

  <div class="conteudo">

    <h1>Institucional</h1>
    <br><br>
    <h2>Quem Somos</h2>


    <img class="img-inst" src="../image/fatecid.jpeg" alt="">

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
    <a id='btn-div' class="btn btn-outline-secondary lermais-pos" ; style="font-size:0.6em">\/</a>
<br><br>
<div class="container conteudo">

<h3>Conheca parte da nossa historia</h3>
<br>
  <div class="row">
<div class="col-sm">
  <h4>Historico</h4>
<img style="width:90%; margin-left:10%;" src="../image/inst.jpg" alt="">
</div>
<div class="col-sm">
<h4>Diretoria</h4>
<img style="width: 90%; margin-left:10%;" src="../image/inst2.jpeg" alt="">
</div>
  </div>


</div>
    <br>
    <br>
    <h3>Conheca nossos professores</h3>
    <br>
    <button class="btn btn-secondary btn-tam" style="margin-left:37%;"><a href="./corpo-docente.php">Corpo Docente</a></button>
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

    <a id='btn-div1' class="btn btn-outline-secondary lermais-pos" ; style="font-size:0.4em">\/</a>
    <br><br>
    <h3>Visão</h3>

    <p class="italic visao" style="display: none;">
      Ser uma instituição de excelência na geração e difusão de novas
      tecnologias, de inovações tecnológicas e de soluções social e
      economicamente produtivas com atuação na Educação Superior Tecnológica,
      em suas áreas de competência.
    </p>

    <a id='btn-div2' class="btn btn-outline-secondary lermais-pos" ; style="font-size:0.4em">\/</a>
    <br><br>
    <h3>Objetivos</h3>

    <p class="italic objetivo" style="display: none;">
      Promover um ambiente de aprendizagem que favoreça o desenvolvimento das
      competências, habilidades e atitudes para o atendimento das demandas da
      sociedade. Integrar e participar do desenvolvimento regional
      sustentável, promovendo ações e oferecendo
    </p>

    <a id='btn-div3' class="btn btn-outline-secondary lermais-pos" ; style="font-size:0.4em">\/</a>
    <br><br>

  </div>

  <div class="conteudo">

    <h3>Outras Informacões</h3>
    <br>
    <div class="container" style="margin-left: 1em;">

      <div class="row">

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam"><a href="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2022/04/manual_centro_paula_souza_gestao2019_atualizado-em-06-abril-2022.pdf" class="font-btn">Manual de Identidade Visual</a></button>
        </div>
        <div class="col-sm">
          <button class="btn btn-secondary btn-tam"><a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/institucional/comuicacao_inclusiva.pdf" class="font-btn">Guia de Comunicacão Inclusiva</a></button>

        </div>

        <div class="col-sm">
          <button class="btn btn-secondary btn-tam" style="padding-top:2.2em; padding-right:2em;"><a href="./pdi.html" class="font-btn"> PDI <br></a></button>
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