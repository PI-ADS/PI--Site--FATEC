<?php
    include("../config/banco.php");
	$ra = $_POST['ra'];
	$emailSoli = $_POST['emailSoli'];
	$local = $_POST['local'];
	$descricao = $_POST['descricao'];
	$observacoes = $_POST['observacoes'];
	// $verificausuario = mysqli_query($conn,"SELECT usuario FROM usuarios where usuario = '$usuario'" );
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
         
        $sql = "INSERT INTO fatecid.TB_SUPORTE(descricao, status, dt_abertura, observacoes, ra, emailSoli, local) VALUES('$descricao','A', NOW(),'$observacoes','$ra','$emailSoli', '$local')";

        if ($conn->query($sql) === TRUE) {
            echo "
                <script>
                    alert('Chamado cadastrado com sucesso!');
                    location.href='chamados.php'; 
                </script>";

                $descricao = $_POST['descricao'];
                $emailSoli = $_POST['emailSoli'];
            
                $mensagem = "Novo chamado aberto, com a descrição: " . $descricao;
                $mensagem = "E-mail de solicitação: " . $emailSoli . ". Acesse o site da fatec para visualizar o chamado";

                $headers =  'MIME-Version: 1.0' . "\r\n"; 
                $headers .= 'From: Alice Alves <alice.alves@fatec.sp.gov.br>' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            
                //Definir o servidor de e-mail
                ini_set('SMTP', 'email-smtp.us-east-1.amazonaws.com');
                ini_set('smtp_port', '2587');
                ini_set('smtp_user', 'ses-smtp-user.20220614-205614,AKIAVS4CWPK4KFFCB46M,BMphtCO1fJagn6Fil/IVOB1Im5ctDQVazSeQTbj7YJp7');
                
                ini_set('From', 'centralti@fatec.com.br');
                
                
                mail($destino, "Novo Chamado", $mensagem, $headers);
        } else {
            echo "<script>   
                    alert('ERROR');
                </script>";
        }
    }
?>