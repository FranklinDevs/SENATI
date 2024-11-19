<?php
include("conexion.php");
$con = conectar();
$codigo_estudiante =$_GET['id'];
//consulta sql para eliminar
$sql="DELETE FROM estudiante WHERE codigo_estudiante='$codigo_estudiante'";
$query=mysqli_query($con,$sql);

//gestion de errores
if ($query) {
    Header("Location: estudiante.php");
}else{
    echo "no se elimina!!!";
}
?>