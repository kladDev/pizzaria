<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Endereço</title>

    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <section class="cadastrar-endereco">
        <?php
            require_once '../../configs/conexao.php';
            require_once '../../models/cliente.class.php';
            $idUsuario = Cliente::get($conexao);
            $usuario = Cliente::getNome($conexao,$idUsuario);
        ?>
        <div>
            <h2>Seja bem vindo(a), <span><?php echo $usuario ?></span>.</h2>
            <p>Precisamos saber mais sobre você, <br> agora adicione um endereço para entrega</p>
        </div>
        <img src="../../img/address.svg" alt="Icon de uma agenda">
        <form action="../criar/criar_endereco.php" method="post">
            <div>
                <label for="ndecasa">N° da casa: </label>
                <input type="text" name="ndecasa" id="ndecasa" placeholder="ex: 12" required>
            </div>

            <div>
                <label for="rua">Rua: </label>
                <input type="text" name="rua" id="rua" placeholder="ex: Rua 24 de maio" required>
            </div>

            <div>
                <label for="bairro">Bairro: </label>
                <input type="text" name="bairro" id="bairro" placeholder="ex: Centro" required>
            </div>

            <div>
                <label for="cidade">Cidade: </label>
                <input type="text" name="cidade" id="cidade" placeholder="ex: Coelho Neto" required>
            </div>

            <input class="button-submit" type="submit" value="Próximo">
        </form>
    </section>
</body>

</html>