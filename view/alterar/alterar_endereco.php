<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Endereço</title>

    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <?php
    require_once '../../configs/conexao.php';
    require_once '../../models/endereco.class.php';
    $id = intval($_GET['id']);
    $endereco = Endereco::getIdEndereco($conexao, $id);
    ?>
    <section class="cadastrar-endereco">

        <h2>Atualizar Endereço</h2>
        <img src="../../img/address.svg" alt="Icon de uma agenda">
        <form action="../update/update_endereco.php" method="post">
            <div>
                <label for="ndecasa">N° da casa: </label>
                <input type="text" name="ndecasa" id="ndecasa" placeholder="ex: 12" value="<?php echo $endereco->nDeCasa?>" required>
            </div>

            <div>
                <label for="rua">Rua: </label>
                <input type="text" name="rua" id="rua" placeholder="ex: Rua 24 de maio" value="<?php echo $endereco->rua?>" required>
            </div>

            <div>
                <label for="bairro">Bairro: </label>
                <input type="text" name="bairro" id="bairro" placeholder="ex: Centro" value="<?php echo $endereco->bairro?>" required>
            </div>

            <div>
                <label for="cidade">Cidade: </label>
                <input type="text" name="cidade" id="cidade" placeholder="ex: Coelho Neto" value="<?php echo $endereco->cidade?>" required>
            </div>
            <input type="hidden" name="idEndereco" value="<?php echo $endereco->idEndereco?>">

            <input class="button-submit" type="submit" value="Atualiza">
        </form>
    </section>
</body>

</html>