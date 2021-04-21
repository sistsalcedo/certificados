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
                            <h3 id="nombre_curso">UI/UX design with  Adobe XD with</h3>
                           
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
                        <a href="#" class="boxed_btn">REGISTRARSE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="courses_details_banner" id="formularioregistros">
        <div class="container">
           <div class="row "   >
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                    <h3>Welcome</h3>
                    <p>You are 30 seconds away from earning your own money!</p>
                    <input type="submit" name="" value="Login"/><br/>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 register-right" style="height: 450px; padding-top: 50px; padding-bottom: : 50px; padding-left: 100px; padding-right: 100px">
                    <div align="center">
                        <h3>Formulario de Registro</h3>
                    </div>
                    <hr>
                    <div class="container">
                        
                            <form name="fomrularioRegistro" id="fomrularioRegistro" method="POST">
                              <div class="row">

                              <div class="form-group col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                <label>DNI:</label> 
                                <input type="text" class="form-control" name="txt_dni" id="txt_dni"  placeholder="Documento de Identidad" autofocus>
                                <input type="hidden" value="5" name="id_curso" id="id_curso" >
                              </div>
                              <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-2"> 
                                <label>-</label>                                
                                 <button type="button" class="btn btn-primary waves-effect bottom" id="btnVerificar" name="btnverificar" onclick="verificar_dni()"><i class="fa fa-search"> </i> Verificar</button>
                              </div>
                              <div class="form-group col-lg-6col-md-6 col-sm-12 col-xs-12">
                                <label>Apellidos y Nombres:</label> 
                                <input type="text" class="form-control" name="txt_apenom" id="txt_apenom"  placeholder="Lectura anterior" readonly>
                              </div>
                              <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label>Celular:</label> 
                                <input type="text" class="form-control" name="txt_celular" id="txt_celular"  placeholder="Lectura actual" >
                              </div>
                              <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label>Correo:</label>
                                <input type="text" class="form-control" name="txt_email" id="txt_email" >
                              </div>                             

                              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                                <button type="submit" class="btn btn-primary waves-effect"   id="btnGuardar"><i class="fa fa-save"> </i> Guardar</button>
                                <button type="button" class="btn btn-danger waves-effect"  onclick="cancelarform()">Cancelar</button>
                              </div>
                              </div>
                         </form>
                        
                    </div>
                </div>
                      
            </div> 
        </div>
    </div>




    <!-- testimonial_area_start -->
    <div class="testimonial_area testimonial_bg_1 overlay">
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
  <script>
      detalleCurso('<?php echo $idcurso  ?>');
  </script>