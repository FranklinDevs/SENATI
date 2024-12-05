function llenar_Modal_actualizar(datos){
    d=datos.split('||');
    $("#acod_doc").val(d[0]);
    $("#anombres").val(d[1]);
    $("#aapellidos").val(d[2]);
    $("#adni").val(d[3]);
    $("#aemail").val(d[4]);
    $("#aespecialidad").val(d[5]);
    $("#ahorario").val(d[6]);
    $("#acelular").val(d[7]);
}
function eliminar_datos(){
    var datos=$("#frm_actualizar").serialize();
    $.ajax({
        method:"POST",
        url:"../proyecto/eliminar.php",
        data:datos,
        success:function(e){
            if (e==0) {
                alert("Registrando CORRECTAMENTE||");
            } else {
                alert("eliminando!!");
                $("#tabla_registro").load('../proyecto/index.php')
            }
        }
    });
    return false;
}
function actualizar_datos(){
    var datos=$("#frm_actualizar").serialize();
    $.ajax({
        method:"POST",
        url:"../proyecto/actualizar.php",
        data:datos,
        success:function(e){
            if (e==0){
                alert("Registrando correctamente");
            } else {
                alert("actualizando");
                $("#tabla_registro").load('../proyecto/index.php')
            }
        }
    });
    return false;
}