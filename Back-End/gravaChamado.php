<?php
include("../conexao.php");
	$ra = $_POST['ra'];
	$emailSoli = $_POST['emailSoli'];
	$local = $_POST['local'];
	$descricao = $_POST['descricao'];
	$observacoes = $_POST['observacoes'];
	// $verificausuario = mysqli_query($con,"SELECT usuario FROM usuarios where usuario = '$usuario'" );
	// if (mysqli_num_rows($verificausuario) > 0){
	// 	echo "<script>alert('Usuário já existe.'); history.back();</script>";
	// }else{
    $ra = trim($ra); 
    $emailSoli = trim($emailSoli); 
    $descricao = trim($descricao); 
	$observacoes = trim($observacoes); 
     if(empty($ra)){
		echo "<script>alert('Preencha o campo RA para abrir novo chamado.'); history.back();</script>";
	}elseif(empty($emailSoli)){
		echo "<script>alert('Preencha o campo E-mail para abrir novo chamado.'); history.back();</script>";
	}elseif(empty($descricao)){
		echo "<script>alert('Preencha o campo Tipo de problema para abrir novo chamado.'); history.back();</script>";
	} else{
        $resul = "INSERT INTO TB_SUPORTE(descricao, status, dt_abertura, observacoes, ra, emailSoli, local) 
        VALUES('$descricao','A', NOW(),'$observacoes','$ra','$emailSoli', '$local')";
        $resultado = mysqli_query($con, $resul);
        
        if(mysqli_affected_rows($con) != 0){
            echo "
            <script>
                alert('Chamado cadastrado com sucesso!');
                location.href='chamados.php'; 
            </script>";
        }else{
            echo "
            <script>              
                location.href='chamados.php'; 
            </script>";
        }
    }
?>