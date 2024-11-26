<?php
//documento de conexion con la base de datos
//declarar variable de conexion
$servidor="localhost";
$usuario="root";
$contraseña="";
$bd="practica_04";//nombre de la base de datos
//linea de conexion
$conexion=mysqli_connect($servidor,$usuario,$contraseña,$bd);
//gestion de errores(gestion de conexion)
if ($conexion) {
  //  echo"se conecto de forma EXITOSA";
} else {
    echo"ERROR al conectar";
}
?>