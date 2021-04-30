<?php 

require "header.php";

$id_curso = $_GET['id'];
$cadena = $_GET['reg'];
$momento = $_GET['momento'];

 ?>


<section>
        <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
              <div class="row align-items-center text-center" id="todo_bien">
                <div class="col-lg-5 col-md-5 col-sm-5   align-self-center text-center">

                  <div class="single_video">
                    <h1 id="nombre_curso_frm" style="color:white;" >ASISTENCIA</h1>
                    <h2 style="color:white;">
                      <?php 
                        if ($momento == 'inicio') {
                          echo 'al iniciar el curso';
                        } elseif($momento == 'medio') {
                          echo 'de mitad de curso';
                        }else{
                          echo 'final del curso';
                                                }

                       ?>
                    </h2><br>
                    
                  </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 bg-white p-4" id="div_asistencia" name ="div_asistencia" >
                  <div align="center">
                    <h3>CURSO</h3>
                    <h6 id="nombre_curso"></h6>
                  </div>
                  <hr>
                  <div class="container">

                    <form name="fomrularioRegistroAsistencia" id="fomrularioRegistroAsistencia" method="POST">
                      <div class="row align-self-center text-center">
                        <div class="text-center">
                          <!-- <h4>Curso:  COVID</h4> -->
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-6">
                          <label>DNI:</label> 
                          <input type="tel" class="form-control" name="txt_dni" id="txt_dni"  placeholder="Documento de Identidad" maxlength="8" required >
                          <input type="hidden" name="id_curso" id="id_curso" value=" <?php  echo $id_curso ?> " >
                          <input type="hidden" name="momento" id="momento" value=" <?php  echo $momento ?> " >
                        </div>                       
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="btn_consultar" align="center">
                          <button type="submit" class="genric-btn success circle"   id="consultar" ><i class="fa fa-save"> </i>Enviar</button>                               

                        </div>
                      </div>
                    </form>

                  </div>
                </div>

                 <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 bg-white p-4" id="div_registro" name ="div_registro" >
                  <div align="center">
                    <h3>Confirmar Datos </h3>
                  </div>
                  <hr>
                  <div class="container">

                     <form name="fomrularioRegistro" id="fomrularioRegistro" method="POST">
                              <div class="row">

                              <div class="form-group col-lg-9 col-md-9 col-sm-9 col-xs-6">
                                <label>DNI:</label> 
                                <input type="tel" class="form-control" name="txt_dni_p_registrar" id="txt_dni_p_registrar"  placeholder="Documento de Identidad" maxlength="8" required >
                                <input type="hidden" name="id_curso_p_registrar" id="id_curso_p_registrar" >
                                <input type="hidden" id="flag" name="flag" value="1">
                              </div>
                              <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-6"> 
                                <label>-</label>                                
                                 <button type="button" class="btn genric-btn info waves-effect bottom" id="btnVerificar" name="btnVerificar" onclick="verificar_dni()"><i class="fa fa-search"> </i> Verificar</button>
                                  <button type="button" class="btn genric-btn primary  waves-effect bottom" id="limpiarDatos" name="limpiarDatos" onclick="limpiar_txt_dni()"><i class="fa fa-times"> </i> Limpiar</button>
                              </div>
                              <div class="form-group col-lg-6col-md-6 col-sm-12 col-xs-12" >
                                <label>Apellidos y Nombres:</label> 
                                <div id="div_apenom">
                                  <input type="text" class="form-control" name="txt_apenom" id="txt_apenom"  placeholder="" readonly >
                                </div>
                              </div>                                                         
                              <br>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                                  <button type="submit" class="genric-btn success circle"   id="btnRegistrar" ><i class="fa fa-save"> </i> GUARDAR</button>                               
                                  <button type="button" class="genric-btn danger circle"  onclick="cancelarform()"><i class="fa fa-arrow-left fa-3"></i> </i>Cancelar</button>
                                </div>
                              </div>
                         </form>

                  </div>
                </div>

              </div>
              <div id="errores" class="col-lg-12 col-md-12 col-sm-12   align-self-center text-center">
                <h2 class="text-white"> Pagina no encontrada..</h2 class="text-white">
                <a class="boxed_btn_orange" href=" index.php">Regresar a la pagina principal</a>
              </div>
            </div>
          </div>
        </div>
    <!-- slider_area_end -->
</section>



    
    <!-- popular_courses_end-->


<?php 

require "footer.php";

 ?>
<!-- 
<script src="../scripts/cuenta_regresiva.js"></script>   -->
<script src="../scripts/asistencia.js"></script>  
  <script>
     
      validar_url('<?php echo $id_curso  ?>','<?php echo $cadena  ?>','<?php echo $momento  ?>');
      nombre_curso('<?php echo $id_curso  ?> ?>');
  </script>