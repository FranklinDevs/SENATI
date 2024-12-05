<?php
include('db.php');
$query = "SELECT * FROM usuario_jass ORDER BY codigo ASC"; ## TAMBIEN SE PUEDE COLOCAR DE FORMA DESCENDENTE CON (DESC)
$statement = $connect -> prepare($query);
if ($statement->execute()){
    while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {
        $data[]=$row;
    }
    echo json_encode($data);
}
?>