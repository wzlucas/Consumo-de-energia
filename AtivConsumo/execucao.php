<?php

require_once("modelo/Residencial.php");
require_once("modelo/Industrial.php");
require_once("modelo/Comercial.php");

echo "Escolha o tipo de consumidor:\n";
echo "1 - Residencial\n";
echo "2 - Comercial\n";
echo "3 - Industrial\n\n";

$opcao = readline("Informe o tipo de consumidor: ");
$consumo = readline("Informe o consumo em KWh: ");
$consumidor = null;

switch ($opcao) {
    case 1:
        $consumidor = new Residencial($consumo);
        break;
    case 2:
        $consumidor = new Comercial($consumo);
        break;
    case 3:
        $consumidor = new Industrial($consumo);
        break;
    default:
        echo "Opção inválida!";
        exit;
}

echo "O valor da fatura é: R$ " . $consumidor->getValorFatura() . "\n";