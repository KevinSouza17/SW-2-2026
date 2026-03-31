<?php
$json = file_get_contents("usuarios.json");
$usuarios = json_decode($json, true);

foreach ($usuarios as $u) {
    echo "Nome: " . $u["nome"] . " - Email: " . $u["email"] . "<br>";
}
?>