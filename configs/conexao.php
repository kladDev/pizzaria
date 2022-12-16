<?php
    try {
        $conexao = new PDO('mysql:host=localhost;dbname=pizzaoficial', 'root', 'kelly1419');
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>
