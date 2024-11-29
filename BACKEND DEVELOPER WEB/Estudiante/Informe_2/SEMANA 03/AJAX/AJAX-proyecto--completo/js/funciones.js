function agregar_datos() {
    var datos = $("#frm_registro").serialize();
    $.ajax({
        method: "POST",
        url: "../proyecto/insertar.php",
        data: datos,
        sucess: function (e) {
            /// condicional if (si)
          if (e==0) {
                alert("Registrando correctamente!!")
            } else {
                alert("ERROR!!");
            }
        }
    });
    return false;
}
function llenarModal_actualiza(datos){
    d=datos.split('||');
    $("#aid").val(d[0]);
    $("#anombre").val(d[1]);
    $("#apellido").val(d[2]);
    $("#adni").val(d[3]);
    $("#agenero").val(d[4]);


}