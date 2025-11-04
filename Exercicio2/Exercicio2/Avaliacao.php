<?php 
    class Avaliacao{
        public function __construct(
            private float $nota = 0.00,
            private ?Avaliador $avaliador = null,
            private ?Receita $receita = null
        )
        {}

        public function getNota():float{
            return $this->nota;
        }

        public function getAvaliador(): ?Avaliador {
        return $this->avaliador;
        }

        public function setAvaliador(Avaliador $avaliador): void {
            $this->avaliador = $avaliador;
        }

        public function getReceita(): ?Receita {
            return $this->receita;
        }

        public function setReceita(Receita $receita): void {
            $this->receita = $receita;
        }
    }
?>