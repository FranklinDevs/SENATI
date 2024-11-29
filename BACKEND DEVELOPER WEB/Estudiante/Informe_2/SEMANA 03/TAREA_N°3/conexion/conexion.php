<?php
## conexion.php
//documento de conexion con la base de datos
//declarar variable de conexion
$servidor="localhost";
$usuario="root";
$contraseña="";
$bd="formulario";//nombre de la base de datos

//linea de conexion
$conexion=mysqli_connect($servidor,$usuario,$contraseña,$bd);
//gestion de errores
/*if ($conexion) {
    # code...
    echo"se conecto de forma EXITOSA!!";
} else {
    # code...
    echo"ERROR!! al conectar";
}

?>*/
