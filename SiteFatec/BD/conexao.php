<?php 

# Substitua abaixo os dados, de acordo com o banco criado
$user = "admin"; 
$password = "AdminWeb_359"; 

# O hostname deve ser sempre localhost 
$hostname = "sitefatec.c1rngiken4f2.us-east-1.rds.amazonaws.com"; 

//definindo a conexão
$conn = mysqli_connect($hostname, $user, $password);

//verificando a conexão
if($conn===false){
	die("ERROR: Não foi possivel conectar. " . mysqli_connect_error());
}

// else{
// 	echo("Conexão ok");
// }

?>