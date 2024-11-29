<?php
## insertar.php
include "../conexion/conexion.php";
//declarar variables de la base de datos
//no se declara variables auto incremetables
$dni=$_POST["dni"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$carrera=$_POST["carrera"];
$genero=$_POST["genero"];

//conexion SQL
$sql="INSERT INTO estudiantes(dni,nombre,apellido,carrera,genero) 
VALUES('$dni','$nombre','$apellido','$carrera','$genero')";
//funcion predeterminada para insercion de datos mediante sql
echo mysqli_query($conexion,$sql);
?>