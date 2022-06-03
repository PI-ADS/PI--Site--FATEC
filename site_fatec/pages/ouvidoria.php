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
      <form class="col">
        <div class="form-group">
          <label for="exampleFormControlInput1">Nome Completo</label>
          <input class="form-control" type="text">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Mensagem</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>
  <br>
  <footer>

    <?php
    include("../footer.php");
    ?>
  </footer>

</body>

</html>