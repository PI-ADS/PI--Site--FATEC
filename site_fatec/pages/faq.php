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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>F.A.Q.</title>
</head>

<body>

  <div class="conteudo">
    <h1> F.A.Q</h1>

    <h5 class="faq">Como faço para solicitar documentos ou procedimentos na secretaria?</h5>
    <p>R: Alunos devidamente matriculados devem solicitar pelo SIGA.</p>
    <h5 class="faq">Quantas vezes posso trancar a matrícula?</h5>
    <p>R: 2 vezes, consecutivas ou não.</p>
    <h5 class="faq">Quantas vezes posso fazer transferência?</h5>
    <p>R: 1 vez, verificadas algumas condições.</p>
    <h5 class="faq">Em que casos a minha matrícula poderá ser cancelada?</h5>
    <p>R: Procure a secretaria ou acesse o Regulamento disponível no site, Seção IV, Artigo 36.</p>
    <h5 class="faq">Quando é válido o meu atestado médico?</h5>
    <p>A entrega do atestado é válida até o 5º dia útil após a data de emissão. Os atestados só serão válidos para 15 dias ou mais de afastamento.</p>
    <h5 class="faq">Posso fazer dois cursos ao mesmo tempo?</h5>
    <p>R: Cursos superiores públicos, não.</p>
    <h5 class="faq">Quanto tempo tenho para integralizar o meu curso?</h5>
    <p>R: 10 semestres.</p>
  </div>

  <footer>

    <?php
    include("../footer.php");
    ?>
  </footer>
</body>

</html>