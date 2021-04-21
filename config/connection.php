<?php
//include connection to data base
$connection = new mysqli("localhost", "root", "", "farojeqn_bdpjhuanuco");
$ruta = $_SERVER['DOCUMENT_ROOT'];
$url = "csjhuanuco.com";

if (!function_exists('ejecutarConsulta'))
{
	function ejecutarConsulta($sql)
	{
		global $connection;
		$query = $connection->query($sql);
		return $query;
	}

	function ejecutarConsultaSimpleFila($sql)
	{
		global $connection;
		$query = $connection->query($sql);		
		$row = $query->fetch_assoc();
		return $row;
	}

	function ejecutarConsulta_retornarID($sql)
	{
		global $connection;
		$query = $connection->query($sql);		
		return $connection->insert_id;			
	}

	function limpiarCadena($str)
	{
		global $connection;
		$str = mysqli_real_escape_string($connection,trim($str));
		return htmlspecialchars($str);
	}
}


?>