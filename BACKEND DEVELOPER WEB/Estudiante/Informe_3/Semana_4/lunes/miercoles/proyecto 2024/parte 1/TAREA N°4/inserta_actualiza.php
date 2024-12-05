<?php
include('db.php');
$message = '';
$form_data = json_decode(file_get_contents("php://input"));
if ($form_data->txtid == '0') {
    $data = array(
        ':txtnombres' => $form_data->txtnombres,
        ':txtapellidos' => $form_data->txtapellidos,
        ':txtdni' => $form_data->txtdni,
        ':txtcarrera' => $form_data->txtcarrera
    );
    $query ="
        INSERT INTO alumno
        (nombres,apellidos,dni,carrera) VALUES
        (:txtnombres, :txtapellidos, :txtdni, :txtcarrera)";

    $statement = $connect -> prepare($query);
    if ($statement->execute($data)) {
        $message = 'Datos insertados';
    }else{
        $message = 'Error';
    }

}else{
    //funcion actualizar
    $data=array(
        ':txtnombres'=>$form_data->txtnombres,
        ':txtapellidos'=>$form_data->txtapellidos,
        ':txtdni'=>$form_data->txtdni,
        ':txtcarrera'=>$form_data->txtcarrera,
        ':txtid'=>$form_data->txtid
    ); 
    //consulta sql
    $query="UPDATE alumno SET nombres=:txtnombres,
    apellidos=:txtapellidos, dni=:txtdni, carrera=:txtcarrera
    WHERE codigo_alumno=:txtid";
    //conexion con la base de datos
    $statement=$connect->prepare($query);
    if  ($statement->execute($data)){
        $message='Datos actualizados con EXITO!!';
    } else {
        $message='ERROR al Actualizar';
    }



}
echo $message;
?>