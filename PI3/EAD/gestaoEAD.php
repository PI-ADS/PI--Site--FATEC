<?php
session_start();
include_once 'config/banco.php';
if (isset($_SESSION["login"]) == 1) {
  include_once '../headerloged.php';
} else {
  include_once '../header.php';
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestão Empresarial EAD</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./global.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

</head>

<body>

  <div class="titulo-curso">
    <p>Gestão Empresarial EAD</p>
  </div>
  <hr>


  <div class="side-and-iframe">
    <div class="side-left">
      <h2>Sobre o Curso:</h2>
      <div class="sub-info">
        <i class="fa-regular fa-clock"></i>
        <span>Duração:
          <strong>3 anos</strong>
        </span>
      </div>
      <div class="sub-info">
        <i class="fa-solid fa-circle-check"></i>
        <span>Certificação Conferida: <strong>Tecnólogo</strong></span>
      </div>
      <div class="sub-info">
        <i class="fa-solid fa-user-graduate"></i>
        <span>Modelos de Ensino: <strong>À distância</strong></span>
      </div>
    </div>
    <iframe width="560" height="315" src="https://www.youtube.com/watch?v=dl7IGvpSatw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="side-right">
      <h2>Informações:</h2>
      <div class="sub-info">
        <i class="fa-solid fa-circle-check"></i>
        <span>Coordenador do curso: <strong>Valeria Scomparim</strong></span>
      </div>
      <div class="sub-info">
        <i class="fa-solid fa-user-graduate"></i>
        <span>Matriz Curricular: <a href="Files/matriz-curricular.pdf">VEJA AQUI</a></span>

      </div>
    </div>
  </div>

  <hr>
  <div class="list-of-buttons">
    <button type="button" data-toggle="modal" data-target="#exampleModal" id="radius-button">
      <i class="fa-solid fa-graduation-cap"></i>
      <br>
      Detalhes
    </button>

    <button type="button" data-toggle="modal" data-target="#exampleModal2" id="radius-button">
      <i class="fa-solid fa-briefcase"></i>
      <br>
      Mercado
    </button>

    <button type="button" data-toggle="modal" data-target="#exampleModal3" id="radius-button">
      <i class="fa-solid fa-user"></i>
      <br>
      Perfil
    </button>

    <a href="https://drive.google.com/file/d/10QLL4V0-008ynMwSc8ATPvY4CShfcW84/view" class="grade" target="_blank">
      <button type="button" id="radius-button">
        <i class="fa-regular fa-calendar-check"></i>
        <br>
        Cronograma atividades
      </button>
    </a>

    <a href="https://www.vestibularfatec.com.br/home/" target="_blank">
      <button type="button" id="radius-button">
        <i class="fa-solid fa-file-signature"></i>
        <br>
        Inscrição
      </button>
    </a>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detalhes do curso</h5>
        </div>
        <div class="modal-body">
        <p>O curso de <strong>Gestão Empresarial</strong> forma profissionais capacitados em direito tributários, logística, empreendedorismo, gestão ambiental, comportamento organizacional e em utilização de ferramentas de marketing.<br><br>Além disso, o aluno aprende a elaborar planejamentos estratégicos, definindo objetivos e traçando estratégias para alcança-los de maneira eficiente.
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
          <h5 class="modal-title" id="exampleModalLabel">Área de atuação</h5>
        </div>
        <div class="modal-body">
        Como <strong>Análista em Gestão Empresarial</strong>, você pode trabalhar em:<br>
            &nbsp &nbsp - Empresas publicas<br>
            &nbsp &nbsp - Empresas privadas, como: <strong>John Deere</strong> e <strong>Toyota</strong><br>
            &nbsp &nbsp - <br>
            &nbsp &nbsp - Ou o melhor de todos, <strong>ABRIR O SEU PRÓPRIO NEGÓCIO</strong><br>
            <br>E você pode atuar como:<br>
            &nbsp &nbsp - Gestor da empresa<br>
            &nbsp &nbsp - Consultor de gestão/economia<br>
            &nbsp &nbsp - Gestor de projetos<br>
            &nbsp &nbsp - Freelancer<br>
          </li>
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
          <h5 class="modal-title" id="exampleModalLabel">Perfil do profissional de gestão empresarial</h5>
        </div>
        <div class="modal-body">
          O Tecnólogo em Gestão Empresarial (Processos Gerenciais) elabora e
          implementa planos de negócios, utilizando métodos e técnicas de gestão na formação
          e organização empresarial especificamente nos processos de comercialização,
          suprimento, armazenamento, movimentação de materiais e no gerenciamento de
          recursos financeiros e humanos. A habilidade para lidar com pessoas, capacidade de
          comunicação, trabalho em equipe, liderança, negociação, busca de informações,
          tomada de decisão em contextos econômicos, políticos, culturais e sociais distintos,
          são requisitos importantes a esse profissional.
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
          <h5 class="modal-title" id="exampleModalLabel">Inscreva-se</h5>
        </div>
        <div class="modal-body">
          Inscreva-se <a href="https://www.vestibularfatec.com.br/home/">Aqui</a>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  <?php
  include_once '../footer.php';
  ?>
  <script src="https://kit.fontawesome.com/650f3fb109.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>