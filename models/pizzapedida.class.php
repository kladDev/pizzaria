<?php
    class PizzaPedida {
        public $idPizzaPedida;
        public $quantidade;
        public $idPedido;
        public $idPizza;

        public function __construct($idPizzaPedida, $quantidade, $idPedido, $idPizza){
            $this->idPizzaPedida = $idPizza;
            $this->quantidade = $quantidade;
            $this->idPedido = $idPedido;
            $this->idPizza = $idPizza;
        }
    }
?>