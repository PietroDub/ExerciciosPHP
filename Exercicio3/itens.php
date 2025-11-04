<?php 
    class Itens{
        public function __construct(
            public string $horario = "",
            public string $status = ""
        )
        {}

        public function getHorario(){
            return $this->horario;
        }
        public function getStatus(){
            return $this->status;
        }
    }
?>