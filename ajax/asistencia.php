<?php 
	
require_once "../modelos/Certificado.php";
require_once "../config/connection.php";

$asistencia=new Asistencia();

$txt_dni=isset($_POST["txt_dni"])? limpiarCadena($_POST["txt_dni"]):"";
$id_curso=isset($_POST["id_curso"])? limpiarCadena($_POST["id_curso"]):"";

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
		$rspta=$asistencia->verificar($txt_dni, $id_curso );
 		echo $rspta ? "1" : "0";
	break;

	case 'marcarAsistencia':
		$rspta=$asistencia->marcarAsistencia($txt_dni, $id_curso);
		
		echo $rspta ? "Categoria registrada" : "Categoria no se pudo registrar";

	break;

	case 'registrar':
		$rspta=$asistencia->registrarParticipante($txt_dni, $id_curso);
		
		echo $rspta ? "Categoria registrada" : "Categoria no se pudo registrar";

	break;


}
//Fin de las validaciones de acceso



?>