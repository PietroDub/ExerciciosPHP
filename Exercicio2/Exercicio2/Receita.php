<?php 
    class Receita{
        private array $avaliacoes = [];

        public function __construct(
            public string $nome = "",
            public string $ingredientes = ""
        )
        {}
        
        public function getNome():string{
            return $this->nome;
        }

        public function getIngredientes():string{
            return $this->ingredientes;
        }

        public function addAvaliacao(Avaliacao $avaliacao): void {
        $this->avaliacoes[] = $avaliacao;
        }

        public function getAvaliacoes(): array {
            return $this->avaliacoes;
        }

        public function getNotasFormatadas(): string {
        $notas = [];
        foreach ($this->avaliacoes as $avaliacao) {
            $notas[] = $avaliacao->getNota() . " ⭐";
        }
        return empty($notas) ? "Sem avaliações" : implode(", ", $notas);
        }

    }
?>