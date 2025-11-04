<?php 
    class Festa{
        public function __construct(
            public string $data_contrato = "",
            public string $data_festa = "",
            public float $valor = 0, 
            // private Cliente $Cliente = new Cliente()
            private $cliente = null,
            private array $decoracao = []
        )
        {}
    
        public function getContrato():string{
            return $this->data_contrato;
        }
        public function getFesta():string{
            return $this->data_festa;
        }
        public function getValor():float{
            return $this->valor;
        }
        public function getDecoracao():array{
            return $this->decoracao;
        }
    }
?>