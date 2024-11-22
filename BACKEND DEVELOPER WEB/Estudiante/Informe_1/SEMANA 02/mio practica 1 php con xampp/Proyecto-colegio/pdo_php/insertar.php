<?php
//FUNCION PARA AGREGAR DATOS A LA BASE DE DATOS MEDIANTE EL FORMULARIO
include("conexion.php");
$con = conectar();

///variables para guardar datos ingresados por teclado
$codigo_estudiante=$_POST['codigo_estudiante'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="INSERT INTO estudiante VALUES('$codigo_estudiante','$dni','$nombres','$apellidos')";
$query=mysqli_query($con,$sql);

//gestion de error mediante estructura simple
if ($query) {
    Header("Location: estudiante.php");
}else{
    echo "no se inserta !!!";
}
?>