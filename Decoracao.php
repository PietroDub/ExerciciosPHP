<?php 
    class Decoracao{
        public function __construct(
             public string $descritivo = "",
             private array $Festas = []
        ){}

        public function getDescritivo():string{
            return $this->descritivo;
        }
        public function getFesta():array{
            return $this->Festas;
        }
    }
?>