<?php
//crear funcion listar
    include("conexion.php");
    $con=conectar();
    //CONSULTA PARA LISTAR LA TABLA ESTUDIANTE
    $sql="SELECT * FROM estudiante";
    $query=mysqli_query($con,$sql);

    // error al momento de eliminar
    //$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PROYECTO PHP CON MYSQL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>FORMULARIO ESTUDIANTE</h1>
                    <form action="insertar.php" method="POST">
                        <input type="text" class="form-control mb-3" name="codigo_estudiante" placeholder="codigo estudiante">
                        <input type="text" class="form-control mb-3" name="dni" placeholder="dni">
                        <input type="text" class="form-control mb-3" name="nombres" placeholder="nombres">
                        <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos">

                        <input type="submit" class="btn btn-primary">
                    </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Codigo</th>
                            <th>DNI</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row=mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['codigo_estudiante']?></th>
                                <th><?php echo $row['dni']?></th>
                                <th><?php echo $row['nombres']?></th>
                                <th><?php echo $row['apellidos']?></th>

                                <th><a href="actualizar.php?id=<?php echo $row['codigo_estudiante']?>" class="btn btn-info">Editar</a></th>
                                <th><a href="eliminar.php?id=<?php echo $row['codigo_estudiante']?>" class="btn btn-danger">Eliminar</a></th>
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