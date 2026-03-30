<?php
// excluir proprietario pelo id
include("conexao.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM proprietarios WHERE id = $id";
        $conn->query($sql);

    echo "Proprietário excluído com sucesso!<br>";
    echo "<a href='consultar_proprietario.php'>voltar</a>";

?>