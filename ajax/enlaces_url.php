<?php 
	
require_once "../modelos/EnlacesUrl.php";
require_once "../config/connection.php";

$enlacesUrl=new EnlacesUrl();

$id_enlace_curso=isset($_POST["id_enlace_curso"])? limpiarCadena($_POST["id_enlace_curso"]):"";
$id_curso=isset($_POST["id_curso"])? limpiarCadena($_POST["id_curso"]):"";
$id_curso_enlace=isset($_POST["id_curso_enlace"])? limpiarCadena($_POST["id_curso_enlace"]):"";
$momento_enlace=isset($_POST["momento_enlace"])? limpiarCadena($_POST["momento_enlace"]):"";
$fecha_inicio_enlace=isset($_POST["fecha_inicio_enlace"])? limpiarCadena($_POST["fecha_inicio_enlace"]):"";
$hora_inicio_enlace=isset($_POST["hora_inicio_enlace"])? limpiarCadena($_POST["hora_inicio_enlace"]):"";
// $duracion_enlace=isset($_POST["duracion_enlace"])? limpiarCadena($_POST["duracion_enlace"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':

		
		if (empty($id_enlace_curso)){
			$rspta=$enlacesUrl->insertar($id_curso_enlace, $momento_enlace, $fecha_inicio_enlace, $hora_inicio_enlace);
			echo $rspta ? "Enlace registrada" : "Enlace no se pudo registrar";
		}
		else {
			$rspta=$enlacesUrl->editar($id_enlace_curso, $id_curso_enlace, $momento_enlace, $fecha_inicio_enlace, $hora_inicio_enlace);
			echo $rspta ? "Enlace actualizada" : "Enlace no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$enlacesUrl->desactivar($id_enlace_curso);
 		echo $rspta ? "Enlace Eliminada" : "Enlace no se puede desactivar";
	break;


	case 'mostrar':
		$rspta=$enlacesUrl->mostrar($id_enlace_curso);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'mostrarDatos':

		$rspta=$enlacesUrl->mostrar($id_curso);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'mostrarform':

		$rspta=$enlacesUrl->mostrarform($id_curso);
 		//Codificar el resultado utilizando json
 		echo  $rspta;
	break;

	case 'nombrecurso':

		require_once "../modelos/Curso.php";
		$curso=new Curso();
		$rspta=$curso->nombrecurso($id_curso);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;



	case 'listar_enlaces':
		
		$rspta=$enlacesUrl->listar_enlaces($id_curso);
 		//Vamos a declarar un array
 		$data= "";

 		while ($reg=$rspta->fetch_object()){
 			$data = $data.
 				
 				'<div class="input-group ">
                  <div class="input-group-btn">
                    <button type="button" onclick="mostrar('.$reg->id_enlace_curso.')" class="btn btn-warning"><i class="fa fa-pencil "></i></button>
                    <button type="button" onclick="desactivarurl('.$reg->id_enlace_curso.','.$reg->id_curso.')" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                  </div><!-- /btn-group -->
                  <input type="text" readonly class="form-control" value="'.$reg->enlace_url.'">
                  <span class="input-group-btn">
                    <button class="btn btn-default btn-flat" type="button">'.$reg->momento_enlace_url.'</button>
                  </span>
                </div>
                <br>' 

 				;
 		} 		
 		echo $data;

	break;


}
//Fin de las validaciones de acceso



?>