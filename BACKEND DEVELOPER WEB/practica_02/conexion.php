<?php
//conexion.php
function conectar(){
    //variables de conexion
    $host="localhost"; // solo sirve  para Mysql
    $user="root";
    $pass="";
    $bd="practica_02"; // nombre de la base de datos
    //comparacion de variable es para la conexion

    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$bd);
    return $con;
}
?>