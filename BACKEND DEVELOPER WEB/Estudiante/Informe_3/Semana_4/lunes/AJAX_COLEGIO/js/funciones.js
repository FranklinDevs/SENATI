function agregar_datos(){
    var datos=$("#frm_registro").serialize();
    $.ajax({
        method:"POST",
        url:"../proyecto/insertar.php",
        data:datos,
        success:function(e){
            if (e==0) {
                alert("Registrando CORRECTAMENTE!!");
            } else {
                alert("Error al registrar: ");
            }
        }
    });
    return false;
}
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