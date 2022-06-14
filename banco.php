<?php 
# Substitua abaixo os dados, de acordo com o banco criado
$usuario = "admin"; 
$senha = "AdminWeb_359"; 
$dbname = 'fatecid';
# O hostname deve ser sempre localhost 
$hostname = "sitefatec.c1rngiken4f2.us-east-1.rds.amazonaws.com"; 
//definindo a conexão
$conexao = mysqli_connect($hostname, $usuario, $senha, $dbname);


//verificando a conexão
if($conexao===false){
	die("ERROR: Não foi possivel conectar. " . mysqli_connect_error());
}
//else
//{
//	echo "Funfou!";
//}

?>