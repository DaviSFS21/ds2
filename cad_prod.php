<?php
    
    require("connect.php");
    
    $descricao = $_POST['c_descricao'];
    $estoque = $_POST['c_estoque'];
    $marca = $_POST['c_marca'];
    $c_hardware = $_POST['c_hardware'];
    $termo = $_POST['c_termo'];
    
    $sql = "INSERT INTO `item`(`descricao`, `estoque`, `marca`, `c_hardware`, `categoria_livro`,`termo`)
     VALUES ('$descricao', '$estoque', '$marca', '$c_hardware', '$categoria_livro', '$termo')";

    $resultado = mysqli_query($conexao, $sql);

    echo "Inserido com sucesso";
?>
<p><a href = "index.html">Início</a>