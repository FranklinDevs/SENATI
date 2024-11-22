<?php
include("conexion.php");
$con = conectar();
$id=$_GET['id'];
$sql="SELECT * FROM estudiante WHERE codigo_estudiante='$id'"; 
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Actualizar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form action="funcion_actualizar.php" method="POST">
            <input type="hiden" name="codigo_estudiante" value="<?php echo $row['codigo_estudiante']?>">
            <input type="text" name="dni" value="<?php echo $row['dni']?>">
            <input type="text" name="nombres" value="<?php echo $row['nombres']?>">
            <input type="text" name="apellidos" value="<?php echo $row['apellidos']?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
    
</body>
</html>