<?php
//eliminar php
include "../conexion/conexion.php";
$id=$_POST['aid'];
$dni=$_POST['adni'];
$nombre=$_POST['anombre'];
$apellido=$_POST['aapellido'];
$carrera=$_POST['acarrera'];
$genero=$_POST['agenero'];
$sql="UPDATE estudiantes SET dni='$dni',nombre='$nombre',apellido='$apellido',carrera='$carrera',genero='$genero' WHERE id='$id'";
echo mysqli_query($conexion,$sql);
?>