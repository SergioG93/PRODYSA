/*=============================================
EDITAR ASIGNACION DE GRUPO Y Nombre Completo
=============================================*/
$(".tablas").on("click", ".btnEditarAsignacion", function(){

	var idAsignacion = $(this).attr("idAsignacion");

	var datos = new FormData();
	datos.append("idAsignacion", idAsignacion);

	$.ajax({
		url: "ajax/asignacion.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){
            
            $("#editarAMaterno").val(respuesta["Apellido_Materno"]);
            $("#editarAPaterno").val(respuesta["Apellido_Paterno"]);
     		$("#editarNombre").val(respuesta["Nombres"]);
     		$("#idAsignacion").val(respuesta["Id"]);

     	}

	})


})

/*=============================================
BOTON VER EXPEDIENTE
=============================================*/

$(".tablas").on("click", ".btnVerAlumno", function(){

	var idAlumno = $(this).attr("idAlumno");

	window.location = "index.php?ruta=veralumno&idAlumno="+idAlumno;


})

