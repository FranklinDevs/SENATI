function agregar_datos(){
    var datos=$("#frm_registro").serialize();
    $.ajax({
        method:"POST",
        url:"../proyecto/insertar.php",
        data:datos,
        success:function(e){
            if (e==0) {
                alert("Registrando CORRECTAMENTE!!")
            } else {
                alert("Error!");
            }
        }
    });
    return false;
}
function llenarModal_actualizar(datos){
    d=datos.split('||');
    $("#aid").val(d[0]);
    $("#adni").val(d[1]);
    $("#anombre").val(d[2]);
    $("#aapellido").val(d[3]);
    $("#acarrera").val(d[4]);
    $("#agenero").val(d[5]);
}