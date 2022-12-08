<?php
    class Pedido {
        public $idPedido;
        public $idCliente;
        public $observacao;

        public function __construct($idPedido, $idCliente, $observacao = 'Nenhuma') {
            $this->idPedido = $idPedido;
            $this->idCliente = $idCliente;
            $this->observacao = $observacao;
        }
    } 
?>