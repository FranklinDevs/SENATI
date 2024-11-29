<?php
//documento de conexion con la base de datos
//declarar variables de conexion
$servidor="localhost";
$usuario="root";
$contraseña="";
$bd="proyecto_ajax"; //nombre de la base de datos

//linea de conexion
$conexion=mysqli_connect($servidor,$usuario,$contraseña,$bd);
//gestion de errores(gestion de conexion)
/*if ($conexion){
    # code
    echo"se conecto de forma exitosa!!";
}else {
    #code-----
    echo"ERROR AL CONECTAR!!!";
}
?>*/