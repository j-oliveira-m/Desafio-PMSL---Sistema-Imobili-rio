<?php
// excluir um imovel pelo id
include("conexao.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM imoveis WHERE id = $id";
    $conn->query($sql);

    echo "Imóvel excluído com sucesso!<br>";
    echo "<a href='consultar_imovel.php'>voltar</a>";

?>