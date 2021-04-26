<?php 

require "header.php";

$idcurso = $_GET['id'];
$cadena = $_GET['reg'];

 ?>


<section>
        <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
              <div class="row align-items-center text-center">
                <div class="col-lg-5 col-md-5 col-sm-5   align-self-center text-center">

                  <div class="single_video">
                    <h1 id="nombre_curso_frm" style="color:white;" >ASISTENCIA</h1>
                    <h2 style="color:white;">El enlace fue creado a las : 12-05-2021 y 12:00 pm</h2><br>
                    <p style="color:orange;">Tiene un aduracion de <strong> 5 minutos </strong> a prtir de ese momento.</p>
                  </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 bg-white p-4" >
                  <div align="center">
                    <h3>Marcar Asistencia</h3>
                  </div>
                  <hr>
                  <div class="container">

                    <form name="fomrularioRegistro" id="fomrularioRegistro" method="POST">
                      <div class="row align-self-center text-center">
                        <div class="text-center">
                          <h4>Curso:  COVID</h4>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-6">
                          <label>DNI:</label> 
                          <input type="tel" class="form-control" name="txt_dni" id="txt_dni"  placeholder="Documento de Identidad" maxlength="8" required >
                          <input type="hidden" name="id_curso" id="id_curso" >
                        </div>                       
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                          <button type="submit" class="genric-btn success circle"   id="btnGuardar" ><i class="fa fa-save"> </i>Enviar</button>                               

                        </div>
                      </div>
                    </form>

                  </div>
                </div>

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

<script src="../scripts/cuenta_regresiva.js"></script>  
  <script>
      cuenta_regresiva('<?php echo $idcurso  ?>','<?php echo $cadena  ?>');
  </script>