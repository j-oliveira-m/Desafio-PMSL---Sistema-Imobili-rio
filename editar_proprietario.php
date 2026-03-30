<?php
include("conexao.php"); //inclui arquivo de conexão com o banco de dados

    $id = $_GET['id'];

    // busca os dados atuais
    $sql = "SELECT * FROM proprietarios WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<h2>Editar Proprietário</h2>

<form method="POST">
    Nome: <input name="nome" value="<?php echo $row['nome']; ?>"><br>
    Data de nascimento: <input name="datanascimento" value="<?php echo $row['datanascimento']; ?>"><br>
    CPF: <input name="cpf" value="<?php echo $row['cpf']; ?>"><br>
    Sexo: <input name="sexo" value="<?php echo $row['sexo']; ?>"><br>
    Telefone: <input name="telefone" value="<?php echo $row['telefone']; ?>"><br>
    Email: <input name="email" value="<?php echo $row['email']; ?>"><br>
    <button>Salvar</button>
<br>
    <a href="index.php">Voltar ao menu</a>

</form>


<?php
    // atualiza no banco quando o formulário for enviado
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        //armazena os valores digitados no formulário
        $nome = $_POST['nome'];
        $data = $_POST['datanascimento'];
        $cpf = $_POST['cpf'];
        $sexo = $_POST['sexo'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

        // atualiza no banco de dados as informações editadas
        $sql = "UPDATE proprietarios 
            SET nome='$nome', 
                datanascimento='$data',
                cpf='$cpf',
                sexo='$sexo',
                telefone='$telefone',
                email='$email'
            WHERE id=$id";

        $conn->query($sql); //executa a atualização no banco

        echo "Atualizado com sucesso!"; //imprime mensagem de alteração realizada com sucesso
}
?>