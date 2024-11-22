<?php
//utilizando for, if y break
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
    break;  // Sale del bucle cuando $i es igual a 5
    }
    echo $i . "<br>";
    }

for ($i = 1; $i <= 5; $i++) {
if ($i == 3) {
echo "Este es el primer mensaje.<br>";
 exit;  // Detiene la ejecución
echo "Este mensaje no se imprimirá.";
 continue;  // Salta a la siguiente iteración cuando $i es igual a 3
}
echo $i . "<br>";
}
echo "Este es el primer mensaje.<br>";
 exit;  // Detiene la ejecución
echo "Este mensaje no se imprimirá.";

?>