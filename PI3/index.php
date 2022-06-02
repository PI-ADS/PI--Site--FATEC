<?php
session_start();
include("config/banco.php");
if (isset($_SESSION["login"]) == 1) {
    include("headerloged.php");
} else {
    include("header.php");
}
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../global.css">
<link rel="stylesheet" href="./styles.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- INICIO INDEX -->
<!-- Carousel -->

<div class="container-lg my-3">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>

        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/banner-site1.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="image/banner-site2.jpg" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="image/banner-site3.jpg" class="d-block w-100" alt="Slide 3">
            </div>
        </div>

        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<div class="m-4">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <!-- Card with default left text alignment -->
            <div class="card text-center">
                <div class="card-body">
                    <img src="image/servicosacademicos.jpg" height="110" alt="CoolBrand">
                </div>
            </div>
        </div>
        <div class="col">
            <!-- Card with center text alignment -->
            <div class="card text-center">
                <div class="card-body">
                    <img src="image/emailinstitucional.jpg" height="110" alt="CoolBrand">
                </div>
            </div>
        </div>
        <div class="col">
            <!-- Card with center text alignment -->
            <div class="card text-center">
                <div class="card-body">
                    <img src="image/vagas.jpg" height="110" alt="CoolBrand">
                </div>
            </div>
        </div>
        <div class="col">
            <!-- Card with right text alignment -->
            <div class="card text-center">
                <div class="card-body">
                    <img src="image/aberturachamado.jpg" height="110" alt="CoolBrand">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center p-3" style="background-color: #FFF;">
    <img src="image/logo1.jpg" height="50" alt="CoolBrand">
    <br>
    <br>
</div>
</body>


<?php

include("footer.php");

?>