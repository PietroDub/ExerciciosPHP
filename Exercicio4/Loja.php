<?php 
    class Loja{
        private ?Proprietario $proprietario = null;
        private ?Shopping $shopping = null;

        public function __construct(
            public int $lotes = 0,
            public string $numero = ""
        ){}
        public function getLotes():int {
            return $this->lotes;
        }

        public function getNumero():string {
            return $this->numero;
        }

        public function setProprietario($proprietario){
            $this->proprietario = $proprietario;
        }
        public function getProprietario(): ?Proprietario {
            return $this->proprietario;
        }   

        public function setShopping($shopping){
            $this->shopping = $shopping;
        }
        public function getShopping(): ?Shopping {
            return $this->shopping;
        } 
    }
?>