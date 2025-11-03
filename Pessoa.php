<?php 
    class Pessoa{
        public function __construct(
            private string $nome = ""
        ){}

       public function getnome():string{
        return $this->nome;
       } 

       public function setNome($nome){
            $this->nome = $nome;
        }
    }
?>