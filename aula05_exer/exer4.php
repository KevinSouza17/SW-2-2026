<?php
$email = "67masteraura@gmail.com";

$json = file_get_contents("usuarios.json");
$usuarios = json_decode($json, true);

$encontrado = false;

foreach ($usuarios as $u) {
    if ($u["email"] == $email) {
        echo "ID: " . $u["id"] . "<br>";
        echo "Nome: " . $u["nome"] . "<br>";
        echo "Email: " . $u["email"];
        $encontrado = true;
    }
}
   

echo "<hr>";


if (!$encontrado) {
    echo "Usuário não encontrado";
}
?>