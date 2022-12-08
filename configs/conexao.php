<?php
    try {
        $conexao = new PDO('mysql:host=localhost;dbname=banco', 'root', 'user');
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>
