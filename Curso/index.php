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
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
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

    <div class="main-content">

        <div class="containerButtons">
            <a href="../Detalhes-Curso/logistica.php">
                <button class="cursoButton">
                    Logística Aeroportuária
                </button>
            </a>
            <a href="../Detalhes-Curso/gestao.php">
                <button class="cursoButton">
                    Gestão de Serviços
                </button>
            </a>
            <a href="../Detalhes-Curso/redes.php">
                <button class="cursoButton">
                    Redes de Computadores
                </button>
            </a>
        </div>
        <div class="containerButtons2">
            <a href="../Detalhes-Curso/ads.php">
                <button class="cursoButton">
                    Análise e Desenvolvimento de Sistemas
                </button>
            </a>
            <a href="../Detalhes-Curso/ge.php">
                <button class="cursoButton">
                    Gestão Empresarial
                </button>
            </a>
            <a href="../Detalhes-Curso/comex.php">
                <button class="cursoButton">
                    Comércio Exterior
                </button>
            </a>
        </div>

    </div>
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
    <script src="https://kit.fontawesome.com/650f3fb109.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</body>

</html>