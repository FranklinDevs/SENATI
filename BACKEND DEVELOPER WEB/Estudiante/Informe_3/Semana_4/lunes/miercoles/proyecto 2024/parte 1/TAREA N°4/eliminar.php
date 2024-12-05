<?php 
//eliminar.php
include('db.php');
$message='';
$data = json_decode(file_get_contents("php://input"));
$id=$data->id;
//consulta sql
$query="DELETE FROM alumno WHERE codigo_alumno='$id'";
$statement = $connect->prepare($query);
if ($statement->execute()){
    $message="Datos eliminados!!";
} else {
    $message="Error al borrar!!";
}
echo $message;

?>