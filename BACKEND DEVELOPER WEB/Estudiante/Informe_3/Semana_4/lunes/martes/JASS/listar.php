<?php
// listar.php
include('db.php');

// Consulta para obtener todos los registros
$query = "SELECT * FROM usuario_jass ORDER BY codigo ASC"; // Suponiendo que tienes un campo `codigo` para ordenar tambien puedes poner DESC(el dato nombre del ultimo va para arriba)

// Preparar la consulta
$statement = $connect->prepare($query);

// Ejecutar la consulta
if ($statement->execute()) {
    // Inicializar el arreglo de datos
    $data = [];

    // Obtener los resultados de la consulta
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }

    // Devolver los datos en formato JSON
    echo json_encode($data);
} else {
    // Si hay un error, mostrarlo
    echo json_encode(['message' => 'Error al obtener los datos']);
}
?>
