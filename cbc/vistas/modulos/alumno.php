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

$grupo=$_POST['xgrupo'];
$grado=$_POST['xgrado'];
$nivel=$_POST['xnivel'];

////////////////////// BOTON BUSCAR //////////////////////////////////////

if (isset($_POST['buscar']))
{

	if (empty($_POST['xgrado']))
	{
		$where="where Grupo='".$grupo."'";
	}

	else if (empty($_POST['xgrupo']))
	{
		$where="where Grado='".$grado."'";
	}

	else if (empty($_POST['xnivel']))
	{
		$where="where Grupo='".$grupo."'";
	}

	else if (empty($_POST['xgrado']))
	{
		$where="where Nivel='".$nivel."'";
	}

	else if (empty($_POST['xgrupo']))
	{
		$where="where Nivel='".$nivel."'";
	}

	/* else if
	{
		$where="where Grupo='".$grupo."' and Grado='".$grado."'";
	}
 */
	else 
	{
		$where="where Grupo='".$grupo."' and Grado='".$grado."' and Nivel='".$nivel."'";
	}

}
/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////

$query="SELECT * FROM colegiobc $where $limit";
$resAlumnos=$conexion->query($query);
// $resNivel=$conexion->query($query);

if(mysqli_num_rows($resAlumnos)==0)
{
	$mensaje="<h1>No hay registros que coincidan con su criterio de búsqueda.</h1>";
}


?>
<div class="content-wrapper"> 	
	<section class="content-header">
		
		<h1>
		
		Consultas por Grupo
		
		</h1>

		<ol class="breadcrumb">
		
		<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
		
		<li class="active">Por Grupo</li>
		
		</ol>

	</section>


	<section class="content">
		<div class="row">
			
			<!--=====================================
			EL FORMULARIO
			======================================-->
			
			<div class="col-lg-3 col-xs-12">

				
				<div class="box box-success">
				
				<div class="box-header with-border">

				</div>

				<form role="form" method="post" class="formularioVenta">

						<div class="box-body">
			
							<div class="box">

					
								<!--=====================================
								ENTRADA DEL nivel de estudios
								======================================--> 

								<div class="form-group">
								
								<div class="input-group">
									
									<span class="input-group-addon"><i class="fa fa-users"></i></span>
									
									<select class="form-control" id="xnivel" name="xnivel">
											<option value="">Seleccionar Nivel</option>
											<option value="KINDER">KINDER</option>
											<option value="PRIMARIA">PRIMARIA</option>
											<option value="SECUNDARIA">SECUNDARIA</option>
									</select>
									
								</div>
								
								
								</div>
								<!--=====================================
								ENTRADA DEL GRADO
								======================================--> 

								<div class="form-group">
								
								<div class="input-group">
									
									<span class="input-group-addon"><i class="fa fa-users"></i></span>
									
									<select class="form-control" id="xgrado" name="xgrado">

											<option value="">Seleccionar Grado</option>
											<option value="PRIMERO">PRIMERO</option>
											<option value="SEGUNDO">SEGUNDO</option>
											<option value="TERCERO">TERCERO</option>
											<option value="CUARTO">CUARTO</option>
											<option value="QUINTO">QUINTO</option>
											<option value="SEXTO">SEXTO</option>
							
									</select>
									
								</div>
								
								
								</div>

									<!--=====================================
									ENTRADA DEL GRUPO
									======================================--> 
								<div class="form-group">
									
									<div class="input-group">
										
										<span class="input-group-addon"><i class="fa fa-users"></i></span>
										
										<select class="form-control" id="xgrupo" name="xgrupo">

									
												<option value="">Seleccionar Grupo</option>
												<option value="A">A</option>
												<option value="B">B</option>
												<option value="C">C</option>
										
								
										</select>
										
									</div>
									
								</div>

							</div> <!-- fin div box -->

						</div> <!--fin box body -->

						<div class="box-footer">
							<button name="buscar" type="submit" class="btn btn-primary pull-right">Buscar</button>
						
						</div> <!--fin div box-footer-->

					</form> <!-- fin del form -->

				</div> <!-- fin del box success -->            
			</div>	<!-- col-lg-5 -->
				
			<!--=====================================
				LA TABLA DE PRODUCTOS
				======================================-->

				<div class="col-lg-9 hidden-md hidden-sm hidden-xs">
					
					<div class="box box-warning">

					<div class="box-header with-border"></div>

					<div class="box-body">
						
						<table id="table_id" class="table table-bordered table-striped dt-responsive tablas">
						
						<thead>

							<tr>
							<th style="width: 10px">#</th>
							<th>Matricula</th>
							<th>Nombres</th>
							<th>Apellido Paterno</th>
							<th>Apellido Materno</th>
							<th>Nivel</th>
							<th>Grado</th>
							<th>Grupo</th>
							
							</tr>

						</thead>
						<?php

							while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))

							{

								echo'<tr>
									<td>'.$registroAlumnos['Id'].'</td>
									<td>'.$registroAlumnos['Matricula'].'</td>
									<td>'.$registroAlumnos['Nombres'].'</td>
									<td>'.$registroAlumnos['Apellido_Paterno'].'</td>
									<td>'.$registroAlumnos['Apellido_Materno'].'</td>
									<td>'.$registroAlumnos['Nivel'].'</td>
									<td>'.$registroAlumnos['Grado'].'</td>
									<td>'.$registroAlumnos['Grupo'].'</td>
									
 									
								</tr>';
							}
							?>

						</table>
						
						<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
						<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
						<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
						<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
						<script type="text/javascript">
							$(document).ready(function() {
								$('#table_id').DataTable( {
									dom: 'Bfrtip',
									buttons: [
										'print'
									]
								} );
							} );
						</script>
						<script type="text/javascript">
							$(".tablas").on("click", ".btnImprimirDatos", function(){

								var codigoAlumnos = $(this).attr("idAlumnos");

								window.open("extensiones/tcpdf/pdf/pdf.php","_blank");

								})
						</script>
					</div>

					</div>


				</div>
		</div> <!-- fin del box -->
	</section> <!-- content- header -->
</div>  <!-- fin del content-wrapper -->


