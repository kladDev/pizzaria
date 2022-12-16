<?php
 require_once '../../configs/conexao.php';
 require_once '../../models/pedido.class.php';

 $idPedido = $_POST['idPedido'];
 $observacao = $_POST['observacao'];

 Pedido::update($conexao, $observacao, $idPedido);
 header('Location: ../listas/listar-pedido.php');
?>