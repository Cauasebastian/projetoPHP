<?php
include 'config/db.php';

try {
    $sql = "SELECT id, nome, email FROM clientes";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
</head>
<body>
    <h2>Lista de Clientes</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php if (!empty($result)) : ?>
            <?php foreach ($result as $row) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['nome']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="3">Nenhum cliente cadastrado.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
