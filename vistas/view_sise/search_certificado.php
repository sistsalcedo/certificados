<?php 

require "header.php";

 ?>


<section>
        <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                      <div class="col-xl-6 col-md-6 d-none d-sm-block">
                          <h1 class="text-white" >Consulta de Certificados</h1>
                            <p class="text-white">Aqui podra descargar los certificados en PDF, de los cursos que participó</p>
                      </div>  
                      <div class="col-xl-6 col-md-6">
                          <div name="formularioConsulta" id="formularioConsulta" class="col-md-12 col-sm-12 col-xs-12 p-5 bg-white" >
                                    <div align="center">
                                    <img class="img-fluid" src="../../files/logopjhco.jpg" height="50">
                                    <hr>
                                    <h3 class="d-block d-sm-block d-md-none">Consulta de certificados</h3>
                                    <p class="d-none d-sm-block">INGRESE SUS DATOS</p>
                                </div>                      
                                <form method="post" name="formulario" id="formulario" role="form">
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">DNI </label>
                                      <input type="text" name="txtdniOcelular" id="txtdniOcelular" class="form-control" id="exampleInputEmail1" maxlength="8" placeholder="Documento de Identidad" autofocus required>
                                    </div>
                                    <!-- <div class="form-group">
                                      <label for="exampleInputPassword1">Correo</label>
                                      <input type="email" name="txtemail" id="txtemail" class="form-control" id="exampleInputPassword1" placeholder="ejemplo@dominio.com" required>
                                    </div> -->
                                  </div>
                                  <!-- /.box-body -->
                                  <div class="mt-5"></div>
                                  <div class="box-footer" align="center" >
                                    <button type="submit"  class="btn btn-success" name="consultar" id="consultar" class="btn btn-primary">Buscar Certificados</button>
                                  </div>
                                </form>
                             </div>
                             <div name="divResultado" id="divResultado" class="col-md-12 col-sm-12 col-xs-12 p-5 bg-white" >
                                <div style="padding-top: 25px;">
                                    <div class="row" align="center">
                                        <img src="../../files/docente.jpg" class="img-rounded"  height="50px" width="100px" alt="">
                                        <strong style="color: #4153B6; font-size: 20px;">GRACIAS POR PARTICIPAR</strong>
                                        <p id="datosAlumno"><small></small></p> 
                                        <!-- <input type="text" name="datosAlumno" id="datosAlumno"> -->
                                    </div>
                                    <div >
                                        <table id="tbllistado" class="table  table-bordered table-condensed table-hover table-striped">
                                          <thead>
                                            <tr>   
                                                <th>Cursos</th>
                                                <th>Descargar</th>                             
                                              </tr>
                                            </thead>
                                            <tbody >                                       
                                            </tbody>
                                        </table> 
                                    </div>
                                    <br>
                                    <div class="box-footer" align="center" style="background: #F3F3F3;">
                                        <button type="button" onclick="mostrardiv(false)" class="btn btn-success"  name="btnvolver" id="btnvolver" class="btn btn-primary">Volver</button>
                                     </div>
                                     <div style="color: orange">
                                        <p>
                                            <small><i class="fa fa-exclamation-triangle"> </i> Si tuviera algun inconveniente con los datos en el certificado, comunicarse al telefono fijo (062) 591030 anexo 45005 / 45033</small>
                                        </p>
                                    </div>                            
                                </div>
                            </div>
                            <div class="col text-center pt-5"  >
                                <h2><a href="../../files/sistema/MANUAL DE USUARIO SISE V_001.pdf" style="color: white" target="_blank"><i class="fa fa-book fa-4" ></i></a></h2>
                                <p style="color: white; ">Manual de usuario</p>
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

<script src="../scripts/certificado.js"></script>  