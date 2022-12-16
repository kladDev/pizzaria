<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar observação</title>

    <link rel="stylesheet" href="../../css/style.css">

</head>

<body>
    <?php
    require_once '../../configs/conexao.php';
    require_once '../../models/pedido.class.php';

    $id = $_GET['id'];
    $pedido = Pedido::getId($conexao, $id);
    ?>
    <section class="observacao">
        <div>
            <h2>Alterar observação do pedido</h2>
            <img src="../../img/observacao.svg" alt="Icon de atenção">
        </div>

        <form action="../update/update_pedido.php" method="post">
            <label for="observacao">Observação</label>
            <textarea name="observacao" id="observacao" cols="40" rows="20"><?php echo $pedido->observacao ?></textarea>
            <input class="button-submit" type="submit" value="Atualizar">
            <input type="hidden" name="idPedido" value="<?php echo $pedido->idPedido ?>">
        </form>
    </section>
</body>

</html>