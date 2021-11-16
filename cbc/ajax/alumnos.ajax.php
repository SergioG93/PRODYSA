<?php

require_once "../controladores/alumnos.controlador.php";
require_once "../modelos/alumnos.modelo.php";


class AjaxAlumnos{

  
	/*=============================================
	EDITAR ALUMNOS
	=============================================*/	

	public $idAlumnos;

	public function ajaxVerExpediente(){

		$item = "Id";
		$valor = $this->idAlumnos;

		$respuesta = ControladorAlumnos::ctrMostrarAlumnos($item, $valor);

		echo json_encode($respuesta);

    }

    
}

/*=============================================
EDITAR ALUMNOS
=============================================*/	
if(isset($_POST["idAlumnos"])){

	$alumno = new AjaxAlumnos();
	$alumno -> idAlumnos = $_POST["idAlumnos"];
	$alumno -> ajaxVerExpediente();
}
