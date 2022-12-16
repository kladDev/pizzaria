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
                $enderecos[] = new Endereco($registro['idEndereco'], $registro['ndecasa'], $registro['rua'], $registro['bairro'], $registro['cidade'], $registro['cliente_idCliente']);
            }

            return $enderecos;
        }

        public static function getIdEndereco($conexao, $idEndereco){
            $sql = "SELECT * FROM endereco WHERE idEndereco = $idEndereco";
            $resultado = $conexao->query($sql);
            $registro = $resultado->fetch();
            return new Endereco($registro['idEndereco'], $registro['ndecasa'], $registro['rua'], $registro['bairro'], $registro['cidade'], $registro['C']);
        }

        public static function update($conexao, $nDeCasa, $rua, $bairro, $cidade, $idEndereco){
            $sql = "UPDATE endereco SET ndecasa = '$nDeCasa', rua = '$rua', bairro = '$bairro', cidade = '$cidade' WHERE idEndereco= $idEndereco ";
            $conexao->query($sql);
        }

        public static function delete($conexao, $idCliente) {
            $sql = "DELETE FROM endereco WHERE cliente_idCliente = $idCliente";
            $conexao->query($sql);
        }
    }
?>