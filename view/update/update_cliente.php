<?php
    require_once '../../configs/conexao.php';
    require_once '../../models/cliente.class.php';

    $idCliente = intval($_POST['idCliente']);
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];

    Cliente::update($conexao, $idCliente, $nome, $telefone);
    header('Location: ../listas/listar-pedido.php');
?>