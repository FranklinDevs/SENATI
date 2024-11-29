<!DOCTYPE html>
<html lang="en">
<!---cabeza-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAREA N°3 </title>
    <script src="../library/js/jquery-3.6.0.min.js"></script>
    <script src="../js/funciones.js"></script>
    <script src="../js/prueba.js"></script>
    <script src="../library/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../library/css/materialize.min.css">
</head>
<!--cuerpo--->
<body>
    <div class="row" id="tabla_registro">
        <div class="col 14">
            <h4 class="blue-text">Formulario Estudiante Senati Eti</h4>
            <br>
            <form id="frm_registro" method="POST" action="">
                <div class="input-field">
                    <input type="text" name="dni" id="dni" placeholder="Ingrese su dni">
                    <label for="dni">DNI</label>
                </div>

                <div class="input-field">
                    <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" value="">
                    <label for="nombre">Nombre</label>
                </div>
                <div class="input-field">
                    <input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido">
                    <label for="apellido">Apellido</label>
                </div>
                <div class="input-field col s12">
                    <select name="carrera" id="carrera">
                        <option value="Diseño grafico">Diseño grafico</option>
                        <option value="Ing. Software">Ing. Software</option>
                        <option value="Tecnologias de la Informacion">Tecnologias de la Informacion</option>
                    </select>
                    <label for="carrera">Carrera</label>
                </div>

                <div>
                    <label for="genero">Género</label>
                    <p>
                        <label>
                            <input name="genero" id="genero_masculino" type="radio" value="Masculino" checked />
                            <span>Masculino</span>
                        </label>
                        <label>
                            <input name="genero" id="genero_femenino" type="radio" value="Femenino" />
                            <span>Femenino</span>
                        </label>
                    </p>
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
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DNI</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>CARRERA</th>
                        <th>GENERO</th>
                        <th></th>
                    </tr>
                </thead>
                <?php
                include '../conexion/conexion.php';
                $sql = "SELECT * FROM estudiantes";
                $ejecutar = mysqli_query($conexion, $sql);
                while ($fila = mysqli_fetch_array($ejecutar)) {
                    $datos = $fila[0] . "||" .
                        $fila[1] . "||" .
                        $fila[2] . "||" .
                        $fila[3] . "||" .
                        $fila[4] . "||" .
                        $fila[5];
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $fila[0]; ?></td>
                            <td><?php echo $fila[1]; ?></td>
                            <td><?php echo $fila[2]; ?></td>
                            <td><?php echo $fila[3]; ?></td>
                            <td><?php echo $fila[4]; ?></td>
                            <td><?php echo $fila[5]; ?></td>
                            <td><button class="btn-small modal-trigger" data-target="modal1" id="ver_modal" onclick="llenarModal_actualizar('<?php echo $datos; ?>');">Acciones</button></td>

                            <td><button class="btn-small modal-trigger" data-target="modal1" id="ver_modal" onclick="llenarModal_actualizar('<?php echo $datos; ?>');">EDITAR</button></td>

                            <td><button class="btn-small modal-trigger" data-target="modal1" id="ver_modal" onclick="llenarModal_actualizar('<?php echo $datos; ?>');">ELIMINAR</button></td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <form id="frm_actualizar" method="post" action="">
                <div class="input-field">
                    <input type="text" name="aid" id="aid" value="">
                    <label for="aid">ID</label>
                </div>
                <div class="input-field">
                    <input type="text" name="adni" id="adni" placeholder="Ingrese su dni">
                    <label for="adni">DNI</label>
                </div>
                <div class="input-field">
                    <input type="text" name="anombre" id="anombre" placeholder="Ingrese su nombre" value="">
                    <label for="anombre">Nombre</label>
                </div>
                <div class="input-field">
                    <input type="text" name="aapellido" id="aapellido" placeholder="apellido">
                    <label for="aapellido">Apellido</label>
                </div>

                <div class="input-field col s12">
                    <select name="acarrera" id="acarrera">
                        <option value="Diseño grafico">Diseño grafico</option>
                        <option value="Ing. Software">Ing. Software</option>
                        <option value="Tecnologias de la Informacion">Tecnologias de la Informacion</option>
                    </select>
                    <label for="acarrera">Carrera</label>
                </div>

                <div class="input-field">
                    <button type="submit" name="boton_editar" id="boton_editar" class="btn-small blue">Actualizar</button>
                    <label for=""></label>
                </div>
                <div class="input-field">
                    <button type="submit" name="boton_eliminar" id="boton_eliminar" class="btn-small red">Eliminar</button>
                    <label for=""></label>
                </div>
            </form>
        </div>

        <div class="modal-footer">
            <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Salir</a>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#boton_editar").on('click', function(e) {
                e.preventDefault();
                actualizar_datos();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#boton_eliminar").on('click', function(e) {
                e.preventDefault();
                eliminar_datos();
            });
        });
    </script>
    <!---inicializacion de  sesion script-->
    <script>
        $(document).ready(function() {
            M.AutoInit();
        });
    </script>
    <!---boton guardar---->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#boton_guardar").on('click', function(e) {
                e.preventDefault();
                agregar_datos();
            });
        });
    </script>
    <!---inicializacion de  sesion script-->
    <script>
        $(document).ready(function() {
            M.AutoInit();
        });
    </script>


</body>

</html>