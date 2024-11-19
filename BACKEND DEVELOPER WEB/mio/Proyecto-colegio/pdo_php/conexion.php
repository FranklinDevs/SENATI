<?php
//este documente es el enlace entre base de datos y nuestro sistema
//funcion para conectar con la base datos
function conectar(){
    //variables de conexion
    $host="localhost";
    $user="root";
    $pass="";
    $bd="pdo_colegio";
    //compraracion de variable spara la conexion

    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$bd);
    return $con;

}
?>