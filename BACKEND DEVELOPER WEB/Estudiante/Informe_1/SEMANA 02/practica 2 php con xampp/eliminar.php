<?php
//eliminar.php
include("conexion.php");
$con=conectar();
$codigo_p=$_GET['id'];
$sql="DELETE FROM persona WHERE codigo_p='$codigo_p'";
$query=mysqli_query($con,$sql);

if ($query) {
    Header("Location: persona.php");
}else{
    echo "no se elimina!!!";
}
?>