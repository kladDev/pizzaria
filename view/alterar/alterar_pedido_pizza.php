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
        require_once '../../models/pizzapedida.class.php';
        require_once '../../models/cliente.class.php';
        $id = $_GET['id'];

        $pizzaPedidas = PizzaPedida::getTodos($conexao);
        $pizzas = Pizza::getTodos($conexao);

        foreach ($pizzaPedidas as $registros) {
            if ($registros->idPedido == $id) {
                $pedidos[] = $registros;
            }
        }
        foreach($pizzas as $r) {
            foreach($pedidos as $res) {
                if($res->idPizza == $r->idPizza) {
                    $p[] = $r;
                }
            }
        }

        ?>
        <h2>Atualização do pedido</h2>
        <form action="../update/update_pedido_pizza.php" method="POST" class="pedido-pizza">
            <?php
            $i = 0;
            $j = 0;
            for ($a = 0; $a < count($pedidos); $a++) {
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
                        <span>Sabor: </span> <span><?php echo $p[$a]->sabor ?></span>
                        </div>
                        <div>
                            <span>Preço: </span> <span>R$ <?php echo $p[$a]->preco ?></span>
                        </div>
                        <div>
                            <span>Tamanho: </span> <span><?php echo $p[$a]->tamanho ?></span>
                        </div>
                        <div>
                            <span>Quantidade: </span> <input type="number" name="quantidade[]" id="quantidade" min="0" max="15" value="<?php echo $pedidos[$a]->quantidade  ?>">
                        </div>
                    </div>
                    <input type="hidden" name="idPizza[]" id="idPizza" value="<?php echo $pedidos[$a]->idPizzaPedida ?>">
                    <input type="hidden" name="idPizzaPedida[]" value="<?php echo $pedidos[$a]->idPizzaPedida ?>">
                </div>
                <?php
                if (count($p) == count($p)) {
                ?>
                    <input type="submit" class="button-pedido" value="Atualizar pedido">
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