<?php
// Insertar.php
include("Conexion.php");
$con = conectar();

$codigo_postulante = $_POST['codigo_postulante'];
$dni = $_POST['dni'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$celular = $_POST['celular'];
$carrera = isset($_POST['carrera']) ? implode(", ", $_POST['carrera']) : "Especifique por favor"; 
$genero = $_POST['genero'];
$ganancia = $_POST['ganancia'];

$sql = "INSERT INTO postulante (codigo_postulante, dni, nombres, apellidos, celular, carrera, genero, ganancia) 
        VALUES ('$codigo_postulante', '$dni', '$nombres', '$apellidos', '$celular', '$carrera', '$genero', '$ganancia')";
$query = mysqli_query($con,$sql);
if ($query) {
    Header("Location: Postulante.php");
} else {
    echo "¡No se pudo insertar  los datos correctos";
}
?>
