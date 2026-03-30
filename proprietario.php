<!DOCTYPE html>
<html>
<head>
    <title>cadastro de imovéis</title>
</head>

<body>
    <h1>Cadastro de proprietários</h1>

    <!-- Formulário para o usuário digitar os dados do proprietário -->
    <form method="POST">
       <label>Nome</label> 
       <input name="nome"> <br>

        <label>Data de nascimento</label> 
        <input name="datanascimento"> <br>
        
        <label>CPF</label> 
        <input name="cpf"> <br>
        

        <label>sexo</label> 
        <input name="sexo"> <br>

        <label>Telefone</label> 
        <input name="telefone"> <br>

        <label>Email</label> 
        <input name="email"> <br>
        <button>enviar</button>
<br>
        <a href="index.php">Voltar ao menu</a> <!-- link para voltar ao menu inicial -->
</form>
    
<?php
include("conexao.php"); // conecta com o banco de dados

    // verifica se o formulario foi enviado
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        // armazena valores do formulário
        $nome = $_POST['nome'];
        $data = $_POST['datanascimento'];
        $cpf = $_POST['cpf'];
        $sexo = $_POST['sexo'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

    $sql = "INSERT INTO proprietarios (nome, datanascimento, cpf, sexo, telefone, email)
    VALUES ('$nome', '$data', '$cpf', '$sexo', '$telefone', '$email')";

    $conn->query($sql);

        echo "cadastro realizado com sucesso!"; // exibe mensagem de sucesso
        
    }

    

?>
</body>
</html>