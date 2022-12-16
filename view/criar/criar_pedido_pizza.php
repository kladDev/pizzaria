<?php

    require_once '../../configs/conexao.php';
    require_once '../../models/pedido.class.php';
    require_once '../../models/pizzapedida.class.php';

    $idPedido = Pedido::getIdPedido($conexao);

    foreach($_POST['idPizza'] as $registro) {
        $idPizza[] = $registro;
    }
    foreach($_POST['quantidade'] as $registro) {
        $quantidade[] = $registro;
    }
    
    foreach($idPizza as $registro) {
        $i = intval($registro) - 1;
        if($quantidade[$i] != NULL) {
            PizzaPedida::adicionar($conexao, intval($quantidade[$i]), $idPedido, $registro);
        }
        
    }
    
    header('Location: ../../view/criar/pedido_feito.php');
?>