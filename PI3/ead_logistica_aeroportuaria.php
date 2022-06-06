<?php
session_start(); 
include("config/banco.php");
if(isset($_SESSION["login"]) == 1){   
include("headerloged.php");
}else{  
include("header.php");
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


<div class="container pt-3">
<div class="card mb-3">
<h3 class="card-title">Logistica Aeroportuária</h3>
  <img class="card-img-top" src="image/cursos/bglogistica.jpg" height="300" width="180" alt="Imagem de capa do card">
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
					<a href="https://www.vestibularfatec.com.br/home/" class="btn btn-danger">Inscreva-se</a>
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

<!-- INICIO FOOTER -->

<?php

include("footer.php");

?>