<?php
	session_start();
	
	include("config/banco.php");
	
	if(isset($_SESSION["login"])){
		
		if($_SESSION["login"] == 1){
			echo $_SESSION["RA"];
			header("location:verificalogin.php");
			
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
        <img src="image/logo2.jpg" height="60" width="350">
		</div>
	</div>
	<div class="row text-center">
	    <div class="col-md-6 offset-md-3">
	        <div class="card">
	            <div class="card-body">
	                <div class="login-title">
	                    <h4>Area do Aluno</h4>
	                </div>
	                <div class="login-form mt-4">
                    <form id="login" method="post" action="verificalogin.php">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <input id="RA" name="txtra" placeholder="RA" class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-12">
                              <input type="password" class="form-control" name="txtsenha" id="senha" placeholder="Senha">
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
                    <a class="btn btn-primary btn-dark" href="index.php" role="button">Voltar</a>
	            </div>
	        </div>
	    </div>
	</div>

    <?php
		
		
		
        @$login = $_POST["txtra"];
        @$senha = $_POST["txtsenha"];
        
        
        
        $_SESSION["usuario"] = $login;
        
        $_SESSION["senha"] = $senha;
        
        if(isset($_POST["btLogar"])){
            
            
        
            if($login == "" || $senha == ""){
                echo "Preencha todos os campos!";
            }else{
                $sql = "select * from alunos";
            
                $query = mysqli_query($conexao, $sql);
            
                while($sql = mysqli_fetch_array($query)){
                    if($sql["RA"] == $login && $sql["senha"] == $senha){
                        $_SESSION["RA"] = $sql["RA"];
                        


                        echo '<font face=verdana size=3 color=red><center> <br><br>
                         <img src="img/loading.gif"></font></center>
                         <META HTTP-EQUIV="refresh" CONTENT="0; URL=verificalogin.php">';
                        

                    }else{
                        
                        $msg = "Usuário ou senha incorretos!"; 
                        
                        echo $msg;
                    }
                }
                
                
            }
            
            
        }
    
    ?>

</div>