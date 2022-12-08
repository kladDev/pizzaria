<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cliente</title>
</head>

<body>
    <form action="../criar/criar_cliente.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>
        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" required>
        <input type="submit" value="Próximo">
    </form>
</body>

</html>