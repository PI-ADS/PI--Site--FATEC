<?php 
# Substitua abaixo os dados, de acordo com o banco criado
$usuario = "root"; 
$senha = "usbw"; 
$dbname = 'fatec_id';
# O hostname deve ser sempre localhost 
$hostname = "localhost"; 
//definindo a conexão
$conexao = mysqli_connect($hostname, $usuario, $senha, $dbname);


//verificando a conexão
if($conexao===false){
	die("ERROR: Não foi possivel conectar. " . mysqli_connect_error());
}
?>