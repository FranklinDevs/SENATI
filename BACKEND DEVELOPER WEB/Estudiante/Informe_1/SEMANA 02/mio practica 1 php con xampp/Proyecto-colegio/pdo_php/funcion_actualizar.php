<?php
include("conexion.php");
$con = conectar();
$codigo_estudiante=$_POST['codigo_estudiante'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE estudiante SET dni='$dni', nombres='$nombres'
, apellidos='$apellidos' WHERE codigo_estudiante='$codigo_estudiante'";

$query=mysqli_query($con,$sql);
//gestion de errores
if ($query) {
    Header("Location: estudiante.php");
}else{
    echo "no se actualiza!!!";
}
?>