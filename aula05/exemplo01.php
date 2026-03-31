<?php
//string json contendo os dados de um funcionário
$json_str = '{"nome":"Jason Jones", "idade":38, "sexo": "M"}';

//faz o parsing na string, gerando um objeto PHP
$obj = json_decode($json_str);

//<pre> deixar o codigo mais organizado
echo "<pre>";

//var_dump para poder dar o echo do valor do $obj
var_dump($obj);
echo "</pre>";


echo"<br>";
echo"<hr>";
// error fatal, nao converte em stg.  echo $obj, "<br>";

//imprime o conteúdo do objeto
echo "nome: $obj->nome<br>";
echo "idade: $obj->idade<br>";
echo "sexo: $obj->sexo<br>";

?>


