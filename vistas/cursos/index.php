<?php
require_once '../../config/connection.php';
require '../header.php';
//require 'modal_enlaces.php';

?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Cursos <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Nuevo</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body" id="listadoregistros">
                          <!-- Custom Tabs -->
                          <div class="nav-tabs-custom">
                              <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab">Cursos vigentes</a></li>
                                <li><a href="#tab_2" data-toggle="tab">Cursos concluidos</a></li>
                                <li><a href="#tab_3" data-toggle="tab">Cursos eliminados</a></li>
                              </ul>
                              <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                  <div class="panel-body" >
                                    <table id="tbllistadoVigentes" class="table  table-responsive table-bordered table-striped table-hover" style="width: 100%;">
                                      <thead>
                                        <tr>                                
                                            <th class="text-center">Curso</th>
                                            <th class="text-center">Se va realizar el</th>
                                            <th class="text-center">Acciones</th>                             
                                          </tr>
                                        </thead>
                                       
                                        <tbody>                                       
                                        </tbody>
                                    </table> 
                                  </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2">
                                  <div class="panel-body" >
                                    <table id="tbllistadoConcluidos" class="table  table-responsive table-bordered table-striped table-hover" style="width: 100%;">
                                      <thead>
                                        <tr>                                
                                            <th class="text-center">Curso</th>
                                            <th class="text-center">Llevado acabo el</th>
                                            <th class="text-center">Acciones</th>                             
                                          </tr>
                                        </thead>
                                       
                                        <tbody>                                       
                                        </tbody>
                                    </table> 
                                  </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_3">
                                  <div class="panel-body" >
                                    <table id="tbllistadoEliminados" class="table  table-responsive table-bordered table-striped table-hover" style="width: 100%;">
                                      <thead>
                                        <tr>                                
                                            <th class="text-center">Curso</th>
                                            <th class="text-center">Se iba a realizar el</th>
                                            <th class="text-center">Acciones</th>                             
                                          </tr>
                                        </thead>
                                       
                                        <tbody>                                       
                                        </tbody>
                                    </table> 
                                  </div>
                                </div>
                                <!-- /.tab-pane -->
                              </div>
                              <!-- /.tab-content -->
                            </div>
                          <!-- nav-tabs-custom -->
                    </div>
                    <div class="panel-body" style="height: 490px;" id="formularioregistros">
                        <form class="form-horizontal" name="formulario" id="formulario" method="POST">
                              <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 text-right">


                                <button type="submit" class="btn btn-primary waves-effect"   id="btnGuardar"><i class="fa fa-save "></i> Guardar </button>
                                <button type="button" class="btn btn-danger waves-effect" onclick="mostrarform(false)"><i class="fa fa-arrow-circle-left"></i> Cerrar</button>


                              </div>
                            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                              <div class="col-lg-6 col-md-12  col-sm-12 col-xs-12 margen-separacion-div-6-margen-izquierdo" style="padding-right: 50px;">
                                <div class="row">
                                  <label> Datos del Curso</label>
                                  <hr style="margin-top: 0px;">
                                  <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <p for="nombre_curso" class="col-sm-2 control-label text-left" align="left">Nombre del curso:</p>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nombre_curso" name="nombre_curso" required>
                                        <input type="hidden" class="form-control" id="id_curso"  name="id_curso" placeholder="">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-7 col-md-7  col-sm-12 col-xs-12 ">
                                      <div class="form-group">
                                        <p for="nombre_curso" class="col-md-3 col-sm-12 col-xs-12 control-label">Organizador :</p>
                                        <div class="col-md-9 col-sm-12 col-xs-12">
                                          <input type="text" class="form-control" id="organizador" name="organizador" required>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                        <p for="nombre_curso" class="col-sm-3 control-label">Modalidad: </p>
                                        <div class="col-sm-9">
                                          <select id="modalidad_curso" name="modalidad_curso" class="form-control" required>
                                            <option value="1" selected>Virtual</option>
                                            <option value="2">Presencial</option>
                                          </select>
                                        </div>
                                      </div>
                                  </div>

                                </div>
                                <br>
                                <div class="row">
                                  <label>Archivos necesarios</label>
                                  <hr style="margin-top: 0px;">
                                  <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th>Descripcion</th>
                                        <th>Archivo</th>
                                        <th>Añadir / Cambiar</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Iamgen del curso</td>
                                        <td id="img_curso_html"></td>
                                        <td>
                                          <input type="file" name="img_curso" id="img_curso" required>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Modelo de diploma</td>
                                        <td id="certificado_html">   </td>
                                        <td>
                                          <input type="file" name="modelo_certificado_curso" id="modelo_certificado_curso" required>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Firma 1</td>
                                        <td id="firma1_html"></td>
                                        <td>
                                          <input type="file" name="firma1_curso" id="firma1_curso" required>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Firma 2</td>
                                        <td id="firma2_html"></td>
                                        <td>
                                          <input type="file" name="firma2_curso" id="firma2_curso" required>
                                        </td>
                                      </tr>
                                      
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 margen-separacion-div-6-margen-derecho" style="padding-left: 50px;">
                                <div class="row">
                                  <label>Fechas</label>
                                  <hr class="margin-top-0" style="margin-top: 0px;">
                                  <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12 ">
                                    <div class="form-group">
                                      <p for="nombre_curso" class="col-md-4 col-sm-12 col-xs-12 control-label">Fecha de inicio :</p>
                                      <div class="col-md-8 col-sm-12 col-xs-12">
                                        <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <p for="nombre_curso" class="col-sm-4 control-label">Hora de inicio:</p>
                                      <div class="col-sm-8">
                                        <input type="time" class="form-control" name="hora_inicio" id="hora_inicio" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <p for="nombre_curso" class="col-sm-4 control-label">Fecha de Fin :</p>
                                      <div class="col-sm-8">
                                        <input type="date" class="form-control" name="fecha_fin" id="fecha_fin"  required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <p for="nombre_curso" class="col-sm-4 control-label">Hora de fin :</p>
                                      <div class="col-sm-8">
                                        <input type="time" class="form-control" name="hora_fin" id="hora_fin" required>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <br >

                                <div class="row">
                                    <label>Ponente</label>
                                    <hr class="margin-top-0" style="margin-top: 0px;">
                                    <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12 ">
                                      <div class="form-group">
                                        <p for="nombre_curso" class="col-md-3 col-sm-12 col-xs-12 control-label">Nombre Ponente :</p>
                                        <div class="col-md-9 col-sm-12 col-xs-12">
                                          <input type="text" class="form-control"  name="apenom_ponente" id="apenom_ponente" required>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                                      <div class="form-group">
                                        <p for="nombre_curso" class="col-sm-3 control-label">Cargo o Profesión:</p>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control"  name="cargo" id="cargo" required>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                  <label>Objetivos del curso</label>                            
                                  <hr style="margin-top: 0px;">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <p for="nombre_curso" class="col-sm-2 control-label">Descripcion : </p>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="3" name="objetivo_curso" id="objetivo_curso" required></textarea>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="panel-body" style="height: 490px;" id="formulario_Para_GenerarEnlaces">
                      <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 text-right">

                                <button type="button" class="btn btn-danger waves-effect" onclick="cancelarformU()"><i class="fa fa-arrow-circle-left"></i> Cerrar</button>


                              </div>
                      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12" >
                        <div>
                           <h3 id="nombrecurso"></h3>
                        </div>
                      </div>
                      <div class="col-lg-7 col-md75 col-sm-7 col-xs-12" >
                        <div class="row" id="formularioGenerarEnlaces" name="formularioGenerarEnlaces">
                          <form class="form-horizontal" name="formulario_generarURL" id="formulario_generarURL"  >
                            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                              <div class="form-group">
                                <p for="nombre_curso" class="col-sm-5 control-label text-left" align="left">Momento de la toma de asistencia:</p>
                                <div class="col-sm-7">
                                  <select id="momento_enlace" name="momento_enlace" class="form-control" required>
                                    <option value="" >Seleccionar..</option>
                                    <option value="inicio" >Al inicio curso</option>
                                    <option value="medio">Intermedio del curso</option>
                                    <option value="fin" >Al final del curso</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12 ">
                              <div class="form-group">
                                <p for="nombre_curso" class="col-md-4 col-sm-12 col-xs-12 control-label">Fecha de inicio :</p>
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                  <input type="date" class="form-control" name="fecha_inicio_enlace" id="fecha_inicio_enlace" required>
                                  <input type="hidden" class="form-control" name="id_enlace_curso" id="id_enlace_curso" >
                                  <input type="hidden" class="form-control" name="id_curso_enlace" id="id_curso_enlace" >
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                              <div class="form-group">
                                <p for="nombre_curso" class="col-sm-4 control-label">Hora de inicio:</p>
                                <div class="col-sm-8">
                                  <input type="time" class="form-control" name="hora_inicio_enlace" id="hora_inicio_enlace" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                              <div class="form-group">
                                <p for="nombre_curso" class="col-sm-5 control-label text-left" align="left">Duracion en minutos : </p>
                                <div class="col-sm-7">
                                  <select id="duracion_enlace" name="duracion_enlace" class="form-control" required>
                                    <option value="" >Seleccionar..</option>
                                    <option value="300000" >5 minutos</option>
                                    <option value="600000">10 minutos</option>
                                    <option value="900000" >15 minutos</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 text-center">
                            <button type="submit" class="btn btn-primary waves-effect"  id="btnGuardarEnlace"><i class="fa fa-link "></i> GENERAR ENLACE </button>  
                          </div>
                          </form>
                          

                        </div>
                        <hr>
                        <div class="row ">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="listadoenlaces" name="listadoenlaces">
                            <div class="input-group ">
                              <div class="input-group-btn">
                                <button type="button"  class="btn btn-warning"><i class="fa fa-pencil "></i></button>
                                <button type="button" class="btn btn-primary"><i class="fa fa-clone "></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                              </div><!-- /btn-group -->
                              <input type="text" class="form-control">
                              <span class="input-group-btn">
                                <button class="btn btn-default btn-flat" type="button">Inicio</button>
                              </span>
                            </div>
                            <br>
                            <div class="input-group">
                              <div class="input-group-btn">
                                <button type="button" class="btn btn-warning"><i class="fa fa-pencil "></i></button>
                                <button type="button" class="btn btn-primary"><i class="fa fa-clone "></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                              </div><!-- /btn-group -->
                              <input type="text" class="form-control">
                              <span class="input-group-btn">
                                <button class="btn btn-default btn-flat" type="button">Medio</button>
                              </span>
                            </div>
                            <br>
                            <div class="input-group">
                              <div class="input-group-btn">
                                <button type="button" class="btn btn-warning"><i class="fa fa-pencil "></i></button>
                                <button type="button" class="btn btn-primary"><i class="fa fa-clone "></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                              </div><!-- /btn-group -->
                              <input type="text" class="form-control">
                              <span class="input-group-btn">
                                <button class="btn btn-default btn-flat" type="button">Fin</button>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->


<?php
require '../footer.php';
?>

<script type="text/javascript" src="../scripts/curso.js"></script>
<script type="text/javascript" src="../scripts/enlaces_url.js"></script>