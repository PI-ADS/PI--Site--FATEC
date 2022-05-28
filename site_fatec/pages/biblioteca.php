<!-- @format -->
<?php
  session_start(); 
  include("../config/banco.php");
  if(isset($_SESSION["login"]) == 1){   
    include("../headerloged.php");
  }else{  
    include("../header.php");
  }
?>
 <link rel="stylesheet" href="style.css">
   

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <div class="conteudo">
      <h1>BIBLIOTECA</h1>

      <p>
        A Biblioteca da Faculdade de Tecnologia de Indaiatuba (Biblioteca
        FATEC-ID) dispõe de um amplo e agradável espaço para estudos, com
        excelente iluminação<span id="more">, balcão de atendimento adaptado para portadores de
        deficiência física, guarda-volumes para maior comodidade dos alunos e
        computadores para a realização de pesquisas e trabalhos acadêmicos. Seu
        acervo, com aproximadamente 10.100 itens, distribuídos entre livros
        técnicos e de literatura, obras de referência, periódicos, trabalhos
        acadêmicos e multimeios, oferece suporte informacional aos alunos,
        professores e funcionários, bem como, à comunidade externa, a quem
        também se destinam os produtos e serviços da Biblioteca FATEC-ID. Os
        materiais disponíveis na Biblioteca encontram-se em um Catálogo Online,
        cujo acesso é possível de qualquer computador conectado à internet.</span></p>
        <button class="lermais"   onclick="myFunction()" id="myBtn">Read more</button>


      <script>
        function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");
        
          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
          }
        }
        </script>

      <ul class="biblioteca">
        <h4>Horário de Funcionamento</h4>
        <li>Das 07h00 às 11h00</li>
        <li>Das 12h00 às 22h00</li>
      </ul>



<div class="btn-biblio">

 
      <button class="btn-padding">
        <a href="http://biblio.cps.sp.gov.br/">BliblioCPS</a>
      </button>
      <button class="btn-padding">
        <a href="http://www.arquivoestado.sp.gov.br/web/">Arquivo Estado SP</a>
      </button>
      <button class="btn-padding">
        <a href="./tg-ptg.html">Trabalhos de Graduacao</a>
      </button>

    </div>
    </div>

<!-- INICIO FOOTER -->

<?php
  include("../footer.php");
?>
