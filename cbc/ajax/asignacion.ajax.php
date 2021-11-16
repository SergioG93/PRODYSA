<?php

require_once "../controladores/asignacion.controlador.php";
require_once "../modelos/asignacion.modelo.php";

class AjaxAsignacion{

	/*=============================================
	EDITAR ASIGNACION
	=============================================*/	

	public $idAsignacion;

	public function ajaxEditarAsignacion(){

		$item = "Id";
		$valor = $this->idAsignacion;

		$respuesta = ControladorAsignacion::ctrMostrarAsignacion($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR ASIGNACION
=============================================*/	
if(isset($_POST["idAsignacion"])){

	$asignacion = new AjaxAsignacion();
	$asignacion -> idAsignacion = $_POST["idAsignacion"];
	$asignacion -> ajaxEditarAsignacion();
}
