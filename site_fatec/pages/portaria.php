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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css">
  <title>Portarias</title>
</head>

<body>
  <br>
  <h1>PORTARIAS</h1>

  <br><br>


  <div class="conteudo">
    <!-- input tag -->
    <div class="pesquisar">

      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-sm" style="margin-left:10% !important ;">🔍︎ Pesquisar:</span>
        </div>
        <input id="searchbar" onkeyup="search_animal()" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
      </div>


      <br><br>
      <!-- ordered list -->
      <ol id='list' style="font-size:1.2em">
        <li class="animals">Comitê de Pesquisa Científica e Tecnológica da Faculdade de Tecnologia
          de Indaiatuba<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/2022/04/35-2022-Portaria-designacao-do-comite-de-pesquisa-cientifica.pdf"> - Portaria 35/2022</a></li>
        <br>
        <li class="animals">Comissão de Vestibular<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/2022/02/Portaria-09-2022-Comissao-de-Vestibular-1.pdf"> - Portaria 09/2022</a></li>
        <br>
        <li>
          Designação de Servidores para Comissão Especial (EDITAL DE CIÊNCIA DE
          ELIMINAÇÃO DE DOCUMENTOS)<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/2022/02/01-2022-Portaria-Eliminacao-de-documentos.pdf"> - Portaria 01/2022</a>
        </li> <br>
        <li class="animals">
          Comissão de Retorno Local (atualizada em 07 de fevereiro de 2022)<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/2022/02/PORTARIA-FATEC-INDAIATUBA-No-33-2021-comissao-retorno-gradual-1.pdf"> - Portaria 33/2021</a>
        </li> <br>
        <li class="animals">
          Calendário Escolar 1º Semestre 2022<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/2021/12/PORTARIA-FATEC-INDAIATUBA-No66-2021-Calendario-Academico-1-2022.pdf"> - Portaria 63/2021</a>
        </li> <br>
        <li class="animals">
          Cancelamento de Matrícula – 1º|2021<a class="link-portaria" href="http://portaria%20interna%20no%2057/2021%20%E2%80%93%20Cancelamento%20de%20Matr%C3%ADcula"> - Portaria Interna Nº 57/2021</a>
        </li> <br>
        <li class="animals">
          Calendário Escolar 2º Semestre 2021<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/2021/06/24-2021-Portaria-com-calendario-2-2021.pdf"> - Portaria 24/2021</a>
        </li> <br>
        <li class="animals">
          Cancelamento de matrícula – 2º|2020<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/2021/06/18-Portaria-no-18-2021-Portaria-de-Cancelamento-2o-semestre-de-2020.pdf"> - Portaria 18/2021</a>
        </li> <br>
        <li class="animals">
          Alteração do Calendário Escolar da Faculdade de Tecnologia de
          Indaiatuba<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/2021/02/07-2021.pdf"> - Portaria 07/2021</a>
        </li> <br>
        <li class="animals">
          Cancelamento de matrícula – 2º|2020<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/2020/10/PORTARIA-FATEC-INDAIATUBA-N%C2%BA-46-Cancelamento-2%C2%BA-2020.pdf"> - Portaria 46/2020</a>
        </li> <br>
        <li class="animals">
          Cancelamento de matrícula – 1º|2020<a class="link-portaria" href="http://fatecid.com.br/site/wp-content/uploads/2020/10/PORTARIA-FATEC-INDAIATUBA-N%C2%BA-45-Cancelamento-1%C2%BA-2020.pdf"> - Portaria 45/2020</a>
        </li> <br>
        <li>
          Comissão Avaliadora responsável pelo processo de seleção de alunos
          para participarem da Certificação S.A.P.<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/PORTARIA_18_2020SAP.pdf"> - Portaria 18/2020</a>
        </li> <br>
        <li class="animals">
          Regulamento de Validação do Programa de Iniciação Científica e
          Tecnológica (PICT) em Trabalho de Graduação (TG) da Faculdade de
          Tecnologia de Indaiatuba<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/portaria17_20.pdf"> - Portaria 17/2020</a>
        </li> <br>
        <li class="animals">
          Comissão de Implantação de Curso GPI<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/portaria67_gpi.pdf"> - Portaria 67/2019</a>
        </li> <br>
        <li class="animals">
          Regulamenta as Atividades Acadêmico Científico e Culturais<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/2019/11/portaria_aac_65_2019.pdf"> - Portaria 65/2019</a>
        </li> <br>
        <li class="animals">
          Designação dos representantes da Comissão Própria de Avaliação da
          Fatec Indaiatuba.<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/29_2019.pdf"> - Portaria 29/2019</a>
        </li> <br>
        <li class="animals">
          Nomeação dos representantes da Comissão Própria de Avaliação da Fatec
          Indaiatuba.<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/28_2019.pdf"> - Portaria 28/2019</a>
        </li> <br>
        <li class="animals">
          Normas do Núcleo Docente Estruturante (NDE)<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/Portaria%2004_2019.pdf"> - Portaria 04/2019</a>
        </li> <br>
        <li class="animals">
          Regulamento do Comitê do Programa de Iniciação Científica e
          Tecnológica da Fatec de Indaiatuba<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/portaria%2049_2018.PDF"> - Portaria 49/2018</a>
        </li> <br>
        <li class="animals">
          Regulamenta o Estágio Curricular na Faculdade de Tecnologia de
          Indaiatuba.<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/Portaria%2094_2017_estagio.pdf"> - Portaria 94/2017</a>
        </li> <br>
        <li class="animals">
          Regulamenta o sistema de notas e avaliações das disciplinas dos Cursos
          da Faculdade de Tecnologia de Indaiatuba<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/portaria17_13052015.pdf"> - Portaria 17/2015</a>
        </li> <br>
        <li class="animals">
          Regulamenta os Trabalhos de Graduação na Faculdade de Tecnologia de
          Indaiatuba<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/Portaria_15_2016.pdf"> - Portaria 15/2016</a>
        </li> <br>
        <li class="animals">
          Regulamenta as atividades autônomas de Projeto.<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/portaria%2013_2009.pdf"> - Portaria 13/2009</a>
        </li> <br>
        <li class="animals">
          Regulamenta a transferência de alunos de estabelecimentos de ensino
          superior para a Faculdade de tecnologia de Indaiatuba.<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/portaria%2010_2016.pdf"> - Portaria 10/2016</a>
        </li> <br>
        <li class="animals">
          Regime de matrícula.<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/portaria31_2008.pdf"> - Portaria 31/2008</a>
        </li> <br>
        <li class="animals">
          Matricula de Aluno Ouvinte e Aluno Especial.<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/portaria32_2008.pdf"> - Portaria 32/2008 </a>
        </li> <br>
        <li class="animals">
          Regulamento do trancamento de matrícula.<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/portaria34_2008.pdf"> - Portaria 34/2008 </a>
        </li> <br>
        <li class="animals">
          Revoga a Portaria que regulamenta a Suspensão Matricula.<a class="link-portaria" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/portarias/portaria37_2008.pdf"> - Portaria 37/2008 </a>
        </li> <br>
      </ol>
    </div>
    <!-- linking javascript -->



    <h3>REGIMENTO FATEC</h3>
    <br>
    <button class="btn btn-secondary btn-tam" style="margin-left:35% ;"><a href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/secretaria/regimento-fatecs%202016.pdf"></a>Regimento</button>
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
  function search_animal() {
    let input = document.getElementById('searchbar').value
    input = input.toLowerCase();
    let x = document.getElementsByClassName('animals');

    for (i = 0; i < x.length; i++) {
      if (!x[i].innerHTML.toLowerCase().includes(input)) {
        x[i].style.display = "none";
      } else {
        x[i].style.display = "list-item";
      }
    }
  }
</script>