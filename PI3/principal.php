<?php
	session_start();
	
	include("config/banco.php");
	
	if(isset($_SESSION["login"])){
		
		if($_SESSION["login"] == 0){
			
			header("location:index.php");
			
		}
		
	}else{
		header("location:index.php");
	}
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FATEC - ID</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../global.css">
<link rel="stylesheet" href="./styles.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="image/favicon.png">
<style type="text/css">
      titulo
      {
        color: #555555;
        font-family: 'Dosis', sans-serif;
        font-size: 15px;
        line-height:28.8px;
        vertical-align: baseline;
        letter-spacing: normal;
        word-spacing: 0px;
        margin: 0px;
        padding: 0px;
      }
      p
      {
        color: #555555;
        font-family: 'Dosis', sans-serif;
        font-size: 15px;
        line-height:28.8px;
        vertical-align: baseline;
        letter-spacing: normal;
        word-spacing: 0px;
        margin: 0px;
        padding: 0px;
      }
	  .carousel-item{
    min-height: 280px;}
	
	
    </style>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #666666">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">
                <img src="image/logo.png" height="55" alt="CoolBrand">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cursos</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Análise e Desenvolvimento de Sistemas</a>
                            <a class="dropdown-item" href="#">Comércio Exterior</a>
                            <a class="dropdown-item" href="#">Gestão Empresarial</a>
                            <a class="dropdown-item" href="#">Gestão de Serviços</a>
                            <a class="dropdown-item" href="#">Logística Aeroportuária</a>
                            <a class="dropdown-item" href="#">Rede de Computadores</a>
                            <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="cursos\ead\laead.php">EAD - Logistica Aeroportuária</a>
                             <a class="dropdown-item" href="#">Curso 2 EAD</a>
                             <a class="dropdown-item" href="#">Curso 3 EAD</a>
                        </div>
                    </div>
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Comunicação</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Cursos e Processos Seletivos</a>
                            <a class="dropdown-item" href="#">Editais</a>
                            <a class="dropdown-item" href="#">Eventos</a>
                            <a class="dropdown-item" href="#">Fatec Acontece</a>
                            <a class="dropdown-item" href="#">Novotec</a>
                            <a class="dropdown-item" href="#">TV Digital</a>
                            <a class="dropdown-item" href="#">Revista Reverte</a>
                            <a class="dropdown-item" href="#">Revista TECSci</a>
                            <a class="dropdown-item" href="#">Curso Pré Vestibular</a>
                            <a class="dropdown-item" href="#">Vestibular</a>
                            <a class="dropdown-item" href="#">Portarias</a>
                            <a class="dropdown-item" href="#">S.A.P.</a>
                        </div>
                    </div>
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Setores</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Biblioteca</a>
                            <a class="dropdown-item" href="#">Central de Informações</a>
                            <a class="dropdown-item" href="#">Congregação (ATAS)</a>
                            <a class="dropdown-item" href="#">Estágio Supervisionado</a>
                            <a class="dropdown-item" href="#">Secretaria Acadêmica</a>
                        </div>
                    </div>
				    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SIGA</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="https://siga.cps.sp.gov.br/aluno/login.aspx">Aluno</a>
                           <a class="dropdown-item" href="https://siga.cps.sp.gov.br/fatec/login.aspx">Professor</a>
                        </div>
                    </div>
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mais</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="#">AACC</a>
                           <a class="dropdown-item" href="#">Calendário Acadêmico</a>
                           <a class="dropdown-item" href="#">CPS</a>
                           <a class="dropdown-item" href="#">email@fatec</a>
                           <a class="dropdown-item" href="#">Manual Veyon</a>
                           <a class="dropdown-item" href="#">Núcleos de Pesquisa</a>
                           <a class="dropdown-item" href="#">Programa de Monitoria de Disciplina e Iniciação Científica</a>
                           <a class="dropdown-item" href="#">Redefinição de Senha | E-mail Institucional</a>
                           <a class="dropdown-item" href="#">Trabalho de Graduação</a>
                           <a class="dropdown-item" href="#">Vagas</a>
                           <a class="dropdown-item" href="#">WebSai</a>
                        </div>
                    </div>
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Institucional</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="#">Admistração</a>
                           <a class="dropdown-item" href="#">Corpo Docente</a>
                           <a class="dropdown-item" href="manual_centro_paula_souza_gestao2019_atualizado.pdf">Manual de Identida Visual</a>
                           <a class="dropdown-item" href="#">Missão, Visão e Objetivo</a>
                           <a class="dropdown-item" href="#">PDI</a>
                           <a class="dropdown-item" href="#">Quem Somos</a>
                           <a class="dropdown-item" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/institucional/2017_39_deliberacao.pdf">Regime Disciplinar do Corpo Discente</a>
                           <a class="dropdown-item" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/secretaria/regimento-fatecs%202016.pdf">Regimento</a>
                           <a class="dropdown-item" href="#">WEBSAI</a>
                           <a class="dropdown-item" href="#">Guias de Comunicação Inclusiva</a>
                        </div>
                    </div>
                </div>
                <div class="navbar-nav ms-auto">
				<a class="nav-item nav-link">
<?php
				
            $sql = "select * from alunos where RA = '".$_SESSION["RA"]."'";
        
            $query = mysqli_query($conexao, $sql);
        
            while($sql = mysqli_fetch_array($query)){
            
                $_SESSION["RA"] = $sql["RA"];
               
             
               echo "<a class='nav-link'> Bem-vindo, ".$sql["Nome_Aluno"]." <span class='sr-only'>(current)</span></a>";
                
                

            }
 ?>               
                </a>
                <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" color="red">Area do Aluno</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="#">Elisiane</a>
                           <a class="dropdown-item" href="#">José William</a>
                           <a class="dropdown-item" href="#">Clauss</a>
                           <a class="dropdown-item" href="#">Simone</a>
                           <a class="dropdown-item" href="#">Berbardino</a>
                           <a class="dropdown-item" href="#">Professores</a>
                           <a class="dropdown-item" href="#">Fale com o Michel</a>
                        </div>
                    </div>
                    <a href="logout.php" class="nav-item nav-link"><button type="button" class="btn btn-danger">SAIR</button></a>
                </div>
            </div>
        </div>
    </nav>
</div>
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
          <a
            class="btn btn-outline-light btn-lg btn-floating m-1"
            style="background-color: #3b5998;"
            href="https://www.facebook.com/fatecdeindaiatuba/"
            target="_blank"
            ><i class="fab fa-fw fa-facebook-f"></i
          ></a>

          <!-- Instagram -->
          <a
            class="btn btn-outline-light btn-lg btn-floating m-1"
            style="background-color: #ac2bac;"
            href="https://www.instagram.com/fatecindaiatuba/"
            role="button"
            target="_blank"
            ><i class="fab fa-fw fa-instagram"></i
          ></a>

          <!-- Youtube -->
          <a
            class="btn btn-outline-light btn-lg btn-floating m-1"
            style="background-color: #d42b14;"
            href="https://www.youtube.com/channel/UChZP4dkp2IFvLslxm3i_Qdw"
            role="button"
            target="_blank"
            ><i class="fab fa-fw fa-youtube"></i
          ></a>

          <!-- Linkedin -->
          <a
            class="btn btn-outline-light btn-lg btn-floating m-1"
            style="background-color: #0082ca;"
            href="https://www.linkedin.com/school/fatec-indaiatuba/"
            role="button"
            target="_blank"
            ><i class="fab fa-fw fa-linkedin-in"></i
          ></a>

          <!-- WhatsApp -->
          <a
            class="btn btn-outline-light btn-lg btn-floating m-1"
            style="background-color: #07af69;"
            href="https://api.whatsapp.com/send?phone=5519992691700"
            role="button"
            target="_blank"
            ><i class="fab fa-fw fa-whatsapp"></i
          ></a>

          <!-- Telegram -->
          <a
            class="btn btn-outline-light btn-lg btn-floating m-1"
            style="background-color: #658fdd;"
            href="https://t.me/joinchat/PQvKKEnsqVR4fxrdYbuAVg"
            role="button"
            target="_blank"
            ><i class="fab fa-fw fa-telegram"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
    </div>
    
  </div>
  <!-- Grid container -->
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #686868;">
    © Copyright Rapazeada do 4° Semestre de ADS
	<br>
  </div>
  <!-- Copyright -->
</footer>
<script src="https://kit.fontawesome.com/650f3fb109.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>