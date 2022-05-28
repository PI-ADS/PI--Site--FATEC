<?php
	session_start();
	
	include("config/banco.php");
	
	if(isset($_SESSION["login"])){
		
		if($_SESSION["login"] == 1){
			echo $_SESSION["RA"];
			header("location:index.php");
			
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
                <?php
            
            
            
            @$login = $_POST["txtra"];
            @$senha = $_POST["txtsenha"];
            
            
            
            $_SESSION["usuario"] = $login;
            
            $_SESSION["senha"] = $senha;
            
            if(isset($_POST["btLogar"])){
                
                
            
                if($login == "" || $senha == ""){
                    echo "PREENCHA TODOS OS CAMPOS!";
                    echo '<META HTTP-EQUIV="refresh" CONTENT="2; URL=login.php">';
                }else{
                    $sql = "select * from alunos";
                
                    $query = mysqli_query($conexao, $sql);
                
                    while($sql = mysqli_fetch_array($query)){
                        if($sql["RA"] == $login && $sql["senha"] == $senha){
                            
                            $_SESSION["RA"] = $sql["RA"];
                            
                            
                            $_SESSION["login"] = 1;
                            
                            echo '<font face=verdana size=3 color=red><center>
                             <img src="image/carregando.gif"></font></center>
                             <META HTTP-EQUIV="refresh" CONTENT="2; URL=verificalogin.php">';
                            

                        }
                            if($sql["RA"] == $login && $sql["senha"] != $senha ){
                            $msg = "Usuário ou senha incorretos! Tente Novamente!";
                            
                            echo $msg;
                            echo '<META HTTP-EQUIV="refresh" CONTENT="2; URL=login.php">';
                            
                        }else {
                            
                            echo '<META HTTP-EQUIV="refresh" CONTENT="1; URL=login.php">';
                        }

                        
                    }
                    
                    
                }
                
                
            }
        
        ?>   
	            </div>
	        </div>
	    </div>
	</div>
            
