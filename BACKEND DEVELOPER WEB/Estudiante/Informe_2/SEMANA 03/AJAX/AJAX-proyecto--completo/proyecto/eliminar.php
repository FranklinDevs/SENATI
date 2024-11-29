<?php
//eliminar php
include "../conexion/conexion.php";
$id=$_POST['aid'];
$sql="DELETE FROM persona WHERE id='$id'";
echo mysqli_query($conexion,$sql);

?>