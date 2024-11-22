<?php
//CONEXION DIRECTA CON LA BASE DE DATOS
include("Conexion.php");
$con = conectar();
$id = $_GET['id'];
$sql = "SELECT * FROM postulante WHERE codigo_postulante='$id'"; 
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Actualizar</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <form action="Funcion_actualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['codigo_postulante']; ?>">
        <input type="hidden" name="dni" value="<?php echo $row['dni']; ?>">
        <input type="text" name="nombres" value="<?php echo $row['nombres']; ?>" class="form-control mb-3" placeholder="Nombres">     
        <input type="text" name="apellidos" value="<?php echo $row['apellidos']; ?>" class="form-control mb-3" placeholder="Apellidos">
        <input type="text" name="celular" value="<?php echo $row['celular']; ?>" class="form-control mb-3" placeholder="Celular">
        <input type="text" name="carrera" value="<?php echo $row['carrera']; ?>" class="form-control mb-3" placeholder="carrera">    
    
        <div class="form-check">
          <input class="form-check-input" type="radio" name="genero" id="genero" value="Masculino" checked>
          <label class="form-check-label" for="genero"> Masculino </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="genero" id="genero" value="Femenino">
          <label class="form-check-label" for="genero"> Femenino </label>
        </div>
        <input type="text" name="ganancia" value="<?php echo $row['ganancia']; ?>" class="form-control mb-3" placeholder="Monto que deseas ganar"> 
        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
    </form>
  </div>
</body>
</html>
