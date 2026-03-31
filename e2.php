<?php
$numero = readline("Digite um número: ");  // ou use $_POST se for web

if ($numero > 0) {
    echo "O número é positivo.";
} elseif ($numero < 0) {
    echo "O número é negativo.";
} else {
    echo "O número é zero.";
}
?>