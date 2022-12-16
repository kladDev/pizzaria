<?php
    require_once '../../configs/conexao.php';
    require_once '../../models/pizzapedida.class.php';

    foreach($_POST['idPizza'] as $registro) {
        $idPizzaPedida[] = $registro;
    }
    foreach($_POST['quantidade'] as $registro) {
        $quantidade[] = $registro;
    }

    for($i = 0; $i < count($idPizzaPedida); $i++) {
        PizzaPedida::update($conexao, $idPizzaPedida[$i], $quantidade[$i]);
    }

    header('Location: ../listas/listar-pedido.php');
?>