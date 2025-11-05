<?php 
    class Condominio{
        private ?Shopping $shopping = null;
        private ?Proprietario $proprietario = null;
        private ?Loja $loja = null;

        private string $data_geracao;
        private string $data_pagamento;
        private float $valor;

        public function __construct(string $data_geracao, string $data_pagamento, float $valor) {
            $this->data_geracao  = $data_geracao;
            $this->data_pagamento = $data_pagamento;
            $this->valor = $valor;
        }

        public function getDataGeracao() : string {
            return $this->data_geracao;
        }

        public function getDataPagamento() : string {
            return $this->data_pagamento;
        }

        public function getValor() : string {
            return $this->valor;
        }

        public function setProprietario($proprietario){
            $this->proprietario = $proprietario;
        }
        public function getProprietario(): ?Proprietario {
            return $this->proprietario;
        }   

        public function setShopping($shopping){
            $this->shopping = $shopping;
        }
        public function getShopping(): ?Shopping {
            return $this->shopping;
        } 
        
        public function setLoja($loja){
            $this->loja = $loja;
        }
        public function getLoja(): ?loja {
            return $this->loja;
        } 
    }
?>


class Loja.php:





class proprietario.php:
<?php 
    class Proprietario extends Pessoa{
        private string $cpf;
        private array $lojas = [];

        public function __construct($nome, $cpf){
            parent::__construct($nome);
            $this->cpf = $cpf;
        }
        public function getCpf():string{
            return $this->cpf;
        }

        public function setLoja(){
            $loja = new Loja();
            $this->lojas[] = $loja;
            return $loja;
        }

        public function getLojas(): array {
            return $this->lojas;
        }
    
    }
?>

class Shopping.php:
<?php 
    class Shopping extends Pessoa{
        private string $cnpj;
        private array $lojas = [];

        public function __construct($nome, $cnpj){
            parent::__construct($nome);
            $this->cnpj = $cnpj;
        }
        public function getCNPJ():string{
            return $this->cnpj;
        }

        public function setLojas($lojas){
            $loja = new Loja();
            $this->lojas[] = $loja;
            return $loja;
        }

        public function getLojas(): array {
            return $this->lojas;
        }
    }
?>