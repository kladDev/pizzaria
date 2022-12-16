<?php
    class Pedido {
        public $idPedido;
        public $idCliente;
        public $observacao;

        public function __construct($idPedido, $idCliente, $observacao) {
            $this->idPedido = $idPedido;
            $this->idCliente = $idCliente;
            $this->observacao = $observacao;
        }

        public static function adicionar($conexao, $idCliente, $observacao) {
            $sql = "INSERT INTO pedido(cliente_idCliente, observacao) VALUES ($idCliente, '$observacao')";
            $conexao->query($sql);
        }

        public static function getTodos($conexao) {
            $sql = "SELECT * FROM pedido";
            $resultado = $conexao->query($sql);
            foreach($resultado as $registro) {
                $pedidos[] = new Pedido($registro['idPedido'], $registro['cliente_idCliente'], $registro['observacao']);
            }

            return $pedidos;
        }

        public static function getIdPedido($conexao) {
            $sql = "SELECT pedido.idPedido FROM pedido ORDER BY pedido.idPedido DESC LIMIT 1";
            $resultado = $conexao->query($sql);
            $registro = $resultado->fetch();
            return intval($registro['idPedido']);
        }

        public static function getId($conexao, $idPedido){
            $sql = "SELECT * FROM pedido WHERE idPedido = $idPedido";
            $resultado = $conexao->query($sql);
            $registro = $resultado->fetch();
            return new Pedido($registro['idPedido'], $registro['cliente_idCliente'], $registro['observacao']);
        }

        public static function update($conexao, $observacao,$idPedido){
            $sql = "UPDATE pedido SET observacao = '$observacao' WHERE idPedido= $idPedido";
            $conexao->query($sql);
        }

        public static function delete($conexao, $idPedido) {
            $sql = "DELETE FROM pedido WHERE idPedido = $idPedido";
            $conexao->query($sql);
        }
    } 
?>