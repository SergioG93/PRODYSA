/*=============================================
EDITAR CLIENTE
=============================================*/
$(".tablas").on("click", ".btnVerExpediente", function(){

	var idAlumnos = $(this).attr("idAlumnos");

	var datos = new FormData();
	datos.append("idAlumnos", idAlumnos);

	$.ajax({
		url: "ajax/alumnos.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){


     		$("#verNombre").val(respuesta["Nombre"]);
     		$("#idAlumnos").val(respuesta["Id"]);

     	}

	})


})

