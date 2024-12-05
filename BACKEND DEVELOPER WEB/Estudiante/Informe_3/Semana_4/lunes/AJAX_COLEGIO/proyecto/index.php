<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto AJAX CONOCIMIENTO N°3</title>
    <script src="../library/js/jquery-3.6.0.min.js"></script>
    <script src="../js/funciones.js"></script>
    <script src="../js/prueba.js"></script>
    <script src="../library/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../library/css/materialize.min.css">
</head>
<body>
    <div class="row" id="tabla_registro">
        <div class="col l4">
            <h4 class="blue-text">Formulario Para Docente</h4>
            <br>
            <form id="frm_registro" method="POST" action="">
                <div class="input-field">
                    <input type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre" value="">
                    <label for="nombres">Nombres</label>
                </div>
                <div class="input-field">
                    <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido">
                    <label for="apellidos">Apellidos</label>
                </div>
                <div class="input-field">
                    <input type="text" name="dni" id="dni" placeholder="Ingrese su DNI">
                    <label for="dni">DNI</label>
                </div>
                <div class="input-field">
                    <input type="text" name="email" id="email" placeholder="Ingrese su email">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <select name="especialidad" id="especialidad">
                        <option value="Diseño grafico">Diseño grafico</option>
                        <option value="Ing. Software">Ing. Software</option>
                        <option value="Tecnologias de la Informacion">Tecnologias de la Informacion</option>
                    </select>
                    <label for="especialidad">Especialidad</label>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="input-field">
                    <input type="text" name="horario" id="horario" placeholder="Ingrese su horario">
                    <label for="horario">Horario</label>
                </div>
                <div class="input-field">
                    <input type="text" name="celular" id="celular" placeholder="Ingrese su número de celular">
                    <label for="celular">Celular</label>
                </div>
                <div class="input-field">
                    <button type="submit" name="boton_guardar" id="boton_guardar" class="btn-small red">Guardar</button>
                    <label for=""></label>
                </div>
            </form>
        </div>
        <div class="col l6">
            <table>
                <thead>
                    <tr>
                        <th>COD_DOC</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>DNI</th>
                        <th>EMAIL</th>
                        <th>ESPECIALIDAD</th>
                        <th>HORARIO</th>
                        <th>CELULAR</th>
                        <th></th>
                    </tr>
                </thead>
                    <?php
                    include '../conexion/conexion.php';
                    $sql = "SELECT * FROM docente";
                    $ejecutar = mysqli_query($conexion, $sql);
                    while ($fila = mysqli_fetch_array($ejecutar)) {
                        $datos = $fila[0] . "||" . 
                        $fila[1] . "||" . 
                        $fila[2] . "||" . 
                        $fila[3] . "||" . 
                        $fila[4] . "||" . 
                        $fila[5] . "||" . 
                        $fila[6] . "||" . 
                        $fila[7];
                    ?>
                    <tbody>
                    <tr>
                        <td><?php echo $fila[0]; ?></td>
                        <td><?php echo $fila[1]; ?></td>
                        <td><?php echo $fila[2]; ?></td>
                        <td><?php echo $fila[3]; ?></td>
                        <td><?php echo $fila[4]; ?></td>
                        <td><?php echo $fila[5]; ?></td>
                        <td><?php echo $fila[6]; ?></td>
                        <td><?php echo $fila[7]; ?></td>
                        <td><button class="btn-small modal-trigger" data-target="modal1" id="ver_modal" onclick="llenar_Modal_actualizar('<?php echo $datos ?>');">Acciones</button></td>
                        <td><button class="btn-small modal-trigger" data-target="modal1" id="ver_modal" onclick="llenar_Modal_actualizar('<?php echo $datos ?>');">EDITAR</button></td>
                        <td><button class="btn-small modal-trigger" data-target="modal1" id="ver_modal" onclick="llenar_Modal_actualizar('<?php echo $datos ?>');">ELIMINAR</button></td>

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
            <form id="frm_actualizar" method="POST" action="">
                <div class="input-field">
                    <input type="text" name="acod_doc" id="acod_doc" value="">
                    <label for="acod_doc">COD DOC</label>
                </div>
                <div class="input-field">
                    <input type="text" name="anombres" id="anombres"  placeholder="Ingrese su nombre" value="">
                    <label for="anombres">Nombres</label>
                </div>
                <div class="input-field">
                    <input type="text" name="aapellidos" id="aapellidos" placeholder="Ingrese su apellido">
                    <label for="aapellidos">Apellidos</label>
                </div>
                <div class="input-field">
                    <input type="text" name="adni" id="adni" placeholder="Ingrese su dni">
                    <label for="adni">DNI</label>
                </div>
                <div class="input-field">a
                    <input type="text" name="aemail" id="aemail" placeholder="Ingrese su email">
                    <label for="aemail">Email</label>
                </div>
                <div class="input-field col s12">
                    <select name="aespecialidad" id="aespecialidad">
                        <option value="Diseño grafico">Diseño grafico</option>
                        <option value="Ing. Software">Ing. software</option>
                        <option value="Tecnologias de la informacion">Tecnologias de la informacion</option>
                    </select>
                    <label for="aespecialidad">Especialidad</label>
                </div>
                <div class="input-field">
                    <input type="text" name="ahorario" id="ahorario" placeholder="Ingrese su horario">
                    <label for="ahorario">Horario</label>
                </div>
                <div class="input-field">
                    <input type="text" name="acelular" id="acelular" placeholder="Ingrese su número de celular">
                    <label for="acelular">Celular</label>
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

    <script>
        $(document).ready(function(){
            M.AutoInit();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#boton_guardar").on('click',function(e) {
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
