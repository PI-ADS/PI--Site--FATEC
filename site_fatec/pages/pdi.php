<!-- @format -->
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
<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
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
        <a class="font-btn"
          href="http://www.fatecid.com.br/site/wp-content/uploads/2021/06/PLANO-DE-GESTAO-TEMPLATE-2021_2025.pdf"
          >Plano Diretor <br>(2021-2025)</a
        >
      </button>

      </div>

      <div class="col-sm">
      <button class="btn btn-secondary btn-tam">
        <a  class="font-btn" href="http://www.fatecid.com.br/site/index.php/pdi-2018-2019/"
          >PDI <br> 2018-2019</a
        >
      </button>
</div>

     <div class="col-sm">
        <button class="btn btn-secondary btn-tam">
        <a class="font-btn" href="http://www.fatecid.com.br/site/index.php/pdi/"
          >PDI <br> 2016-2018</a
        >
      </button>
<br><br>
    </div>

    <div class="col-sm">
      <button class="btn btn-secondary btn-tam">
        <a class="font-btn"
          href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/pdi/PDI%20TEMPLATE%202019-2023%20PRONTO.pdf"
          >Relatório <br>Diretor</a
        >
      </button>

      </div>

      <div class="col-sm">  
      <button class="btn btn-secondary btn-tam">
        <a class="font-btn"
          href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/pdi/Resultado%20das%20Metas%20do%20PDI%202018_2019.xlsx"
          >Resultado das Metas <br> PDI - 2018/2019</a
        >
      </button>

    </div>

    <div class="col-sm">
      <button class="btn btn-secondary btn-tam">
        <a class="font-btn" href="http://www.fatecid.com.br/site/index.php/regulamento_cpa/"
          >CPA - Comissão <br>Própria de Avaliacão</a
        >
      </button>
    </div>
  </div>
</div>
<br><br>

    <div class="container">
      <h4 class="h4">Conheca alguns vídeos sobre nossa instituicão</h4>


      <div class="row">
        <div class="col-lg">
      <iframe class="video-pdi"
        width="400"
        height="315"
        src="https://www.youtube.com/embed/o5Z40YjULcw"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </div>

    <div class="col-lg">
      <iframe class="video-pdi"
        width="400"
        height="315"
        src="https://www.youtube.com/embed/ED-idCGqubc"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </div>
    </div>

    </div>
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