<?php
include("../conexao.php");
	$descricao = $_POST['descricao'];
	$observacoes = $_POST['observacoes'];
	// $verificausuario = mysqli_query($con,"SELECT usuario FROM usuarios where usuario = '$usuario'" );
	// if (mysqli_num_rows($verificausuario) > 0){
	// 	echo "<script>alert('Usuário já existe.'); history.back();</script>";
	// }else{
        // create table TB_SUPORTE(
        //     ID_SUPORTE int primary key auto_increment not null, 
        //     DESCRICAO varchar(80) not null,
        //     STATUS varchar(120), /*  A - ABERTO | P - PENDENTE | F - FECHADO */
        //     DT_ABERTURA datetime not null,
        //     DT_FECHAMENTO datetime,
        //     OBSERVACOES varchar(2000)
        //   );
          
    $descricao = trim($descricao); 
	$observacoes = trim($observacoes); 
     if(empty($descricao)){
		echo "<script>alert('Preencha todos os campos para cadastrar novo chamado.'); history.back();</script>";
	}elseif(empty($observacoes)){
		echo "<script>alert('Preencha todos os campos para se cadastrar novo chamado.'); history.back();</script>";
	} else{
        $resul = "INSERT INTO TB_SUPORTE(descricao, status, dt_abertura, observacoes) VALUES('$descricao','A', NOW(),'$observacoes')";
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