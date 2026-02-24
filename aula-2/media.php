<?php
$n1 = 4;
$n2 = 5;
$n3 = 6;

$media =  ($n1 + $n2 + $n3) / 3;

if ($media > 5) {
    echo "aprovado sua média é:". $media;
}

else{
    if ($media < 4){
        echo "reprovado sua média é: ". $media;
    }else {
        echo "recuperação sua média é: ". $media;
}
}

echo "<hr>";

$dia = 6666666666666666666666;

switch ($dia) {
    case '1':
       echo "DOMINGO";
        break;
    case '2':
        echo "SEGUNDA";
        break;
    case '3':
        echo "TERÇA";
        break;
    case '4':
        echo "QUARTA";
        break;
    case '5':
        echo "QUINTA";
        break;
    case '6':
       echo "SEXTA";
        break;
    case '7':
       echo "SÁBADO";
        break;
    
    
    default:
        echo " NÚMERO INVALIDO";
        break;
}
echo "<hr>";

for ($i=1; $i < 11; $i++) { 
    echo "$i -";
}
echo "<hr>";
$a = 1;
while ($a <= 10) {
    echo "$a -";
    $a++;
}
echo "<hr>";
$b = 1;
do {
    echo "$b -";
    $b++;
} while ($b <= 10);
echo "<hr>";
$nomes = ['fulano','ciclano', 'beltrano'];
 foreach ($nomes as $nome) {
    echo " tu apelido és: $nome <br>";
 }
?>