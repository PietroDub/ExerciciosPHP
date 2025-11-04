<?php 
    class Agenda{
        public function __construct(
            public string $data = ""
        ){}

        public function getData(){
            return $this->data;
        }
    }
?>