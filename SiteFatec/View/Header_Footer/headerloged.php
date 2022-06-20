<?php
// include "../../BD/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FATEC - ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

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
</head>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #666666">
        <div class="container-fluid">
            <a href="../../../../../SiteFatec/index.php" class="navbar-brand">
                <img src="../../../../../SiteFatec/View/img/logo.png" height="55" alt="FatecID">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cursos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="item-de-menu">
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Cursos_Presenciais/index.php">Presenciais</a>
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Cursos_EAD/gestaoEAD.php">Gestão Empresarial EAD</a>
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Cursos_EAD/ead_logistica_aeroportuaria.php">Logística Aeroportuária EAD</a>
                            <a class="dropdown-item" href="#">Iniciação científica</a>
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Graduacao/tg-ptg.php">Trabalho de graduação</a>
                            <a class="dropdown-item" href="https://www.vestibularfatec.com.br/home/" target="_black">Vestibular</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Comunicação</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Processi_Seletivo/cap-prof.php">Processos Seletivos</a>
                            <!-- <a class="dropdown-item" href="#">Editais</a> -->
                            <!-- <a class="dropdown-item" href="#">Eventos</a> -->
                            <a class="dropdown-item" href="https://www.facebook.com/fatecdeindaiatuba/photos/?tab=album&album_id=1133712650091018" target="_black">Fatec Acontece</a>
                            <a class="dropdown-item" href="../../../../../SiteFatec/View/Novotec/mainNovotec.html" target="_black">Novotec</a>
                            <a class="dropdown-item" href="https://www.youtube.com/channel/UChZP4dkp2IFvLslxm3i_Qdw" target="_black">TV Digital</a>
                            <a class="dropdown-item" href="http://www.fatecid.com.br/reverte/index.php/reverte/about" target="_black">Revista Reverte</a>
                            <a class="dropdown-item" href="http://fatecid.com.br/tecsci/index.php/capa" target="_black">Revista TECSci</a>
                            <!-- <a class="dropdown-item" href="#">Curso Pré Vestibular</a> -->
                            <!-- <a class="dropdown-item" href="#">Vestibular</a> -->
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Portaria/portaria.php">Portarias</a>
                            <!-- <a class="dropdown-item" href="#">S.A.P.</a> -->
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Setores</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Biblioteca/biblioteca.php">Biblioteca</a>
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Centro_Informacoes/centralTI.php">Central de Informática</a>
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Congregacao/congregacao.php">Congregação (ATAS)</a>
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Estagio/estagio.php">Estágio Supervisionado</a>
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Secretaria/faq.php">Secretaria Acadêmica</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SIGA</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://siga.cps.sp.gov.br/aluno/login.aspx">Aluno</a>
                            <a class="dropdown-item" href="https://siga.cps.sp.gov.br/fatec/login.aspx">Professor</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mais</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Area_Aluno/AACC.php">AACC</a>
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Area_Aluno/calendario.php">Calendário Acadêmico</a>
                            <!-- <a class="dropdown-item" href="#">CPS</a> -->
                            <a class="dropdown-item" href="http://www.fatec.sp.gov.br/view/Default.aspx">email@fatec</a>
                            <!-- <a class="dropdown-item" href="#">Manual Veyon</a> -->
                            <!-- <a class="dropdown-item" href="#">Núcleos de Pesquisa</a> -->
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Ouvidoria/ouvidoria.php">Ouvidoria</a>
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Monitoria/monitoria.php">Programa de Monitoria de Disciplina</a>
                            <a class="dropdown-item" href="http://www.fatecid.com.br/site/wp-content/uploads/2018/11/Redefini%C3%A7%C3%A3o-Senha.pdf" target="_black">Redefinição de Senha | E-mail Institucional</a>
                            <!-- <a class="dropdown-item" href="../../../../../SiteFatec/Control/">Trabalho de Graduação</a> -->
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Vagas/vagas.php">Vagas</a>
                            <!-- <a class="dropdown-item" href="#">WebSai</a> -->
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Institucional</a>
                        <div class="dropdown-menu">
                            <!-- <a class="dropdown-item" href="#">Admistração</a> -->
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Corpo_Docente/corpo-docente.php">Corpo Docente</a>
                            <!-- <a class="dropdown-item" href="../../../SiteFatec/View/Assets/Files/">Manual de Identida Visual</a> -->
                            <!-- <a class="dropdown-item" href="../../../SiteFatec/">Missão, Visão e Objetivo</a> -->
                            <!-- <a class="dropdown-item" href="../../../SiteFatec/Control/PDI/pdi.php">PDI</a> -->
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Quem_Somos/institucional.php">Quem Somos</a>
                            <a class="dropdown-item" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/institucional/2017_39_deliberacao.pdf">Regime Disciplinar do Corpo Discente</a>
                            <a class="dropdown-item" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/secretaria/regimento-fatecs%202016.pdf">Regimento</a>
                            <!-- <a class="dropdown-item" href="../../../SiteFatec/">WEBSAI</a> -->
                            <!-- <a class="dropdown-item" href="../../../SiteFatec/">Guias de Comunicação Inclusiva</a> -->
                        </div>
                    </div>
                    <div class="nav-item">
                        <a href="../../../../../SiteFatec/Control/Fale_Conosco/fale-conosco.php" class="nav-link">Fale Conosco</a>
                    </div>
                </div>
                <div class="navbar-nav ms-auto">
                    <a class="nav-item nav-link">
                        <?php

                        $sql = "select * from fatecid.TB_ALUNOS where RA = '" . $_SESSION["RA"] . "'";

                        $query = mysqli_query($conexao, $sql);

                        while ($sql = mysqli_fetch_array($query)) {

                            $_SESSION["RA"] = $sql["RA"];


                            echo "<a class='nav-link'> Bem-vindo, " . $sql["NOME"] . " <span class='sr-only'>(current)</span></a>";
                        }
                        ?>
                    </a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" color="red">Área do Aluno</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../../../../../SiteFatec/Control/Area_Aluno/aluno.php">Menu</a>
                            <a class="dropdown-item" href="#">2</a>
                            <a class="dropdown-item" href="#">3</a>
                            <a class="dropdown-item" href="#">4</a>
                            <a class="dropdown-item" href="#">5</a>
                            <a class="dropdown-item" href="#">6</a>
                            <a class="dropdown-item" href="#">7</a>
                        </div>
                    </div>
                    <a href="../../../../../SiteFatec/Control/Login_Aluno/logout.php" class="nav-item nav-link"><button type="button" class="btn btn-danger">SAIR</button></a>
                </div>
            </div>
        </div>
    </nav>
</div>