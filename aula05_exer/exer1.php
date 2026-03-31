<?php
$produtos = [
    ["nome" => "Teclado", "preco" => 67, "quantidade" => 67],
    ["nome" => "Mouse", "preco" => 676767, "quantidade" => 67],
    ["nome" => "Monitor", "preco" => 67, "quantidade" => 67]
];
echo "<pre>";
$json = json_encode($produtos, JSON_PRETTY_PRINT);
file_put_contents("produtos.json", $json);
var_dump ($json);
echo  "<br>";
echo  "</pre>";
echo"<hr>";

echo "Arquivo criado";
?>