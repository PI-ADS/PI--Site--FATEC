<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novotec Expresso Fatec-ID</title>
</head>

<body>

    <?php
    include "../BD/conexao.php";

    $NOME = $_POST["nome"];
    $EMAIL = $_POST["email"];
    $TELEFONE = $_POST["telefone"];
    $CURSO = $_POST["curso"];
    $sql = "INSERT INTO fatecid.TB_INTERESSADOS (nome,email,telefone,curso)
            VALUES ('$NOME','$EMAIL','$TELEFONE','$CURSO')";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_execute($stmt);
        echo"
        <script>
            alert('Seu contato foi salvo!');
            location.href='../View/Novotec/mainNovotec.html';
        </script>";
        // header("location:/novotec/view/mainNovotec.html");

    } else {
        echo "<script>alert('Não foi possível salvar seu contato')</script>";
    }
    ?>

</body>

</html>
