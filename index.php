<?php
require_once 'Pessoa.php';
require_once 'Telefone.php';
require_once 'Cliente.php';
require_once 'Contratado.php';
require_once 'Festa.php';
require_once 'Decoracao.php';

// ======= Criando pessoas =======
$pessoa1 = new Pessoa("Pietro");
$pessoa1->setCelular(14, "99999-8888");
$pessoa1->setCelular(14, "98888-7777");

$pessoa2 = new Pessoa("Maria");
$pessoa2->setCelular(11, "97777-6666");
$pessoa2->setCelular(11, "96666-5555");

// ======= Criando clientes (herdam Pessoa) =======
$cliente1 = new Cliente("Carlos Souza", "123.456.789-00");
$cliente2 = new Cliente("Ana Lima", "987.654.321-00");

// ======= Criando contratados =======
$contratado1 = new Contratado("João Decorações", "12.345.678/0001-99");
$contratado2 = new Contratado("Pedro Eventos", "98.765.432/0001-11");

// ======= Criando festas =======
$festa1 = $cliente1->setFesta("2025-11-01", "2025-11-15", 1500.00);
$festa2 = $cliente2->setFesta("2025-11-05", "2025-11-20", 2500.00);

// ======= Criando decorações =======
$decor1 = new Decoracao("Balões coloridos e mesa de doces temática");
$decor2 = new Decoracao("Tema festa à fantasia e iluminação especial");

// // Adicionando decoração às festas
// $festa1->adicionarDecoracao($decor1);
// $festa2->adicionarDecoracao($decor2);

// ======= Exibindo dados =======
echo "<h2>🎉 Dados das Festas</h2>";

echo "<pre>";
$pessoa1->exibir();
echo "</pre>";

echo "<pre>";
echo "Data do contrato:". $festa1->getContrato();
echo "<br>";
echo "Data da Festa". $festa1->getFesta();
echo "<br>";
echo "Valor da festa:". $festa1->getValor();
echo "</pre>";
?>
