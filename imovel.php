<?php
include("conexao.php"); // cria conexão com o banco de dados
?>

<!DOCTYPE html>
<html>
<head>
    <title>cadastro de imovéis</title>
</head>

<body>
    <h1>Cadastro de imóveis</h1>

    <!-- Formulário para o usuário digitar os dados do imóvel -->
    <form method="POST">
       <label>Logradouro(Rua ou avenida)</label> 
       <input name="logradouro"> <br>

        <label>Número</label> 
        <input name="Número"> <br>
        
        <label>Bairro</label> 
        <input name="Bairro"> <br>
        

        <label>Complemento</label> 
        <input name="Complemento"> <br>
        <label>Proprietário</label>
        
        <select name="proprietario_id">

<?php
        // busca os proprietários cadastrados
        $sql_prop = "SELECT id, nome FROM proprietarios";
        $result_prop = $conn->query($sql_prop);

        // cria as opções do select
        while($prop = $result_prop->fetch_assoc()) {
            echo "<option value='".$prop['id']."'>".$prop['nome']."</option>";
}
?>

</select><br>
        <button>enviar</button>
<br>
        <a href="index.php">Voltar ao menu</a> <!-- link para voltar ao menu inicial -->
</form>

<?php
include("conexao.php"); // conecta com o banco de dados

    // verifica se o formulario foi enviado
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        // armazena valores do formulário
        $proprietario_id = $_POST['proprietario_id'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['Número'];
        $bairro = $_POST['Bairro'];
        $complemento = $_POST['Complemento'];

        $sql = "INSERT INTO imoveis (logradouro, Número, Bairro, Complemento, proprietario_id)
        VALUES ('$logradouro', '$numero', '$bairro', '$complemento', '$proprietario_id')";

        $conn->query($sql);

        echo "Imóvel cadastrado com sucesso!"; // exibe mensagem de sucesso

        
}

        
?>

</body>
</html>