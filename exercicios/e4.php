<?php
$numero = 5;
echo '<pre>';
echo "Tabuada do $numero:\n";

for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "\n";
}
echo '</pre>';
?>