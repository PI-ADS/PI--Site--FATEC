<!DOCTYPE html>
<?php

session_start();
include("../../BD/conexao.php");
if (isset($_SESSION["login"]) == 1) {
    include("../../View/Header_Footer/headerloged.php");
} else {
    include("../../View/Header_Footer/header.php");
}

$sql_code = "SELECT v.RazaoSocial, v.DESCRICAO, v.REQUISITO, v.observacoes
        FROM fatecid.TB_VAGAS v where NOW() between v.dt_abertura and v.DT_FECHAMENTO";
$sql_query = $conn->query($sql_code) or die($conn->error);
if ($sql_query == false) {
    echo "<script>Alert('error')</script>";
    exit;
}

?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../View/Assets/Styles/Outros.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Controle de Vagas</title>
    <!-- Bootstrap CSS-->
    <!-- <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
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
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css.map"> -->
    <link rel="stylesheet" type="text/css" href="../scss/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Importando o jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Importando o js do bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <br>
    <center>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastro"> Cadastrar Vagas</button>
    </center>
    <!-- Validação -->
    <div class="conteudo">
        <?php
        echo '<table class="table table-striped table-hover">';
        echo '<thead>';
        echo '<tr>';
        echo '<td><p>Empresa:</p></td>';
        echo '<td><p>Descrição:</p></td>';
        echo '<td><p>Requisito:</p></td>';
        echo '<td><p>Observação:</p></td>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($dado = mysqli_fetch_array($sql_query)) { ?>
            <tr>
                <td><?php echo $dado["RazaoSocial"]; ?></td>
                <td><?php echo $dado["DESCRICAO"]; ?></td>
                <td><?php echo $dado["REQUISITO"]; ?></td>
                <td><?php echo $dado["observacoes"]; ?></td>
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
    <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastroLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCadastroLabel">Cadastrar Vagas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="register" method="POST" action="../../Model/cadastro-vaga.php">
                        <div class="form-group">
                            <label for="cnpj">CNPJ</label>
                            <label name="teste" id="teste">CNPJ</label>
                            <input class="form-control" name="txtcnpj" id="txtcnpj" type="text" onblur="consultacnpj()">
                            <script>
                                function consultacnpj() {
                                    const cnpjja = document.getElementById('txtcnpj').value;

                                    <?php
                                    // Coloque aqui sua Chave de API
                                    $curl = curl_init();
                                    // Coloque aqui sua Chave de API
                                    $api_key = "84174a90-013e-4f55-bdb5-919fc9d2adf9-2fb0eb41-81a6-4dbf-be42-3cbc77c1302b";
                                    // Executa a chamada para API CNPJá!
                                    $cnpja_url = "https://api.cnpja.com/office/";
                                    $cnpj = $_POST['txtcnpj'];



                                    curl_setopt_array($curl, array(
                                        CURLOPT_URL => $cnpja_url . preg_replace('/\D/', '', $cnpj),
                                        CURLOPT_RETURNTRANSFER => true,
                                        CURLOPT_ENCODING => "",
                                        CURLOPT_MAXREDIRS => 10,
                                        CURLOPT_TIMEOUT => 0,
                                        CURLOPT_FOLLOWLOCATION => true,
                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                        CURLOPT_CUSTOMREQUEST => "GET",
                                        CURLOPT_HTTPHEADER => array(
                                            "Authorization: " . $api_key
                                        ),
                                    ));

                                    $response = curl_exec($curl);

                                    curl_close($curl);

                                    // Decodifica o JSON de retorno
                                    $company = json_decode($response);
                                    $razao = $company->alias;
                                    //echo "alert('O CNPJ informado está inválido" . $razao . "')"; 
                                    ?>

                                }
                            </script>
                        </div>
                        <div class="form-group ">
                            <label for="razaoSocial">Razão Social</label>
                            <input readoly class="form-control" type="text" value="<?php print($razao); ?>" name="razaoSocial" id="razaoSocial">
                        </div>
                        <div class="form-group">
                            <label for="vaga">Titulo da Vaga</label>
                            <input class="form-control" type="text" name="descricao" id="descricao">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço de email</label>
                            <input type="email" class="form-control" id="emailContato" name="emailContato" aria-describedby="emailHelp" placeholder="Seu email">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Requisitos</label>
                            <textarea class="form-control" name="requisitos" id="requisitos" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descricão da Vaga</label>
                            <textarea class="form-control" id="sobre" name="sobre" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Outras Informacões</label>
                            <textarea class="form-control" id="observacoes" name="observacoes" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Data de Fechamento da Vaga</label>
                            <input type="date" class="form-control" id="dtFechamento" name="dtFechamento" rows="3"></input>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" id="cadastrar" name="cadastrar" class="btn btn-primary">Salvar Vaga</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>