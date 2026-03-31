<?php

function diferenca($a, $b) {
    
    $a = is_numeric($a) ? (float)$a : 0;
    $b = is_numeric($b) ? (float)$b : 0;
    
    return $a - $b;
}


echo diferenca(20, 7);      
echo "<br>";
echo diferenca("15", 4);   
echo "<br>";
echo diferenca(100, "50");  

?>