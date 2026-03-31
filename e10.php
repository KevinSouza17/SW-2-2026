<?php
function gerarNumerosAleatorios() {
    $array = [];
    for ($i = 0; $i < 10; $i++) {
        $aleatorio = rand(1, 100);  // números entre 1 e 100
        $array[] = $aleatorio;
    }
    return $array;
}

// Exemplo de uso:
print_r(gerarNumerosAleatorios());
?>