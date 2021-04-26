<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/connection.php";

Class Cuenta_regresiva
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}



	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_curso, $cadena)
	{
		$sql="SELECT  * FROM enlaces_asistencia_curso WHERE cadena_aleatoria = '$cadena' AND id_curso = '$id_curso'";
		return ejecutarConsultaSimpleFila($sql);
	}



}


?>
