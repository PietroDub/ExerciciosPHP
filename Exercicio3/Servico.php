<?php 
    class Servico{
        public function __construct(
            public string $descritivo = "",
            public float $preco = 0.00
        )
        {}

        public function getDescritivo(){
            return $this->descritivo;
        }
        public function getPreco(){
            return $this->preco;  
        }
    }
?>