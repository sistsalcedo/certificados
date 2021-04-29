<?php 
	
require_once "../modelos/Asistencia.php";
require_once "../config/connection.php";

$asistencia=new Asistencia();

$txt_dni=isset($_POST["txt_dni"])? limpiarCadena($_POST["txt_dni"]):"";
$id_curso=isset($_POST["id_curso"])? limpiarCadena($_POST["id_curso"]):"";
$apenom=isset($_POST["apenom"])? limpiarCadena($_POST["apenom"]):"";
$cadena=isset($_POST["cadena"])? limpiarCadena($_POST["cadena"]):"";
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

	case 'validar_url':
		$rspta=$asistencia->validar_url($id_curso , $cadena, $momento);
 		echo json_encode($rspta);
	break;


	case 'si_enlace_vigente':
		$rspta=$asistencia->si_enlace_vigente($id_curso , $cadena);
 		echo json_encode($rspta);
	break;

	case 'si_se_matriculo':
		$rspta=$asistencia->si_se_matriculo( $txt_dni, $id_curso, $momento );
 		echo json_encode($rspta);
	break;

	case 'si_user_existe':
		$rspta=$asistencia->si_user_existe($txt_dni);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;


	case 'ip_matricula':
		$rspta=$asistencia->ip_matricula( $id_curso );
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'matricular':
		$rspta=$asistencia->matricular($id_curso , $txt_dni, $momento );
 		//Codificar el resultado utilizando json
 		echo $rspta ? "Correcto " : "No se pudo marcar asistencia. Intentelo denuevo";
	break;

	case 'crearuser_matricular_asistencia':
		$rspta=$asistencia->crearuser_matricular_asistencia($id_curso , $txt_dni, $apenom );
 		//Codificar el resultado utilizando json
 		echo $rspta ? "Correcto " : "No se pudo marcar asistencia. Intentelo denuevo";
	break;

	case 'marcar_asistencia':
		$rspta=$asistencia->marcar_asistencia($txt_dni, $id_curso, $momento );
 		//Codificar el resultado utilizando json
 		echo $rspta ? "Correcto " : "No se pudo marcar asistencia. Intentelo denuevo";
	break;




	case 'registrar':
		$rspta=$asistencia->registrarParticipante($txt_dni, $id_curso);
		
		echo $rspta ? "Categoria registrada" : "Categoria no se pudo registrar";

	break;


}
//Fin de las validaciones de acceso



?>