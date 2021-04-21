<!DOCTYPE html>
<html>
<head>
	<title>Certificados</title>
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../public/css/AdminLTE.min.css">
 <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap-select.min.css">
</head>
<body style="
			background: rgba(13,185,185,1);
			background: -moz-linear-gradient(-45deg, rgba(13,185,185,1) 0%, rgba(56,118,195,1) 100%);
			background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(13,185,185,1)), color-stop(100%, rgba(56,118,195,1)));
			background: -webkit-linear-gradient(-45deg, rgba(13,185,185,1) 0%, rgba(56,118,195,1) 100%);
			background: -o-linear-gradient(-45deg, rgba(13,185,185,1) 0%, rgba(56,118,195,1) 100%);
			background: -ms-linear-gradient(-45deg, rgba(13,185,185,1) 0%, rgba(56,118,195,1) 100%);
			background: linear-gradient(135deg, rgba(13,185,185,1) 0%, rgba(56,118,195,1) 100%);">
	<section >
           <div class="container">	
           		 <div class="row">

		              <div class="col-md-12 col-sm-12 col-xs-12" style="padding-top: 100px">
		                 
		                 <div class="col-md-6 col-sm-12 col-xs-12 " align="center" style="padding-top: 150px">
		                 	<h1 style="color: white">Consulta de Certificados</h1>
		                 	<p style="color: white">Aqui podra descargar los certificados en PDF, de los cursos que participó</p>
		                 </div>

		                 <div class="col-md-6 col-sm-12 col-xs-12">

			                 <div name="formularioConsulta" id="formularioConsulta" class="col-md-12 col-sm-12 col-xs-12 " style="background: #F3F3F3; padding: 50px; box-shadow: 0 0 30px 1px #337DC1; width: 400px; ">
			                 		<div align="center">
			                 		<img class="img-responsive" src="../../files/logopjhco.jpg" height="50">
			                 		<hr>
			                 		<p>Ingrese sus datos</p>
			                 	</div>	                 	
			                 	<form method="post" name="formulario" id="formulario" role="form">
					              <div class="box-body">
					                <div class="form-group">
					                  <label for="exampleInputEmail1">DNI o Numero de celular</label>
					                  <input type="text" name="txtdniOcelular" id="txtdniOcelular" class="form-control" id="exampleInputEmail1" placeholder="Documento de Identidad" autofocus required>
					                </div>
					                <div class="form-group">
					                  <label for="exampleInputPassword1">Correo</label>
					                  <input type="email" name="txtemail" id="txtemail" class="form-control" id="exampleInputPassword1" placeholder="ejemplo@dominio.com" required>
					                </div>
					              </div>
					              <!-- /.box-body -->

					              <div class="box-footer" align="center" style="background: #F3F3F3;">
					                <button type="submit"  class="btn btn-success" name="consultar" id="consultar" class="btn btn-primary">Buscar Certificados</button>
					              </div>
					            </form>
			                 </div>

		                 	<div name="divResultado" id="divResultado" class="col-md-12 col-sm-12 col-xs-12"  style=" background: #F3F3F3; padding: 10px; box-shadow: 0 0 30px 1px #337DC1; width:  400px">
		                 		<div style="padding-top: 25px;">
		                 			<div class="row" align="center">
		                 				<img src="../../files/docente.jpg" class="img-circle img-responsive"  height="50px" width="100px" alt="">
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
		                 	<div class="col-lg-12 col-md-12 col-sm-12" align="center" style="width:  400px">
				          		<h2><a href="http://pjhuanuco.com/certificados/files/sistema/MANUAL%20DE%20USUARIO%20SISE%20V_001.pdf" style="color: white" target="_blank"><i class="fa fa-book fa-4" ></i></a></h2>
				          		<p style="color: white; ">Manual de usuario</p>
				          	</div>  
		                 </div>
		              </div><!-- /.col -->
		          </div>
           </div>	<!-- /.row -->
      </section>
      <script src="../../public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../public/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../public/js/app.min.js"></script>

    <!-- DATATABLES -->
    <script src="../../public/datatables/jquery.dataTables.min.js"></script>    
    <script src="../../public/datatables/dataTables.buttons.min.js"></script>
    <script src="../../public/datatables/buttons.html5.min.js"></script>
    <script src="../../public/datatables/buttons.colVis.min.js"></script>
    <script src="../../public/datatables/jszip.min.js"></script>
    <script src="../../public/datatables/pdfmake.min.js"></script>
    <script src="../../public/datatables/vfs_fonts.js"></script> 

    <script src="../../public/js/bootbox.min.js"></script> 
    <script src="../../public/js/bootstrap-select.min.js"></script>  

    <script src="../scripts/certificado.js"></script>  

   
</body>
</html>