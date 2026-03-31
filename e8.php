<?php
$numero = readline("Digite um número para ver a tabuada: ");

echo "Tabuada do $numero:\n";

for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "\n";
}
?>