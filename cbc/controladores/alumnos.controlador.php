<?php

class ControladorAlumnos{

    /*=============================================
	MOSTRAR ASPIRANTES
	=============================================*/

	static public function ctrMostrarAlumnos($item, $valor){

		$tabla = "colegiobc";

		$respuesta = ModeloAlumnos::mdlMostrarAlumnos($tabla, $item, $valor);

		return $respuesta;

	}
	
	/*=============================================
	EDITAR ASPIRANTES
	=============================================*/

	static public function ctrVerAlumnos(){

		if(isset($_POST["idAlumnos"])){


				  $tabla = "colegiobc";

				  $datos = array("Id"=>$_POST["idAlumnos"],
								 "Nombre"=>$_POST["verNombre"]);
								

				  $respuesta = ModeloAlumnos::mdlVerAlumnos($tabla, $datos);

				  if($respuesta == "ok"){

				   echo'<script>

				   swal({
						 type: "success",
						 title: "El aspirante ha sido cambiado correctamente",
						 showConfirmButton: true,
						 confirmButtonText: "Cerrar"
						 }).then(function(result){
								   if (result.value) {

								   window.location = "aspirantes";

								   }
							   })

				   </script>';

			   }


			}

	   }



}