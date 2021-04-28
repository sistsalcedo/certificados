<?php 
	
require_once "../modelos/Curso.php";

$curso=new Curso();

$idcurso=isset($_POST["idcurso"])? limpiarCadena($_POST["idcurso"]):"";
$nombre_curso=isset($_POST["nombre_curso"])? limpiarCadena($_POST["nombre_curso"]):"";
$organizador=isset($_POST["organizador"])? limpiarCadena($_POST["organizador"]):"";
$modalidad_curso=isset($_POST["modalidad_curso"])? limpiarCadena($_POST["modalidad_curso"]):"";
$img_curso=isset($_POST["img_curso"])? limpiarCadena($_POST["img_curso"]):"";
$modelo_certificado_curso=isset($_POST["modelo_certificado_curso"])? limpiarCadena($_POST["modelo_certificado_curso"]):"";
$firma1_curso=isset($_POST["firma1_curso"])? limpiarCadena($_POST["firma1_curso"]):"";
$firma2_curso=isset($_POST["firma2_curso"])? limpiarCadena($_POST["firma2_curso"]):"";
$fecha_inicio=isset($_POST["fecha_inicio"])? limpiarCadena($_POST["fecha_inicio"]):"";
$hora_inicio=isset($_POST["hora_inicio"])? limpiarCadena($_POST["hora_inicio"]):"";
$fecha_fin=isset($_POST["fecha_fin"])? limpiarCadena($_POST["fecha_fin"]):"";
$hora_fin=isset($_POST["hora_fin"])? limpiarCadena($_POST["hora_fin"]):"";
$apenom_ponente=isset($_POST["apenom_ponente"])? limpiarCadena($_POST["apenom_ponente"]):"";
$cargo=isset($_POST["cargo"])? limpiarCadena($_POST["cargo"]):"";
$objetivo_curso=isset($_POST["objetivo_curso"])? limpiarCadena($_POST["objetivo_curso"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':		
	
		if (empty($idcurso)){

			// ----------> Codigo para subier Imagen del servicio
			$fileTmpPath = $_FILES['img_curso']['tmp_name'];
			$fileName = $_FILES['img_curso']['name'];
			$tamano_archivo = $_FILES['img_curso']['size'];
			$tipo_archivo_img = $_FILES['img_curso']['type'];
			$fileNameCmps_img = explode(".", $fileName);
			$fileExtension_img = strtolower(end($fileNameCmps_img));

			$nuevoNombreImg = time() . '_curso.' . $fileExtension_img;
			$direccion_img = $ruta.'/certificados/files/imagen_curso/';
			$dest_path_img = $direccion_img . $nuevoNombreImg;


			// --------->  Codigo para subir audio de quechua o aymara
			$fileTmpPath_certificado = $_FILES['modelo_certificado_curso']['tmp_name'];
			$fileName_certificado = $_FILES['modelo_certificado_curso']['name'];
			$tamano_archivo_certificado = $_FILES['modelo_certificado_curso']['size'];
			$tipo_archivo_certificado = $_FILES['modelo_certificado_curso']['type'];
			$fileNameCmps_certificado = explode(".", $fileName_certificado);
			$fileExtension_certificado = strtolower(end($fileNameCmps_certificado));

			$nuevoNombre_certificado = time().'_certificado.' . $fileExtension_certificado;
			$direccion_certificado = $ruta.'/certificados/files/modelo_certificados/';
			$dest_path_certificado = $direccion_certificado . $nuevoNombre_certificado;


			// ----------> Codigo para subier Firma 1
			$fileTmpPath_firma1 = $_FILES['firma1_curso']['tmp_name'];
			$fileName_firma1 = $_FILES['firma1_curso']['name'];
			$tamano_archivo_firma1 = $_FILES['firma1_curso']['size'];
			$tipo_archivo_firma1 = $_FILES['firma1_curso']['type'];
			$fileNameCmps_firma1 = explode(".", $fileName_firma1);
			$fileExtension_firma1 = strtolower(end($fileNameCmps_firma1));

			$nuevoNombreFirma1 = time() . '_firma1.' . $fileExtension_firma1;
			$direccion_firma1 = $ruta.'/certificados/files/firmas_curso/';
			$dest_path_firma1 = $direccion_firma1 . $nuevoNombreFirma1;


			// --------->  Codigo para subir Firm 2
			$fileTmpPath_firma2 = $_FILES['firma2_curso']['tmp_name'];
			$fileName_firma2 = $_FILES['firma2_curso']['name'];
			$tamano_archivo_firma2 = $_FILES['firma2_curso']['size'];
			$tipo_archivo_firma2 = $_FILES['firma2_curso']['type'];
			$fileNameCmps_firma2 = explode(".", $fileName_firma2);
			$fileExtension_firma2 = strtolower(end($fileNameCmps_firma2));

			$nuevoNombre_firma2 = time().'_firma2.' . $fileExtension_firma2;
			$direccion_firma2 = $ruta.'/certificados/files/firmas_curso/';
			$dest_path_firma2 = $direccion_firma2 . $nuevoNombre_firma2;


			// Consulta para verificar los archivos subidos
			if (!((strpos($tipo_archivo_img, "png") || strpos($tipo_archivo_img, "jpeg")) && ($tamano_archivo < 600000))) {
			   	echo "La extensión o el tamaño de la Imagen del curso no es correcta. <br><br><table><tr><td><li>Se permiten archivos .png o .jpg<br><li>se permiten archivos de 500 Kb máximo.</td></tr></table>";
			}elseif (!((strpos($tipo_archivo_certificado, "png") || strpos($tipo_archivo_certificado, "jpeg")))) {

				echo $tipo_archivo_Audio."La extensión del modelo del certificado no es correcta. <br><br><table><tr><td><li>Se permiten archivos .png o .jpg<br><li></td></tr></table>";

			}elseif (!((strpos($tipo_archivo_firma1, "png") || strpos($tipo_archivo_firma1, "jpeg")) && (strpos($tipo_archivo_firma2, "png") || strpos($tipo_archivo_firma2, "jpeg"))))    {

				echo $tipo_archivo_Audio."La extensión del de las firma 1 o 2 no es correcta. <br><br><table><tr><td><li>Se permiten archivos .png o .jpg<br><li></td></tr></table>";

			}else{
				move_uploaded_file($fileTmpPath, $dest_path_img);
				move_uploaded_file($fileTmpPath_certificado, $dest_path_certificado);
				move_uploaded_file($fileTmpPath_firma1, $dest_path_firma1);
				move_uploaded_file($fileTmpPath_firma2, $dest_path_firma2);

				$rspta=$curso->insertar($nombre_curso, $organizador, $modalidad_curso, $nuevoNombreImg, $nuevoNombre_certificado, $nuevoNombreFirma1, $nuevoNombre_firma2, $fecha_inicio, $hora_inicio, $fecha_fin, $hora_fin, $apenom_ponente, $cargo, $objetivo_curso );
			echo $rspta ? "Curso  registrado" : "Curso  no se pudo registrar";
			}	




			
		}
		else {
			$rspta=$curso->editar($idcurso,$nombre_curso, $organizador, $modalidad_curso, $img_curso, $modelo_certificado_curso, $firma1_curso, $firma2_curso, $fecha_inicio, $hora_inicio, $fecha_fin, $hora_fin, $apenom_ponente, $cargo, $objetivo_curso);
			echo $rspta ? "Curso  actualizado" : "Curso  no se pudo actualizar";
		}
		
	break;

	case 'desactivar':
		$rspta=$curso->desactivar($idcurso);
 		echo $rspta ? "Empleado Desactivado" : "Empleado no se puede desactivar";
	break;

	case 'activar':
		$rspta=$curso->activar($idcurso);
 		echo $rspta ? "Empleado activado" : "Empleado no se puede activar";
	break;

	case 'mostrar':
		$rspta=$curso->mostrar($idcurso);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'mostrarcondni':
		$rspta=$curso->mostrarcondni($dni);
 		//Codificar el resultado utilizando json
 		echo $rspta;
	break;

	case 'listarCursosPeoples':
		$rspta=$curso->listarCursosPeoples();
 		//Vamos a declarar un array
 		$data= "";

 		while ($reg=$rspta->fetch_object()){
 			$data = $data.
 				
 				'<div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_courses bg-white">
                        <div class="thumb" style=" height: 300px">
                            <a href="detalles_curso.php?id='.$reg->id_curso.'">
                                <img   class="img-responsive" src="../../files/imagen_curso/'.$reg->img_curso.'" alt="">
                            </a>
                        </div>
	                    <div class="courses_info">
	                        <span>Curso</span>
	                        <h3><a href="detalles_curso.php?id='.$reg->id_curso.'">'.$reg->nombre_curso.'</a></h3>                                        
	                        <div class="star_prise d-flex justify-content-between">
	                            <div class="star">
	                                <span>'.$reg->fecha_inicio.' - '.$reg->hora_inicio.'</span>
	                            </div>
	                            <div class="prise">
	                                <a href="detalles_curso.php?id='.$reg->id_curso.'" class="genric-btn success radius small">Registrarse</a>
	                            </div>
	                        </div>
	                    </div>
                    </div>
                </div>'

 				;
 		} 		
 		echo $data;

	break;

	case 'listarCursosVigentes':
		
		$rspta=$curso->listarCursosVigentes();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				
 				"0"=>$reg->nombre_curso,
 				"1"=>'<div class="text-center">'.$reg->fecha_inicio." ".$reg->hora_inicio.'</div>',
 				"2"=>'<div class="text-center"><button class="btn  btn-success" onclick="mostrar('.$reg->id_curso.')"><i class="fa fa-eye"></i> <small> Ver</samll></button>'.
 					' <button class="btn  btn-info" onclick="mostrar('.$reg->id_curso.')"><i class="fa  fa-users"></i> <small> Particpantes</samll></button>'.
 					' <button class="btn  btn-primary" onclick="inicialEnlaces('.$reg->id_curso.')"><i class="fa  fa-link"></i> <small> Enlaces</samll></button>'.
 					' <button class="btn  btn-warning" onclick="mostrar('.$reg->id_curso.')"><i class="fa  fa-graduation-cap" > <small> Generar</samll></i></button>'.
 					'  <button class="btn btn-danger" onclick="desactivar('.$reg->id_curso.')"><i class="fa fa-close"></i> <small> Eliminar</samll></button></div>'				
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

	case 'listarCursosConcluidos':
		
		$rspta=$curso->listarCursosConcluidos();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				
 				"0"=>$reg->nombre_curso,
 				"1"=>'<div class="text-center">'.$reg->fecha_inicio." ".$reg->hora_inicio.'</div>',
 				"2"=>'<div class="text-center"><button class="btn  btn-success" onclick="mostrar('.$reg->id_curso.')"><i class="fa fa-eye"></i> <small> Ver</samll></button></div>'			
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

	case 'listarCursosEliminados':
		
		$rspta=$curso->listarCursosElimiandos();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				
 				"0"=>$reg->nombre_curso,
 				"1"=>'<div class="text-center">'.$reg->fecha_inicio." ".$reg->hora_inicio.'</div>',
 				"2"=>'<div class="text-center"><button class="btn  btn-success" onclick="mostrar('.$reg->id_curso.')"><i class="fa fa-eye"></i> <small> Ver</samll></button>'.
 					' <button class="btn  btn-primary" onclick="activar('.$reg->id_curso.')"><i class="fa fa-check"> <small> Restablecer</samll></i></button></div>' 				
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

}
//Fin de las validaciones de acceso



?>