<?php
include("conexao.php"); // inclui arquivo de conexão com o banco de dados

    $id = $_GET['id'];

// busca dados atuais
    $sql = "SELECT * FROM imoveis WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

    <h2>Editar Imóvel</h2>

<form method="POST"> 
    Logradouro: <input name="logradouro" value="<?php echo $row['logradouro']; ?>"><br>
    Número: <input name="Número" value="<?php echo $row['Número']; ?>"><br>
    Bairro: <input name="Bairro" value="<?php echo $row['Bairro']; ?>"><br>
    Complemento: <input name="Complemento" value="<?php echo $row['Complemento']; ?>"><br>
    <button>Salvar</button>
<br>
    <a href="index.php">Voltar ao menu</a>

</form>

<?php
    // atualiza no banco quando o formulário for enviado
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        // armazena os valores digitados no formulário
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['Número'];
        $bairro = $_POST['Bairro'];
        $complemento = $_POST['Complemento'];

        // atualiza no banco de dados as informações editadas
        $sql = "UPDATE imoveis 
            SET logradouro='$logradouro', Número='$numero', Bairro='$bairro', Complemento='$complemento'
            WHERE id=$id";

        $conn->query($sql); // executa a atualização no banco

        echo "Atualizado com sucesso!"; // imprime mensagem de alteração realizada com sucesso
}
?>