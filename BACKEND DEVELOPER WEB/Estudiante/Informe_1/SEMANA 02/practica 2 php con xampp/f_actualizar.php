<?php
include("conexion.php");
$con = conectar();
$codigo_p=$_POST['codigo_p'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$genero=$_POST['genero'];

$sql="UPDATE persona SET  nombres='$nombres', apellidos='$apellidos', telefono='$telefono', genero='$genero' WHERE codigo_p='$codigo_p'";

$query=mysqli_query($con,$sql);
//gestion de errores
if ($query) {
    Header("Location: persona.php");
}else{
    echo "error no se actualiza!!!";
}
?>