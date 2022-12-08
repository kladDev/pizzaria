<?php
    require_once '../../configs/conexao.php';
    require_once '../../models/cliente.class.php';

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];

    Cliente::adicionar($conexao, $nome, $telefone);

    header('Location: ../resgistrar/registrar_endereco.php');
?>