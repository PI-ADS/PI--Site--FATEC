<?php
	session_start();
	include("banco.php");
?>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
    .login-img img {width:10%; max-height:20%;}
</style>

<div class="container">
	<div class="row text-center mb-4">
		<div class="col-md-12">
            <br>
        <img src="assets/logo2.jpg" height="60" width="350">
		</div>
	</div>
	<div class="row text-center">
	    <div class="col-md-6 offset-md-3">
	        <div class="card">
	            <div class="card-body">
                    <?php
                        @$cpf = $_POST["txtcpf"];
                        @$nome = $_POST["txtnome"];
                        @$email = $_POST["txtemail"];
                        @$senha = $_POST["txtsenha"];    

/*-------------------------------------------Botão Cadastrar -------------------------------------*/
                        if(isset($_POST["btCadastrar"]))
                        {
                            if($cpf == "" || $nome == "" || $senha == "")
                            {
                                echo "Preencha todos os campos obrigatórios do cadastro!";
                                echo '<META HTTP-EQUIV="refresh" CONTENT="2; URL=cadastroFuncionarioFuncionario.php">';
                            }
                            else
                            {
                                $sql = "INSERT INTO tb_funcionarios (CPF, NOME, EMAIL, SENHA) 
                                        VALUES ('$cpf', '$nome', '$email', '$senha')";

                                $stmt = mysqli_prepare($conexao,$sql);
                                if($stmt)
                                {
                                    mysqli_stmt_execute($stmt);
                                    mysqli_close($conexao);
                                    echo "Funcionário cadastrado com sucesso!";
                                    echo '<META HTTP-EQUIV="refresh" CONTENT="2; URL=cadastroFuncionario.php">';
                                }
                                else
                                {
                                    echo "Funcionário não pode ser cadastrado!";
                                    echo '<META HTTP-EQUIV="refresh" CONTENT="2; URL=cadastroFuncionario.php">';
                                }                  
                            }        
                        }       
                    ?> 
	            </div>
	        </div>
	    </div>
	</div>
            
