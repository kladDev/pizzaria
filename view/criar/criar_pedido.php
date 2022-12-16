<?php
    require_once '../../configs/conexao.php';
    require_once '../../models/pedido.class.php';
    require_once '../../models/cliente.class.php';

    $idCliente = Cliente::get($conexao);
    $observacao = $_POST['observacao'];

    Pedido::adicionar($conexao, $idCliente, $observacao);
    header('Location: ../resgistrar/registrar_pedido_pizza.php');
?>