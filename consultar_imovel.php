<?php 
include("conexao.php"); //conecta com o banco de dados

    $sql = "SELECT imoveis.*, proprietarios.nome 
    FROM imoveis
    LEFT JOIN proprietarios 
    ON imoveis.proprietario_id = proprietarios.id"; //busca todos os imóveis

    $result = $conn->query($sql) or die("Erro: " . $conn->error); // executa a consulta

    // percorre imóveis encontrados e exibe os dados 
    while($row = $result->fetch_assoc()) {

        echo "ID: " . $row['id'] . "<br>";
        echo "Proprietário: " . $row['nome'] . "<br>";
        echo "Logradouro(rua ou avenida): " . $row['logradouro'] . "<br>";
        echo "Número: " . $row['Número'] . "<br>";
        echo "Bairro: " . $row['Bairro'] . "<br>";
        echo "Complemento: " . $row['Complemento'] . "<br><br>";

        //sugere opções para excluir ou editar imóveis encontrados
        echo "<a href='editar_imovel.php?id=" . $row['id'] . "'>Editar</a> ";
        echo "<a href='excluir_imovel.php?id=" . $row['id'] . "'>Excluir</a><br><br>";
        
    }
?>
<br>    
    <a href="index.php">Voltar ao menu</a> <!-- link para voltar ao menu inicial -->
    