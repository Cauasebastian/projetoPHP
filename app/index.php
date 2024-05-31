<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h2>Cadastro de Cliente</h2>
    <form action="cadastro.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
    <br>
    <a href="listar.php">Ver Clientes Cadastrados</a>
</body>
</html>
