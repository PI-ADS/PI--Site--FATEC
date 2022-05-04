<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS-->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css.map">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css.map">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.css.map">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.min.css.map">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css.map">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css.map">
  <link rel="stylesheet" type="text/css" href="scss/custom.css">
  
</head>

<body>

  <?php
  include("header.html");
  ?>
  <!--Para sempre direcionar primeiro para a Página Index e caso não encontrar alguma página retornar o aviso-->
  <?php
  $pagina = filter_input(INPUT_GET, 'p');

  if (empty($pagina) || $pagina == 'index') {
    include_once 'pagina-inicial.php';
  } else {
    if (file_exists($pagina . '.php')) {
      include_once $pagina . '.php';
    } else { ?>
      <div class="alert danger" role="alert">
        <h1>Erro 401</h1>
        <p>Página não encontrada</p>
      </div><?php
          }
        }
            ?>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <?php
  include("footer.html");
  ?>
</body>

</html>