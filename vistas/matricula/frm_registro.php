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
 <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body style="
			background: rgba(13,185,185,1);
			background: -moz-linear-gradient(-45deg, rgba(13,185,185,1) 0%, rgba(56,118,195,1) 100%);
			background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(13,185,185,1)), color-stop(100%, rgba(56,118,195,1)));
			background: -webkit-linear-gradient(-45deg, rgba(13,185,185,1) 0%, rgba(56,118,195,1) 100%);
			background: -o-linear-gradient(-45deg, rgba(13,185,185,1) 0%, rgba(56,118,195,1) 100%);
			background: -ms-linear-gradient(-45deg, rgba(13,185,185,1) 0%, rgba(56,118,195,1) 100%);
			background: linear-gradient(135deg, rgba(13,185,185,1) 0%, rgba(56,118,195,1) 100%);  
			margin-top: 3%">
	<section >
        <div class="container">	
            <div class="row "   >
            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 register-left">
            		<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                    <h3>Welcome</h3>
                    <p>You are 30 seconds away from earning your own money!</p>
                    <input type="submit" name="" value="Login"/><br/>
            	</div>
            	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 register-right" style="height: 450px; padding-top: 50px; padding-bottom: : 50px; padding-left: 200px; padding-right: 200px">
            		<div align="center">
            			<h3>Formulario de Registro</h3>
            		</div>
            		<hr>
                    <div >
                    	<form name="fomrularioRegistro" id="fomrularioRegistro" method="POST">
                              

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
                   		 </form>
                    </div>
            	</div>
		              
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

    <script src="../scripts/matricula.js"></script> 


   
</body>


</html>