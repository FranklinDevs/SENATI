<?php
include("conexion.php"); ## conexion.php 
$con=conectar();
$sql="SELECT * FROM persona"; # seleccionar tabla persona
$query=mysqli_query($con,$sql);
$row=($query);
?>
<!--ESTRUCTURA DE LA PAGINA WEB-->
<!DOCTYPE html>
<html lang="en">
    <!-- cabeza  de la pagina web donde le coloque el titulo de la pagina web  y el color color con Bootstrap -->
<head>
    <title>Formulario Persona</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---- Estilo de la pagina web con hoja de estilo CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!---- LINK:  Bootstrap para darle vida a la pagina web -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"rel="stylesheet" 
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<!-- Cuerpo de la pagina web --->
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
<!--- Encabezado h1--->
                <h1>REGISTRO PERSONA</h1>
<!-- Form que realiza un formuklario-->
                    <form action="insertar.php" method="POST">
                        <input type="text" class="form-control mb-3" name="codigo_p" placeholder="CODIGO PERSONA">
                        <input type="text" class="form-control mb-3" name="nombres" placeholder="NOMBRES">
                        <input type="text" class="form-control mb-3" name="apellidos" placeholder="APELLIDOS">
                        <input type="text" class="form-control mb-3" name="telefono" placeholder="TELEFONO">                                            
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="genero" id="genero" value="Masculino">
                        <label class="form-check-label" for="genero"> Masculino </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="genero" id="genero" value="Femenino" checked>
                        <label class="form-check-label" for="genero"> Femenino </label>
                        </div>
                        <input type="submit" class="btn btn-primary">
                        </form>
                    </div> 
<!--DIV Y TABLE--> 
                    <div class="col-md-6">
                        <table class="table">
                            <thead class="table-success table-striped">
                                <tr>
                                    <th>Codigo</th>                        
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Telefono</th>
                                    <th>Genero</th>  
                                    <th></th>
                                    <th></th>                                        
                                </tr>
                            </thead>
                    <tbody>
                        <?php
                        while ($row=mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['codigo_p']?></th>                              
                                <th><?php echo $row['nombres']?></th>
                                <th><?php echo $row['apellidos']?></th>
                                <th><?php echo $row['telefono']?></th>
                                <th><?php echo $row['genero']?></th>

                        <!-- LINK DE actualizar.php para editar datos-->
                                <th><a href="actualizar.php?id=<?php echo $row['codigo_p']?>" class="btn btn-info">Editar</a></th>
                        <!-- LINK DE eliminar.php para eliminar datos-->
                                <th><a href="eliminar.php?id=<?php echo $row['codigo_p']?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>       
                </thead>                                                                             
            </div>
        </div>   
    </body>
</head>
</html>