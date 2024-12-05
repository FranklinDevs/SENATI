<?php
include "../conexion/conexion.php";
//declarando variables de la base datos
//no se declara variables auto incrementables
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$dni=$_POST['dni'];
$email=$_POST['email'];
$especialidad=$_POST['especialidad'];
$horario=$_POST['horario'];
$celular=$_POST['celular'];
//conexion SQL
$sql="INSERT INTO docente(nombres,apellidos,dni,email,especialidad,horario,celular) 
VALUES('$nombres','$apellidos','$dni','$email','$especialidad','$horario','$celular')";
//funcion predeterminada para insercion de datos mediante sql
echo mysqli_query($conexion,$sql);
?>