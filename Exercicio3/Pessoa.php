<?php 
    class Pessoa{
        public function __construct(
            private string $nome = "",
            private string $telefone = ""
        ){}

        public function getNome():string{
            return $this->nome;
        }
    }
?>