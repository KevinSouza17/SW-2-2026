<?php
function calcula_quadrado($a) {
    $x = $a * $a;
    echo $x . "<br>";
    
}

calcula_quadrado(4);
calcula_quadrado(3);
calcula_quadrado(5);

echo "<hr>";

function soma($x, $y) {
    $soma = $x + $y;
    echo "a soma é: " . $soma . "<br>";
}

$num1 = 10;
$num2 = 20;
soma($num1, $num2);
?> 