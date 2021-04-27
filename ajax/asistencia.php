<?php 
	
require_once "../modelos/Asistencia.php";
require_once "../config/connection.php";

$asistencia=new Asistencia();

$txt_dni=isset($_POST["txt_dni"])? limpiarCadena($_POST["txt_dni"]):"";
$id_curso=isset($_POST["id_curso"])? limpiarCadena($_POST["id_curso"]):"";
$txt_apenom=isset($_POST["txt_apenom"])? limpiarCadena($_POST["txt_apenom"]):"";
$txt_email=isset($_POST["txt_email"])? limpiarCadena($_POST["txt_email"]):"";
$txt_celular=isset($_POST["txt_celular"])? limpiarCadena($_POST["txt_celular"]):"";
$flag=isset($_POST["flag"])? limpiarCadena($_POST["flag"]):"";
$momento=isset($_POST["momento"])? limpiarCadena($_POST["momento"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':		
	
			$rspta=$asistencia->insertar($txt_dni,$txt_apenom,$txt_email,$txt_celular,$id_curso, $flag);
			echo $rspta ? "Usted se registró satisfactoriamente" : "No se Puede registrar. Intentelo denuevo";
		
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
		$rspta=$asistencia->verificar($txt_dni, $id_curso , $momento);
 		echo json_encode($rspta);
	break;

	case 'verificar_ex':
		$rspta=$asistencia->verificar_ex($txt_dni, $id_curso , $momento);
 		echo json_encode($rspta);
	break;


	case 'marcarAsistencia':
		$rspta=$asistencia->marcarAsistencia($txt_dni, $id_curso, $momento);
		
		echo $rspta ? "Control de Asistencia realizada" : "Control de Asistencia no se puedo realizar";

	break;

	case 'registrar':
		$rspta=$asistencia->registrarParticipante($txt_dni, $id_curso);
		
		echo $rspta ? "Categoria registrada" : "Categoria no se pudo registrar";

	break;


}
//Fin de las validaciones de acceso



?>