<?php
  include("../config/banco.php");
  $txtcnpj = $_POST['txtcnpj'];
	$razaoSocial = $_POST['razaoSocial'];
	$emailContato = $_POST['emailContato'];
	$descricao = $_POST['descricao'];
	$observacoes = $_POST['observacoes'];
	$requisitos = $_POST['requisitos'];
	$sobre = $_POST['sobre'];
	$dtFechamento = $_POST['dtFechamento'];
	// $verificausuario = mysqli_query($conn,"SELECT usuario FROM usuarios where usuario = '$usuario'" );
	// if (mysqli_num_rows($verificausuario) > 0){
	// 	echo "<script>alert('Usuário já existe.'); history.back();</script>";
	// }else{
    $txtcnpj = trim($txtcnpj); 
    $razaoSocial = trim($razaoSocial); 
    $emailContato = trim($emailContato); 
    $descricao = trim($descricao); 
	$observacoes = trim($observacoes); 
	$requisitos = trim($requisitos); 
	$sobre = trim($sobre); 
	$dtFechamento = trim($dtFechamento); 
     if(empty($txtcnpj)){
		echo "<script>alert('Preencha o campo CNPJ para cadastrar nova vaga.'); history.back();</script>";
	}elseif(empty($razaoSocial)){
		echo "<script>alert('Preencha o campo Razão Social para cadastrar nova vaga.'); history.back();</script>";
	}elseif(empty($sobre)){
		echo "<script>alert('Preencha o campo Descrição da Vaga para cadastrar nova vaga.'); history.back();</script>";
	}elseif(empty($emailContato)){
		echo "<script>alert('Preencha o campo e-mail de contato para cadastrar nova vaga.'); history.back();</script>";
	}elseif(empty($dtFechamento)){
		echo "<script>alert('Preencha o campo Data de Fechamento da Vaga para cadastrar nova vaga.'); history.back();</script>";
	} else{
         
        $sql = "INSERT INTO fatecid.TB_VAGAS(descricao, razaoSocial, REQUISITO, DT_ABERTURA, DT_FECHAMENTO, OBSERVACOES, CNPJ_EMPRESA, EMAIL_CONTATO) 
        VALUES('$descricao','$razaoSocial','$requisitos', NOW(),'$dtFechamento', '$observacoes','$txtcnpj','$emailContato')";

        if ($conn->query($sql) === TRUE) {
            echo "
                <script>
                    alert('Vaga cadastrada com sucesso!');
                    location.href='vagas.php'; 
                </script>";
        } else {
            echo $sql;
        }
    }
?>
