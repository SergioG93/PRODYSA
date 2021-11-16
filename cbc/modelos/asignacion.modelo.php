<?php

require_once "conexion.php";

class ModeloAsignacion{

	/*=============================================
	MOSTRAR ASIGNACION
	=============================================*/

	static public function mdlMostrarAsignacion($tabla, $item, $valor){

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
	EDITAR ASIGNACION
	=============================================*/

	static public function mdlEditarAsignacion($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Apellido_Materno = :Apellido_Materno, Apellido_Paterno = :Apellido_Paterno, Nombres = :Nombres, Grado = :Grado, Grupo = :Grupo WHERE Id = :Id");
		
		$stmt -> bindParam(":Apellido_Materno", $datos["Apellido_Materno"], PDO::PARAM_STR);
		$stmt -> bindParam(":Apellido_Paterno", $datos["Apellido_Paterno"], PDO::PARAM_STR);	
		$stmt -> bindParam(":Nombres", $datos["Nombres"], PDO::PARAM_STR);	
		$stmt -> bindParam(":Grado", $datos["Grado"], PDO::PARAM_STR);	
		$stmt -> bindParam(":Grupo", $datos["Grupo"], PDO::PARAM_STR);
		$stmt -> bindParam(":Id", $datos["Id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

}