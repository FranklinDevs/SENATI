<?php
//edades
// 18 es mayor o igual a 18 
$edad = 18;

if($edad >= 18) {
    echo "Eres mayor de edad";
}


$edad = 16;
//edad de 16 es mayor o igual a 18?
if($edad >=18) {
    echo "Eres mayor de edad.";
} else {
    echo "Eres menor de edad.";
}

$edad = 25;
// 25 es menor a 18 ?
if($edad < 18){
    echo "Eres menor de edad";
} elseif ($edad == 18){
    echo "Justo has cumplido la mayoria de edad.";
}else {
    echo "Eres mayor de edad.";
}


$dia = 3;
//dias de la semana
switch($dia) {
    case 1:
        echo "lunes";
        break;
    case 2:
        echo "martes";
        break;
    case 3:
        echo "miercoles";
        break;
    default:
    echo "Dia desconocido";
}
?>


