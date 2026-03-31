<?php
function fatorial($n) {
    if ($n < 0) {
        return "Não existe fatorial de número negativo.";
    }
    if ($n == 0 || $n == 1) {
        return 1;
    }

    $resultado = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

// Exemplo de uso:
$num = readline("Digite um número para calcular o fatorial: ");
echo "Fatorial de $num é: " . fatorial($num);
?>