<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/connection.php";

Class EnlacesUrl
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($id_curso, $momento_enlace, $fecha_inicio_enlace, $hora_inicio_enlace)
	{

		$caracteres_permitidos = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$cadena_aleatoria =  substr(str_shuffle($caracteres_permitidos), 0, 10);

		$enlace_url = 'http://sisec.csjhuanuco.com/'.'vistas/view_sise/asistencia.php?reg='.$cadena_aleatoria.'&id='.$id_curso.'&momento='.$momento_enlace;

		$sql="INSERT INTO enlaces_asistencia_curso (cadena_aleatoria, enlace_url, fechainicio_url, horainicio_url, momento_enlace_url, id_curso) 
							VALUES ( '$cadena_aleatoria', '$enlace_url', '$fecha_inicio_enlace', '$hora_inicio_enlace',  '$momento_enlace', '$id_curso' )";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($id_curso, $momento_enlace, $fecha_inicio_enlace, $hora_inicio_enlace)
	{
		
		$sql="UPDATE inv_equipo_tpo SET tpo_equipocol_nombre = '$tpo_equipocol_nombre'  WHERE  idtpo_equipo = '$idtpo_equipo'";
		return ejecutarConsulta($sql);

	}

	//Implementamos un método para desactivar registros
	public function desactivar($id_enlace_curso)
	{
		$sql="UPDATE enlaces_asistencia_curso SET condicion_url='0' WHERE id_enlace_curso='$id_enlace_curso'";
		return ejecutarConsulta($sql);
	}


	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idtpo_equipo)
	{
		$sql="SELECT * FROM inv_equipo_tpo WHERE idtpo_equipo='$idtpo_equipo'";
		return ejecutarConsultaSimpleFila($sql);
	}

	// Implenmetar u metodo para mostrar el formulario de creacion de de enlaces siempre y cuando haya menos de 3 enlaces
	public function mostrarform($id_curso)
	{

		$sql="SELECT count(*) as total  FROM enlaces_asistencia_curso WHERE id_curso = '$id_curso' AND condicion_url = 1";
		$data= ejecutarConsultaSimpleFila($sql);
		return $data['total'];
	}


	//Implementar un método para listar los registros
	public function listar_enlaces($id_curso)
	{
		$sql="SELECT  *  FROM enlaces_asistencia_curso WHERE id_curso = '$id_curso' AND condicion_url = 1";
		return ejecutarConsulta($sql);		
	}


}


?>
