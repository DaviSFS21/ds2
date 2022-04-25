<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="opera-gx">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        require("connect.php");
        
        $descricao = $_POST['c_descricao'];
        $estoque = $_POST['c_estoque'];
        $marca = $_POST['c_marca'];
        $hardware = $_POST['c_hardware'];
        $termo = $_POST['c_termo'];
        
        $sql = "INSERT INTO `item`(`descricao`, `estoque`, `marca`, `hardware`, `termo`)
        VALUES ('$descricao', '$estoque', '$marca', '$hardware', '$termo')";

        $resultado = mysqli_query($conexao, $sql);

        echo "Inserido com sucesso";
    ?>
    <p><a href = "index.html">Início</a>
</body>
</html>