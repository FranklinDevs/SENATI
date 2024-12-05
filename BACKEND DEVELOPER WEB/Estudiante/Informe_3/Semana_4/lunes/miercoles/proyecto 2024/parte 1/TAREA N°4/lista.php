<?php
include('db.php');
$query = "SELECT * FROM alumno ORDER BY codigo_alumno ASC"; ## TAMBIEN SE PUEDE COLOCAR DE FORMA DESCENDENTE CON (DESC)
$statement = $connect -> prepare($query);
if ($statement->execute()){
    while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {
        $data[]=$row;
    }
    echo json_encode($data);
}
?>