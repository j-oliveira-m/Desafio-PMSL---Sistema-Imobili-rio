<?php 
include("conexao.php"); //conecta com banco de dados

$sql = "SELECT * FROM proprietarios"; //busca todos os proprietarios registrados
$result = $conn->query($sql) or die("Erro: " . $conn->error); //executa a consulta

    //percorre os proprietários registrados e exibe dados na tela
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nome: " . $row['nome'] . "<br>";
        echo "Data de nascimento: " . $row['datanascimento'] . "<br>";
        echo "CPF: " . $row['cpf'] . "<br>";
        echo "Sexo: " . $row['sexo'] . "<br>";
        echo "Telefone: " . $row['telefone'] . "<br>";
        echo "Email: " . $row['email'] . "<br><br>";

        // sugere opções de editar informações do proprietário ou excluir proprietário cadastrado
        echo "<a href='editar_proprietario.php?id=" . $row['id'] . "'>Editar</a> ";
        echo "<a href='excluir_proprietario.php?id=" . $row['id'] . "'>Excluir</a><br><br>";
    }

?>
<br>
    <a href="index.php">Voltar ao menu</a> <!-- link para voltar ao menu inicial -->