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
  
    include_once ("header.php");
  ?>
  
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Congregação</title>
  </head>
  <body>
    <div class="conteudo">

    <br>
      <h1>CONGREGACAO</h1>
<br>
      <p>
        A Congregação é o órgão colegiado de supervisão das atividades
        acadêmico-administrativas, do ensino, da pesquisa e da extensão de
        serviços à comunidade, obedecidas as diretrizes gerais da política
        educacional do Ceeteps.
      </p>

      <p>
        Para maiores informações, acesse o Regimento da Instituição
        <a
          class="link-portaria"
          href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/secretaria/regimento-fatecs%202016.pdf"
          >Clique Aqui!</a
        >
      </p>
<br><br>
      <h3>Visualize nossas atas aqui! ⇓</h3>
<br>
      <ul class="atas">
        <li>
          <button class="btn btn-secondary ">
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/2022/03/2022.zip"
              >2022</a
            >
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/2022/02/2021_11.zip "
              >2021</a
            >
          </button class="btn btn-secondary ">
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/2021/04/2020_05.zip"
              >2020</a
            >
          </button>
        </li>

       

        <div class="lermais" style="display: none;">
        
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2019_03.zip"
              >2019</a
            >
          </button>
        </li>
      
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2018.zip"
              >2018</a
            >
          </button>
        </li>
        <br />

        

       
        <li>
          <button class="btn btn-secondary ">
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2017.zip"
              >2017</a
            >
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2016.zip"
              >2016</a
            >
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2015.zip"
              >2015</a
            >
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2014.zip"
              >2014</a
            >
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2013.zip"
              >2013</a
            >
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2012.zip"
              >2012</a
            >
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2011.zip"
              >2011</a
            >
          </button>
        </li>
        <br />
        <li>
          <button class="btn btn-secondary ">
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2010.zip"
              >2010</a
            >
          </button>
          </li>
      </ul>
   
</div>

<a id='btn-div' class="btn btn-outline-secondary lermais-pos" style="font-size:0.6em";>\/</a>
          
<br>
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
        
      if(lermais.style.display === 'block') {
        lermais.style.display = 'none';
      } else {
        lermais.style.display = 'block';
      }
    });
    </script>
