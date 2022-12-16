<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuário</title>

    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <nav>
        <ul>
            <li class="home">
                <img src="../../img/pizza.svg">
                <a href="../../index.php">Home</a>
            </li>
            <li>
                <a href="../listas/listar-pedido.php">Listar Pedidos</a>
            </li>
        </ul>
    </nav>
    <section class="cadastrar-usuario">
        <div>
            <h2>Registrar Usuário</h2>
            <img src="../../img/user.svg" alt="Icon de user">
        </div>
        <form action="../criar/criar_cliente.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="ex: Claudio">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" placeholder="ex: (99) 98876-2132">
            <input class="button-submit" type="submit" value="Próximo">
        </form>
    </section>
</body>

</html>