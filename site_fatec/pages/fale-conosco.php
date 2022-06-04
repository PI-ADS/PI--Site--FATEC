<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <title>Document</title>
</head>

<body>

  <header>
    <?php
    include("../config/banco.php");

/*
    session_start(); 
    if(isset($_SESSION["login"]) == 1){   
      include("../headerloged.php");
    }else{  
      include("../header.php");
    }*/

    include_once("header.php");
    ?>
  </header>
  <h1 class="h1">Fale Conosco</h1>
  <div class="container">

    <div class="row">
      <form class="col" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
          <label for="exampleFormControlInput1">Nome Completo</label>
          <input nome="name" id="name" class="form-control" type="text">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Setor</label>
          <select class="form-control" name="destino" id="destino">
            <option selected="selected" disabled="disabled">Selecione o Cargo</option>
            <?php
            $result = "SELECT * FROM fatecid.TB_SETOR";
            $setores = mysqli_query($conn, $result);
            while ($row_setores = mysqli_fetch_assoc($setores)) { ?>
              <option value="<?php echo $row_setores['EMAIL']; ?>"><?php echo $row_setores['NOME']; ?>
              </option>
            <?php }
            ?>
          </select>
        </div>

        <div class="form-group">
          <label for="lblmessage">Mensagem</label>
          <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>

        <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
      </form>

      <div class="map col">

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14681.225026018907!2d-47.2079921!3d-23.0858822!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe4e10e5dd84bd49e!2sFaculdade%20de%20Tecnologia%20de%20Indaiatuba!5e0!3m2!1spt-BR!2sbr!4v1652287114377!5m2!1spt-BR!2sbr" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

    </div>
  </div>
  <?php
  //Criando Variaveis//
  if (isset($_POST['enviar'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $destino = $_POST['destino'];
    $mensagem .= "<p>O usuário: " . $name . ", enviou uma mensagem. <br>";
    $mensagem .= "Mensagem: " . $message . "</p>";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    //Definir o servidor de e-mail
    // ini_set('SMTP', 'h16.servidorhh.com');
    // ini_set('smtp_port', '465');
    // ini_set($destino);
    mail($email, "Email de fale conosco", $mensagem, $headers);
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