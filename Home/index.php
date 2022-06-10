<?php
session_start();
include("../banco.php");
if (isset($_SESSION["login"]) == 1 || isset($_SESSION["loginFunc"]) == 1) 
{
    include("../headerloged.php");
} 
else 
{
    include("../header.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatec - Indaiatuba</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    <br>  
    <div class="content">
      <h1>Comece a planejar seu futuro sem boletos!</h1>
      <hr>
      <div class="text-and-link">
        <h2>Se inscreva para o vestibular da FATEC</h2>
        <button>Clique aqui</button>
      </div>

      <div class="text-and-link">
        <h2>Veja nossos cursos, e escolha seu futuro</h2>
        <button>Clique aqui</button>
      </div>
    </div>
  </div>

<!--
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="../assets/image1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../assets/image2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../assets/image3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
-->

    <div class="footer">
        <p>© 2022 Fatec Indaiatuba. SP | Telefone: (19) 3809-1234 </p>
        <div>
          <a href="">
            <i class="fa-brands fa-facebook"></i>Facebook
          </a>
          <a href="">
            <i class="fa-brands fa-instagram"></i>Instagram
          </a>
          <a href="">
            <i class="fa-solid fa-envelope"></i>Email
          </a>
        </div>
        <p> Powered by Alunos da Fatec Indaiatuba</p>
    </div>
    <script src="https://kit.fontawesome.com/650f3fb109.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>