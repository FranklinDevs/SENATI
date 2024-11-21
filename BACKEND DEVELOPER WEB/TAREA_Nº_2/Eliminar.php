<?php
include("Conexion.php");
$con = conectar();
$codigo_postulante = $_GET['id'];
$sql = "DELETE FROM postulante WHERE codigo_postulante = '$codigo_postulante'"; 
$query = mysqli_query($con, $sql);
// Gestión de errores
if ($query) {
    Header("Location: Postulante.php"); 
} else {
    echo "No se pudo eliminar!!!"; 
}
?>
