<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FATEC - ID loged</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="image/favicon.png">
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
            <a href="Home/index.php" class="navbar-brand">
                <img src="../assets/logo.png" height="55" alt="FatecID">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cursos</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="item-de-menu">
                                <a class="dropdown-item" href="#">Presenciais</a>
                                <a class="dropdown-item" href="EAD/gestaoEAD.php">EAD</a>
                                <a class="dropdown-item" href="#">Iniciação científica</a>
                                <a class="dropdown-item" href="#">Trabalho de graduação</a>
                                <a class="dropdown-item" href="#">Vestibular</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Comunicação</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Cursos e Processos Seletivos</a>
                                <a class="dropdown-item" href="#">Editais</a>
                                <a class="dropdown-item" href="#">Eventos</a>
                                <a class="dropdown-item" href="#">Fatec Acontece</a>
                                <a class="dropdown-item" href="#">Novotec</a>
                                <a class="dropdown-item" href="#">TV Digital</a>
                                <a class="dropdown-item" href="#">Revista Reverte</a>
                                <a class="dropdown-item" href="#">Revista TECSci</a>
                                <a class="dropdown-item" href="#">Curso Pré Vestibular</a>
                                <a class="dropdown-item" href="#">Vestibular</a>
                                <a class="dropdown-item" href="#">Portarias</a>
                                <a class="dropdown-item" href="#">S.A.P.</a>
                            </div>
                        </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Setores</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Biblioteca</a>
                            <a class="dropdown-item" href="#">Central de Informações</a>
                            <a class="dropdown-item" href="#">Congregação (ATAS)</a>
                            <a class="dropdown-item" href="#">Estágio Supervisionado</a>
                            <a class="dropdown-item" href="#">Secretaria Acadêmica</a>
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
                            <a class="dropdown-item" href="#">AACC</a>
                            <a class="dropdown-item" href="#">Calendário Acadêmico</a>
                            <a class="dropdown-item" href="#">CPS</a>
                            <a class="dropdown-item" href="#">email@fatec</a>
                            <a class="dropdown-item" href="#">Manual Veyon</a>
                            <a class="dropdown-item" href="#">Núcleos de Pesquisa</a>
                            <a class="dropdown-item" href="#">Programa de Monitoria de Disciplina e Iniciação Científica</a>
                            <a class="dropdown-item" href="#">Redefinição de Senha | E-mail Institucional</a>
                            <a class="dropdown-item" href="#">Trabalho de Graduação</a>
                            <a class="dropdown-item" href="#">Vagas</a>
                            <a class="dropdown-item" href="#">WebSai</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Institucional</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Admistração</a>
                            <a class="dropdown-item" href="#">Corpo Docente</a>
                            <a class="dropdown-item" href="manual_centro_paula_souza_gestao2019_atualizado.pdf">Manual de Identida Visual</a>
                            <a class="dropdown-item" href="#">Missão, Visão e Objetivo</a>
                            <a class="dropdown-item" href="#">PDI</a>
                            <a class="dropdown-item" href="#">Quem Somos</a>
                            <a class="dropdown-item" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/institucional/2017_39_deliberacao.pdf">Regime Disciplinar do Corpo Discente</a>
                            <a class="dropdown-item" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/secretaria/regimento-fatecs%202016.pdf">Regimento</a>
                            <a class="dropdown-item" href="#">WEBSAI</a>
                            <a class="dropdown-item" href="#">Guias de Comunicação Inclusiva</a>
                        </div>
                    </div>
                </div>
<!-------------------------------------------Caso seja aluno | login = 1 ------------------------------------->
                <?php
                if (isset($_SESSION["login"]) == 1) 
                {
                ?>
                    <div class="navbar-nav ms-auto">
                        <a class="nav-item nav-link">
                            <?php

                            $sql = "select * from TB_ALUNOS where RA = '" . $_SESSION["RA"] . "'";

                            $query = mysqli_query($conexao, $sql);

                            while ($sql = mysqli_fetch_array($query)) {

                                $_SESSION["RA"] = $sql["RA"];


                                echo "<a class='nav-link'> Bem-vindo, " . $sql["NOME"] . " <span class='sr-only'>(current)</span></a>";
                            }
                            ?>
                        </a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" color="red">Area do Aluno</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Elisiane</a>
                                <a class="dropdown-item" href="#">José William</a>
                                <a class="dropdown-item" href="#">Clauss</a>
                                <a class="dropdown-item" href="#">Simone</a>
                                <a class="dropdown-item" href="#">Berbardino</a>
                                <a class="dropdown-item" href="#">Professores</a>
                                <a class="dropdown-item" href="#">Fale com o Michel</a>
                            </div>
                        </div>
                        <a href="../logout.php" class="nav-item nav-link"><button type="button" class="btn btn-danger">SAIR</button></a>
                    </div>
                <?php
                }
                ?>

<!-------------------------------------------Caso seja funcionário | loginFunc = 1 ------------------------------------->
                <?php
                if (isset($_SESSION["loginFunc"]) == 1) 
                {   
                ?>
                    <div class="navbar-nav ms-auto">
                        <!--<a class="nav-item nav-link">
                            <?php

                            $sql = "select * from TB_FUNCIONARIOS where CPF = '" . $_SESSION["cpf"] . "'";

                            $query = mysqli_query($conexao, $sql);

                            while ($sql = mysqli_fetch_array($query)) {

                                $_SESSION["cpf"] = $sql["CPF"];


                                echo "<a class='nav-link'> Bem-vindo, " . $sql["NOME"] . " <span class='sr-only'>(current)</span></a>";
                            }
                            ?>
                        </a>-->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" color="red">Área do Funcionário</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../cadastroFuncionario.php">Cadastro de Funcionários</a>
                                <a class="dropdown-item" href="#">Professores</a>
                                <a class="dropdown-item" href="#">Fale com o Michel</a>
                            </div>
                        </div>
                        <a href="../logout.php" class="nav-item nav-link"><button type="button" class="btn btn-danger">SAIR</button></a>
                    </div> 
                <?php
                }
                ?>        
            </div>
        </div>
    </nav>
</div>