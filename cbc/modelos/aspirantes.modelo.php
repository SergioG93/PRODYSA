<?php

require_once "conexion.php";

class ModeloAspirantes{
    
    
	/*=============================================
	MOSTRAR ASPIRANTES
	=============================================*/

	static public function mdlMostrarAspirantes($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}
	
	
/*=============================================
	EDITAR ASPIRANTE
	=============================================*/

	static public function mdlEditarAspirante($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Nombre = :nombre, Actividad = :Actividad WHERE Id = :id");

		$stmt->bindParam(":id", $datos["Id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["Nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":Actividad", $datos["Actividad"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

    
	
}