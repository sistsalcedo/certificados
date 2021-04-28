<?php 
	
require_once "../modelos/Matricula.php";

$matricula=new Matricula();

$txt_dni=isset($_POST["txt_dni"])? limpiarCadena($_POST["txt_dni"]):"";
$txt_apenom=isset($_POST["txt_apenom"])? limpiarCadena($_POST["txt_apenom"]):"";
$txt_celular=isset($_POST["txt_celular"])? limpiarCadena($_POST["txt_celular"]):"";
$txt_email=isset($_POST["txt_email"])? limpiarCadena($_POST["txt_email"]):"";
$id_curso=isset($_POST["id_curso"])? limpiarCadena($_POST["id_curso"]):"";
$flag=isset($_POST["flag"])? limpiarCadena($_POST["flag"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':		
	
			$rspta=$matricula->insertar($txt_dni,$txt_apenom,$txt_email,$txt_celular,$id_curso, $flag);
			echo $rspta ? "Usted se registró satisfactoriamente" : "No se Puede registrar. Intentelo denuevo";
		
	break;

	case 'desactivar':
		$rspta=$matricula->desactivar($idemployee);
 		echo $rspta ? "Empleado Desactivado" : "Empleado no se puede desactivar";
	break;

	case 'activar':
		$rspta=$matricula->activar($idemployee);
 		echo $rspta ? "Empleado activado" : "Empleado no se puede activar";
	break;

	case 'mostrar':
		$rspta=$matricula->mostrar($idemployee);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'mostrarcondni':
		$rspta=$matricula->mostrarcondni($dni);
 		//Codificar el resultado utilizando json
 		echo $rspta;
	break;

	case 'listar':
		$rspta=$matricula->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				
 				"0"=>$reg->employee_name." ".$reg->employee_apellidos,
 				"1"=>$reg->tpocargo_name,
 				"2"=>$reg->sedecol_nombre,
 				"3"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>',
 				"4"=>($reg->condicion)?'<button class="btn btn-xs btn-warning" onclick="mostrar('.$reg->idemployee.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-xs btn-danger" onclick="desactivar('.$reg->idemployee.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-xs btn-warning" onclick="mostrar('.$reg->idemployee.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-xs btn-primary" onclick="activar('.$reg->idemployee.')"><i class="fa fa-check"></i></button>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

	// case "selectCategoria":
	// 	require_once "../modelos/Categoria.php";
	// 	$categoria = new Categoria();

	// 	$rspta = $categoria->select();

	// 	while ($reg = $rspta->fetch_object())
	// 			{
	// 				echo '<option value=' . $reg->idcategoria . '>' . $reg->nombre . '</option>';
	// 			}
	// break;
}
//Fin de las validaciones de acceso



?>