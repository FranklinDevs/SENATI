<?php
include('db.php');
$message = '';
$form_data = json_decode(file_get_contents("php://input"));
if ($form_data->txtid == '0') {
    $data = array(
        ':txtnombre' => $form_data->txtnombre,
        ':txtapellidos' => $form_data->txtapellidos,
        ':txtdni' => $form_data->txtdni,
        ':txtcodigo_jass' => $form_data->txtcodigo_jass,
        ':txtnombre_jass' => $form_data->txtnombre_jass
    );
    $query ="
        INSERT INTO usuario_jass
        (nombre,apellidos,dni,codigo_jass,nombre_jass) VALUES
        (:txtnombre, :txtapellidos, :txtdni, :txtcodigo_jass, :txtnombre_jass)";

    $statement = $connect -> prepare($query);
    if ($statement->execute($data)) {
        $message = 'Datos insertados';
    }else{
        $message = 'Error';
    }

}else{
    //funcion actualizar
    $data=array(
        ':txtnombre'=>$form_data->txtnombre,
        ':txtapellidos'=>$form_data->txtapellidos,
        ':txtdni'=>$form_data->txtdni,
        ':txtcodigo_jass'=>$form_data->txtcodigo_jass,
        ':txtnombre_jass'=>$form_data->txtnombre_jass,
        ':txtid'=>$form_data->txtid
    ); 
    //consulta sql
    $query="UPDATE usuario_jass SET nombre=:txtnombre,
    apellidos=:txtapellidos, dni=:txtdni, codigo_jass=:txtcodigo_jass,
    nombre_jass=:txtnombre_jass WHERE codigo=:txtid";
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