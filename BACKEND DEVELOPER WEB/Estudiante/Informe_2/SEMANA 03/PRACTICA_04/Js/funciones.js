function agregar_datos (){
    var datos=$("#frm_registro").serialize();
    $.ajax({
        method:"POST",
        url:"../Proyecto/insertar.php",
        data:datos,
        success:function(e){
            if (e==1) {
               // alert("Registrando EXITOSO..");
            } else {
                alert("ERROR intente de nuevo..");
            }
        }
    });
    return false;
}