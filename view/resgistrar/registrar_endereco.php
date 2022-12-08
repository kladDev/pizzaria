<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereço do Cliente</title>
</head>

<body>
<?php
        require_once '../../configs/conexao.php';
        require_once '../../models/cliente.class.php';

        $idCliente = Cliente::get($conexao);
        echo $idCliente;
    ?>
    <form action="../criar/criar_endereco.php" method="post">
        <select name="idcliente" id="idcliente" required>
            <option value=""></option>
            <?php
                require_once '../../configs/conexao.php';
                require_once '../../models/cliente.class.php';



                $clientes = Cliente::getTodos($conexao);
                foreach($clientes as $registro) {
            ?>

            <option value="<?php echo $registro->idCliente?>">
                    <?php echo $registro->nome?>
            </option>
            
            <?php
                }
            ?>
        </select>
        <label for="ndecasa">N° da casa</label>
        <input type="text" id="ndecasa" name="ndecasa" required>

        <label for="rua">Rua</label>
        <input type="text" id="rua" name="rua" required>

        <label for="bairro">Bairro</label>
        <input type="text" id="bairro" name="bairro" required>

        <label for="cidade">Cidade</label>
        <input type="text" id="cidade" name="cidade" required>

        <input type="submit" value="Listar">
    </form>
</body>

</html>