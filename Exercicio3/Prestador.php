<?php 
    class Cliente extends Pessoa{
        private string $especialidade;
        public function __construct($nome, $especialidade)
        {
            parent::__construct($nome);
            $this->especialidade = $especialidade;
        }
        public function getEspecialidade():string{
            return $this->especialidade;
        }
    }
?>