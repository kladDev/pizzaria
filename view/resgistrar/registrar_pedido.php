<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Observações sobre o pedido</title>

    <link rel="stylesheet" href="../../css/style.css">

</head>

<body>
    <section class="observacao">
        <div>
            <img src="../../img/observacao.svg" alt="Icon de atenção">
            <?php
                require_once '../../configs/conexao.php';
                require_once '../../models/cliente.class.php';
                $idUsuario = Cliente::get($conexao);
                $usuario = Cliente::getNome($conexao, $idUsuario);
            ?>
            <h2>Olá, <span><?php echo $usuario ?></span></h2>
            <p>
                Aqui abaixo está um formulário para adicionar alguma(s) observação(ões) <br>
                em relação ao pedido, você não precisa adicionar agora, pode alterar mais tarde
            </p>
        </div>

        <form action="../criar/criar_pedido.php" method="post">
            <label for="observacao">Observação</label>
            <textarea name="observacao" id="observacao" cols="40" rows="20"></textarea>
            <input class="button-submit" type="submit" value="Próximo">
        </form>
    </section>
</body>

</html>