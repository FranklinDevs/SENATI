<?php
include "../conexion/conexion.php";
$cod_doc=$_POST['acod_doc'];
$nombres=$_POST['anombres'];
$apellidos=$_POST['aapellidos'];
$dni=$_POST['adni'];
$email=$_POST['aemail'];
$especialidad=$_POST['aespecialidad'];
$horario=$_POST['ahorario'];
$celular=$_POST['acelular'];
$sql="UPDATE docente SET nombres='$nombres',apellidos='$apellidos',dni='$dni',email='$email',especialidad='$especialidad',horario='$horario',celular='$celular' WHERE cod_doc='$cod_doc'";
echo mysqli_query($conexion,$sql);
?>