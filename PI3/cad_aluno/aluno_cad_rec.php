<?php
include '../config/banco.php';
?>

<!DOCTYPE HTML>
<html>
	<head><link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
		<title>Aluno</title>
	</head>

	<body>
    
<?php

if ($result = mysqli_query($conexao, "SELECT DATABASE()")) {
	$row = mysqli_fetch_row($result);
	echo "Default database is " . $row[0];
	mysqli_free_result($result);
  }
	
 ?>

    <?php
		
		 $aluno = $_POST["txtAluno"];
		 $cpf = $_POST["txtCPF"];
		 $ra = $_POST["txtRA"];
		 $email = $_POST["txtEmail"];
		 $Senha = $_POST["txtSenha"];
		 $idcurso = $_POST["txtCurso"];
		 
		 
		 

		 
		 try{
		 
			 
			 $sql_val = "select * from TB_ALUNOS where CPF = '".$cpf."'";
			 
			 $query_val = mysqli_query($conexao, $sql_val);
			 
			 $busca = mysqli_num_rows($query_val);
			 
			 if($busca != 0){
			 	
				echo "<h1>Aluno já cadastrado, <a href='aluno_cad.php'>tente novamente...</a></h1>";
				
			 }else{
			 
			
			 
			 
			 		$sql = "insert into TB_ALUNOS values ('$ra', '$cpf', '$aluno', '$email', '$Senha', '$idcurso')";
					
		 			$query = mysqli_query($conexao, $sql);
			
				
			
	?>
   
    
    <div id="conteudo">
	
    	<h1>O Aluno <?php echo $aluno ?> foi cadastrado com sucesso </h1>
        
        <h3>O que deseja fazer agora?</h3>
        
         <br><hr><br>
        
        <table class="tbprincipal">
        	<tr>
            	<td><a href="/PI3/index.php"><img src="img/home.png"></a></td>
                <td><a href="/PI3/index.php">Página Principal</a></td>
            </tr>
            <tr>
            	<td><a href="col_cad.php"><img src="img/cadastrar_0.png"></a></td>
                <td><a href="col_cad.php">Cadastrar outro Aluno</a></td>
            </tr>
            
        </table>
        
       
       <hr color="#EEE9E9">
       
       
        <?php		
		
			 }
			
		 }catch(Exception $erro){
			 echo "Erro: ".$erro;
		 }
		
		
	?>
       
    </div>
    
	</body>
</html>