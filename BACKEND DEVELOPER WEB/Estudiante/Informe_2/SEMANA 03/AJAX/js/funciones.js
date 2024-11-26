function agregar_datos() {
    var datos = $("#frm_registro").serialize();
    $.ajax({
        method: "POST",
        url: "../proyecto/insertar.php",
        data: datos,
        sucess: function (e) {
            /// condicional if (si)
          if (e==0) {
                alert("Resistrado correctamente!!")
            } else {
                alert("ERROR!!")
            }
        }
    });
    return false;
}