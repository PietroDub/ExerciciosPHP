<?php 
    class Proprietario extends Pessoa{
        private string $cpf;
        private array $lojas = [];

        public function __construct($nome, $cpf){
            parent::__construct($nome);
            $this->cpf = $cpf;
        }
        public function getCpf():string{
            return $this->cpf;
        }

        public function setLoja(){
            $loja = new Loja();
            $this->lojas[] = $loja;
            return $loja;
        }

        public function getLojas(): array {
            return $this->lojas;
        }
    
    }
?>