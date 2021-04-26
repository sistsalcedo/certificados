
  <!-- Inicio Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-md" role="document">

          <div class="modal-content">
            <div class="modal-header bg-primary text-center">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="bg-white" aria-hidden="true">X</span></button>
              <h4 class="modal-title " id="smallModalLabel">Enlaces para tomar de Asistencia</h4>
            </div>
            <div class="modal-body ">
              <div class="row text-center">
                <p>Curso</p>
                <div>
                   <h3 id="nombrecurso"></h3>
                </div>
              </div>
              <hr>
              <div class="row" id="formularioGenerarEnlaces" name="formularioGenerarEnlaces">
                <form class="form-horizontal" name="formulario_generarURL" id="formulario_generarURL"  >
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                      <div class="form-group">
                        <p for="nombre_curso" class="col-sm-5 control-label text-left" align="left">Momento de la toma de asistencia:</p>
                        <div class="col-sm-7">
                          <select id="momento_enlace" name="momento_enlace" class="form-control" required>
                            <option value="" >Seleccionar..</option>
                            <option value="1" >Al inicio curso</option>
                            <option value="2">Intermedio del curso</option>
                            <option value="1" >Al final del curso</option>
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
                          <p id="idcurso_url" style="display: none"></p>
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
                            <option value="5" >5 minutos</option>
                            <option value="10">10 minutos</option>
                            <option value="15" >15 minutos</option>
                            <option value="20" >15 minutos</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    
                </form>
                <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 text-center">
                      <button type="button" class="btn btn-primary waves-effect" onclick="guardaryeditar()"  id="btnGuardarEnlace"><i class="fa fa-link "></i> GENERAR ENLACE </button>  
                </div>

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
      </div>
    </div>
