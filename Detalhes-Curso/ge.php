<?php
session_start();
include("../banco.php");
if (isset($_SESSION["login"]) == 1 || isset($_SESSION["loginFunc"]) == 1)
{
    include("../headerloged.php");
}
else
{
    include("../header.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão Empresarial</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="conteudo-total">
        <!--<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
            <a class="navbar-brand text-white" href="../Home/index.html"><img src="../assets/logo.png" alt="" class="fatec-logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="../Home/index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Institucional
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="drop-itens">
                            <a class="dropdown-item text-white" href="">Aluno</a>
                            <a class="dropdown-item text-white" href="">Docentes</a>
                            <a class="dropdown-item text-white" href="">Centro Paula Souza</a>
                            <a class="dropdown-item text-white" href="">Contato</a>
                            <a class="dropdown-item text-white" href="">Endereço</a>
                            <a class="dropdown-item text-white" href="">Boletim FatecNews</a>
                            <a class="dropdown-item text-white" href="">Regimento Fatec</a>
                            <a class="dropdown-item text-white" href="">Plano de desenvolvimento pessoal - PDI</a>
                            <a class="dropdown-item text-white" href="">Sobre</a>
                            <a class="dropdown-item text-white" href="">Eventos</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Biblioteca</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cursos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="drop-itens">
                            <a class="dropdown-item text-white" href="../Curso/index.html">Presenciais</a>
                            <a class="dropdown-item text-white" href="">EAD</a>
                            <a class="dropdown-item text-white" href="">Iniciação científica</a>
                            <a class="dropdown-item text-white" href="">Trabalho de graduação</a>
                            <a class="dropdown-item text-white" href="">Vestibular</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="../Aluno/aluno.html">Área do aluno</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Concursos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="drop-itens">
                            <a class="dropdown-item text-white" href="">Processo seletivo simplificado para docente</a>
                            <a class="dropdown-item text-white" href="">Concurso público para docente</a>
                            <a class="dropdown-item text-white" href="">Concurso público para auxiliar docente</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <input id="myInput" type="text" placeholder="Pesquisar...">
                    </li>
                </ul>
            </div>
        </nav>-->

        <div class="titulo-curso">
            <p>Gestão Empresarial</p>
        </div>
        <hr>


        <div class="side-and-iframe">
            <div class="side-left">
                <h2>Sobre o Curso:</h2>
                <div class="sub-info">
                    <i class="fa-regular fa-clock"></i>
                    <span>
                        Duração:
                        <strong>3 anos</strong>
                    </span>
                </div>
                <div class="sub-info">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Certificação Conferida: <strong>Tecnólogo</strong></span>
                </div>
                <div class="sub-info">
                    <i class="fa-solid fa-user-graduate"></i>
                    <span>Modelos de Ensino: <strong>Presencial Verpertino e Noturno</strong></span>
                </div>
            </div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dl7IGvpSatw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      <div class="side-right">
                <h2>Informações:</h2>
                <div class="sub-info">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Coordenador do curso: <strong>Benedito Carlos Florêncio Silva</strong></span>
                </div>
                <div class="sub-info">
                    <i class="fa-solid fa-user-graduate"></i>
                    <span>Matriz Curricular: <a href="../Matriz-GE/index.html">VEJA AQUI</a></span>
                </div>
                <div class="sub-info">
                    <i class="fa-solid fa-user-graduate"></i>
                    <span>Manual do PIC: <a href="../Detalhes-Curso/Files-Curso/Manual-PIC-Gestao-Empresarial-Fev_2022_1_V1.pptx" download>VEJA AQUI</a></span>
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

            <!-- <a href="../Detalhes-Curso/Files-Curso/GE-N-HORARIO-1o-2022.pdf" class="grade" target="_blank">
              <button type="button" id="radius-button">
                <i class="fa-regular fa-calendar-check"></i>
                <br>
                Grade
              </button>
            </a> -->

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
                        <p>
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
                        </p>
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
                        <h5 class="modal-title" id="exampleModalLabel">Perfil do profissional de Gestão Empresarial</h5>
                    </div>
                    <div class="modal-body">
                        O Perfil do profissional de Gestão Empresarial bate com alguns dos Soft e Hard Skills mencionados abaixo:<br>
                        &nbsp &nbsp - Responsabilidade<br>
                        &nbsp &nbsp - Criatividade<br>
                        &nbsp &nbsp - Proatividade<br>
                        &nbsp &nbsp - Agilidade<br>
                        &nbsp &nbsp - Criatividade<br>
                        &nbsp &nbsp - Liderança<br>
                        &nbsp &nbsp - Boa comunicação<br>
                        &nbsp &nbsp - Pensamento analítico<br>
                        &nbsp &nbsp - Senso crítico<br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Grade horária do curso</h5>
              </div>
              <div class="modal-body">
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
        -->
        <div class="footer">
            <p>© 2022 Fatec Indaiatuba. SP | Telefone: (19) 3809-1234 </p>
            <div>
                <a href="">
                    <i class="fa-brands fa-facebook"></i>Facebook
                </a>
                <a href="">
                    <i class="fa-brands fa-instagram"></i>Instagram
                </a>
                <a href="">
                    <i class="fa-solid fa-envelope"></i>Email
                </a>
            </div>
            <p> Powered by Alunos da Fatec Indaiatuba</p>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/650f3fb109.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>