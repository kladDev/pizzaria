<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar pedidos</title>

    <link rel="stylesheet" href="../../css/pedido.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        h2 {
            margin-top: 36px;
            margin-bottom: 64px;
        }
        .titulo {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <?php
    require_once '../../configs/conexao.php';
    require_once '../../models/cliente.class.php';
    require_once '../../models/pedido.class.php';
    require_once '../../models/endereco.class.php';
    require_once '../../models/pizzapedida.class.php';
    require_once '../../models/pizza.class.php';


    $pedidos = Pedido::getTodos($conexao);
    $clientes = Cliente::getTodos($conexao);
    $endereco = Endereco::getTodos($conexao);
    $pizzaPedidas = PizzaPedida::getTodos($conexao);
    $pizzas = Pizza::getTodos($conexao);

    ?>
    <h2>Todos os pedidos feitos por<br>diversos clientes</h2>
    <section class="pedido-pizzaria">
        <?php
        foreach ($pedidos as $registros) {
        ?>
            <div class="card">
                <div class="titulo">
                    <h3>Pedido #<?php echo $registros->idPedido ?></h3>
                    <a href="../delete/delete_pedido.php?idCliente=<?php echo $registros->idCliente ?>&idPedido=<?php echo $registros->idPedido ?>"><img src="../../img/trash.svg" alt="Icon de delete"></a>
                </div>
                <div class="observacao">
                    <div class="flex">
                        <span>Perfil</span>
                        <?php
                        foreach ($clientes as $registro) {
                        ?>
                            <div class="group-icons">
                                <?php
                                if ($registros->idCliente == $registro->idCliente) {
                                ?>
                                    <a href="../alterar/alterar_cliente.php?id=<?php echo $registros->idCliente ?>"><img src="../../img/edit.svg" alt="Icon de edit"></a>
                                    <!-- <a href="#"><img src="../../img/trash.svg" alt="Icon de Trash"></a> -->
                                <?php
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <?php
                    foreach ($clientes as $registro) {
                    ?>
                        <div class="conteudo">
                            <?php
                            if ($registros->idCliente == $registro->idCliente) {
                            ?>
                                <span><?php echo $registro->nome ?></span> - <span><?php echo $registro->telefone ?></span>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="endereco">
                    <div class="flex">
                        <span>Endereço</span>
                        <?php
                        foreach ($endereco as $s) {
                        ?>
                            <div class="group-icons">
                                <?php
                                if ($registros->idCliente == $s->idCliente) {
                                ?>
                                    <a href="../alterar/alterar_endereco.php?id=<?php echo $s->idEndereco ?>"><img src="../../img/edit.svg" alt="Icon de edit"></a>
                                    <!-- <img src="../../img/trash.svg" alt="Icon de Trash"> -->
                                <?php
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>

                    <?php
                    foreach ($endereco as $s) {
                    ?>
                        <div class="conteudo">
                            <?php
                            if ($s->idCliente == $registros->idCliente) {
                            ?>
                                <span>Nº <?php echo $s->nDeCasa ?> , </span> <span><?php echo $s->rua ?> ,</span> <span><?php echo $s->bairro ?> , </span> <span><?php echo $s->cidade ?></span>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="observacao">

                    <div class="flex">
                        <span>Observação</span>
                        <div class="group-icons">
                            <a href="../alterar/alterar_pedido.php?id=<?php echo $registros->idPedido ?>"><img src="../../img/edit.svg" alt="Icon de edit"></a>
                            <!-- <img src="../../img/trash.svg" alt="Icon de Trash"> -->
                        </div>
                    </div>

                    <div class="conteudo">
                        <?php echo $registros->observacao ?>
                    </div>

                </div>

                <div class="pizzas">

                    <div class="flex">
                        <span>Pedido</span>
                        
                        
                        <div class="group-icons">

                            <a href="../alterar/alterar_pedido_pizza.php?id=<?php echo $registros->idPedido ?>"><img src="../../img/edit.svg" alt="Icon de edit"></a>
            

                        </div>

                    </div>
                    <?php
                    foreach ($pizzaPedidas as $r) {
                    ?>
                        <div class="conteudo">
                            <?php
                            if ($r->idPedido == $registros->idPedido) {
                            ?>
                                <span><?php echo $r->quantidade ?></span>
                                <?php

                                foreach ($pizzas as $res) {
                                    if ($r->idPizza == $res->idPizza) {
                                ?>
                                        <span><?php echo $res->sabor ?> , <?php echo $res->tamanho ?> </span>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        <?php
        }
        ?>
    </section>
</body>

</html>