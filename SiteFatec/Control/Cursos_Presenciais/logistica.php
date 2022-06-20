<?php
session_start();
include("../../BD/conexao.php");
if (isset($_SESSION["login"]) == 1 || isset($_SESSION["loginFunc"]) == 1) {
    include("../../View/Header_Footer/headerloged.php");
} else {
    include("../../View/Header_Footer/header.php");
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
    <link rel="stylesheet" href="../../View/Assets/Styles/allpresenciais.css">
    <!-- <link rel="stylesheet" href="../global.css"> -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="titulo-curso">
        <p>Logistica Aeroportuária</p>
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
                <span>Modelos de Ensino: <strong>Presencial Matinal</strong></span>
            </div>
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/4nSqFi0V29w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="side-right">
            <h2>Informações:</h2>
            <div class="sub-info">
                <i class="fa-solid fa-circle-check"></i>
                <span>Coordenador do curso: <strong>Sandro Roberto da Silva Calabrezi</strong></span>
            </div>
            <div class="sub-info">
                <i class="fa-solid fa-user-graduate"></i>
                <span>Matriz Curricular: <a href="./Detalhes-Curso/Matriz-Logistica/index.php">VEJA AQUI</a></span>
            </div>
            <div class="sub-info">
                <i class="fa-solid fa-user-graduate"></i>
                <span>Horário de monitoria: <a href="http://www.fatecid.com.br/site/wp-content/uploads/2022/03/Horario-Monitoria-2022-1.pdf" target="_blanck">VEJA AQUI</a></span>
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

        <!-- <a href="http://www.fatecid.com.br/site/wp-content/uploads/2022/02/Log-HORARIO-1o-2022.pdf" class="grade" target="_blank">
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
                    Podendo atuar em várias áreas, o profissional de logística necessita estar interessado, não apenas no setor de logística, mas em todo funcionamento de uma empresa.

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
                    <ul style="text-align: center;">
                        <i class="fa-solid fa-check"></i>Aeroportos
                        <br>
                        <i class="fa-solid fa-check"></i>Setor Industrial
                        <br>
                        <i class="fa-solid fa-check"></i>Operadores Logísticos
                        <br>
                        <i class="fa-solid fa-check"></i>Redes de Atacado e Varejo
                        <br>
                        <i class="fa-solid fa-check"></i>Setor de Serviços
                    </ul>
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
                    <h5 class="modal-title" id="exampleModalLabel">Perfil do profissional de logística</h5>
                </div>
                <div class="modal-body">
                    O Analista de Logística Aeroportuária está apto em Planejar, Implementar e Controlar Processos Logísticos com foco em redução de custos, ganho de produtividade e melhoria nos níveis de serviços. <br />
                    Bons conhecimentos de matemática, estatística, informática avançada e processos logísticos os quais são fundamentais para a análise de projetos e implantação de melhorias operacionais, envolvendo layout, custos, equipamentos, automação, produtividade e qualidade. Bom relacionamento interpessoal, iniciativa, criatividade, capacidade de abstração, análise e síntese também são necessários para compor o perfil desse profissional.
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