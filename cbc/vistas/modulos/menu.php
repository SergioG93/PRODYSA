<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

			<?php

					if($_SESSION["perfil"] == "Administrador"){

						echo '<li class="active">

								<a href="inicio">

									<i class="fa fa-home"></i>
									<span>Inicio</span>

								</a>

							</li>
							
							<li>

								<a href="usuarios">

									<i class="fa fa-users"></i>
									<span>Usuarios</span>

								</a>

							</li>

							<li>

								<a href="aspirantes">

									<i class="fa fa-user-circle"></i>
									<span>Aspirantes</span>

								</a>

							</li>
						
							<li class="treeview">

							<a href="#">

								<i class="fa fa-list-ul"></i>
								
								<span>Alumnos</span>
								
								<span class="pull-right-container">
								
									<i class="fa fa-angle-left pull-right"></i>

								</span>

							</a>

							<ul class="treeview-menu">
								
								<li>

									<a href="asignacion">
										
										<i class="fa fa-cogs"></i>
										<span>Asignar Grupos</span>

									</a>

								</li>
								
								<li>
									<a href="alumnos">
									
										<i class="fa fa-folder-open"></i>
										<span>Consultar Expediente</span>

									</a>

								</li>
								<li>
									<a href="alumno">
										<i class="fa fa-user-plus"></i>
										<span>Consulta por grupo</span>
									</a>
								</li>
							
							</ul>
							</li>

							

						</li>';
					
					}
			?>
		</ul>
	 </section>

</aside>