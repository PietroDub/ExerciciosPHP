<?php 
    class Cliente extends Pessoa{
        private string $cpf;
        public function __construct($nome, $cpf)
        {
            parent::__construct($nome);
            $this->cpf = $cpf;
        }
        public function getCPF():string{
            return $this->cpf;
        }
    }
?>