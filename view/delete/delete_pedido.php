<?php
    require_once '../../configs/conexao.php';
    require_once '../../models/pizzapedida.class.php';
    require_once '../../models/cliente.class.php';
    require_once '../../models/endereco.class.php';
    require_once '../../models/pedido.class.php';


    $idCliente = $_GET['idCliente'];
    $idPedido = $_GET['idPedido'];

    PizzaPedida::delete($conexao, $idPedido);
    Endereco::delete($conexao, $idCliente);
    Pedido::delete($conexao, $idPedido);
    Cliente::delete($conexao, $idCliente);

    header('Location: ../listas/listar-pedido.php');
?>