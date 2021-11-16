<?php

require_once "../controladores/aspirantes.controlador.php";
require_once "../modelos/aspirantes.modelo.php";

class AjaxAspirantes{

	/*=============================================
	EDITAR ASPIRANTES
	=============================================*/	

	public $idAspirante;

	public function ajaxEditarAspirante(){

		$item = "Id";
		$valor = $this->idAspirante;

		$respuesta = ControladorAspirantes::ctrMostrarAspirantes($item, $valor);

		echo json_encode($respuesta);

    }

    
}

/*=============================================
EDITAR ASPIRANTES
=============================================*/	
if(isset($_POST["idAspirante"])){

	$aspirante = new AjaxAspirantes();
	$aspirante -> idAspirante = $_POST["idAspirante"];
	$aspirante -> ajaxEditarAspirante();
}
