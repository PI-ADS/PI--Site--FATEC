<?php
	session_start();
	
	include("banco.php");
	
	if(isset($_SESSION["loginFunc"]))
    {	
		if($_SESSION["loginFunc"] == 1)
        {
			echo $_SESSION["cpf"];
			header("location:Home/index.php");		
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
                    <?php
                        @$loginFunc = $_POST["txtcpf"]; 
                        @$senha = $_POST["txtsenha"];    
                        
                        $_SESSION["CPF"] = $loginFunc;  
                        $_SESSION["SENHA"] = $senha;

/*-------------------------------------------Botão Logar -------------------------------------*/            
                        if(isset($_POST["btLogar"]))
                        {
                            if($loginFunc == "" || $senha == "")
                            {
                                echo "Preencha todos os campos obrigatórios!";
                                echo '<META HTTP-EQUIV="refresh" CONTENT="2; URL=loginFuncionario.php">';
                            }
                            else
                            {
                                $sql = "select * from tb_funcionarios";
                            
                                $query = mysqli_query($conexao, $sql);
                            
                                while($sql = mysqli_fetch_array($query))
                                {
                                    if($sql["cpf"] == $loginFunc && $sql["senha"] == $senha)
                                    {   
                                        $_SESSION["CPF"] = $sql["cpf"];
                                        $_SESSION["loginFunc"] = 1;
                                        
                                        echo '<font face=verdana size=3 color=red><center>
                                        <img src="assets/carregando.gif"></font></center>
                                        <META HTTP-EQUIV="refresh" CONTENT="2; URL=verificaloginFuncionario.php">';
                                    }
                                    if($sql["cpf"] == $loginFunc && $sql["senha"] != $senha )
                                    {
                                        $msg = "Usuário ou senha incorretos! Tente Novamente!";      
                                        echo $msg;
                                        echo '<META HTTP-EQUIV="refresh" CONTENT="2; URL=loginFuncionario.php">';    
                                    }
                                    else 
                                    {  
                                        echo '<META HTTP-EQUIV="refresh" CONTENT="1; URL=loginFuncionario.php">';
                                    }        
                                }                   
                            }               
                        }
                    ?> 
	            </div>
	        </div>
	    </div>
	</div>
            
