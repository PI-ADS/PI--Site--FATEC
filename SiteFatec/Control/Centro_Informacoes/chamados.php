<?php
session_start();
include("../../BD/conexao.php");
if (isset($_SESSION["login"]) == 1) {
  include("../../View/Header_Footer/headerloged.php");
} else {
  include("../../View/Header_Footer/header.php");
}

$sql_code = "SELECT s.ID_SUPORTE, s.DESCRICAO, s.OBSERVACOES, 
        DATE_FORMAT(STR_TO_DATE(s.DT_ABERTURA, '%Y-%m-%d'), '%d/%m/%Y') as DT_ABERTURA,
        case 
        when s.STATUS = 'A' then 'Aberto'
        when s.STATUS = 'F' then 'Fechado'
        when s.STATUS = 'P' then 'Pendente'
        else 'Adult'
        end as STATUS
    FROM fatecid.TB_SUPORTE s";
$sql_query = $conn->query($sql_code) or die($conn->error);
if ($sql_query == false) {
    echo "error";
    exit;
}

?>

<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Controle de chamados</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../../View/Assets/Styles/Outros.css">
    <!-- <link rel="stylesheet" type="text/css" href="../scss/custom.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Importando o js do bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <br>
    <center>
        <form class="form-inline" method="GET" action="../../Model/pesquisar.php">
            <label>Pesquisar por Status</label>
            <select class="form-select w-50" id="status" name="status">
                <option selected value='A'>Aberto</option>
                <option value="F">Fechado</option>
                <option value="P">Em análise</option>
            </select>
            <br>
            <button type="submit" name="enviar" class="btn btn-info"><i class="fa-solid fa-magnifying-glass"></i>Buscar</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastro1"> Abrir novo chamado</button>
        </form>
    </center>
    <!-- Validação -->
    <div class="conteudo">
        <?php
        echo '<table class="table table-striped table-hover">';
        echo '<thead>';
        echo '<tr>';
        echo '<td><p>Código:</p></td>';
        echo '<td><p>Descrição:</p></td>';
        echo '<td><p>Status:</p></td>';
        echo '<td><p>Data de Abertura:</p></td>';
        echo '<td><p>Observação:</p></td>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($dado = mysqli_fetch_array($sql_query)) { ?>
            <tr>
                <td><?php echo $dado["ID_SUPORTE"]; ?></td>
                <td><?php echo $dado["DESCRICAO"]; ?></td>
                <td><?php echo $dado["STATUS"]; ?></td>
                <td><?php echo $dado["DT_ABERTURA"]; ?></td>
                <td><?php echo $dado["OBSERVACOES"]; ?></td>
            </tr><br>

        <?php }
        echo '</tbody>'; ?>


        </table>
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

    <!-- Modal -->
    <div class="modal fade" id="modalCadastro1" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCadastroLabel">Abertura de Chamado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="register" method="POST" action="../../Model/gravaChamado.php">
                        <div class="form-group">
                            <label for="validationTooltip01">RA *</label>
                            <input type="text" class="form-control" name="ra" id="ra" placeholder="Digite aqui seu RA" required>
                        </div>
                        <div class="form-group">
                            <label for="emaillabel">E-mail *</label>
                            <input type="email" class="form-control" name="emailSoli" id="emailSoli" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="local">Local</label>
                            <select class="form-control" id="local" name="local">
                                <option>Laborátório 1</option>
                                <option>Laborátório 2</option>
                                <option>Laborátório 3</option>
                                <option>Laborátório 4</option>
                                <option>Laborátório 5</option>
                                <option>Laborátório 6</option>
                                <option>Laborátório 7</option>
                                <option>Laborátório 8</option>
                                <option>Laborátório 9</option>
                                <option>Laborátório 10</option>
                                <option>Laborátório 11</option>
                                <option>Laborátório 12</option>
                                <option>Sala 1</option>
                                <option>Sala 2</option>
                                <option>Sala 3</option>
                                <option>Sala 4</option>
                                <option>Sala 5</option>
                                <option>Sala 6</option>
                                <option>Sala 7</option>
                                <option>Sala 8</option>
                                <option>Sala 9</option>
                                <option>Sala 10</option>
                                <option>Sala 11</option>
                                <option>Sala 12</option>
                                <option>Sala 13</option>
                                <option>Sala 14</option>
                                <option>Sala 15</option>
                                <option>Auditório Principal</option>
                                <option>Mini Auditório 01</option>
                                <option>Mini Auditório 02</option>
                                <option>Biblioteca</option>
                                <option>Outros</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="descricaolabel">Tipo de Problema *</label>
                            <select class="custom-select my-1 mr-sm-2" id="descricao" name="descricao">
                                <option selected>Escolha um problema...</option>
                                <option value="1">Data Show</option>
                                <option value="2">Áudio</option>
                                <option value="3">Computadores</option>
                                <option value="4">E-mail Institucional</option>
                                <option value="5">Outros</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="obstxt">Observação</label>
                            <textarea class="form-control" id="observacoes" name="observacoes" rows="3"></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" id="cadastrar" name="cadastrar" class="btn btn-primary">Abrir Chamado</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_GET['enviar'])) {

        $status = $_GET['status'];
        $sql_code = "SELECT s.ID_SUPORTE, s.DESCRICAO, s.OBSERVACOES, 
                                    DATE_FORMAT(STR_TO_DATE(s.DT_ABERTURA, '%Y-%m-%d'), '%d/%m/%Y') as DT_ABERTURA,
                                    case 
                                    when s.STATUS = 'A' then 'Aberto'
                                    when s.STATUS = 'F' then 'Fechado'
                                    when s.STATUS = 'P' then 'Pendente'
                                    else ''
                                    end as STATUS
                                FROM fatecid.TB_SUPORTE s where s.STATUS like '%$status%'";
        $sql_query = $conn->query($sql_code) or die($conn->error);
        if ($sql_query == false) {
            echo "error";
            exit;
        } else {

            echo "<meta http-equiv='refresh' content='0, url=./chamados.php'>";
        }
    }
    ?>
</body>

</html>