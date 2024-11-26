<!DOCTYPE html>
<html lang="en">
<!--cabeza--->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA Nº4</title>
    <script src="../library/js/jquery-3.6.0.min.js"></script>
    <script src="../Js/funciones.js"></script>
    <script src="../library/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../library/css/materialize.min.css">
</head>
<!---cuerpo-->
<body>
    <div class="row">
        <div class="col 14">
            <h4 class="blue-text">Formulario para Asistencia</h4>
            <form id="frm_registro" method="POST" action="">
                <div class="input-field">
                    <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                    <label for="nombre">Nombre</label>
                </div>
                <div class="input-field">
                    <input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido">
                    <label for="apellido">Apellido</label>
                </div>
                <div class="input-field">
                    <input type="text" name="dni" id="dni" placeholder="Ingrese su dni">
                    <label for="dni">DNI</label>
                </div>
                <div class="input-field">
                    <input type="text" name="genero" id="genero" placeholder="Ingrese su genero">
                    <label for="genero">Género</label>
                </div>
                <div class="input-field">
                    <input type="text" name="año_nacimiento" id="año_nacimiento" placeholder="Ingrese su año de nacimiento">
                    <label for="año_nacimiento">Año de Nacimiento</label>
                </div> 
                <div class="input-field">
                    <button type="submit" name="boton_enviar" id="boton_enviar" class="btn-small dark blue">Enviar</button>
                    <label for=""></label>
                </div>             
            </form>
        </div>
        <div class="col 16">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>DNI</th>
                        <th>GENERO</th>
                        <th>AÑO DE NACIMIENTO</th>
                        <th>EDAD</th>
                    </tr>       
                </thead>
                <tbody>
                    <?php
                    include '../Conexion/conexion.php';
                    $sql = "SELECT * FROM persona";
                    $ejecutar = mysqli_query($conexion, $sql);

                    while ($fila = mysqli_fetch_array($ejecutar)) {
                        $edad = date('Y') - $fila['año_nacimiento'];
                    ?>
                    <tr>
                        <td><?php echo $fila['0']; ?></td>
                        <td><?php echo $fila['1']; ?></td>
                        <td><?php echo $fila['2']; ?></td>
                        <td><?php echo $fila['3']; ?></td>
                        <td><?php echo $fila['4']; ?></td>
                        <td><?php echo $fila['5']; ?></td>
                        <td><?php echo $edad; ?></td>
                        <td><button class="btn-small dark lead ">acciones</button></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#boton_enviar").on('click', function(e){
                e.preventDefault();
                agregar_datos();
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            M.AutoInit();
        });
    </script>

</body>
</html>
