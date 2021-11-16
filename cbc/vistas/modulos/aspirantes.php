
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Aspirantes
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Aspirantes</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
       

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="80%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Folio</th>
           <th>Clave</th>
           <th>Fecha de Registro</th>
           <th>Fecha de Nacimiento</th>
            <th>Lugar de Nacimiento</th>
           <th>Nivel a Ingresar</th>
           <th>Grado a Ingresar</th>
           <th>Actividad</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $aspirantes = ControladorAspirantes::ctrMostrarAspirantes($item, $valor);

          foreach ($aspirantes as $key => $value) {
           
            echo ' <tr>

                    <td>'.($key+1).'</td>
                    <td class="text-uppercase">'.$value["Nombre"].'</td>
                    <td class="text-uppercase">'.$value["Folio"].'</td>
                     <td class="text-uppercase">'.$value["FN"].'</td>
                    <td class="text-uppercase">'.$value["Fecha_Registro"].'</td>
                    <td class="text-uppercase">'.$value["Fecha_Nacimiento"].'</td>
                    <td class="text-uppercase">'.$value["Lugar_Nacimiento"].'</td>
                    <td class="text-uppercase">'.$value["Nivel_A_Ingresar"].'</td>
                    <td class="text-uppercase">'.$value["Grado_A_Ingresar"].'</td>
                    <td class="text-uppercase">'.$value["Actividad"].'</td>
                   
                    <td>

                      <div class="btn-group">
                          
                          
                        <button class="btn btn-warning btnEditarAspirante" data-toggle="modal" data-target="#modalEditarAspirante" idAspirante="'.$value["Id"].'"><i class="fa fa-pencil"></i></button>
                        
                        
                        
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
MODAL EDITAR ASPIRANTES
======================================-->

<div id="modalEditarAspirante" class="modal fade" role="dialog">
  
    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post">

                <!--=====================================
                CABEZA DEL MODAL
                ======================================-->

                    <div class="modal-header" style="background:#3c8dbc; color:white">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Datos del Aspirante</h4>

                    </div>

                <!--=====================================
                CUERPO DEL MODAL
                ======================================-->

                <div class="modal-body">

                    <div class="box-body">

                        <!-- EDITAR PARA EL NOMBRE -->
                        
                        <div class="form-group">
                        
                           <label>Nombre completo del aspirante</label>
                            <div class="input-group">
                            
                                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                                <input type="text" class="form-control input-lg" name="editarAspirante" id="editarAspirante" readonly>

                                <input type="hidden"  name="idAspirante" id="idAspirante" required>

                            </div>

                        </div>
            
                            <!--  1 columnas inicia tercer fila -->
                            

                         <!--  LUGAR DE NACIMIENTO -->

                        <div class="form-group row">

                            <div class="col-xs-4">
                            <label>Lugar de Nacimiento</label>
                                <div class="input-group">
                                
                                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                                    <input type="text" class="form-control input-sm" id="editarLugarnacimiento" name="editarLugarnacimiento" readonly>

                                </div>

                            </div>

                                <!--  Fecha Nacimiento  -->

                            <div class="col-xs-4">
                            <label>Fecha de Nacimiento</label>
                                <div class="input-group">
                                
                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 
                                   
                                    <input type="text" class="form-control input-sm " id="editarFechanacimiento" name="editarFechanacimiento" readonly >

                                </div>


                            </div>

                                <!-- Nacionalidad -->

                            <div class="col-xs-4">
                            <label>Nacionalidad</label>
                                <div class="input-group">
                                
                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                    <input type="text" class="form-control input-sm" id="editarNacionalidad" name="editarNacionalidad" readonly>

                                </div>


                            </div>
                        </div> <!-- fin de la fila -->
                            <!-- Escuela de Procedencia -->
                        <div class="row">

                            <div class="col-xs-6">
                            <label>Escuela de procedencia </label>
                                <div class="input-group">
                                
                                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                                    <input type="text" class="form-control input-sm" id="editarEscuelaprocedencia" name="editarEscuelaprocedencia" readonly>

                                </div>

                            </div>

                            <!-- Religion -->
                            <div class="col-xs-6">
                                <label align-text="center" >Religion</label>
                                    <div class="input-group">
                                    
                                        <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                        <input type="text" class="form-control input-sm" id="editarReligion" name="editarReligion" readonly>

                                    </div>

                                <br>

                            </div>
                            </div> <!--Finaliza el Row--> 

                               <!-- EDAD A SEPTIEMBRE -->
                                
                             <div class="form-group">
                                
                                <label>Edad a Septiembre</label>
                                <div class="input-group">
                                
                                    <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                                    <input type="text" class="form-control input-sm" name="editarEdadSpt" id="editarEdadSpt" readonly>


                                </div>

                            </div>
                        <!-- FIN DE EDAD A SEPTIEMBRE -->
                           <!--  1 columnas inicia tercer fila -->
                            

                         <!--  TELEFONO CASA -->

                         <div class="form-group row">

                            <div class="col-xs-4">
                            <label>Telefono Fijo</label>
                                <div class="input-group">
                                
                                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                                    <input type="text" class="form-control input-sm" id="editarTelefonoFijo" name="editarTelefonoFijo" readonly>

                                </div>

                            </div>

                                <!--  Fecha Nacimiento  -->

                            <div class="col-xs-4">
                            <label>Telefono Movil</label>
                                <div class="input-group">
                                
                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 
                                
                                    <input type="text" class="form-control input-sm " id="editarTelefonoMovil" name="editarTelefonoMovil" readonly >

                                </div>


                            </div>

                                <!-- Nacionalidad -->

                            <div class="col-xs-4">
                            <label>E-Mail</label>
                                <div class="input-group">
                                
                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                    <input type="text" class="form-control input-sm" id="editarEmail" name="editarEmail" readonly>

                                </div>
                            <br>

                            </div>
                            </div> <!-- fin de la fila -->

                            <label>Domicilio:</label>
                            
                
                    <!-- columnas de tercer fila -->
                            

                         <!--  Calle -->

                         <div class="form-group row">

                            <div class="col-xs-6">
                            <label>Calle</label>
                                <div class="input-group">
                                
                                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                                    <input type="text" class="form-control input-sm" id="editarCalle" name="editarCalle" readonly>

                                </div>

                            </div>

                                <!--  Numero Interior  -->

                            <div class="col-xs-3">
                            <label>Num. Int.</label>
                                <div class="input-group">
                                
                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 
                                
                                    <input type="text" class="form-control input-sm " id="editarNumInt" name="editarNumInt" readonly >

                                </div>


                            </div>

                                <!-- Numero Exterior -->

                            <div class="col-xs-3">
                                <label>Num. Ext.</label>
                                    <div class="input-group">
                                    
                                        <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                        <input type="text" class="form-control input-sm" id="editarNumExt" name="editarNumExt" readonly>

                                    </div>
                                </div>
                            </div> <!-- fin de la fila -->

                            <!-- columnas de tercer fila -->
                                

                            <!--  Colonia Fraccionamiento -->

                            <div class="form-group row">

                                <div class="col-xs-5">
                                <label>Fraccionamiento / Colonia</label>
                                    <div class="input-group">
                                    
                                        <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                                        <input type="text" class="form-control input-sm" id="editarColonia" name="editarColonia" readonly>

                                    </div>

                                </div>

                                    <!--  Fecha Nacimiento  -->

                                <div class="col-xs-3">
                                <label>Codigo Postal</label>
                                    <div class="input-group">
                                    
                                        <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 
                                    
                                        <input type="text" class="form-control input-sm " id="editarCPostal" name="editarCPostal" readonly >

                                    </div>


                                </div>

                                    <!-- Localidad -->

                                <div class="col-xs-4">
                                <label>Localidad</label>
                                    <div class="input-group">
                                    
                                        <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                        <input type="text" class="form-control input-sm" id="editarLocalidad" name="editarLocalidad" readonly>

                                    </div>


                                </div>
                                </div> <!-- fin de la fila -->

                                <!-- Nivel a Ingresar -->
                                <div class="row">
                                    <div class="col-xs-6">
                                    <label>Escuela A Ingresar </label>
                                        <div class="input-group">
                                        
                                            <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                                            <input type="text" class="form-control input-sm" id="editarNivelIngresar" name="editarNivelIngresar" readonly>

                                        </div>

                                    </div>

                                    <!-- Grado a Ingresar -->
                                    <div class="col-xs-6">
                                        <label>Grado A Ingresar</label>
                                            <div class="input-group">
                                            
                                                <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                <input type="text" class="form-control input-sm" id="editarGradoIngresar" name="editarGradoIngresar" readonly>

                                            </div>

                                        <br>

                                    </div>
                                </div> <!--Finaliza el Row--> 

                                <hr>
                                <label>Datos del Tutor:</label>

                                <!-- Nombre del Padre -->
                                <div class="row">
                                    <div class="col-xs-6">
                                    <label>Nombre del Padre o Tutor </label>
                                        <div class="input-group">
                                        
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                            <input type="text" class="form-control input-sm" id="editarPadre" name="editarPadre" readonly>

                                        </div>

                                    </div>

                                    <!-- Grado a Ingresar -->
                                    <div class="col-xs-6">
                                        <label>Profesion</label>
                                            <div class="input-group">
                                            
                                                <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                <input type="text" class="form-control input-sm" id="editarProfesionPadre" name="editarProfesionPadre" readonly>

                                            </div>

                                        <br>

                                    </div>
                                </div> <!--Finaliza el Row--> 


                                <!-- Nivel a Ingresar -->
                                <div class="row">
                                    <div class="col-xs-6">
                                    <label>Empresa en la que trabaja</label>
                                        <div class="input-group">
                                        
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                            <input type="text" class="form-control input-sm" id="editarPadreEmpresa" name="editarPadreEmpresa" readonly>

                                        </div>

                                    </div>

                                    <!-- Grado a Ingresar -->
                                    <div class="col-xs-6">
                                        <label>Telefono</label>
                                            <div class="input-group">
                                            
                                                <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                <input type="text" class="form-control input-sm" id="editarPadreTelefono" name="editarPadreTelefono" readonly>

                                            </div>

                                        <br>

                                    </div>
                                </div> <!--Finaliza el Row--> 


                                <!-- Nivel a Ingresar -->
                                <div class="row">
                                    <div class="col-xs-6">
                                    <label>Nombre del Madre o Tutor </label>
                                        <div class="input-group">
                                        
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                            <input type="text" class="form-control input-sm" id="editarMadre" name="editarMadre" readonly>

                                        </div>

                                    </div>

                                    <!-- Grado a Ingresar -->
                                    <div class="col-xs-6">
                                        <label>Profesion</label>
                                            <div class="input-group">
                                            
                                                <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                <input type="text" class="form-control input-sm" id="editarProfesionMadre" name="editarProfesionMadre" readonly>

                                            </div>

                                        <br>

                                    </div>
                                </div> <!--Finaliza el Row--> 


                                <!-- Nivel a Ingresar -->
                                <div class="row">
                                    <div class="col-xs-6">
                                    <label>Empresa en la que trabaja</label>
                                        <div class="input-group">
                                        
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                            <input type="text" class="form-control input-sm" id="editarMadreEmpresa" name="editarMadreEmpresa" readonly>

                                        </div>

                                    </div>

                                    <!-- Grado a Ingresar -->
                                    <div class="col-xs-6">
                                        <label>Telefono</label>
                                            <div class="input-group">
                                            
                                                <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                <input type="text" class="form-control input-sm" id="editarMadreTelefono" name="editarMadreTelefono" readonly>

                                            </div>

                                        <br>

                                    </div>
                                </div> <!--Finaliza el Row--> 

                        <!-- EDICION PARA SELECCIONAR SU ACTIVIDAD O EL ESTADO DEL ASPIRANTE-->

                        <div class="form-group">
                        <label> Selecciona la Actividad o Estatus</label>
                            <div class="input-group">
                            
                                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                                <select class="form-control input-lg" name="editarActividad">
                                
                                    <option value="" id="editarActividad"></option>

                                    <option value="REVISADO">REVISADO</option>

                                    <option value="EN ESPERA DE REVISION">EN ESPERA DE REVISION</option>

                                </select>

                            </div>

                        </div>  <!-- FIN DEL ESTADO DEL ASPIRANTE-->

                          
                    </div> <!--finaliza el box body del cuerpo modal -->

                </div> <!--finaliza el cuerpo modal -->
                        
                        <!--=====================================
                        PIE DEL MODAL
                        ======================================-->

                        <div class="modal-footer">

                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                                <button type="submit" class="btn btn-primary">Guardar cambios</button>

                        </div>

                    <?php

                        $editarAspirante = new ControladorAspirantes();
                        $editarAspirante -> ctrEditarAspirante();

                    ?> 

            </form>

        </div>
        
    </div>
  
</div>
