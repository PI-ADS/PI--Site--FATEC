<!-- @format -->
<?php
  /*session_start(); 
  include("../config/banco.php");
  if(isset($_SESSION["login"]) == 1){   
    include("../headerloged.php");
  }else{  
    include("header.php");
  }*/
  include_once ("header.php")
?>
 <link rel="stylesheet" href="style.css">
   

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="conteudo">
  <h1>Central de TI</h1>
  <div id="container">
  <div class="col-md-12"></div>

    <div class="card" style="width: 33.33%;
        display: inline-block;
        font-size: 3vw;
        text-align: center;
        padding: 0vw 0vw 0vw 0vw;
        min-width:20vw;">
        <img src="..\image\room.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Normas dos Laboratórios</p>
            <a href="#" class="btn btn-primary">Acessar</a>
        </div>
    </div>
    <div class="card" style="width: 33.33%;
        display: inline-block;
        margin-right: 0vw;
        font-size: 3vw;
        text-align: center;
        padding: 0vw 0vw 0vw 0vw;
        min-width:20vw;
        float:right;">
        <img src="..\image\documentos.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Documentos Relacionados</p>
            <a href="#" class="btn btn-primary">Acessar</a>
        </div>
    </div>
    <div class="card" style="width: 33.33%;
        display: inline-block;
        margin-right: 0vw;
        font-size: 3vw;
        text-align: center;
        padding: 0vw 0vw 0vw 0vw;
        min-width:20vw;
        float:right;">
        <img src="..\image\chamado.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Abertura de Chamados</p>
            <a href="chamados.php" class="btn btn-primary">Acessar</a>
        </div>
    </div>
  </div>
</div>

<footer>

<?php
  include("../footer.php");
?>
</footer>