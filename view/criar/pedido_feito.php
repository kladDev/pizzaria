<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
    <link rel="stylesheet" href="../../css/pedido.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    require_once '../../configs/conexao.php';
    require_once '../../models/cliente.class.php';
    $id = Cliente::get($conexao);
    $nome = Cliente::getNome($conexao, $id);
    ?>
    <section class="pedido">
        <h2>Seu pedido foi coletado<br>com sucesso, <span><?php echo $nome ?></span></h2>
        <img src="../../img/sucess.svg" alt="Icon de sucesso">
        <div class="opcao">
            <a href="../resgistrar/registrar_cliente.php">Cadastrar novo pedido</a>
            <a href="../listas/listar-pedido.php">Listar pedidos feitos</a>
        </div>
    </section>
</body>

</html>