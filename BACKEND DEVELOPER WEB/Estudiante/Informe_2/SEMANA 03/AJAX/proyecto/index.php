<!DOCTYPE html>
<html lang="en">
    <!---encabezado--->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto AJAX</title>
    <script src="../library/js/jquery-3.6.0.min.js"></script>
    <script src="../js/funciones.js"></script>
    <script src="../library/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../library/css/materialize.min.css">
</head>
<!-------cuerpo------>
<body>
    <div class="row">
        <div class="col 14">
            <h4 class="blue-text">Formulario Asistencia</h4>
            <br>
            <form id="frm_registro" method="POST" action="">

                <div class="input-field">
                    <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" value="">
                    <!------parametro------->
                    <label for="nombre">Nombre</label>
                </div>
                <div class="input-field">
                    <!------parametro------->
                    <input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido">
                    <label for="apellido">Apellido</label>
                </div>
                <div class="input-field">
                    <input type="text" name="dni" id="dni" placeholder="Ingrese su dni">
                    <!------parametro------->
                    <label for="dni">DNI</label>
                </div>
                <div class="input-field">
                    <input type="text" name="genero" id="genero" placeholder="Ingrese su genero">
                    <label for="genero">Genero</label>

                </div>
                
                <br><br>
                <div class="input-field">
                    <button type="submit" name="boton_guardar" id="boton_guardar" class="btn-small red">Guardar</button>
                    <label for=""></label>

                </div>
            </form>
        </div>
        <div class="col 16">
            <table>
                <!--encabezadot tabka-->
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>DNI</th>
                        <th>GENERO</th>
                        <th></th>
                    </tr>
                </thead>
                <!--CUERPO DE LA TABLA-->
                <?php
                include '../conexion/conexion.php';
                $sql="SELECT * FROM persona";
                $ejecutar=mysqli_query($conexion,$sql);
                while ($fila=mysqli_fetch_array($ejecutar)) {
                    $datos=$fila[0]."||".
                    $fila[1]."||".
                    $fila[2]."||".
                    $fila[3]."||".
                    $fila[4];
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $fila[0];?></td>
                        <td><?php echo $fila[1];?></td>
                        <td><?php echo $fila[2];?></td>
                        <td><?php echo $fila[3];?></td>
                        <td><?php echo $fila[4];?></td>
                        <td><button class="btn-small green">acciones</button></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <!---boton guardar---->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#boton_guardar").on('click',function(e){
                e.preventDefault();
                agregar_datos();
            });
        });

    </script>
    <!---inicializacion de  sesion script-->
    <script>
        $(document).ready(function(){
            M.AutoInit();
        });
    </script>
    
</body>
</html>