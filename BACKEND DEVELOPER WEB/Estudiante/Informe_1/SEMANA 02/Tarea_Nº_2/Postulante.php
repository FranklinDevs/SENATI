<?php

include("Conexion.php");

$con = conectar();

$sql = "SELECT * FROM postulante";

$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>

<html lang="en">

<head>

 <title>Formulario de  Persona</title>

 <meta charset="UTF-8">

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" href="css/style.css">

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"

  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>

<div class="container mt-5">

  <div class="row">

   <div class="col-md-3">

    <h1>FORMULARIO PARA POSTULANTES A UN TRABAJO JULIACA CITY</h1>

     <form action="Insertar.php" method="POST">

      <input type="text" class="form-control mb-3" name="codigo_postulante" placeholder="CODIGO POSTULANTE">

      <input type="text" class="form-control mb-3" name="dni" placeholder="DNI">

      <input type="text" class="form-control mb-3" name="nombres" placeholder="NOMBRES">

      <input type="text" class="form-control mb-3" name="apellidos" placeholder="APELLIDOS">

      <input type="text" class="form-control mb-3" name="celular" placeholder="CELULAR">



   

      <label for="carrera">CARRERAS:</label>

      <select class="form-select mb-3" name="carrera[]" id="carrera" multiple>

        <option value="Ingenieria de Software con I.A">Ingenieria de Software con Inteligencia Artificial</option>

        <option value="Medicina">Medicina</option>

        <option value="Derecho">Derecho</option>

        <option value="Arquitectura">Arquitectura</option>

        <option value="Administración">Contabilidad</option>

      </select>





      <div class="form-check">

       <input class="form-check-input" type="radio" name="genero" id="genero" value="Masculino">

       <label class="form-check-label" for="generoMasculino">Masculino</label>

      </div>

      <div class="form-check">

       <input class="form-check-input" type="radio" name="genero" id="genero" value="Femenino" checked>

       <label class="form-check-label" for="generoFemenino">Femenino</label>

      </div>



      <input type="text" class="form-control mb-3" name="ganancia" placeholder="CUÁNTO DESEA GANAR">

      <input type="submit" class="btn btn-primary">

     </form>

   </div>



   <div class="col-md-6">

    <table class="table">

     <thead class="table-success table-striped">

      <tr>

       <th>Codigo</th>

       <th>Dni</th>

       <th>Nombres</th>

       <th>Apellidos</th>

       <th>Celular</th>

       <th>Carrera</th>

       <th>Genero</th>

       <th>Cuánto deseas ganar</th>

       <th></th>

       <th></th>

      </tr>

     </thead>

     <tbody>

      <?php

      while ($row = mysqli_fetch_array($query)) {

      ?>

       <tr>

        <td><?php echo $row['codigo_postulante']; ?></td>

        <td><?php echo $row['dni']; ?></td>

        <td><?php echo $row['nombres']; ?></td>

        <td><?php echo $row['apellidos']; ?></td>

        <td><?php echo $row['celular']; ?></td>

        <td><?php echo $row['carrera']; ?></td>

        <td><?php echo $row['genero']; ?></td>

        <td><?php echo $row['ganancia']; ?></td>

        <td><a href="Actualizar.php?id=<?php echo $row['codigo_postulante']; ?>" class="btn btn-success">Editar</a></td>

        <td><a href="Eliminar.php?id=<?php echo $row['codigo_postulante']; ?>" class="btn btn-danger">Eliminar</a></td>

       </tr>

      <?php 

      }

      ?>

     </tbody>

    </table>

   </div>                   

  </div>

</div>

</body>

</html>