<?php
include "../conexion/conexion.php";
//declarando variables de base de datos
//no se declara variables auto incrementables
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$dni=$_POST["dni"];
$genero=$_POST["genero"];
//conexion con SQL
$sql="INSERT INTO persona(nombre,apellido,dni,genero) 
VALUES('$nombre','$apellido','$dni','$genero')";
//Funcion predeterminada ára insercion de datos mediante sql
echo mysqli_query($conexion,$sql);
?>