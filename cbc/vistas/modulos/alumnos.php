<?php
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////

$host="mysql.hostinger.mx";
$usuario="u193840410_colegiobc";
$contraseña="C12345678x";
$base="u193840410_colegiobc";


$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}
////////////////// VARIABLES DE CONSULTA////////////////////////////////////

$where="";
$nombre=$_POST['xnombre'];
$apellidopaterno=$_POST['xapellidopaterno'];



////////////////////// BOTON BUSCAR //////////////////////////////////////

if (isset($_POST['buscar']))
{

		if (empty($_POST['xapellidopaterno']))
		{
			$where="where Nombres like '".$nombre."%'";
		}
	
		else if (empty($_POST['xnombre']))
		{
			$where="where Apellido_Paterno='".$apellidopaterno."'";
		}
	
		else
		{
			$where="where Nombres like '".$nombre."%' or Apellido_Paterno='".$apellidopaterno."'";
		}
	}
/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////

$query="SELECT * FROM colegiobc $where $limit";
$resAlumnos=$conexion->query($query);


if(mysqli_num_rows($resAlumnos)==0)
{
	$mensaje="<h1>No hay registros que coincidan con su criterio de búsqueda.</h1>";
}


?>
<div class="content-wrapper"> 	
	<section class="content-header">
		
		<h1>
		
		Consultar Expediente de Alumnos
		
		</h1>

		<ol class="breadcrumb">
		
		<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
		
		<li class="active">Busqueda</li>
		
		</ol>

	</section>


	<section class="content">
		<div class="row">
			
			<!--=====================================
			EL FORMULARIO
			======================================-->
			
		
				
			<!--=====================================
				LA TABLA DE PRODUCTOS
				======================================-->

				<div class="col-lg-12 hidden-md hidden-sm hidden-xs">
					
					<div class="box box-warning">

					<div class="box-header with-border"></div>

					<div class="box-body">
						
						<table class="table table-bordered table-striped dt-responsive tablas">
						
						<thead>

							<tr>
							<th style="width: 10px">#</th>
							<th>Matricula</th>
							<th>Nombres</th>
							<th>Apellido_Paterno</th>
							<th>Apellido_Materno</th>
							<th>Nivel</th>
							<th>Grado</th>
							<th>Grupo</th>
							<th>Acciones</th>
							</tr>

						</thead>
						<tbody>
						<?php

							$item = null;
							$valor =null;
							/* $item= null;
							$valor= null; */

							 $respuesta = ControladorAsignacion::ctrMostrarAsignacion($item, $valor);
							
							 foreach ($respuesta as $key => $value) {
           
								echo '<tr>
					 
									   <td>'.($key+1).'</td>
					 
									   <td>'.$value["Matricula"].'</td>
									   <td>'.$value["Nombres"].'</td>
									   <td>'.$value["Apellido_Paterno"].'</td>
									   <td>'.$value["Apellido_Materno"].'</td>	
									   <td>'.$value["Nivel"].'</td>		 
									   <td>'.$value["Grado"].'</td>
									   <td>'.$value["Grupo"].'</td>
									   <td>
					 
										 <div class="btn-group">
											
											<button class="btn btn-warning btnVerAlumno" idAlumno="'.$value["Id"].'">
											<i class="fa fa-pencil"></i>
											</button>
											';
					 
										   
										 echo '</div>  
					 
									   </td>
					 
									 </tr>';
								 }
							?>
							</tbody>
						</table>
								
					</div>

					</div>


				</div>
		</div> <!-- fin del box -->
	</section> <!-- content -->
</div>  <!-- fin del content-wrapper -->
	

