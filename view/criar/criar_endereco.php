<?php
    require_once '../../configs/conexao.php';
    require_once '../../models/endereco.class.php';

    $nDaCasa = $_POST['ndecasa'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $idCliente = $_POST['idcliente'];

    Endereco::adicionar($conexao, $nDaCasa, $rua, $bairro, $cidade, $idCliente);
?>