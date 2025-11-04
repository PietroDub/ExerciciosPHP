<?php
require_once 'Pessoa.php';
require_once 'Telefone.php';
require_once 'Chef.php';
require_once 'Avaliador.php';
require_once 'Receita.php';
require_once 'Avaliacao.php';

// ======= Criando chefs =======
$chef1 = new Chef("Carlos Souza", "Culinária Italiana");
$chef2 = new Chef("Ana Lima", "Confeitaria");

// ======= Criando avaliadores =======
$avaliador1 = new Avaliador("João Silva", "123.456.789-00");
$avaliador2 = new Avaliador("Pedro Santos", "987.654.321-00");

// ======= Criando receitas =======
$receita1 = new Receita(
    "Pizza Margherita", 
    "Farinha de trigo, tomate, mussarela de búfala, manjericão, azeite"
);

$receita2 = new Receita(
    "Bolo de Chocolate", 
    "Farinha, ovos, chocolate em pó, açúcar, manteiga, fermento"
);

$receita3 = new Receita(
    "Lasanha à Bolonhesa", 
    "Massa para lasanha, carne moída, molho de tomate, queijo mussarela, presunto"
);

// ======= Criando avaliações =======
$avaliacao1 = $avaliador1->fazerAvaliacao($receita1, 4.5);
$avaliacao2 = $avaliador1->fazerAvaliacao($receita2, 3.8);
$avaliacao3 = $avaliador2->fazerAvaliacao($receita1, 4.8);
$avaliacao4 = $avaliador2->fazerAvaliacao($receita3, 4.2);

echo "<h2>⭐ Avaliações Realizadas</h2>";
echo "<strong>Avaliações da Pizza Margherita:</strong> " . $receita1->getNotasFormatadas();
echo "<br>";
echo "<strong>Avaliações do Bolo de Chocolate:</strong> " . $receita2->getNotasFormatadas();
echo "<br>";
echo "<strong>Avaliações da Lasanha Bolonhesa:</strong> " . $receita3->getNotasFormatadas();

?>