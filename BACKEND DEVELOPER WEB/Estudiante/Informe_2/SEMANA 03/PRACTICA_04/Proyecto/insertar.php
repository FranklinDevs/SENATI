<?php
include "../Conexion/conexion.php";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$genero = $_POST['genero'];
$año_nacimiento = $_POST['año_nacimiento'];
// Calcular la edad a partir del año de nacimiento
$edad = date('Y') - $año_nacimiento;
// Insertando los datos en la base de datos
$sql = "INSERT INTO persona (nombre, apellido, dni, genero, año_nacimiento, edad) 
        VALUES ('$nombre', '$apellido', '$dni' , '$genero', '$año_nacimiento', '$edad')";
if (mysqli_query($conexion, $sql)) {
    echo 1; 
} else {
    echo 0;
}
?>
