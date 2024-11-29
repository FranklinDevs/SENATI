<!DOCTYPE html>
<html lang="en">
    <!---encabezado--->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto AJAX 2024</title>
    <script src="../library/js/jquery-3.6.0.min.js"></script>
    <script src="../js/funciones.js"></script>
    <script src="../js/prueba.js"></script>
    <script src="../library/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../library/css/materialize.min.css">
</head>
<!-------cuerpo------>
<body>
    <div class="row" id="tabla_registro">
        <div class="col 14">
            <h4 class="blue-text">Formulario de Asistencia</h4>
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
                <div class="input-field col s12">
                <select name="genero" id="genero">
                    <option value="" disable selected >Selecciona un genero</option>
                    <option value="Masculino">Masculino </option>
                    <option value="Femenino">Femenino </option>
                    <option value="Otros">Otros </option>
                </select>
                    <label for="genero">Genero</label>
                </div>
                <br><br>
                <div class="input-field">
                    <button type="submit" name="boton_guardar" id="boton_guardar" class="btn-small green">Guardar</button>
                    <label for=""></label>

                </div>
            </form>
        </div>
        <div class="col 16">
            <table>
                <!--encabezado de tabla-->
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
                        <td><button class="btn-small modal-trigger" data-target="modal1" id="ver_modal" onclick="llenarModal_actualiza('<?php echo $datos ?>');">Acciones</button></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div id="modal1" class="modal">
        <div class="modal_content">
            <form  id="frm_actualizar" method="post"action="">
            <div class="input-field">
                    <input type="text" name="aid" id="aid"  value="">
                    <label for="aid">ID</label>
                </div>
            <div class="input-field">
                    <input type="text" name="anombre" id="anombre" placeholder="Ingrese su Nombre" value="">
                    <label for="anombre">Nombre</label>
                </div>
                <div class="input-field">
                    <input type="text" name="aapellido" id="aapellido" placeholder="Ingrese su Apellido">
                    <label for="aapellido">Apellido</label>
                </div>
                <div class="input-field">
                    <input type="text" name="adni" id="adni" placeholder="Ingrese su DNI">
                    <label for="adni">DNI</label>
                </div>
                <div class="input-field col s12">
                <select name="agenero" id="agenero">
                    <option value="Masculino">Masculino </option>
                    <option value="Femenino">Femenino </option>
                    <option value="Otros">Otros </option>
                </select>
                    <label for="agenero">Genero</label>
                </div>
                <br><br>
                <div class="input-field">
                    <button type="submit" name="boton_editar" id="boton_editar" class="btn-small green">Editar</button>
                    <label for=""></label>

                </div>
                <div class="input-field">
                    <button type="submit" name="boton_eliminar" id="boton_eliminar" class="btn-small red">Eliminar</button>
                    <label for=""></label>

                </div>

            </form>

        </div>
        <div class="modal_footer">
            <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Salir</a>

        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#boton_editar").on('click',function(e){
                e.preventDefault();
                actualizar_datos();
            });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#boton_eliminar").on('click',function(e){
                e.preventDefault();
                eliminar_datos();
            });
        });

    </script>
    <!---inicializacion de  sesion script-->
    <script>
        $(document).ready(function(){
            M.AutoInit();
        });
    </script>
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