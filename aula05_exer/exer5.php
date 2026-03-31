<?php
$json = file_get_contents("produtos.json");
$produtos = json_decode($json, true);

$nomeRemover = "mouse";

$produtos = array_filter($produtos, function($p) use ($nomeRemover) {
    return $p["nome"] != $nomeRemover;
});

echo  "<pre>";
file_put_contents("produtos.json", json_encode(array_values($produtos), JSON_PRETTY_PRINT));
var_dump ($json);
echo  "<br>";
echo  "</pre>";
echo"<hr>";


echo "Produto removido";
?>