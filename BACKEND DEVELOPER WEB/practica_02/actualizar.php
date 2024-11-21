<?php
//conexion directa a la base de dtos
include("conexion.php");
$con = conectar();
$id=$_GET['id'];
$sql="SELECT * FROM persona WHERE codigo_p='$id'"; 
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
        <form action="f_actualizar.php" method="POST">
            <input type="hiden" name="codigo_p" value="<?php echo $row['codigo_p']?>">
            <input type="text" name="nombres" value="<?php echo $row['nombres']?>">
            <input type="text" name="apellidos" value="<?php echo $row['apellidos']?>">
            <input type="text" name="telefono" value="<?php echo $row['telefono']?>">
            <input type="text" name="genero" value="<?php echo $row['genero']?>">

            <div class="form-check">
                   <input class="form-check-input" type="radio" name="genero" id="genero" value="Masculino">
                   <label class="form-check-label" for="<?php echo $row['genero']?>">MASCULINO</label>
            </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="genero" value="Femenino">
                    <label class="form-check-label" for="<?php echo $row['genero']?>">FEMENINO</label>
                </div>
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
    </div> 
</body>
</html>