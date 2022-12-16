<?php
    require_once '../../configs/conexao.php';
    require_once '../../models/endereco.class.php';
    require_once '../../models/cliente.class.php';

    $idCliente = Cliente::get($conexao);
    $nDaCasa = $_POST['ndecasa'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];

    Endereco::adicionar($conexao, $nDaCasa, $rua, $bairro, $cidade, $idCliente);
    header('Location: ../resgistrar/registrar_pedido.php')
?>