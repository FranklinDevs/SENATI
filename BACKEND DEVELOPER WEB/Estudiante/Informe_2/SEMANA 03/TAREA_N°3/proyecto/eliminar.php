<?php
//eliminar.php
include "../conexion/conexion.php";
$id=$_POST['aid'];
$sql="DELETE FROM estudiantes WHERE id='$id'";
echo mysqli_query($conexion,$sql);
?>
