function llenarModal_actualiza(datos){
    d=datos.split('||');
    $("#aid").val(d[0]);
    $("#anombre").val(d[1]);
    $("#aapellido").val(d[2]);
    $("#adni").val(d[3]);
    $("#agenero").val(d[4]);
}
function eliminar_datos(){
        var datos=$("#frm_actualizar").serialize();
        $.ajax({
            method:"POST",
            url:"../proyecto/eliminar.php",
            data:datos,
            success:function(e){
                if (e==0) {
                    alert("Registrado CORRECTAMENTE!!");
                } else {
                    alert("Eliminando!");
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
                if (e==0) {
                    alert("Registrado CORRECTAMENTE!!");
                } else {
                    alert("Actualizando");
                    $("#tabla_registro").load('../proyecto/index.php')
                }
            }
        });
        return false;
    }

