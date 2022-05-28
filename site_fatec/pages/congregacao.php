<!-- @format -->

<!DOCTYPE html>
<html lang="en">
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
      <h1>CONGREGACAO</h1>

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

      <h3>Visualize nossas atas aqui! ⇓</h3>

      <ul class="atas">
        <li>
          <button>
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/2022/03/2022.zip"
              >2022</a
            >
          </button>
        </li>
        <br />
        <li>
          <button>
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/2022/02/2021_11.zip "
              >2021</a
            >
          </button>
        </li>
        <br />
        <li>
          <button>
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/2021/04/2020_05.zip"
              >2020</a
            >
          </button>
        </li>

        <span id="more">
        <br />
        <li>
          <button>
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2019_03.zip"
              >2019</a
            >
          </button>
        </li>
      
        <br />
        <li>
          <button>
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2018.zip"
              >2018</a
            >
          </button>
        </li>
        <br />

        

       
        <li>
          <button>
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2017.zip"
              >2017</a
            >
          </button>
        </li>
        <br />
        <li>
          <button>
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2016.zip"
              >2016</a
            >
          </button>
        </li>
        <br />
        <li>
          <button>
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2015.zip"
              >2015</a
            >
          </button>
        </li>
        <br />
        <li>
          <button>
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2014.zip"
              >2014</a
            >
          </button>
        </li>
        <br />
        <li>
          <button>
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2013.zip"
              >2013</a
            >
          </button>
        </li>
        <br />
        <li>
          <button>
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2012.zip"
              >2012</a
            >
          </button>
        </li>
        <br />
        <li>
          <button>
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2011.zip"
              >2011</a
            >
          </button>
        </li>
        <br />
        <li>
          <button>
            <a
              href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/atas/2010.zip"
              >2010</a
            >
          </button>
          </li>
      </ul>
    </div>
          </span>

          <button class="lermais"   onclick="myFunction()" id="myBtn">Read more</button>

       
       

      <script>
        function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");
        
          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
          }
        }
        </script>


   
  </body>
</html>
