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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestão Empresarial EAD</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="../global.css"> -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<div class="container pt-3">
  <div class="card mb-3">
    <h3 class="card-title">Logistica Aeroportuária</h3>
    <img class="card-img-top" src="../../View/img/bglogistica.jpg" height="300" width="180" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Sobre o Curso:</h5>
      <p class="card-text">Podendo atuar em várias áreas, o profissional de logística necessita estar interessado, não apenas no setor de logística, mas em todo funcionamento de uma empresa. Nota-se que as empresas estão buscando cada vez mais os profissionais da área de logística com o objetivo de melhorar seus processos, maximizar sua produtividade e minimizar as perdas, já que o setor de logística pode representar até 30% do custo total da empresa.</p>
    </div>
    <div class="card-body">
      <h5 class="card-title">Áreas de atuação do egresso:</h5>
      <p class="card-text">Aeroportos Setor Industrial Operadores Logísticos Redes de Atacado e Varejo Setor de Serviços</p>
    </div>
    <div class="card-body">
      <h5 class="card-title">Perfil Profissional do Tecnólogo:</h5>
      <p class="card-text">O Analista de Logística Aeroportuária está apto em Planejar, Implementar e Controlar Processos Logísticos com foco em redução de custos, ganho de produtividade e melhoria nos níveis de serviços.
        <br>
        <br>
        Atividades do Analista em Logística Aeroportuária:
        <br>
        <br>
        Planeja os fluxos operacionais Identifica melhorias nos processos operacionais e de layout Analisa a viabilidade e projeta os ganhos de produtividade Implementa processos junto com a equipe operacional Revisa projetos com foco em produtividade e redução de custos Desenvolve e participa de testes de novas ferramentas tecnológicas Controla as operações e avalia resultados.
        <br>
        Bons conhecimentos de matemática, estatística, informática avançada e processos logísticos os quais são fundamentais para a análise de projetos e implantação de melhorias operacionais, envolvendo layout, custos, equipamentos, automação, produtividade e qualidade. Bom relacionamento interpessoal, iniciativa, criatividade, capacidade de abstração, análise e síntese também são necessários para compor o perfil desse profissional.
    </div>
  </div>
</div>

<div class="container pt-3">
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">Mais Informações:</h5>
      <div class="card-body">

        <h5 class="card-title cardTitleLateral">Duração do Curso</h5>
        <p class="card-text">3 Anos – 6 semestres</p>
        </hr class="tex-muted mt-0">

        <h5 class="card-title cardTitleLateral">Tipo de Formação</h5>
        <p class="card-text">Tecnólogo</p>
        </hr class="tex-muted mt-0">

        <h5 class="card-title cardTitleLateral">Vagas</h5>
        <p class="card-text">40 vagas por Semestre</p>
        </hr class="tex-muted mt-0">

        <h5 class="card-title cardTitleLateral">Modalidades</h5>
        <p class="card-text">Presencial Manhã</p>
        </hr class="tex-muted mt-0">

        <h5 class="card-title cardTitleLateral">Horário do curso</h5>
        <p class="card-text">
          Das 7h40 às 13h00</br>

        </p>
        </hr class="tex-muted mt-0">

        <h5 class="card-title cardTitleLateral">Coordenador</h5>
        <p class="card-text">Prof. Sandro Roberto da Silva Calabrezi</p>

        <hr class="tex-muted mt-0">
        <a href="https://www.vestibularfatec.com.br/home/" class="btn btn-danger" target="_blank">Inscreva-se</a>
      </div>
    </div>
  </div>
  <!--
<div class="row justify-content-center align-items-center">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
-->
</div>
<!-- INICIO FOOTER -->

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