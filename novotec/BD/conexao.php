<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão</title>
</head>

<body>
    <?php
        //Definindo as variáveis de acesso ao banco
        define('BD_SERVER', 'sitefatec.c1rngiken4f2.us-east-1.rds.amazonaws.com');
        define('BD_USER', 'admin');
        define('BD_PASSWORD', 'AdminWeb_359');
        define('BD_NAME', 'fatecid');

        //definindo a conexão
        $conn = mysqli_connect(BD_SERVER, BD_USER, BD_PASSWORD, BD_NAME);

        //verificando a conexão
        if ($conn === false) {
            die("ERROR: Não é possivel conectar. " . mysqli_connect_error());
        }
    ?>

</body>
</html>