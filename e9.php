<?php
function somaArray($arr) {
    $soma = 0;
    foreach ($arr as $numero) {
        $soma += $numero;
    }
    return $soma;
}

// Exemplo de uso:
$numeros = [10, 20, 30, 40, 50];
echo "Soma: " . somaArray($numeros);  // Saída: 150
?>