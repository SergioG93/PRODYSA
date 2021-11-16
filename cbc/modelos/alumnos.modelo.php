<?php

require_once "conexion.php";

class ModeloAlumnos{

	/*=============================================
	MOSTRAR ALUMNOS
	=============================================*/

	static public function mdlMostrarAlumnos($tabla, $item, $valor){

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

	static public function mdlVerAlumnos($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Nombre = :nombre WHERE Id = :id");

		$stmt->bindParam(":id", $datos["Id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["Nombre"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

}
	