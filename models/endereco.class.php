<?php
    class Endereco{
        public $idEndereco;
        public $nDeCasa;
        public $rua;
        public $bairro;
        public $cidade;
        public $idCliente;

        public function __construct($idEndereco, $nDeCasa, $rua, $bairro, $cidade, $idCliente) {
            $this->idEndereco = $idEndereco;
            $this->nDeCasa = $nDeCasa;
            $this->rua = $rua;
            $this->bairro =$bairro;
            $this->cidade= $cidade;
            $this->idCliente = $idCliente;
        }

        public static function adicionar($conexao, $nDeCasa, $rua, $bairro, $cidade, $idCliente) {
            $sql = "INSERT INTO endereco (ndecasa, rua, bairro, cidade, cliente_idCliente) VALUES ('$nDeCasa', '$rua', '$bairro', '$cidade', $idCliente)";
            $conexao->query($sql);
        }

        public static function getTodos($conexao) {
            $sql = "SELECT * FROM endereco";
            $resultado = $conexao->query($sql);
            foreach($resultado as $registro) {
                $enderecos[] = new Endereco($registro['idEndereco'], $registro['ndecasa'], $registro['rua'], $registro['bairro'], $registro['cidade'], $registro['idCliente']);
            }

            return $enderecos;
        }
    }
?>