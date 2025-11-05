<?php 
    class Shopping extends Pessoa{
        private string $cnpj;
        private array $lojas = [];

        public function __construct($nome, $cnpj){
            parent::__construct($nome);
            $this->cnpj = $cnpj;
        }
        public function getCNPJ():string{
            return $this->cnpj;
        }

        public function setLojas($lojas){
            $loja = new Loja();
            $this->lojas[] = $loja;
            return $loja;
        }

        public function getLojas(): array {
            return $this->lojas;
        }
    }
?>