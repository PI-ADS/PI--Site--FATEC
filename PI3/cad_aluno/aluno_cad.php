<?php
include_once '../config/banco.php';
?>
<!DOCTYPE HTML>
<html>
	<head><link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
		<title>Cadastrar Colaboradores</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
        
        <script>
		
			
		
	
		
		$(document).ready(function(){
		
			
			 
			
			 
			
		
		});
		
		

		</script>
        
	</head>

	<body>
    
    <header>
    </header>
    <div id="conteudo">
   
    
	<h1>Cadastro de Alunos</h1>
    
    <form method="post" action="aluno_cad_rec.php">
    
    	
        <table >
		<tr>
            	<td>
                	RA Aluno:
                </td>
                <td>
                	<input type="text" maxlength="50" size="50" name="txtRA" />
                </td>
            </tr> 
        	<tr>
            	<td>
                	Nome Aluno:
                </td>
                <td>
                	<input type="text" maxlength="50" size="50" name="txtAluno" />
                </td>
            </tr> 
            <tr>
            	<td>
                	CPF: 
                </td>
                <td>
                	<input type="text" maxlength="50" size="50" name="txtCPF" />
                </td>
            </tr> 
            <tr>
            	<td>
                	E-mail: 
                </td>
                <td>
                	<input type="text" maxlength="50" size="50" name="txtEmail" />
                </td>
            </tr>   
			<tr>
            	<td>
                	ID Curso: 
                </td>
                <td>
                	<input type="number" maxlength="50" size="50" name="txtCurso" />
                </td>
            </tr>
            <tr>
            	<td>
                	Senha:
                </td>
                <td>
                	<input type="password" maxlength="15" size="15" name="txtSenha" />
                </td>
            </tr>     
          
 	
        </table>
        
        <br/>
        <hr>
        <br/>
        
		<input class="btn btn-primary" type="submit" value="Cadastrar" name="btCadastrar">
    	
       
    
    </form>
    
    
	</div>
    
  
    
	</body>
</html>