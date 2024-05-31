<?php
include 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO clientes (nome, email) VALUES (:nome, :email)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar cliente.";
    }
}
?>
