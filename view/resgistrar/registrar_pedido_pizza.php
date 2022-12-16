<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza à pedir</title>

    <link rel="stylesheet" href="../../css/style.css">
    <style>
        h2 {
            margin-top: 16px;

            text-align: center;
        }

        h2>span {
            color: #FA8B28;
        }

        section .button-pedido {
            font-size: 16px;
            border-radius: 6px;

            cursor: pointer;
            border: none;
            color: #FFF;
            background-color: #669921;

            position: absolute;
            bottom: -52px;
            right: 50%;

            padding: 8px 16px;
        }

        section .button-pedido:hover {
            opacity: .8;
            transition: ease-in .3s;
        }

        section {
            position: relative;
        }
    </style>
</head>

<body>
    <section>
        <?php
        require_once '../../configs/conexao.php';
        require_once '../../models/pizza.class.php';
        require_once '../../models/cliente.class.php';

        $id = Cliente::get($conexao);
        $nome = Cliente::getNome($conexao, $id);
        ?>
        <h2>Estamos quase lá, <span><?php echo $nome ?> </span></h2>
        <form action="../criar/criar_pedido_pizza.php" method="POST" class="pedido-pizza">
            <?php
            $i = 0;
            $j = 0;
            $pizzas = Pizza::getTodos($conexao);
            foreach ($pizzas as $registros) {
            ?>
                <div class="card">
                    <?php
                    if ($i % 3 == 0) {
                        $j++;
                    }
                    ?>
                    <img src="../../img/post-<?php echo $j ?>.jpg">
                    <?php
                    $i++;
                    ?>
                    <div class="sobre">
                        <div>
                            <span>Sabor: </span> <span><?php echo $registros->sabor ?></span>
                        </div>
                        <div>
                            <span>Preço: </span> <span>R$ <?php echo $registros->preco ?></span>
                        </div>
                        <div>
                            <span>Tamanho: </span> <span><?php echo $registros->tamanho ?></span>
                        </div>
                        <div>
                            <span>Quantidade: </span> <input type="number" name="quantidade[]" id="quantidade" min="0" max="15">
                        </div>
                    </div>
                    <input class="ok" type="checkbox" name="idPizza[]" id="idPizza" value="<?php echo $registros->idPizza ?>">
                </div>
                <?php
                if (intval($registros->idPizza) == 1) {
                ?>
                    <input type="submit" class="button-pedido" value="Fazer o pedido">
                <?php
                }
                ?>
            <?php
            }
            ?>
        </form>

    </section>
</body>

</html>