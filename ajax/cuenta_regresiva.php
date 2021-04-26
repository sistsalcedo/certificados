<?php 
	
require_once "../modelos/Cuenta_regresiva.php";
require_once "../config/connection.php";

$cuenta_regresiva=new Cuenta_regresiva();

$id_curso=isset($_POST["id_curso"])? limpiarCadena($_POST["id_curso"]):"";
$cadena=isset($_POST["cadena"])? limpiarCadena($_POST["cadena"]):"";

switch ($_GET["op"]){
	


	case 'cuenta_regresiva':
		$rspta=$cuenta_regresiva->mostrar($id_curso, $cadena);
 		//Codificar el resultado utilizando json
 		//var_dump($rspta);

 		echo json_encode($rspta , JSON_UNESCAPED_UNICODE );
	break;



}
//Fin de las validaciones de acceso



?>