<?php
	session_start();
	
	include("banco.php");
	
	if(isset($_SESSION["loginFunc"]))
    {		
		if($_SESSION["loginFunc"] == 1)
        {
			echo $_SESSION["cpf"];
			header("location:verificaloginFuncionario.php");	
		}		
	}	
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
	                <div class="login-title">
	                    <h4>Área do Funcionário</h4>
	                </div>
	                <div class="login-form mt-4">
                    <form id="cpf" method="post" action="verificaloginFuncionario.php">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <input id="cpf" name="txtcpf" placeholder="CPF" class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-12">
                              <input id="senha" name="txtsenha" placeholder="Senha" class="form-control" type="password">
                            </div>
                          </div>
                         <div class="form-row">
                    </div>                        
                        
                        <div class="form-row">
                            <button type="submit" name="btLogar" class="btn btn-danger btn-block">Entrar</button>
                        </div>
                    </form>
	                </div>   
	                <div class="logi-forgot text-right mt-2">
	                    <a href="#">Esqueci minha senha </a>
	                </div>                   
                    <a class="btn btn-primary btn-dark" href="login.php" role="button">Voltar</a>                    
	            </div>
	        </div>
	    </div>
	</div>
</div>