<!DOCTYPE html>
<html lang="pt-br">

<?php
session_start();
include("../../BD/conexao.php");
if (isset($_SESSION["login"]) == 1) {
  include("../../View/Header_Footer/headerloged.php");
} else {
  include("../../View/Header_Footer/header.php");
}
?>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../View/Assets/Styles/Outros.css">
  <title>Corpo Docente</title>
</head>

<body>

  <div class="conteudo">

    <br>
    <h1>CORPO DOCENTE</h1>
    <br>
    <h6>Na Fatec-ID contamos com 21 Professores Doutores, 47 Professores Mestres e 19 Professores Especialistas!</h6>

  </div>
  <br><br>

  <div class=" conteudo-prof">

    <h2>Doutores</h2>


    <div class="container" style="display: none;">
      <div class="row">

        <div class="col-sm">
          <p>Ailton Bueno Scorsoline</p> <button class="btn btn-info lates "><a href="http://lattes.cnpq.br/8502462718111666" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Aldo Nascimento Pontes</p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/0353109973808848" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Barbara Regina Lopes Costa </p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/6248798770533216" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Cesar Augusto Della Piazza</p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/6737381449216207" class="font-btn">Lates</a></button>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-sm">
          <p>Cláudio Roberto Leandro</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4518973T9" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Danilo Sergio Sorroce</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4772234Z1" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Elisiane Sartori Menezes Garcia</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4768989U0" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Ivanete Bellucci Pires de Almeida</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4776918A1" class="font-btn">Lates</a></button>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm">
          <p>Jorge Luiz Antonio</p> <button class="btn btn-info lates"><a href="#" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Luciene Novais Mazza</p> <button class="btn btn-info lates"><a href="#" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Magali Barçante</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4763869U6" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Maria das Graças J. M. Tomazela </p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4453237U6" class="font-btn">Lates</a></button>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm">
          <p>Rosana Helena Nunes</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4509502E6" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Sérgio Furgeri</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4592184U7" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Sérgio Gustavo Medina Pereira</p> <button class="btn btn-info lates"><a href="#" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Simone Tiemi Taketa Bicalho</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4794826A4" class="font-btn">Lates</a></button>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm">
          <p>Talita Annunciato Rodrigues</p> <button class="btn btn-info lates"><a href="#" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Valeria Scomparim</p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/6477861638641856" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Valter Castelhano de Oliveira </p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4706849J5" class="font-btn">Lates</a></button>
        </div>

        <div class="col-sm">
          <p>Wellignton Roque</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4263970D3" class="font-btn">Lates</a></button>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm">
          <p>Wylds Carlos Giusti</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4718618A9" class="font-btn">Lates</a></button>
        </div>
      </div>
    </div>

  </div>

  <br>
  <a id='btn-div' class="btn btn-outline-secondary lermais-pos" style="font-size:0.6em" ;>+</a>


  <br>
  <div class="tit-prof">
    <br>
    <h2>Mestres</h2>
    <div class=" conteudo-prof" style="margin-left: 10%">
      <div class=" conteudo-prof" style="margin-left: 10%">
      </div>
      <div class="mes" style="display: none;">
        <div class="row">

          <div class="col-sm">
            <p>Alexandre Serrano</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4262118H5" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Alex Rodrigo Moises Costa Wanderley</p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/1982412705530096" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>André Luiz Silva</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4771532E3" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Angela Trimer de Oliveira</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4559317Z7" class="font-btn">Lates</a></button>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-sm">
            <p>Benedito Carlos Florêncio Silva</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4427003Z8" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Bernardino de Jesus Sanches</p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/5591123811201120" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Carlos Alberto Bucheroni</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4238436D9" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Carlos Antonio Fragoso</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4481514E2" class="font-btn">Lates</a></button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm">
            <p>Carlos Henrique Dias</p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/4854451566215697" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Claudinei Portilho Matheus</p> <button class="btn btn-info lates"><a href="#" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Edson Luiz Pereira</p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/5307960676356168" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Elenir Almeida Silva</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4761051A1" class="font-btn">Lates</a></button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm">
            <p>Francisco Carlos Benedetti</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4779530H6" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Gabriel Adams Castelo Branco Aragão</p> <button class="btn btn-info lates"><a href="#" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Janaine Cristiane de Souza Arantes</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4771976D6" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>João Manoel de Campos</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4784263H0" class="font-btn">Lates</a></button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm">
            <p>Joclenes Emilio Diehl</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4471378U3&tokenCaptchar=03AGdBq26EPpc3Dfp72F_48-HUMbOVWUK7Fd6LPu5dj0U9_qx0AHkgao6ZTBWA5EzX-TKjg04UiMBN4xbILnmkx8LAN9TJM72yWUVeE7WJsECfoYjGYB31saHixBpFTktoIbtcxUSABm71kDMgVOfCbIOmC3bMtRXpCsH5r5cFENZ4faVCpu8nBk3QsasSo-vz6n_WN51koTRrWgh4jEPRbkocVDJR0Wo_9wFLhmWBJvzHHl4e8n9iyw1hSszjAkHD64oaJGrQXbhc3mcQOoagD_a1rDoTnnQ2Ul-vJoZNGohD3NTHpqvmqX-rgHQqdinNn3I4GyYAOfUt6BNuJnvFPqPDW2g-t2UDmEM8DP8XDJiraj8R1_xT4FRQG1s0OsqYs5MbPAEZJaQcgHaoJUTndyds7Mz28xBE7RA9Tn83lBiUysRmjNR5acc9VJUr39TGwXP7hS39f59pbSE73pg2UwOS_xucusCBs1MjtQTcaa96hVu8nsFh69_-0WOospfrcfo3aJnxYLWW94TTM1jL-FurVEr-zzJrfw" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Jones Artur Gonçalves</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4308524H6" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>José Luiz Marques</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4138511E6" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Juliana Silva Watanabe</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4418082J5" class="font-btn">Lates</a></button>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-sm">
            <p>Laerte Zotte Junior</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4424917P3" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Leila Ribeiro de Caldas </p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4782250U6" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Lilian Simão Oliveira</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4177577P5" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Luciana de Carvalho</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4745303Y8" class="font-btn">Lates</a></button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm">
            <p>Maria Eugenia Cauduro Cruz</p> <button class="btn btn-info lates"><a href="#" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Maria Fernanda Grosso Lisboa </p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4522707J8" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Maria Margarida Massignan de Almeida</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4130372J6" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Michel Moron Munhoz</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4458045Z8" class="font-btn">Lates</a></button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm">
            <p>Paulo Roberto Nunes Fortaleza </p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4210165Y5&tokenCaptchar=03AGdBq24UVPEeG7Hr2rZWO8Y9iKyQb_KQUOocKsv18VPW2QYudBtY3fUmaux1zL4HJcvfXFBeygmbRAYJGVgyMSPXZ8yKr-fpZ6OKqjAts4NPaDl4pdfrk7f5K_8ohFKRnRlGsjSmE2pJnJvPOiK7EoSIStd5n8TSl3WgbqLF1aM4FriIUk2AGyHN4YjhBzS31JLJS_D4_ilGJwPzopFwBdULX5aP6csDnSN0iwXJNhqbSpm3cH1PoLa4w0eSFTOMbnmAFpDbL4mi5pyU2sCq66S6OUeQR1wubx79QEFVkXCzJArc7koDP9UxN99QuicIJYLeNG0GukeJPYVEUY7c2S3XSDshrK_Gxq9SUvt857Ki66Z4iH7OoAew7z-hPMjS7hxsZpYfWR6sSS8PevlZDfnT0npztO37w-eXknOoPIGL5vHDsjrDksDArhaOaHvTAtUzAkSpxaKdUgROLrot-X9B7au0XEgqNg" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Reinaldo Toso Junior</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4717047T2" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Renato Labbate </p> <button class="btn btn-info lates"><a href="#" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Rita Maria Cunha Leite Coentro</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K8703856J1" class="font-btn">Lates</a></button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm">
            <p>Rogerio Antonio Alves</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4794417U7" class="font-btn">Lates</a></button>
          </div>


          <div class="col-sm">
            <p>Sandro Roberto da Silva Calabrezi</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4242170Z9" class="font-btn">Lates</a></button>
          </div>
          <div class="col-sm">
            <p>Sérgio Donisete Clauss</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4734172E0" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Sérgio Scuotto </p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4385813E5&tokenCaptchar=03AOLTBLSs-BGFuzapVlrgfs8B3Qsr43YGFeR1D_arfDzkAU6-DeqyuEMpO8IbgfkFCRj2GchJuXLKA17KBz9V2fzCEFKFL_AmdH2xXUdRY2eggZuupdEhxD3r_6PjVgZu5x5KwnUOYugk-9qteaYfJ2x-OjDyDxxm1Ko2C5bgwTYR7KEVzMLN7QzKY3KOM0PZ-_xPol3JOLZgafrOLT_z5pVo65unCWGyiIf4D1BYvLXb4HH5thM19EOHvFWR5L3AEJfnjKEfQwqEwmb1XyIQl2tN1Hd5Yn3IixwOTs8ZHILeOkXTUcB2FR1J6zQ6tt-MOY4yjyG1zQAqDyr7fltmrpVGuOp0J64CZpgnvjO89m9PhmLEwCkk6gayWtC4RkbVR7Ybp3Bv0emNZ37mLdi80wF4jpjW6MRm7GRdG-Vq8qrX3OSoQn6Ea6Z3LyRTUKs5MaBCtbVyfsdBTV7xjJhB0QjfAT_rhmBRuw" class="font-btn">Lates</a></button>
          </div>
        </div>
        <br>
        <div class="row">


          <div class="col-sm">
            <p>Simone Mendes da Silva</p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/8805678197318111" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Tamires Freire Silva</p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/9528442260206428" class="font-btn">Lates</a></button>
          </div>
          <div class="col-sm">
            <p>Vera Márcia Gabaldi </p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4254799Y3" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Vilma Maria de Lima</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4744409T6" class="font-btn">Lates</a></button>
          </div>
        </div>
        <br>

        <div class="row">


          <div class="col-sm">
            <p>Virgílio Itauiti Panzetti</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4753100E1" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Viviane Di Battisti</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4768978U6" class="font-btn">Lates</a></button>
          </div>
          <div class="col-sm">
            <p>Wilson José de Oliveira </p> <button class="btn btn-info lates"><a href="#" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Wilton Sturm </p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4130220Y6" class="font-btn">Lates</a></button>
          </div>
        </div>
        <br>
        <div class="row">

          <div class="col-sm">
            <p>Yara Brito Brasileiro </p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4164283Y4" class="font-btn">Lates</a></button>
          </div>

        </div>

      </div>

    </div>
    <br>
    <a id='btn-div1' class="btn btn-outline-secondary lermais-pos" style="font-size:0.6em" ;>+</a>


    <div class="conteudo">
      <br>
      <h2>Especialistas</h2>
    </div>
    <div class=" conteudo-prof" style="margin-left: 10%">

      <div class="esp" style="display: none;">
        <div class="row">

          <div class="col-sm">
            <p>André Meschiatti Nogueira</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4511692P4" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Eugênio Tadeu Bertagnoli</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4282959Y3" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Helder Pestana</p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/9776694660233664" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>João Cantarelli Junior</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4217745J6" class="font-btn">Lates</a></button>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-sm">
            <p>José Augusto Dias Mome</p> <button class="btn btn-info lates"><a href="#" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>José Estanislau Sigrist</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4425162T6" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>José Renato de Siqueira Lopes</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4130087H7" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>José William Pinto Gomes</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4479939A3" class="font-btn">Lates</a></button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm">
            <p>Lincon Moreira Peretto</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4130019T1" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Luis Fernando Adorno da Silva</p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/5531083517681986" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Luiz Fernando Fontana Rodrigues Moledo</p> <button class="btn btn-info lates"><a href="#" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Marcelo Carvalho Costa</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4443175U5" class="font-btn">Lates</a></button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm">
            <p>Marcio Rogerio Santos Ferraz</p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/2826720564655938" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Mariana do Campo Souza Vieira</p> <button class="btn btn-info lates"><a href="#" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Osmar Alves Teixeira</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4332345P0" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Rafaeli Cardozo Modolo Begalli</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4301378H9" class="font-btn">Lates</a></button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm">
            <p>Renata Pierri Lucietto Rossetto</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K8700817A2" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Ricardo Sérgio Neiva Nóbrega</p> <button class="btn btn-info lates"><a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4782479J9" class="font-btn">Lates</a></button>
          </div>

          <div class="col-sm">
            <p>Valdinette Doria</p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/8587045917577788" class="font-btn">Lates</a></button>
          </div>
          <div class="col-sm">
            <p>Valdinette Doria</p> <button class="btn btn-info lates"><a href="http://lattes.cnpq.br/8587045917577788" class="font-btn">Lates</a></button>
          </div>

        </div>
      </div>

    </div>
    <br>
    <a id='btn-div2' class="btn btn-outline-secondary lermais-pos" style="font-size:0.6em" ;>+</a>
    <br>
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

<script>
  var btn = document.getElementById('btn-div');
  var container = document.querySelector('.container');
  btn.addEventListener('click', function() {

    if (container.style.display === 'block') {
      container.style.display = 'none';
    } else {
      container.style.display = 'block';
    }
  });
</script>

<script>
  var btn = document.getElementById('btn-div1');
  var mes = document.querySelector('.mes');
  btn.addEventListener('click', function() {

    if (mes.style.display === 'block') {
      mes.style.display = 'none';
    } else {
      mes.style.display = 'block';
    }
  });
</script>

<script>
  var btn = document.getElementById('btn-div2');
  var esp = document.querySelector('.esp');
  btn.addEventListener('click', function() {

    if (esp.style.display === 'block') {
      esp.style.display = 'none';
    } else {
      esp.style.display = 'block';
    }
  });
</script>