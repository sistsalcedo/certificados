<?php 
	
require_once "../modelos/Certificado.php";
require_once "../config/connection.php";

$certificado=new Certificado();

$txtdniOcelular=isset($_POST["txtdniOcelular"])? limpiarCadena($_POST["txtdniOcelular"]):"";
$txtemail=isset($_POST["txtemail"])? limpiarCadena($_POST["txtemail"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':

		
		if (empty($idtpo_equipo)){
			$rspta=$certificado->insertar($tpo_equipocol_nombre);
			echo $rspta ? "Categoria registrada" : "Categoria no se pudo registrar";
		}
		else {
			$rspta=$certificado->editar($idtpo_equipo,$tpo_equipocol_nombre);
			echo $rspta ? "Categoria actualizada" : "Categoria no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$certificado->desactivar($idtpo_equipo);
 		echo $rspta ? "Categoria Desactivada" : "Categoria no se puede desactivar";
	break;

	case 'activar':
		$rspta=$certificado->activar($idtpo_equipo);
 		echo $rspta ? "Categoria activada" : "Categoria no se puede activar";
	break;

	case 'mostrar':
		$rspta=$certificado->mostrar($txtdniOcelular);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'mostrarDatos':

		require_once "../modelos/Alumnos.php";
		$alumnos=new Alumnos();

		$rspta=$alumnos->mostrar($txtdniOcelular);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;


	case 'verificar':
		$rspta=$certificado->verificar($txtdniOcelular, $txtemail );
 		echo $rspta ? "1" : "<p align='center'><strong>AVISO</strong></p> <br><br><table><tr><td><li>Ingrese los datos correctos.<br><li>Debe poner los mismos datos que ingresó en el <strong>proceso de registro</strong> al curso.</td></tr></table>";
	break;

	case 'listar':
		
		$rspta=$certificado->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				
 				"0"=>$reg->tpo_equipocol_nombre,
 				"1"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>',
 				"2"=>($reg->condicion)?'<button class="btn btn-xs btn-warning" onclick="mostrar('.$reg->idtpo_equipo.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-xs btn-danger" onclick="desactivar('.$reg->idtpo_equipo.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-xs btn-warning" onclick="mostrar('.$reg->idtpo_equipo.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-xs btn-primary" onclick="activar('.$reg->idtpo_equipo.')"><i class="fa fa-check"></i></button>' 				
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);
 		//var_dump($results);

	break;

	case 'listarCertificadosAlumno':

		$txtdniOcelular = $_GET['txtdniOcelular'];
		
		$rspta=$certificado->listarCertificadosAlumno($txtdniOcelular);
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				
 				"0"=>$reg->nombre_curso,
 				"1"=>'<p align="center"><a  href="../../../certificados/files/certificados/'.$reg->pdf_certificado.'" download ><i class="fa fa-download"></i></a></p>',
 
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);
 		//var_dump($results);

	break;


}
//Fin de las validaciones de acceso



?>