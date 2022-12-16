<?php
    require_once '../../configs/conexao.php';
    require_once '../../models/endereco.class.php';

    $idEndereco = intval($_POST['idEndereco']);
    $nDeCasa = $_POST['ndecasa'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    var_dump($_POST);

    Endereco::update($conexao, $nDeCasa, $rua, $bairro, $cidade, $idEndereco);
    header('Location: ../../view/listas/listar-pedido.php');
?>