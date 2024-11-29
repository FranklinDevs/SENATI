<?php
//eliminar php
include "../conexion/conexion.php";
$id=$_POST['aid'];
$nombre=$_POST['anombre'];
$apellido=$_POST['aapellido'];
$dni=$_POST['adni'];
$genero=$_POST['agenero'];
$sql="UPDATE persona SET nombre='$nombre',apellido='$apellido',dni='$dni',genero='$genero' WHERE id='$id'";
echo mysqli_query($conexion,$sql);
?>