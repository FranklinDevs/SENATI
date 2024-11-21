<?php
//Funcion_actualizar.php
include("Conexion.php");
$con = conectar();

$id = $_POST['id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$celular = $_POST['celular'];
$genero = $_POST['genero'];
$ganancia = $_POST['ganancia'];

$sql = "UPDATE postulante SET 
    nombres = '$nombres',
    apellidos = '$apellidos', 
    celular = '$celular', 
    genero = '$genero', 
    ganancia = '$ganancia' 
    WHERE codigo_postulante = '$id'";

$query = mysqli_query($con, $sql);
// Gestión de errores
if ($query) {
    Header("Location: Postulante.php");
} else {
    echo "¡No se actualiza!";
}
?>
