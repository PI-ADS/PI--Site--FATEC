<!DOCTYPE html>
<html lang="pt-br">
<?php

    include("../config/banco.php");

    $sql_code ="SELECT v.RazaoSocial, v.DESCRICAO, v.REQUISITO, v.observacoes
        FROM fatecid.TB_VAGAS v where NOW() between v.dt_abertura and v.DT_FECHAMENTO";
    $sql_query = $conn->query($sql_code) or die($conn->error);
    if($sql_query == false)
    {
        echo "<script>Alert('error')</script>";
        exit;
    }

  include_once ("header.php");

?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Controle de Vagas</title>
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
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Importando o jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Importando o js do bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
	<body>
	<br>
		<center>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastro" > Cadastrar Vagas</button>           
        </center>	
		<!-- Validação -->
		<?php 
			echo '<table class="table table-striped table-hover">';
				echo '<thead>';
                    echo '<tr>';
                        echo'<td><p>Empresa:</p></td>';
                        echo'<td><p>Descrição:</p></td>';
                        echo'<td><p>Requisito:</p></td>';
                        echo '<td><p>Observação:</p></td>';
                    echo '</tr>';
				echo '</thead>';
				echo '<tbody>'; 
						while($dado =mysqli_fetch_array($sql_query)){ ?>
				   <tr>
						<td><?php echo $dado["RazaoSocial"];?></td>
						<td><?php echo $dado["DESCRICAO"];?></td>
						<td><?php echo $dado["REQUISITO"];?></td>
						<td><?php echo $dado["observacoes"];?></td>
						</tr><br>
						<?php } 
                echo '</tbody>'; ?>
                

		</table>

        <footer>
            <!-- <?php
            include("../footer.php");
            ?> -->
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
            <form id="register" method="POST" action="cadastro-vaga.php">
            <div class="form-group">
                <label for="cnpj">CNPJ</label>
                <input class="form-control" name="txtcnpj" id="txtcnpj" type="text" onblur="consultacnpj()">
                <script>
                    function consultacnpj() {
                        alert("Eu sou um alert!");
                        document.getElementById("txtcnpj").style.background = "red";
//                        alert("document.getElementById('#txtcnpj').value")
//                //     <?php
//                         // Coloque aqui sua Chave de API
//                         $curl = curl_init();
//                         // Coloque aqui sua Chave de API
//                         $api_key = "84174a90-013e-4f55-bdb5-919fc9d2adf9-2fb0eb41-81a6-4dbf-be42-3cbc77c1302b";
                        
//                         // Executa a chamada para API CNPJá!
//                         $cnpja_url="https://api.cnpja.com/office/";
//                         $cnpj = "document.getElementById('txtcnpj').value";
//                         curl_setopt_array($curl, array(
//                             CURLOPT_URL => $cnpja_url . preg_replace('/\D/', '',$cnpj),
//                             CURLOPT_RETURNTRANSFER => true,
//                             CURLOPT_ENCODING => "",
//                             CURLOPT_MAXREDIRS => 10,
//                             CURLOPT_TIMEOUT => 0,
//                             CURLOPT_FOLLOWLOCATION => true,
//                             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//                             CURLOPT_CUSTOMREQUEST => "GET",
//                             CURLOPT_HTTPHEADER => array(
//                             "Authorization: " . $api_key
//                             ),
//                         )); 
                            
//                         $response = curl_exec($curl);
                        
//                         curl_close($curl);
                            
//                         // Decodifica o JSON de retorno
//                         $company = json_decode($response);
//                         $razao = $company->alias;
//                         // echo "alert('O CNPJ informado está inválido" . $razao . "')"; 
                                                
// //                         if($company->code == 400){
// //                             echo "alert('O CNPJ informado está inválido" . $company->message. "')"; 
//                     ?>
                    }
                </script>
                </div>
                <!-- <div class="form-group ">
                    <label for="razaoSocial">Razão Social</label>
                    <input readoly class="form-control" type="text" value="<?php print($razao);?>" name="razaoSocial" id="razaoSocial"> 
                </div> -->
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
                    <button type="submit" id="cadastrar" name="cadastrar" class="btn btn-primary">Abrir Chamado</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
	</body>
</html>