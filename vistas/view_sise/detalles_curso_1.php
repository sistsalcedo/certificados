<?php 

require "header.php";
$idcurso = $_GET['id'];

 ?>


<body>


     <!-- bradcam_area_start -->
     <div class="courses_details_banner" id="buscarRegistros">
         <div class="container">
             <div class="row">
                 <div class="col-xl-6">
                     <div class="course_text">
                            <h3 id="nombre_curso"></h3>
                           
                            <div class="rating">
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <i class="flaticon-mark-as-favorite-star"></i>
                                <span>(4.5)</span>
                            </div>
                            <div class="hours">
                                <div class="video">
                                     <div class="single_video">
                                            <i class="fa fa-clock-o"></i> <span id="fecha_curso">12 Videos</span>
                                     </div>
                                     <div class="single_video">
                                            <i class="fa fa-play-circle-o"></i> <span id="hora_curso">9 Hours</span>
                                     </div>
                                   
                                </div>
                            </div>
                     </div>
                 </div>
             </div>
         </div>
    </div>
    <!-- bradcam_area_end -->

    <div class="courses_details_info" id="listadoregistros">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="single_courses">
                        <h3>Objetivos</h3>
                        <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god moving. Moving in fourth air night bring upon you’re it beast let you dominion likeness open place day great wherein heaven sixth lesser subdue fowl male signs his day face waters itself and make be to our itself living. Fish in thing lights moveth. Over god spirit morning, greater had man years green multiply creature, form them in, likeness him behold two cattle for divided. Fourth darkness had. Living light there place moved divide under earth. Light face, fly dry us </p>
                    </div>
                   
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="courses_sidebar">
                        <div class="video_thumb">
                            <img id="imagen_curso" src="img/latest_blog/video.png" alt="">
                        </div>
                        <div class="author_info">
                            <div class="auhor_header">
                                <!-- <div class="thumb">
                                        <img src="img/latest_blog/author.png" alt="">
                                </div> -->
                                <div class="name">
                                    <h3 id="nombre_ponente">Macau Wilium</h3>
                                    <p>Juez Superior</p>
                                </div>
                            </div>
                        </div>
                        <!-- <a onclick="mostrarFormularioMatricula(true)" class="boxed_btn">REGISTRARSE</a> -->
                        <button type="submit" class="boxed_btn" onclick="mostrarFormularioMatricula(true)"> REGISTRARSE</button>  
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="courses_details_banner" id="formularioregistros">
        <div class="container">
           <div class="row "   >
                <div class="col-lg-4 col-md-4 col-sm-4 d-none d-sm-block  align-self-center text-center">
                    <img class="img-fluid" src="img/computopj.gif"  alt=""/>
                    <div class="single_video">
                      <h3 id="nombre_curso_frm" style="color:white;" >Welcome</h3>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 bg-white p-4" >
                    <div align="center">
                        <h3>Formulario de Registro</h3>
                    </div>
                    <hr>
                    <div class="container">
                        
                            <form name="fomrularioRegistro" id="fomrularioRegistro" method="POST">
                              <div class="row">

                              <div class="form-group col-lg-9 col-md-9 col-sm-9 col-xs-6">
                                <label>DNI:</label> 
                                <input type="tel" class="form-control" name="txt_dni" id="txt_dni"  placeholder="Documento de Identidad" maxlength="8" required >
                                <input type="hidden" name="id_curso" id="id_curso" >
                                <input type="hidden" id="flag" name="flag" value="0">
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
                              <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label>Celular:</label> 
                                <input type="text" class="form-control" name="txt_celular" id="txt_celular"  placeholder="Ejemplo: 965214569" required >
                              </div>
                              <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label>Correo:</label>
                                <input type="text" class="form-control" name="txt_email" id="txt_email" placeholder="Ejemplo: correo@dominio.com" required>
                              </div>                             
                              <br>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                                  <button type="submit" class="genric-btn success circle"   id="btnGuardar" ><i class="fa fa-save"> </i> GUARDAR</button>                               
                                  <button type="button" class="genric-btn danger circle"  onclick="cancelarform()"><i class="fa fa-arrow-left fa-3"></i> </i>Cancelar</button>
                                </div>
                              </div>
                         </form>
                        
                    </div>
                </div>
                      
            </div> 
        </div>
    </div>




    <!-- testimonial_area_start -->
    <div class="testimonial_area testimonial_bg_1 overlay d-none d-sm-block">
        <div class="testmonial_active owl-carousel">
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="img/testmonial/author_img.png" alt="">
                                </div>
                                <p>
                                    "Working in conjunction with humanitarian aid <br> agencies we have supported
                                    programmes to <br>
                                    alleviate.
                                    human suffering.

                                </p>
                                <span>- Jquileen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="img/testmonial/author_img.png" alt="">
                                </div>
                                <p>
                                    "Working in conjunction with humanitarian aid <br> agencies we have supported
                                    programmes to <br>
                                    alleviate.
                                    human suffering.

                                </p>
                                <span>- Jquileen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial_area_end -->

<?php 

require "footer.php";

 ?>

  <script type="text/javascript" src="../scripts/detalle_curso.js"></script>
  <script type="text/javascript" src="../scripts/matricula.js"></script>
  <script>
      detalleCurso('<?php echo $idcurso  ?>');
  </script>