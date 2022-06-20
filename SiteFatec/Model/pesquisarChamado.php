<?php
   include("../BD/conexao.php");

    $status = $_POST['status'];
    $sql_code = "SELECT s.ID_SUPORTE, s.DESCRICAO, s.OBSERVACOES, 
                        DATE_FORMAT(STR_TO_DATE(s.DT_ABERTURA, '%Y-%m-%d'), '%d/%m/%Y') as DT_ABERTURA,
                        case 
                        when s.STATUS = 'A' then 'Aberto'
                        when s.STATUS = 'F' then 'Fechado'
                        when s.STATUS = 'P' then 'Pendente'
                        else 'Adult'
                        end as STATUS
                    FROM fatecid.TB_SUPORTE s where s.STATUS like '%$status%'";
    $sql_query = $conn->query($sql_code) or die($conn->error);
	if($sql_query == false)
	{
		echo "error";
		exit;
	}
