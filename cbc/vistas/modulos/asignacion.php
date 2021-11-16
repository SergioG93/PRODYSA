
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Asignar Grupos

    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Asignar Grupos</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

      

      </div>

      <div class="box-body">
        
      <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
        
        <thead>
        
        <tr>
          
          <th style="width:10px">#</th>
          <th>Matricula</th>
          <th>Nombres</th>
          <th>Apellido_Paterno</th>
          <th>Apellido_Materno</th>
          <th>Nivel</th>
          <th>Grado</th>
          <th>Grupo</th>
         
          <th>Estatus</th>
          <th>Acciones</th>

        </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $asignacion = ControladorAsignacion::ctrMostrarAsignacion($item, $valor);

          foreach ($asignacion as $key => $value) {
          
            echo ' <tr>

                    <td>'.($key+1).'</td>
                    <td class="text-uppercase">'.$value["Matricula"].'</td>
                    <td class="text-uppercase">'.$value["Nombres"].'</td>
                    <td class="text-uppercase">'.$value["Apellido_Paterno"].'</td>
                    <td class="text-uppercase">'.$value["Apellido_Materno"].'</td>
                    <td class="text-uppercase">'.$value["Nivel"].'</td>
                    <td class="text-uppercase">'.$value["Grado"].'</td>
                    <td class="text-uppercase">'.$value["Grupo"].'</td>
                 
                    <td class="text-uppercase">'.$value["Estatus"].'</td>
                  
                    <td>

                    
                    <div class="btn-group">
                        
                    <button class="btn btn-warning btnEditarAsignacion" data-toggle="modal" data-target="#modalEditarAsignacion" idAsignacion="'.$value["Id"].'"><i class="fa fa-pencil"></i></button>
                    
                  </div>  
                    </td>

                  </tr>';
          }

        ?>

        </tbody>

      </table>

      </div>

    </div>

  </section>

</div>


<!--=====================================
MODAL ASIGNACION DE GRUPO EDITAR GRUPO
======================================-->

<div id="modalEditarAsignacion" class="modal fade " role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Asignacion de Grupos</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

           <!-- ENTRADA PARA EL NOMBRE -->
            
           <div class="form-group row">
              
              <div class="col-xs-4">
                    <label>Nombre</label>
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-sm" name="editarNombre" id="editarNombre">

                    <input type="hidden"  name="idAsignacion" id="idAsignacion" required>

                  </div>

              </div>



              <div class="col-xs-4">
                    <label>Apellido Paterno</label>
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-sm" name="editarAPaterno" id="editarAPaterno" >

                  </div>

              </div>


              <div class="col-xs-4">
                    <label>Apellido Materno</label>
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control input-sm" name="editarAMaterno" id="editarAMaterno">

                  </div>

              </div>


            </div> 

                    <!-- Asignacion del Grado al alumnos-->

                    <div class="form-group">
                                <label> Asigna el Grado</label>
                                    <div class="input-group">
                                    
                                        <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                                        <select class="form-control input-sm" name="editarGrado">
                                        
                                            <option value="" id="editarGrado"></option>

                                             <option value="1">PRIMERO</option>

                                            <option value="2">SEGUNDO</option>

                                            <option value="3">TERCERO</option>

                                            <option value="4">CUARTO</option>
                                            
                                            <option value="5">QUINTO</option>

                                            <option value="6">SEXTO</option>


                                        </select>

                                    </div>

                    </div>  <!-- FIN DEL ESTADO DEL ASPIRANTE-->

                    <!-- Asignacion del Grupo al alumnos-->

                    <div class="form-group">
                                <label> Asigna el Grupo</label>
                                    <div class="input-group">
                                    
                                        <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                                        <select class="form-control input-sm" name="editarGrupo">
                                        
                                            <option value="" id="editarGrupo"></option>

                                            <option value="A">A</option>

                                            <option value="B">B</option>

                                            <option value="C">C</option>
                                            
                                            <option value="D">D</option>
                                            
                                            <option value="K">K</option>

                                            <option value="AK">AK</option>

                                            <option value="BK">BK</option>

                                        </select>

                                    </div>

                    </div>  <!-- FIN DEL ESTADO DEL ASPIRANTE-->

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar</button>

        </div>

      <?php

          $editarAsignacion = new ControladorAsignacion();
          $editarAsignacion -> ctrEditarAsignacion();

        ?> 

      </form>

    </div>

  </div>

</div>

