<?php

class ControladorAsignacion{

    /*=============================================
	MOSTRAR ALUMNOS COLEGIOBC
	=============================================*/

	static public function ctrMostrarAsignacion($item, $valor){

		$tabla = "colegiobc";

		$respuesta = ModeloAsignacion::mdlMostrarAsignacion($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR ASIGNACION
	=============================================*/

	static public function ctrEditarAsignacion(){

		if(isset($_POST["editarGrupo"])){


				  $tabla = "colegiobc";

				  $datos = array("Id"=>$_POST["idAsignacion"],
				                "Apellido_Materno"=>$_POST["editarAMaterno"],
				 				"Apellido_Paterno"=>$_POST["editarAPaterno"],	 
				  				"Nombres"=>$_POST["editarNombre"],
				                 "Grupo"=>$_POST["editarGrupo"],
								 "Grado"=>$_POST["editarGrado"]);

				  $respuesta = ModeloAsignacion::mdlEditarAsignacion($tabla, $datos);

				  if($respuesta == "ok"){

				   echo'<script>

				   swal({
						 type: "success",
						 title: "El Alumno ha sido asignado correctamente",
						 showConfirmButton: true,
						 confirmButtonText: "Cerrar"
						 }).then(function(result){
								   if (result.value) {

								   window.location = "asignacion";

								   }
							   })

				   </script>';

			   }else{

					echo'<script>
	
						swal({
							  type: "error",
							  title: "¡El no se pudo asignar!",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
								if (result.value) {
	
								window.location = "categorias";
	
								}
							})
	
					  </script>';
	
				}
			   
		}


	}
}