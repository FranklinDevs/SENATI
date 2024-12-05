<?php
// inserta_actualiza.php
include('db.php');

// Recibir los datos enviados desde el formulario
$form_data = json_decode(file_get_contents("php://input"));

// Declarar el mensaje de respuesta
$message = '';

if (!empty($form_data->txtnombre) && !empty($form_data->txtdni)) {
    // Preparar los datos para la inserción
    $data = array(
        ':txtnombre' => $form_data->txtnombre,
        ':txtapellidos' => $form_data->txtapellidos,
        ':txtdni' => $form_data->txtdni,
        ':txtcodigo_jass' => $form_data->txtcodigo_jass,
        ':txtnombre_jass' => $form_data->txtnombre_jass
    );

    // Consulta SQL para insertar los datos
    $query = "INSERT INTO usuario_jass (nombre, apellidos, dni, codigo_jass, nombre_jass) 
            VALUES (:txtnombre, :txtapellidos, :txtdni, :txtcodigo_jass, :txtnombre_jass)";
    
    // Preparar la consulta
    $statement = $connect->prepare($query);

    // Ejecutar la consulta
    if ($statement->execute($data)) {
        $message = 'Datos guardados exitosamente';
    } else {
        $message = 'Error al guardar los datos';
    }
} else {
    $message = 'Datos incompletos';
}

// Enviar el mensaje de respuesta
echo json_encode(['message' => $message]);
?>
