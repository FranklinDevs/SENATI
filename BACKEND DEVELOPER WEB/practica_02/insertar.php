<?php
//insertar.php
include("conexion.php");
$con = conectar();
$codigo_p=$_POST['codigo_p'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$genero=$_POST['genero'];
$sql="INSERT INTO persona VALUES('$codigo_p','$nombres','$apellidos','$telefono','$genero')";
$query=mysqli_query($con,$sql);

//gestion de error mediante estructura simple
if ($query) {
    Header("Location: persona.php");
}else{
    echo "no se inserta !!!";
}
?>