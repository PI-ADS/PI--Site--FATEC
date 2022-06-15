<!DOCTYPE html>
<html lang="pt-br">

<?php
/*
    session_start(); 
    include("../config/banco.php");
    if(isset($_SESSION["login"]) == 1){   
      include("../headerloged.php");
    }else{  
      include("../header.php");
    }*/

include_once("header.php");
?>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <title>Ouvidoria</title>
</head>

<body>

  <div class="container" style="width: 60% ;"> <br><br>
    <h1 class="h1">Ouvidoria</h1>
    <br>

    <div class="row">
      <form class="col" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
          <label for="exampleFormControlInput1">Nome Completo</label>
          <input class="form-control" nome="name" id="name" type="text">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email</label>
          <input type="email" class="form-control" nome="email" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Mensagem</label>
          <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>

        <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>
  <?php
  //Criando Variaveis//
  if (isset($_POST['enviar'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $email = $_POST['email'];
    $destino = $_POST['destino'];
    $mensagem = "Nome do Contato: " . $nome;
    $mensagem = "Mensagem: " . $message;

    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: Alice Alves <'. $email . '>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    //Definir o servidor de e-mail
    ini_set('SMTP', 'email-smtp.us-east-1.amazonaws.com');
    ini_set('smtp_port', '2587');
    ini_set('smtp_user', 'ses-smtp-user.20220614-205614,AKIAVS4CWPK4KFFCB46M,BMphtCO1fJagn6Fil/IVOB1Im5ctDQVazSeQTbj7YJp7');
    
    ini_set('From', $email);
    
    
    mail($destino, "Ouvidoria", $mensagem, $headers);
  }
  ?>
  <br>
  <footer>

    <?php
    include("../footer.php");
    ?>
  </footer>

</body>

</html>