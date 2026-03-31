<?php
echo "=== MENU ===\n";
echo "1 - Saudação\n";
echo "2 - Data atual\n";
echo "3 - Sair\n";

$opcao = readline("Escolha uma opção: ");

switch ($opcao) {
    case 1:
        echo "Olá! Bem-vindo ao sistema em PHP!\n";
        break;
    case 2:
        echo "Data atual: " . date('d/m/Y') . "\n";
        break;
    case 3:
        echo "Saindo do programa...\n";
        break;
    default:
        echo "Opção inválida!\n";
}
?>