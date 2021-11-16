


<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Expediente del Alumno
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Expediente</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">

        <!--=====================================
        EL FORMULARIO
        ======================================-->
        
        <div class="col-lg-12 col-xs-12" >
            
            <div class="box box-success">
                
                 <div class="box-header with-border">
               <!--   <button class="btn btn-primary" >
            
                     Grupos

                    </button>
                    <button class="btn btn-primary" >
            
           Asignaturas

           </button>
           <button class="btn btn-primary" >
            
            Documentos
 
            </button>
            <button class="btn btn-primary" >
            
            Imprimir Ultima Boleta
 
            </button>
            <button class="btn btn-primary" >
            
            Cardex
 
            </button>
            <button class="btn btn-primary" >
            
            Historial Academico
 
            </button> -->
                </div>

                    <form role="form" method="post" class="formularioAlumnos">

                            <div class="box-body">
                
                                <div id="exTab3" class="box">	

                                            <?php

                                                $item = "Id";
                                                $valor = $_GET["idAlumno"];

                                                $alumnos = ControladorAsignacion::ctrMostrarAsignacion($item, $valor);

                                            
                                            ?>

                                    
                                            <ul  class="nav nav-pills">
                                                        <li class="active">
                                                                <a  href="#1b" data-toggle="tab">Generales</a>
                                                                </li>
                                                                <li><a href="#2b" data-toggle="tab">Padre</a>
                                                                </li>
                                                                <li><a href="#3c" data-toggle="tab">Madre</a>
                                                                <li><a href="#4a" data-toggle="tab">Medicos</a>
                                                                </li>
                                                                <li><a href="#5a" data-toggle="tab">Academicos</a>
                                                                </li>
                                                                
                                                        </li>
                                                       
                                            </ul>
                                           
                                            <div class="tab-content clearfix">
                                                    <div class="tab-pane active " id="1b">

                                                    
                                                        <!--=====================================
                                                            Datos Generales del Alumno
                                                            ======================================--> 
                                                            <div class="form-group row">
                                                                <div class="col-xs-3">
                                                                    <label>Matricula</label>
                                                                    <div class="input-group">
                                                                        
                                                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                                                    <input type="text" class="form-control" id="nuevaVenta" name="editarVenta" value="<?php echo $alumnos["Matricula"]; ?>" readonly>
                                                                
                                                                    </div>
                                                            
                                                                </div>

                                                            
                                                                <!--=====================================
                                                                ENTRADA DEL CURP
                                                                ======================================-->
                                                                <div class="col-xs-5">
                                                                        <label>Curp </label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                                                                                <input type="text" class="form-control input-sm" id="editarCurp" name="editarCurp"  value="<?php echo $alumnos["Curp"]; ?>" readonly>

                                                                            </div>

                                                                </div>
                                                            
                                                                    
                                                            </div> 

                                                            <div class="form-group row">
                                                                <!--====================================
                                                                    ENTRADA DEL Nombre
                                                                ======================================-->

                                                                <div class="col-xs-4">
                                                                            <label>Nombres </label>
                                                                            <div class="input-group">
                                                                                
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control" id="Nombre" value="<?php echo $alumnos["Nombres"]; ?>" readonly>

                                                                                <input type="hidden" name="idAlumno" value="<?php echo $alumnos["Id"]; ?>">

                                                                            </div>
                                                                </div>
                                                                <!--====================================
                                                                    ENTRADA DEL Apellido Paterno
                                                                ======================================-->

                                                                <div class="col-xs-4">
                                                                            <label>Apellido Paterno </label>
                                                                            <div class="input-group">
                                                                                
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control" id="Nombre" value="<?php echo $alumnos["Apellido_Paterno"]; ?>" readonly>

                                                                                <input type="hidden" name="idAlumno" value="<?php echo $alumnos["Id"]; ?>">

                                                                            </div>
                                                                </div>
                                                                <!--====================================
                                                                    ENTRADA DEL Apellido Materno
                                                                ======================================-->

                                                                <div class="col-xs-4">
                                                                            <label>Apellido Materno </label>
                                                                            <div class="input-group">
                                                                                
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control" id="Nombre" value="<?php echo $alumnos["Apellido_Materno"]; ?>" readonly>

                                                                            
                                                                            </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <!--  Fecha Nacimiento  -->
                                                                    <div class="col-xs-3">
                                                                        <label>Fecha de Nacimiento</label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 
                                                                                
                                                                                <input type="text" class="form-control input-sm " id="editarFechanacimiento" name="editarFechanacimiento"  value="<?php echo $alumnos["Fecha_Nacimiento"]; ?>" readonly >

                                                                            </div>
                                                                    </div>

                                                                    <!-- Nacionalidad -->
                                                                    <div class="col-xs-3">
                                                                        <label>Nacionalidad</label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                <input type="text" class="form-control input-sm" id="editarNacionalidad" name="editarNacionalidad"  value="<?php echo $alumnos["Nacionalidad"]; ?>" readonly>

                                                                            </div>
                                                                    </div>
                                                                    <div class="col-xs-3">
                                                                        <label>Lugar de Nacimiento </label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                                                                                <input type="text" class="form-control input-sm" id="editarCurp" name="editarCurp"  value="<?php echo $alumnos["Lugar_Nacimiento"]; ?>" readonly>

                                                                            </div>

                                                                    </div>
                                                                            <!-- Religion -->
                                                                    <div class="col-xs-3">
                                                                                <label align-text="center" >Religion</label>
                                                                                    <div class="input-group">
                                                                                    
                                                                                        <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="editarReligion" name="editarReligion" value="<?php echo $alumnos["Religion"]; ?>" readonly>

                                                                                    </div>
                                                                    </div>

                                                                 </div> 
                                                                 <div class="form-group row">
                                                             

                                                                <div class="col-xs-4">
                                                                            <label>Edad a Septiembre </label>
                                                                            <div class="input-group">
                                                                                
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control" id="Nombre" value="<?php echo $alumnos["Edad_A_Septiembre"]; ?>" readonly>

                                                                            </div>
                                                                </div>
                                                               

                                                                <div class="col-xs-4">
                                                                            <label>Clave Catastral </label>
                                                                            <div class="input-group">
                                                                                
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control" id="Nombre" value="<?php echo $alumnos["Clave_Catastral"]; ?>" readonly>

                                                                             
                                                                            </div>
                                                                </div>
                                                                

                                                                <div class="col-xs-4">
                                                                            <label>Cuenta de Agua</label>
                                                                            <div class="input-group">
                                                                                
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control" id="Nombre" value="<?php echo $alumnos["Cuenta_Agua"]; ?>" readonly>

                                                                            
                                                                            </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">

                                                                    <div class="col-xs-6">
                                                                        <label>Domicilio</label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                                                                                <input type="text" class="form-control input-sm" id="Domicilio" name="Domicilio" value="<?php echo $alumnos["Domicilio"]; ?>" readonly>

                                                                            </div>

                                                                    </div>
                                                                    <div class="col-xs-3">
                                                                    <label for="">Telefono de Emergencia</label>
                                                                    <input type="text" class="form-control" id="" name="tPP" placeholder=""  pattern="[0-9]{10}" onkeypress="return check(event)" maxlength="10" value="" >
                                                                      
                                                                    </div>
                                                                    <div class="col-xs-3">
                                                                        <label>Nomobre En Caso Emergencia</label>
                                                                        <div class="input-group">
                                                                            
                                                                            <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                                                                            <input type="text" class="form-control input-sm" id="ECE" name="ECE" value="" >

                                                                        </div>


                                                                    </div>


                                                                </div>




                                                    </div> <!--Finaliza el tab 1-->                                                               
                                                  
                                                    <div class="tab-pane" id="2b">  <!-- Datos del Padre -->

                                                            <div class="form-group row">
                                                                    <div class="col-xs-3">
                                                                        <label>Nombre del Padre</label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control input-sm" id="verPadre" name="verPadre" value="<?php echo $alumnos["Nombre_Padre"]; ?>" readonly>

                                                                            </div>

                                                                     </div>

                                                                        <!-- Grado a Ingresar -->
                                                                        <div class="col-xs-3">
                                                                            <label>Edad</label>
                                                                                <div class="input-group">
                                                                                
                                                                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                    <input type="text" class="form-control input-sm" id="EdadPadre" name="EdadPadre"  value="<?php echo $alumnos["Edad_Padre"]; ?>" readonly>

                                                                                </div>

                                                                        </div>
                                                                


                                                                  
                                                                        <div class="col-xs-3">
                                                                            <label>Estado Civil</label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control input-sm" id="EstadoCivil" name="EstadoCivil" value="<?php echo $alumnos["Estado_Civil_Padre"]; ?>" readonly>

                                                                            </div>

                                                                        </div>

                                                                        <!-- Grado a Ingresar -->
                                                                        <div class="col-xs-3">
                                                                            <label>Religion Padre</label>
                                                                                <div class="input-group">
                                                                                
                                                                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                    <input type="text" class="form-control input-sm" id="Religion_Padre" name="Religion_Padre" value="<?php echo $alumnos["Religion_Padre"]; ?>" readonly>

                                                                                </div>

                                                                           

                                                                        </div>
                                                            </div>  

                                                             <div class="form-group row">
                                                                        <div class="col-xs-3">
                                                                        <label>Domicilio</label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control input-sm" id="verPadre" name="verPadre" value="<?php echo $alumnos["Domicilio_Padre"]; ?>" readonly>

                                                                            </div>

                                                                        </div>

                                                                        <!-- Grado a Ingresar -->
                                                                        <div class="col-xs-3">
                                                                            <label>Telefono del Padre</label>
                                                                                <div class="input-group">
                                                                                
                                                                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                    <input type="text" class="form-control input-sm" id="TelefonoPadre" name="TelefonoPadre"  value="<?php echo $alumnos["Telefono_Padre"]; ?>" readonly>

                                                                                </div>

                                                                        </div>
                                                                


                                                                  
                                                                        <div class="col-xs-3">
                                                                            <label>Profesion</label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control input-sm" id="editarPadreProfesion" name="editarPadreProfesion" value="<?php echo $alumnos["Profesion_Padre"]; ?>" readonly>

                                                                            </div>

                                                                        </div>

                                                                        <!-- Grado a Ingresar -->
                                                                        <div class="col-xs-3">
                                                                            <label>Empresa donde Trabaja</label>
                                                                                <div class="input-group">
                                                                                
                                                                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                    <input type="text" class="form-control input-sm" id="editarPadreEmpresa" name="editarPadreEmpresa" value="<?php echo $alumnos["Empresa_Trabajo_Padre"]; ?>" readonly>

                                                                                </div>

                                                                           

                                                                        </div>
                                                                                  
                                                                    
                                                                    </div> 
                                                                    <!--Finaliza el Row--> 
                                                                    <div class="form-group row">

                                                                        <div class="col-xs-3">
                                                                        <label>Puesto del Padre</label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control input-sm" id="PuestoPadre" name="PuestoPadre" value="<?php echo $alumnos["Puesto_Padre"]; ?>" readonly>

                                                                            </div>

                                                                        </div>

                                                                        <!-- Grado a Ingresar -->
                                                                        <div class="col-xs-3">
                                                                            <label>Telefono de Oficina</label>
                                                                                <div class="input-group">
                                                                                
                                                                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                    <input type="text" class="form-control input-sm" id="editarTelefonooficina" name="editarTelefonooficina"  value="<?php echo $alumnos["Telefono_Oficina_Padre"]; ?>" readonly>

                                                                                </div>

                                                                        </div>
                                                                


                                                                  
                                                                        <div class="col-xs-3">
                                                                            <label>Correo Electronico</label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control input-sm" id="CorreoPadre" name="CorreoPadre" value="<?php echo $alumnos["Correo_Padre"]; ?>" readonly>

                                                                            </div>

                                                                        </div>

                                                                        <!-- Grado a Ingresar -->
                                                                        <div class="col-xs-3">
                                                                            <label>Telefono Movil Padre</label>
                                                                                <div class="input-group">
                                                                                
                                                                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                    <input type="text" class="form-control input-sm" id="movilPadre" name="movilPadre" value="<?php echo $alumnos["Tel_Movil_Padre"]; ?>" readonly>

                                                                                </div>

                                                                           

                                                                        </div>
                                                                    </div>    
                                                                    <!--Finaliza el Row--> 

                                                    
                                                                </div><!--Finaliza el tab 3--> 

                                                   
                                                                <div class="tab-pane" id="3b">

                                                                     <!-- Nivel a Ingresar -->
                                                        
                                                                     <div class="form-group row">
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

                                                                     </div>
                                                                    

                                                             </div>
                                                                        <!-- Nivel a Ingresar -->
                                                            <div class="form-group row">
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

                                                                            </div>
                                                            </div> <!--Finaliza el Row--> 

                                                    </div> <!-- <!--Finaliza el tab 2-->  
                                                    <div class="tab-pane" id="3c">  
                                                        <!-- Datos del Madre -->

                                                                    <div class="form-group row">
                                                                            <div class="col-xs-3">
                                                                                <label>Nombre de la Madre</label>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="verMadre" name="verMadre" value="<?php echo $alumnos["Nombre_Madre"]; ?>" readonly>

                                                                                    </div>

                                                                            </div>

                                                                                <!-- Grado a Ingresar -->
                                                                                <div class="col-xs-3">
                                                                                    <label>Edad</label>
                                                                                        <div class="input-group">
                                                                                        
                                                                                            <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                            <input type="text" class="form-control input-sm" id="EdadMadre" name="EdadMadre"  value="<?php echo $alumnos["Edad_Madre"]; ?>" readonly>

                                                                                        </div>

                                                                                </div>
                                                                        


                                                                        
                                                                                <div class="col-xs-3">
                                                                                    <label>Estado Civil</label>
                                                                                    <div class="input-group">
                                                                                    
                                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="EstadoCivilM" name="EstadoCivilM" value="<?php echo $alumnos["Estado_Civil_Madre"]; ?>" readonly>

                                                                                    </div>

                                                                                </div>

                                                                                <!-- Grado a Ingresar -->
                                                                                <div class="col-xs-3">
                                                                                    <label>Religion Madre</label>
                                                                                        <div class="input-group">
                                                                                        
                                                                                            <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                            <input type="text" class="form-control input-sm" id="Religion_Madre" name="Religion_Madre" value="<?php echo $alumnos["Religion_Madre"]; ?>" readonly>

                                                                                        </div>

                                                                                

                                                                                </div>
                                                                    </div>  
                                                            
                                                                    <div class="form-group row">
                                                                        <div class="col-xs-3">
                                                                        <label>Domicilio</label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control input-sm" id="verMadre" name="verMadre" value="<?php echo $alumnos["Domicilio_Madre"]; ?>" readonly>

                                                                            </div>

                                                                        </div>

                                                                        <!-- Grado a Ingresar -->
                                                                        <div class="col-xs-3">
                                                                            <label>Telefono del Madre</label>
                                                                                <div class="input-group">
                                                                                
                                                                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                    <input type="text" class="form-control input-sm" id="TelefonoMadre" name="TelefonoMadre"  value="<?php echo $alumnos["Telefono_Madre"]; ?>" readonly>

                                                                                </div>

                                                                        </div>
                                                                


                                                                
                                                                        <div class="col-xs-3">
                                                                            <label>Profesion</label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control input-sm" id="editarMadreProfesion" name="editarMadreProfesion" value="<?php echo $alumnos["Profesion_Madre"]; ?>" readonly>

                                                                            </div>

                                                                        </div>

                                                                        <!-- Grado a Ingresar -->
                                                                        <div class="col-xs-3">
                                                                            <label>Empresa donde Trabaja</label>
                                                                                <div class="input-group">
                                                                                
                                                                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                    <input type="text" class="form-control input-sm" id="editarMadreEmpresa" name="editarMadreEmpresa" value="<?php echo $alumnos["Empresa_Trabajo_Madre"]; ?>" readonly>

                                                                                </div>

                                                                        

                                                                        </div>
                                                                                
                                                                    
                                                                    </div> 
                                                                    <!--Finaliza el Row--> 
                                                                    <div class="form-group row">

                                                                        <div class="col-xs-3">
                                                                        <label>Puesto del Madre</label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control input-sm" id="PuestoMadre" name="PuestoMadre" value="<?php echo $alumnos["Puesto_Madre"]; ?>" readonly>

                                                                            </div>

                                                                        </div>

                                                                        <!-- Grado a Ingresar -->
                                                                        <div class="col-xs-3">
                                                                            <label>Telefono de Oficina</label>
                                                                                <div class="input-group">
                                                                                
                                                                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                    <input type="text" class="form-control input-sm" id="TelefonoOficinaMadre" name="TelefonoOficinaMadre"  value="<?php echo $alumnos["Telefono_Oficina_Madre"]; ?>" readonly>

                                                                                </div>

                                                                        </div>
                                                                


                                                                
                                                                        <div class="col-xs-3">
                                                                            <label>Correo Electronico</label>
                                                                            <div class="input-group">
                                                                            
                                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                <input type="text" class="form-control input-sm" id="CorreoMadre" name="CorreoMadre" value="<?php echo $alumnos["Correo_Madre"]; ?>" readonly>

                                                                            </div>

                                                                        </div>

                                                                        <!-- Grado a Ingresar -->
                                                                        <div class="col-xs-3">
                                                                            <label>Telefono Movil Madre</label>
                                                                                <div class="input-group">
                                                                                
                                                                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                    <input type="text" class="form-control input-sm" id="movilMadre" name="movilMadre" value="<?php echo $alumnos["Tel_Movil_Madre"]; ?>" readonly>

                                                                                </div>

                                                                        

                                                                        </div>
                                                                    </div>  <!--Finaliza el Row--> 
                                                                    


                                                    </div><!--Finaliza el tab 3c--> 
                                                    
                                                    <div class="tab-pane" id="4a">
                                                             <div class="form-group row">
                                                                            <div class="col-xs-6">
                                                                                <label>Primer Hermano</label>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="verPrimerHermano" name="verPrimerHermano" value="<?php echo $alumnos["HermanoA"]; ?>" readonly>

                                                                                    </div>

                                                                            </div>

                                                                                <!-- Grado a Ingresar -->
                                                                                <div class="col-xs-6">
                                                                                    <label>Grado que Ingresan</label>
                                                                                        <div class="input-group">
                                                                                        
                                                                                            <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                            <input type="text" class="form-control input-sm" id="EdadMadre" name="EdadMadre"  value="<?php echo $alumnos["GradoA"]; ?>" readonly>

                                                                                        </div>

                                                                                </div>
                                                                        


                                                                        
                                                                                <div class="col-xs-6">
                                                                                    <label>Segundo Hermano</label>
                                                                                    <div class="input-group">
                                                                                    
                                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="EstadoCivilM" name="EstadoCivilM" value="<?php echo $alumnos["HermanoB"]; ?>" readonly>

                                                                                    </div>

                                                                                </div>

                                                                                <!-- Grado a Ingresar -->
                                                                                <div class="col-xs-6">
                                                                                    <label>Grado que Ingresan</label>
                                                                                        <div class="input-group">
                                                                                        
                                                                                            <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                            <input type="text" class="form-control input-sm" id="Religion_Madre" name="Religion_Madre" value="<?php echo $alumnos["GradoB"]; ?>" readonly>

                                                                                        </div>

                                                                                

                                                                                </div>
                                                            </div> <!--Fin del Group Row-->
                                                                <br>
                                                                <h3>Datos de En Caso de Emergencia:</h3>

                                                                <div class="form-group row">
                                                                            <div class="col-xs-4">
                                                                                <label>Primer Contacto</label>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="primercontacto" name="primercontacto" value="<?php echo $alumnos["Nombre_EmgA"]; ?>" readonly>

                                                                                    </div>

                                                                            </div>

                                                                                <!-- Grado a Ingresar -->
                                                                                <div class="col-xs-4">
                                                                                    <label>Telefono</label>
                                                                                        <div class="input-group">
                                                                                        
                                                                                            <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                            <input type="text" class="form-control input-sm" id="telefonoEA" name="telefonoEA"  value="<?php echo $alumnos["TelefonoEA"]; ?>" readonly>

                                                                                        </div>

                                                                                </div>
                                                                        


                                                                        
                                                                                <div class="col-xs-4">
                                                                                    <label>Parentesco</label>
                                                                                    <div class="input-group">
                                                                                    
                                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="ParentescoA" name="ParentescoA" value="<?php echo $alumnos["ParentescoA"]; ?>" readonly>

                                                                                    </div>

                                                                                </div>


                                                                </div> <!--Fin del Group Row-->
                                                                <div class="form-group row">
                                                                            <div class="col-xs-4">
                                                                                <label>Segundo Contacto</label>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="segundocontacto" name="segundocontacto" value="<?php echo $alumnos["Nombre_EmgB"]; ?>" readonly>

                                                                                    </div>

                                                                            </div>

                                                                                <!-- Grado a Ingresar -->
                                                                                <div class="col-xs-4">
                                                                                    <label>Telefono</label>
                                                                                        <div class="input-group">
                                                                                        
                                                                                            <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                            <input type="text" class="form-control input-sm" id="telefonoEB" name="telefonoEB"  value="<?php echo $alumnos["TelefonoEB"]; ?>" readonly>

                                                                                        </div>

                                                                                </div>
                                                                        


                                                                        
                                                                                <div class="col-xs-4">
                                                                                    <label>Parentesco</label>
                                                                                    <div class="input-group">
                                                                                    
                                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="ParentescoB" name="ParentescoB" value="<?php echo $alumnos["ParentescoB"]; ?>" readonly>

                                                                                    </div>

                                                                                </div>


                                                                </div> <!--Fin del Group Row-->  
                                                                <div class="form-group row">
                                                                            <div class="col-xs-4">
                                                                                <label>Tecer Contacto</label>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="tercerContacto" name="tercerContacto" value="<?php echo $alumnos["Nombre_EmgC"]; ?>" readonly>

                                                                                    </div>

                                                                            </div>

                                                                                <!-- Grado a Ingresar -->
                                                                                <div class="col-xs-4">
                                                                                    <label>Telefono</label>
                                                                                        <div class="input-group">
                                                                                        
                                                                                            <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                            <input type="text" class="form-control input-sm" id="telefonoEC" name="telefonoEC"  value="<?php echo $alumnos["TelefonoEC"]; ?>" readonly>

                                                                                        </div>

                                                                                </div>
                                                                        


                                                                        
                                                                                <div class="col-xs-4">
                                                                                    <label>Parentesco</label>
                                                                                    <div class="input-group">
                                                                                    
                                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="ParentescoC" name="ParentescoC" value="<?php echo $alumnos["ParentescoC"]; ?>" readonly>

                                                                                    </div>

                                                                                </div>


                                                                </div> <!--Fin del Group Row-->                
                                                                <br>
                                                                <div class="form-group row">
                                                                            <div class="col-xs-4">
                                                                                <label>Enfermedades que padece</label>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="padecimiento" name="padecimiento" value="<?php echo $alumnos["Padecimiento"]; ?>" readonly>

                                                                                    </div>

                                                                            </div>

                                                                                <!-- Grado a Ingresar -->
                                                                                <div class="col-xs-4">
                                                                                    <label>Alergico al Medicamento </label>
                                                                                        <div class="input-group">
                                                                                        
                                                                                            <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                            <input type="text" class="form-control input-sm" id="Medicamento" name="Medicamento"  value="<?php echo $alumnos["Medicamento"]; ?>" readonly>

                                                                                        </div>

                                                                                </div>
                                                                        


                                                                        
                                                                                <div class="col-xs-4">
                                                                                    <label>Actualmente toma medicamentos</label>
                                                                                    <div class="input-group">
                                                                                    
                                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="Alergia_A_Medicamento" name="Alergia_A_Medicamento" value="<?php echo $alumnos["Alergia_A_Medicamento"]; ?>" readonly>

                                                                                    </div>

                                                                                </div>


                                                                </div> <!--Fin del Group Row-->   
                                                    </div> <!--Finaliza el tab 4a Medicos -->
                                                   
                                                    <div class="tab-pane" id="5a">
                                                             <div class="form-group row">
                                                                            <div class="col-xs-4">
                                                                                <label>Fecha de Inscripcion</label>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="fechaInscripcion" name="fechaInscripcion" value="<?php echo $alumnos["Fecha_Inscripcion"]; ?>" readonly>

                                                                                    </div>

                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                    <label>Escuela de Procedencia</label>
                                                                                        <div class="input-group">
                                                                                        
                                                                                            <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                            <input type="text" class="form-control input-sm" id="eprocedencia" name="eprocedencia" value="<?php echo $alumnos["E"]; ?>" readonly>

                                                                                        </div>

                                                                                

                                                                                </div>
                                                                                <div class="col-xs-3">
                                                                                    <label>Estatus</label>
                                                                                        <div class="input-group">
                                                                                        
                                                                                            <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                            <input type="text" class="form-control input-sm" id="estatus" name="estatus" value="<?php echo $alumnos["Estatus"]; ?>" readonly>

                                                                                        </div>

                                                                                

                                                                                </div>

                                                                                    <!-- Grado -->
                                                                                <div class="col-xs-3">
                                                                                    <label>Grado</label>
                                                                                    <div class="input-group">
                                                                                    
                                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                                                                                        <input type="text" class="form-control input-sm" id="grado" name="grado" value="<?php echo $alumnos["Grado"]; ?>" readonly>

                                                                                    </div>

                                                                                </div>



                                                                                <!-- Grupo -->
                                                                                <div class="col-xs-3">
                                                                                    <label>Grupo</label>
                                                                                        <div class="input-group">
                                                                                        
                                                                                            <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                            <input type="text" class="form-control input-sm" id="grupo" name="grupo"  value="<?php echo $alumnos["Grupo"]; ?>" readonly>

                                                                                        </div>

                                                                                </div>
                                                                        


                                                                        
                                                                                <!-- Nivel -->
                                                                                <div class="col-xs-4">
                                                                                    <label>Nivel de Estudios</label>
                                                                                        <div class="input-group">
                                                                                        
                                                                                            <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                                                                            <input type="text" class="form-control input-sm" id="Nivel" name="nivel" value="<?php echo $alumnos["Nivel"]; ?>" readonly>

                                                                                        </div>

                                                                                

                                                                                </div>
                                                                                
                                                            </div>   <!-- fin de row -->
                                                   
                                                   
                                                    </div>
                                            </div> 
                                            
                                </div>

                            </div><!--Fin del Box-body-->
                            
                            <!-- Bootstrap core JavaScript
                                ================================================== -->
                                <!-- Placed at the end of the document so the pages load faster -->
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

                                <div class="box-footer">

                            
                                </div> 
                        
                        
                        </div> <!--fin box-body-->

                    
                    </form>

            </div>
                
        </div>

        
    </div>
   
  </section>

</div>


