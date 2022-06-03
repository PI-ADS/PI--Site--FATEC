<?php

include "../conexao.php";

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

/* session_start(); 
    include("../config/banco.php");
    if(isset($_SESSION["login"]) == 1){   
      include("../headerloged.php");
    }else{  
      include("../header.php");
    }*/

include_once("header.php");

?>


<html>
<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Controle de chamados</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css.map">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.css.map">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css.map">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="../scss/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Importando o jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Importando o js do bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <br><br>
    <center>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastro"> Abrir novo chamado</button>
    </center>
    <!-- Validação -->
    <?php
    echo '<table class="table">';
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

    <!-- Modal -->
    <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastroLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCadastroLabel">Abertura de Chamado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="register" method="POST" action="gravaChamado.php">
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

    <footer>

        <?php
        include("../footer.php");
        ?>
    </footer>
</body>

</html>