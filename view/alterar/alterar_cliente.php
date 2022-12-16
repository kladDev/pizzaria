<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar usuário</title>

    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <?php
    require_once '../../configs/conexao.php';
    require_once '../../models/cliente.class.php';
    $id = intval($_GET['id']);
    $cliente = Cliente::getId($conexao, $id);
    ?>
    <section class="cadastrar-usuario">
        <div>
            <h2>Atualizar Usuário</h2>
            <img src="../../img/user.svg" alt="Icon de user">
        </div>
        <form  method="post" action="../update/update_cliente.php">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $cliente->nome ?>" placeholder="ex: Claudio">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" value="<?php echo $cliente->telefone ?>" placeholder="ex: (99) 98876-2132">
            <input type="hidden" name="idCliente" value="<?php echo $cliente->idCliente ?>">
            <input class="button-submit" type="submit" value="Atualizar">
        </form>
    </section>
</body>

</html>