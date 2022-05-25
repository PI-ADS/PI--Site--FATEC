<?php 

# Substitua abaixo os dados, de acordo com o banco criado
$user = "id18790275_admfatec"; 
$password = "AdminWeb_359"; 
$database = "id18790275_fatec_id"; 

# O hostname deve ser sempre localhost 
$hostname = "ns02.000webhost.com"; 

# Conecta com o servidor de banco de dados 
mysqli_connect( $hostname, $user, $password ) or die( ' Erro na conexão ' ); 

?>