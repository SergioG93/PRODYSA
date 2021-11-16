/*=============================================
EDITAR ASPIRANTES
=============================================*/
$(".tablas").on("click", ".btnEditarAspirante", function(){

	var idAspirante = $(this).attr("idAspirante");

	var datos = new FormData();
	datos.append("idAspirante", idAspirante);

	$.ajax({
		url: "ajax/aspirantes.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){


            
            $("#editarMadreTelefono").val(respuesta["Tel_M"]);
            $("#editarMadreEmpresa").val(respuesta["Trabajo_M"]);
            $("#editarProfesionMadre").val(respuesta["Profesion_M"]);
            $("#editarMadre").val(respuesta["Madre"]);


            $("#editarPadreTelefono").val(respuesta["Tel_Tutor"]);
            $("#editarPadreEmpresa").val(respuesta["Trabajo"]);
            $("#editarProfesionPadre").val(respuesta["Profesion"]);
            $("#editarPadre").val(respuesta["Nombre_Tutor"]);

           $("#editarGradoIngresar").val(respuesta["Grado_A_Ingresar"]);
            $("#editarNivelIngresar").val(respuesta["Nivel_A_Ingresar"]);
            $("#editarLocalidad").val(respuesta["Localidad"]);
            $("#editarCPostal").val(respuesta["CP"]);
            $("#editarColonia").val(respuesta["Fraccionamiento"]);
            $("#editarNumExt").val(respuesta["Numero_Ext"]);
            $("#editarNumInt").val(respuesta["Numero_Int"]);
            $("#editarCalle").val(respuesta["Calle"]);

            $("#editarEmail").val(respuesta["Correo"]);
            $("#editarTelefonoMovil").val(respuesta["Telefono_Movil"]);
            $("#editarTelefonoFijo").val(respuesta["Telefono_Fijo"]);
            $("#editarEdadSpt").val(respuesta["Edad_A_Septiembre"]);
            $("#editarReligion").val(respuesta["Religion"]);
            $("#editarEscuelaprocedencia").val(respuesta["Escuela_Procedencia"]);
            $("#editarNacionalidad").val(respuesta["Nacionalidad"]);
            $("#editarFechanacimiento").val(respuesta["Fecha_Nacimiento"]);
            $("#editarLugarnacimiento").val(respuesta["Lugar_Nacimiento"]);
            $("#editarActividad").val(respuesta["Actividad"]);
     		$("#editarAspirante").val(respuesta["Nombre"]);
     		$("#idAspirante").val(respuesta["Id"]);

     	}

	})


})
