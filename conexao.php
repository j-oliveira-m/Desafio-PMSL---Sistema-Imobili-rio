<?php
//conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "imobiliaria");

    //verifica se houve erro na conexão
    if ($conn->connect_error) {
        die("erro: " . $conn->connect_error);

    }
?>