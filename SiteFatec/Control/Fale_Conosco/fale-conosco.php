<?php
session_start();
include("../../BD/conexao.php");
if (isset($_SESSION["login"]) == 1) {
  include("../../View/Header_Footer/headerloged.php");
} else {
  include("../../View/Header_Footer/header.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../View/Assets/Styles/Outros.css" />
  <title>Fale Conosco</title>
</head>

<body>
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
    // $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $destino = $_POST['destino'];
    // $mensagem .= "<p>O usuário: " . $name . ", enviou uma mensagem. <br>";
    $mensagem = "Nome do Contato: " . $nome;
    $mensagem = "E-mail do Contato: " . $email;
    $mensagem = "Mensagem: " . $message;

    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: Alice Alves <allytori01@gmail.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    //Definir o servidor de e-mail
    ini_set('SMTP', 'email-smtp.us-east-1.amazonaws.com');
    ini_set('smtp_port', '2587');
    ini_set('smtp_user', 'ses-smtp-user.20220614-205614,AKIAVS4CWPK4KFFCB46M,BMphtCO1fJagn6Fil/IVOB1Im5ctDQVazSeQTbj7YJp7');

    ini_set('From', 'allytori01@gmail.com');


    mail($destino, "Email de fale conosco", $mensagem, $headers);
  }
  ?>
  <br>


  <footer>
    <style type="text/css">
      titulo {
        color: #555555;
        font-family: 'Dosis', sans-serif;
        font-size: 15px;
        line-height: 28.8px;
        vertical-align: baseline;
        letter-spacing: normal;
        word-spacing: 0px;
        margin: 0px;
        padding: 0px;
      }

      p {
        color: #555555;
        font-family: 'Dosis', sans-serif;
        font-size: 15px;
        line-height: 28.8px;
        vertical-align: baseline;
        letter-spacing: normal;
        word-spacing: 0px;
        margin: 0px;
        padding: 0px;
      }

      .carousel-item {
        min-height: 280px;
      }
    </style>

    <!-- Barra Superior -->
    <div class="p-1" style="background-color: #B20000;"></div>
    <!-- Barra Superior -->

    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <div class="row">
        <div class="col-lg-5 text-left mr-5">
          <titulo><b>FACULDADE DE TECNOLOGIA DE INDAIATUBA</b></titulo>
          <br>
          <p><i class="fa fa-house mr-2"></i>Rua Dom Pedro I, 65 - Cidade Nova I | CEP 13334-100</p>
          <p><i class="fa fa-phone mr-2"></i>(19) 3885-1923 | (19) 99269-1700</p>
        </div>

        <div class="col-sm"></div>

        <div class="col-md-3 ml-5 text-right">
          <!-- Section: Social media -->
          <section class="mb-2">

            <!-- Facebook -->
            <a class="btn btn-outline-light btn-lg btn-floating m-1" style="background-color: #3b5998;" href="https://www.facebook.com/fatecdeindaiatuba/" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-lg btn-floating m-1" style="background-color: #ac2bac;" href="https://www.instagram.com/fatecindaiatuba/" role="button" target="_blank"><i class="fab fa-fw fa-instagram"></i></a>

            <!-- Youtube -->
            <a class="btn btn-outline-light btn-lg btn-floating m-1" style="background-color: #d42b14;" href="https://www.youtube.com/channel/UChZP4dkp2IFvLslxm3i_Qdw" role="button" target="_blank"><i class="fab fa-fw fa-youtube"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-lg btn-floating m-1" style="background-color: #0082ca;" href="https://www.linkedin.com/school/fatec-indaiatuba/" role="button" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>

            <!-- WhatsApp -->
            <a class="btn btn-outline-light btn-lg btn-floating m-1" style="background-color: #07af69;" href="https://api.whatsapp.com/send?phone=5519992691700" role="button" target="_blank"><i class="fab fa-fw fa-whatsapp"></i></a>

            <!-- Telegram -->
            <a class="btn btn-outline-light btn-lg btn-floating m-1" style="background-color: #658fdd;" href="https://t.me/joinchat/PQvKKEnsqVR4fxrdYbuAVg" role="button" target="_blank"><i class="fab fa-fw fa-telegram"></i></a>
          </section>
          <!-- Section: Social media -->
        </div>
      </div>

    </div>
    <!-- Grid container -->
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #686868;">
      © Copyright 4° Semestre de ADS
      <br>
    </div>
    <!-- Copyright -->
  </footer>

</body>

</html>