<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=mysql.hostinger.mx;dbname=u193840410_colegiobc",
			            "u193840410_colegiobc",
			            "C12345678x");

		$link->exec("set names utf8");

		return $link;

	}

}