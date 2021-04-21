<?php 
	
require_once "../modelos/Curso.php";

$curso=new Curso();

$txt_dni=isset($_POST["txt_dni"])? limpiarCadena($_POST["txt_dni"]):"";
$txt_apenom=isset($_POST["txt_apenom"])? limpiarCadena($_POST["txt_apenom"]):"";
$txt_celular=isset($_POST["txt_celular"])? limpiarCadena($_POST["txt_celular"]):"";
$txt_email=isset($_POST["txt_email"])? limpiarCadena($_POST["txt_email"]):"";
$id_curso=isset($_POST["id_curso"])? limpiarCadena($_POST["id_curso"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':		
	
			$rspta=$curso->insertar($txt_dni,$txt_apenom,$txt_email,$txt_celular,$id_curso);
			echo $rspta ? "Usted se registró satisfactoriamente" : "No se Puede registrar. Intentelo denuevo";
		
	break;

	case 'desactivar':
		$rspta=$curso->desactivar($idemployee);
 		echo $rspta ? "Empleado Desactivado" : "Empleado no se puede desactivar";
	break;

	case 'activar':
		$rspta=$curso->activar($idemployee);
 		echo $rspta ? "Empleado activado" : "Empleado no se puede activar";
	break;

	case 'mostrar':
		$rspta=$curso->mostrar($idemployee);
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
 			$data = 
 				
 				'<div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_courses">
                        <div class="thumb">
                            <a href="course_details.php">
                                <img src="img/courses/'.$reg->img_curso.'" alt="">
                            </a>
                        </div>
	                    <div class="courses_info">
	                        <span>Curso</span>
	                        <h3><a href="course_details.php">'.$reg->nombre_curso.'</a></h3>                                        
	                        <div class="star_prise d-flex justify-content-between">
	                            <div class="star">
	                                <span>'.$reg->fecha_inicio.' - '.$reg->hora_inicio.'</span>
	                            </div>
	                            <div class="prise">
	                                <a href="course_details.php" class="genric-btn success radius small">Registrarse</a>
	                            </div>
	                        </div>
	                    </div>
                    </div>
                </div>'

 				;
 		} 		
 		echo $data;

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