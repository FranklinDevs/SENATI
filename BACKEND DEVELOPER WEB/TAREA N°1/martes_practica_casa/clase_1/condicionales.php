<?php
//condicionales
//Ejercicio N°1 Realize un control de entrada mediante la edad de 18 podran ingresar  a la universidad , edad de 12 ingresaran al colegio, edad de 7 ingresaran a la  escuela.

// lectura de datos dinamicos.
$edad = readline("ingrese su edad: ");

if($edad == 18){
    echo "ingresa a la universidad";
}
elseif($edad == 12){
    echo "ingresa al colegio";
}
elseif($edad == 7){
    echo "ingresa a la escuela";
}else{
    echo "error al momento de escribir";
}
?>