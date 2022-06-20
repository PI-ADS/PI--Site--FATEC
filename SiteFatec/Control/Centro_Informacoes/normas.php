<?php
session_start();
include("../../BD/conexao.php");
if (isset($_SESSION["login"]) == 1) {
  include("../../View/Header_Footer/headerloged.php");
} else {
  include("../../View/Header_Footer/header.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/650f3fb109.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../View/Assets/Styles/Outros.css">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="conteudo">


    <br><br>

    <h1>Normas</h1>
    <br><br>
    <p>I.DA POLÍTICA DE ACESSO

      Os Laboratórios de Informática são vinculados à C.I. (Central de Informática), que disciplinará sua utilização de maneira que estejam sempre à disposição dos alunos e professores, durante os horários de aulas dos cursos regulares, e demais cursos disponibilizados pela instituição.

      Cada usuário é responsável pelo equipamento no período em que estiver fazendo uso.

      Os usuários dos laboratórios de informática comprometem-se a utilizar os recursos exclusivamente para atividades de ensino, pesquisa ou extensão. Espera-se de todo usuário o cumprimento a uma série de normas que seguem o bom-senso geral, favorecendo assim a coletividade e o aproveitamento máximo dos laboratórios para fins educacionais.

      O aluno que necessitar a utilização dos laboratórios de informática fora do seu período de aula, deverá apresentar ao Apoio da Informática sua carteirinha de estudante (FATEC-ID) juntamente com prévia autorização do Coordenador do curso para obter acesso, desde que algum laboratório esteja liberado para uso, ou seja, não estar sendo utilizado por aulas dos cursos ou esteja em manutenção.

      <br>
      <br>
      II. DO HORÁRIO DE FUNCIONAMENTO

      Os Laboratórios de Informática somente poderão ser utilizados para aulas dos cursos regulares, de acordo com o horário de aulas, divulgado pela coordenação de curso, desenvolvido com o intuito de englobar, principalmente, as aulas regulares dos cursos da instituição.

      As aulas nos Laboratórios de Informática contarão obrigatoriamente com a presença de um professor-responsável.

      <br><br>

      III.DAS PROIBIÇÕES

      É expressamente proibido nos Laboratórios de Informática, exceto com permissão do professor para fins didáticos:

      a)Instalar softwares sem a permissão da CENTRAL DE INFORMÁTICA ou do professor responsável;

      b) Instalar software não licenciado (“pirata”);

      c) Alterar a configuração padrão dos softwares instalados;

      d) Abrir, desmontar, consertar e reconfigurar qualquer equipamento;

      e) Danificar equipamentos;

      f) Trazer equipamentos particulares para utilização no laboratório, salvo dispositivos de armazenamento removível de pequeno porte, como pen-drives, HDs externos ou notebooks;

      g) Trazer e retirar equipamentos sem autorização da CENTRAL DE INFORMÁTICA;

      h) Desenvolver e disseminar vírus de computador nos equipamentos;

      i) Criar e/ou utilizar programas que tenham o objetivo de obter senhas ou outros dados pessoais de usuários;

      j) Utilizar jogos (Desde que os mesmos não estejam sendo desenvolvidos com fins acadêmicos sob supervisão de um professor responsável);

      k) Acessar páginas ou utilizar software com conteúdo pornográfico;

      l) Fumar e/ou consumir qualquer tipo de alimento ou bebida;

      m) Utilizar os equipamentos para fins pessoais, ou qualquer outro tipo de atividade incompatível com as tarefas acadêmicas;

      n) Desorganizar o laboratório (se retirar cabos e/ou cadeiras, voltar no lugar);

      o) Troca de periféricos (mouse, teclado, monitor de vídeo, cabos e etc) ou equipamentos de lugar;

      p) Fazer transferências de arquivos extensos pela internet;

      q) Desrespeitar, agredir verbalmente outras pessoas ou usar vocabulário de baixo calão;

      r) Tornar públicos assuntos pessoais alheios, conteúdo de correspondências eletrônicas particulares sem autorização;

      s) Publicar ou enviar produto de trabalho de outras pessoas, violando os direitos autorais;

      t) Utilizar os computadores para fins incompatíveis com as atividades da aula que está sendo ministrada, ou seja, navegar na Internet, fazer tarefa de outra disciplina etc;

      No caso do item f, a instituição não se responsabiliza pelo suporte (instalação de softwares, remoção de vírus e reparos físicos) caso o aluno opte por utilizar seu notebook pessoal.

      <br><br>

      IV. DAS PENALIDADES

      Os usuários que praticarem qualquer ação prevista no caput ou outra que resulte em danos aos Laboratórios de Informática estarão sujeitos às seguintes sanções:

      a) Suspensão temporária do direito de uso dos Laboratórios de Informática;

      b) Reposição dos equipamentos danificados ou retirados;

      c) Sanções disciplinares previstas no Regulamento da Instituição.

      Caberá a coordenação da C.I. junto a direção deliberar sobre a sanção mais adequada a cada tipo de infração.

      Caso o usuário tenha dúvida a respeito da permissão em realizar alguma atividade, deve consultar o professor. A falta de informação não é justificativa para má utilização dos equipamentos ou outro tipo de infração.

      V. DAS BOAS PRÁTICAS DE UTILIZAÇÃO

      Algumas recomendações que constituem boas práticas de utilização dos Laboratórios de Informática:

      a) Os computadores devem ser desligados ao encerramento dos trabalhos pelos próprios usuários;

      b) Arquivos gravados pelo usuário em discos rígidos devem ser copiados para seu dispositivo de armazenamento pessoal ao terminar da sessão diária de uso, pois os discos rígidos poderão sofrer manutenção sem prévio aviso;

      c) Problemas e ocorrências estranhas observadas com o equipamento devem imediatamente ser reportadas ao professor-responsável, conforme o caso;

      d) As cadeiras devem ser organizadas após o uso do laboratório;

      <br>
      <br>
      Equipe Central de Informática
    </p>
    <br>
  </div>
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