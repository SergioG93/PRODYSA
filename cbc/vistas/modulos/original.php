<?php
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////

$host="localhost";
$usuario="root";
$contraseña="root";
$base="pos";


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
		
		Consultas
		
		</h1>

		<ol class="breadcrumb">
		
		<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
		
		<li class="active">Consultar Expediente</li>
		
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

					<form role="form" method="post" >

						<div class="box-body">
			
							<div class="box">

								<!--=====================================
								ENTRADA DEL Nombre
								======================================--> 

								<div class="form-group">
								
								<div class="input-group">
									
									<span class="input-group-addon"><i class="fa fa-users"></i></span>
									
									<input type="text" class="form-control" id="xnombre" placeholder="Nombre..." name="xnombre"/>
							
								</div>
								
								
								</div>

									<!--=====================================
									ENTRADA DEL GRADO
									======================================--> 
								<div class="form-group">
									
									<div class="input-group">
										
										<span class="input-group-addon"><i class="fa fa-users"></i></span>

										<input type="text" class="form-control" placeholder="Apellido Paterno" id="xapellidopaterno" name="xapellidopaterno"/>
										
										
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
						
						<table class="table table-bordered table-striped dt-responsive tablas">
						
						<thead>

							<tr>
							<th style="width: 10px">#</th>
							<th>Matricula</th>
							<th>Nombres</th>
							<th>Apellido_Paterno</th>
							<th>Apellido_Materno</th>
							<th>Nivel</th>
							<th>Grupo</th>
							<th>Grado</th>
							<th>Acciones</th>
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
									<td>'.$registroAlumnos['Grupo'].'</td>
									<td>'.$registroAlumnos['Grado'].'</td>
									
									<td>

									<div class="btn-group">

									<button class="btn btn-warning btnEditarVenta" idAlumnos="'.$registroAlumnos["Id"].'">
									<i class="fa fa-pencil"></i></button>
									
										
										

										</button>

									';
									

									echo '</div>  

								</td>

								</tr>';
							}
							?>

						</table>
								<script type="text/javascript">
								function objetoAjax(){
									var xmlhttp=false;
									try {
										xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");

									} catch (e) {
										try {
											xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
										} catch (E) {

											xmlhttp = false;
											
										}
									}
									if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
										xmlhttp = new XMLHttpRequest();
									}
									return xmlhttp;
								}
									function Enviar () {
										valor = document.getElementById('idVenta').value;
										alert(valor);
									}
								</script>
					</div>

					</div>


				</div>
		</div> <!-- fin del box -->
	</section> <!-- content -->
</div>  <!-- fin del content-wrapper -->
	

