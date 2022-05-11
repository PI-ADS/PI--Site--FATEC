<?php 
	session_start();
	include "../conexao.php";
	$consulta = "SELECT * FROM dual";
	// $conx = $con->query($consulta) or die($con->error);
		// if(!isset($_SESSION['usuario']) and !isset($_SESSION['senha'])){
		// 	header("Location: ../logout.php");
		// 	exit;
		// }
?>

<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css.map">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css.map">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.css.map">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.min.css.map">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css.map">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css.map">
  <link rel="stylesheet" type="text/css" href="../scss/custom.css">

</head>
<body>
  <h1>Chamados</h1>
  <form id="register" method="POST" action="../Back-End/gravaChamado.php">
    <div class="form-group">
      <label for="validationTooltip01">RA</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Digite aqui seu RA" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">E-mail</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Local</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Laborátório 1</option>
        <option>Laborátório 2</option>
        <option>Laborátório 3</option>
        <option>Laborátório 4</option>
        <option>Laborátório 5</option>
        <option>Laborátório 6</option>
        <option>Laborátório 7</option>
        <option>Laborátório 8</option>
        <option>Laborátório 9</option>
        <option>Laborátório 10</option>
        <option>Laborátório 11</option>
        <option>Laborátório 12</option>
        <option>Sala 1</option>
        <option>Sala 2</option>
        <option>Sala 3</option>
        <option>Sala 4</option>
        <option>Sala 5</option>
        <option>Sala 6</option>
        <option>Sala 7</option>
        <option>Sala 8</option>
        <option>Sala 9</option>
        <option>Sala 10</option>
        <option>Sala 11</option>
        <option>Sala 12</option>
        <option>Sala 13</option>
        <option>Sala 14</option>
        <option>Sala 15</option>
        <option>Auditório Principal</option>
        <option>Mini Auditório 01</option>
        <option>Mini Auditório 02</option>
        <option>Biblioteca</option>
        <option>Outros</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlFile1">Tipo de Problema</label>
      <select class="custom-select my-1 mr-sm-2" id="descricao" name="descricao">
        <option selected>Escolha um problema...</option>
        <option value="1">Data Show</option>
        <option value="2">Áudio</option>
        <option value="3">Computadores</option>
        <option value="4">E-mail Institucional</option>
        <option value="5">Outros</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlFile1">Anexos</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Observação</label>
      <textarea class="form-control" id="observacoes" name="observacoes" rows="3"></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Abrir Chamado</button>
  </form>
</body>
</html>