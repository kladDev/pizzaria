<?php
    class Pizza {
        public $idPizza;
        public $sabor;
        public $preco;
        public $tamanho;

        function __construct($idPizza, $sabor, $preco, $tamanho){
            $this->idPizza = $idPizza;
            $this->sabor = $sabor;
            $this->preco = $preco;
            $this->tamanho= $tamanho;
        }

        public static function getTodos($conexao) {
            $sql = "SELECT * FROM pizza";
            $resultado = $conexao->query($sql);
            
            foreach($resultado as $registro) {
                $pizzas[] = new Pizza($registro['idPizza'], $registro['sabor'], $registro['preco'], $registro['tamanho']);
            }

            return $pizzas;
        }
    }
?>