<?php
$json = file_get_contents("produtos.json");
$produtos = json_decode($json, true);

$novo = ["nome" => "Headset", "preco" => 67, "quantidade" => 676967679676761];
$produtos[] = $novo;

echo "<pre>";
file_put_contents("produtos.json", json_encode($produtos, JSON_PRETTY_PRINT));
var_dump ($json);
echo  "<br>";
echo  "</pre>";
echo"<hr>";

echo "Produto adicionado";
?>