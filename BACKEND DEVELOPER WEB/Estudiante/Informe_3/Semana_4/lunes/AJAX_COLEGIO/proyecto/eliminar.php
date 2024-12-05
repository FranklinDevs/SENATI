<?php 
include "../conexion/conexion.php";

$cod_doc = $_POST['acod_doc'];

// Asegúrate de escapar la entrada para evitar inyección SQL
$cod_doc = mysqli_real_escape_string($conexion, $cod_doc);

$sql = "DELETE FROM docente WHERE cod_doc='$cod_doc'";

// Ejecutar la consulta y manejar errores
if (mysqli_query($conexion, $sql)) {
    echo "Registro eliminado correctamente.";
} else {
    echo "Error al eliminar el registro: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>