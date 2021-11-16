<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";

require_once "controladores/aspirantes.controlador.php";
require_once "controladores/asignacion.controlador.php";

require_once "modelos/usuarios.modelo.php";

require_once "modelos/aspirantes.modelo.php";
require_once "modelos/asignacion.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();