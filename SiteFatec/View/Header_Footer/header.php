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

<header>
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
                                <a class="dropdown-item" href="../../../../../SiteFatec/View/Novotec/mainNovotec.html" target="_black">Novotec</a>
                                <a class="dropdown-item" href="../../../../../SiteFatec/Control/Graduacao/tg-ptg.php">Trabalho de graduação</a>
                                <a class="dropdown-item" href="https://www.vestibularfatec.com.br/home/" target="_black">Vestibular</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Comunicação</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../../../../../SiteFatec/Control/Processo_Seletivo/cap-prof.php">Processos Seletivos</a>
                                <!-- <a class="dropdown-item" href="#">Editais</a> -->
                                <!-- <a class="dropdown-item" href="#">Eventos</a> -->
                                <a class="dropdown-item" href="https://www.facebook.com/fatecdeindaiatuba/photos/?tab=album&album_id=1133712650091018" target="_black">Fatec Acontece</a>
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
                                <a class="dropdown-item" href="https://siga.cps.sp.gov.br/aluno/login.aspx" target="_black">Aluno</a>
                                <a class="dropdown-item" href="https://siga.cps.sp.gov.br/fatec/login.aspx " target="_black">Professor</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Institucional</a>
                            <div class="dropdown-menu">
                                <!-- <a class="dropdown-item" href="#">Admistração</a> -->
                                <a class="dropdown-item" href="../../../../../SiteFatec/Control/Corpo_Docente/corpo-docente.php">Corpo Docente</a>
                                <!-- <a class="dropdown-item" href="../../../SiteFatec/View/Assets/Files/">Manual de Identida Visual</a> -->
                                <!-- <a class="dropdown-item" href="#">Missão, Visão e Objetivo</a> -->
                                <!-- <a class="dropdown-item" href="../../../SiteFatec/Control/PDI/pdi.php">PDI</a> -->
                                <a class="dropdown-item" href="../../../../../SiteFatec/Control/Quem_Somos/institucional.php">Quem Somos</a>
                                <a class="dropdown-item" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/institucional/2017_39_deliberacao.pdf" target="_black">Regime Disciplinar do Corpo Discente</a>
                                <a class="dropdown-item" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/secretaria/regimento-fatecs%202016.pdf" target="_black">Regimento</a>
                                <!-- <a class="dropdown-item" href="#">WEBSAI</a> -->
                                <!-- <a class="dropdown-item" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/institucional/comuicacao_inclusiva.pdf" target="_black">Guias de Comunicação Inclusiva</a> -->
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="../../../../../SiteFatec/Control/Fale_Conosco/fale-conosco.php" class="nav-link">Fale Conosco</a>
                        </div>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <!-- <a class="nav-item nav-link">Bem Vindo - Otavio</a> -->
                        <a href="../../../../../SiteFatec/Control/Login_Aluno/login.php" class="nav-item nav-link"><button type="button" class="btn btn-danger">Área do Aluno</button></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>