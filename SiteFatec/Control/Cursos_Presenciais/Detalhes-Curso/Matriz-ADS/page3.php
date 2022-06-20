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
  <link rel="stylesheet" href="../global.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <div class="titulo-curso2">
    <p>Matriz Multidisciplinar</p>
  </div>

  <div class="buttons-modal">
    <div class="containerButtons">
      <button type="button" data-toggle="modal" data-target="#exampleModal" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Economia e Finanças
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal1" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Matemática Discreta
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal2" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Cálculo
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal11" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Contabilidade
      </button>
    </div>

    <div class="containerButtons2">
      <button type="button" data-toggle="modal" data-target="#exampleModal3" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Admnistração Geral
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal4" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Comunicação e Expressão
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal5" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Estatística Aplicada
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal10" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Sociedade e Tecnologia
      </button>
    </div>

    <div class="containerButtons3">
      <button type="button" data-toggle="modal" data-target="#exampleModal6" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Metodologia da Pesquisa Cientifico-Tecnologica
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal7" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Programação Linear e Aplicações
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal8" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Empreendedorismo
      </button>

      <button type="button" data-toggle="modal" data-target="#exampleModal9" id="radius-button" class="button-in-modal">
        <i class="fa-solid fa-user"></i>
        <br>
        Ética e responsabilidade profissional
      </button>
    </div>

    <nav class="nav-pag" aria-label="...">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="../../ads.php">Voltar</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Programação Web</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Programação Web</strong> você irá aprender como construir sistemas para WEB, utilizando tanto FrontEnd quanto backEnd.<br>
              &nbsp &nbsp Irá Utilizar a arquitetura cliente-servidor em
              sistemas web usando linguagem de script
              para servidor. <br>
              &nbsp &nbsp Conhecer a estrutura de programação da
              linguagem de script para servidor;<br>
              &nbsp &nbsp Integrar banco de dados SQL com a
              linguagem de script para servidor. <br><br><br>
              <strong>Professor(a):</strong> Simone Mendes <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K8729454H4" target="_blank">VEJA AQUI</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Programação em MicroInformática</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria <strong>Programação em MicroInformática</strong> você irá entender os principais conceitos envolvidos na microinformática:<br>
              &nbsp &nbsp - Hardware;<br>
              &nbsp &nbsp - Software;<br><br><br>
              <strong>Professor(a):</strong> Sérgio Donisete Clauss <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4734172E0" target="_blank">VEJA AQUI</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Engenharia de Software</h5>
          </div>
          <div class="modal-body">
            <p>Nas matéria de <strong>Engenharia de Software</strong> você irá aprender desde os primeiros passos para a criação de um software, utilizando: <br>
              &nbsp &nbsp - Análise de requisitos;<br>
              &nbsp &nbsp - Brainstorming, etc<br>
              Além disso, irá aprender e entender sobre documentação e manutenção de Softwares e criação de diversos diagramas. Tudo isso para <strong>garantir</strong> a qualidade do sistema.<br><br><br>
              Engenharia de Software I <strong>Professor(a):</strong> Sérgio Donisete Clauss <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4734172E0" target="_blank">VEJA AQUI</a><br><br>
              Engenharia de Software II <strong>Professor(a):</strong> Sérgio Furgeri <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4592184U7" target="_blank">VEJA AQUI</a><br><br>
              Engenharia de Software III <strong>Professor(a):</strong> Simone Mendes <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K8729454H4" target="_blank">VEJA AQUI</a><br><br>
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
            <h5 class="modal-title" id="exampleModalLabel">Inglês</h5>
          </div>
          <div class="modal-body">
            <p>Nas matéria de <strong>Inglês</strong> você irá aprender desde o present perfect e simple past. Irá também melhorar sua oralidade e gramática na lingua<br><br><br>
              <strong>Professor(a):</strong> Elenir Almeida Silva <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4761051A1" target="_blank">VEJA AQUI</a><br><br>
              <strong>Professor(a):</strong> Magali Barçante <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4763869U6" target="_blank">VEJA AQUI</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Banco de Dados</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Banco de Dados</strong> você irá foca na capacitação para projetar e gerenciar base de dados,<br> desenvolver métodos de segurança para as informações, administrar ambientes, controlar acessos, orientar a produção<br> de documentos e projetos, entre outras usabilidades de sistemas de dados e informação.<br><br><br>
              <strong>Professor(a):</strong> Maria das Graças Junqueira Machado Tomazela <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4453237U6" target="_blank">VEJA AQUI</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Interação Humano Computador</h5>
          </div>
          <div class="modal-body">
            <p>A matéria <strong>Interação Humano Computador</strong> (IHC) foca no lado humano da interação com sistemas computacionais para que nós tenhamos a melhor experiência possível ao nos "comunicar" com máquinas.<br>
              &nbsp &nbsp Dentro dessa matéria, você ira ter contato com <strong>UI/UX</strong> para parte de experiencia do usuário e interface do mesmo.<br><br><br>
              <strong>Professor(a):</strong> José William Pinto Gomes <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4479939A3" target="_blank">VEJA AQUI</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Estrutura de Dados</h5>
          </div>
          <div class="modal-body">
            <p>A matéria <strong>Estrutura de Dados</strong> tem o objetivo de facilitar que o aluno domine os conceitos básicos de programação utilizando o paradigma imperativo, além disso, facilitar que o aluno aprenda uma linguagem de programação, neste caso a linguagem C e C++, e aprenda ainda alguns algoritmos e estruturas de dados simples.<br>
              Exemplos de conceitos básicos de programação: <br>
              &nbsp &nbsp fluxo de controle, variável, constante, operador, expressão, comando/operador de atribuição, comando iterativo, apontador, referência, arranjo e indexação, cadeia de caracteres, funções, arquivo, entrada e saída, estrutura de dados simples.<br><br><br>
              <strong>Professor(a):</strong> Bernardino de Jesus Sanches <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4756973T8" target="_blank">VEJA AQUI</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Programação Mobile</h5>
          </div>
          <div class="modal-body">
            <p>Na matéria de <strong>Programação Mobile</strong> você irá aprender os conceitos introdutórios sobre a arquitetura do Android, o ambiente de desenvolvimento no Android Studio e recursos disponíveis na plataforma são apresentados.<br>
              &nbsp &nbsp O curso fornece uma base sólida sobre o projeto e implementação de aplicativos Android para dispositivos móveis.<br>
              &nbsp &nbsp Ao final da matéria, o aluno terá desenvolvido alguns aplicativos simples e terá conhecimento suficiente para criar pequenos projetos de novos aplicativos de sua própria autoria. <br><br><br>
              <strong>Professor(a):</strong> José William Pinto Gomes <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4479939A3" target="_blank">VEJA AQUI</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Gestão de Projetos</h5>
          </div>
          <div class="modal-body">
            <p>A matéria <strong>Gestão de Projetos</strong> irá te ajudar a entender como funcionam os projetos, como se lidera um projeto, e como você define datas de entregas dentro do mesmo. <br>
              Esta matéria é uma das mais importantes do curso, com ela você irá aprender a administrar suas obrigações e entregas.<br><br><br>
              <strong>Professor(a):</strong> Michel Moron Munhoz <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4458045Z8" target="_blank">VEJA AQUI</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Programação Orientada a Objetos</h5>
          </div>
          <div class="modal-body">
            <p>A matéria <strong>Programação Orientada a Objetos</strong> é uma das matérias mais importantes do curso, se é que não for a principal. Está matéria irá te introduzir na orientação de objetos dentro da programação.<br>
              Com ela, você irá conseguir manipular objetos, entender a criação de interfaces e heranças de atributos de outra classes.<br><br><br>
              <strong>Professor(a):</strong> Sérgio Furgeri <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4592184U7" target="_blank">VEJA AQUI</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Algoritmos e Lógica de Programação</h5>
          </div>
          <div class="modal-body">
            <p>A matéria <strong>Algoritmos e Lógica de Programação</strong> é uma das matérias fundamentais no curso, é responsável por ensinar aos estudantes o conceito de programação, por meio da elaboração de sequências de comando, se utilizando de estruturas condicionais com algoritmos para possibilitar o entendimento do funcionamento de computadores e softwares. <br><br><br>
              <strong>Professor(a):</strong> Wellington Roque <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4263970D3" target="_blank">VEJA AQUI</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Estágio Supervisionado</h5>
          </div>
          <div class="modal-body">
            <p>Para o <strong>Estágio Supervisionado</strong>, o aluno deverá realizar 240 horas de estágio, e poderá realizar a partir do 3* Semestre <br><br><br>
              <strong>Coordenador(a) de Estágios:</strong> Michel Moron Munhoz <Br>
              <strong>Lates:</strong><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4458045Z8" target="_blank">VEJA AQUI</a>
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