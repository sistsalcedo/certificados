<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/connection.php";

Class Curso
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($nombre_curso, $organizador, $modalidad_curso, $img_curso, $modelo_certificado_curso, $firma1_curso, $firma2_curso, $fecha_inicio, $hora_inicio, $fecha_fin, $hora_fin, $apenom_ponente, $cargo, $objetivo_curso)
	{
		
		$sql="INSERT INTO ponente (apenom_ponente,cargo)	 VALUES ( '$apenom_ponente', '$cargo')";
		$id_ponente = ejecutarConsulta_retornarID($sql);

		$sql1="INSERT INTO cursos ( nombre_curso, id_ponente, img_curso, modelo_certificado_curso, firma1_curso, firma2_curso, objetivo_curso, fecha_inicio, hora_inicio, fecha_fin, hora_fin, modalidad_curso, organizador ) VALUES ('$nombre_curso', '$id_ponente', '$img_curso', '$modelo_certificado_curso', '$firma1_curso', '$firma2_curso', '$objetivo_curso', '$fecha_inicio', '$hora_inicio', '$fecha_fin', '$hora_fin', '$modalidad_curso', '$organizador') ";
		return ejecutarConsulta($sql1);
	}

	


	//Implementamos un método para editar registros
	public function editar($idcurso,$nombre_curso, $organizador, $modalidad_curso, $img_curso, $modelo_certificado_curso, $firma1_curso, $firma2_curso, $fecha_inicio, $hora_inicio, $fecha_fin, $hora_fin, $apenom_ponente, $cargo, $objetivo_curso)
	{
		
		$sql="UPDATE personas SET employee_dni = '$dni' , employee_name = '$nombres', employee_apellidos = '$apellidos', employee_email = '$email', employee_phone = '$phone', dependencia_iddependencia = '$dependencia', tpocargo_id = '$cargo', sedeid = '$sede'  WHERE  idemployee = '$idemployee'";

		$sql1="UPDATE users SET nick = '$dni' ,email = '$email' WHERE  id = '$idemployee' ";
		ejecutarConsulta($sql1);

		return ejecutarConsulta($sql);

	}

	//Implementamos un método para desactivar registros
	public function desactivar($idemployee)
	{
		$sql="UPDATE personas SET condicion='0' WHERE idemployee='$idemployee'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar registros
	public function activar($idemployee)
	{
		$sql="UPDATE personas SET condicion='1' WHERE idemployee='$idemployee'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idcurso)
	{
		$sql="SELECT *, ponente.apenom_ponente  FROM cursos
				INNER JOIN ponente ON cursos.id_ponente = ponente.id_ponente
				WHERE id_curso = '$idcurso' ";
		return ejecutarConsultaSimpleFila($sql);
	}


	public function nombrecurso($idcurso){
		$sql="SELECT nombre_curso  FROM cursos	WHERE id_curso = '$idcurso' ";
		return ejecutarConsultaSimpleFila($sql);

	}


	//Implementar un método para listar los registros
	public function listarCursosVigentes()
	{
		$sql="SELECT * FROM cursos  WHERE estado_curso = 'No realizado' AND  condicion = '1'  ORDER BY fecha_inicio DESC";
		return ejecutarConsulta($sql);		
	}

	public function listarCursosConcluidos()
	{
		$sql="SELECT * FROM cursos  WHERE estado_curso = 'Realizado' AND  condicion = '1' ORDER BY fecha_inicio DESC";
		return ejecutarConsulta($sql);		
	}

	public function listarCursosElimiandos()
	{
		$sql="SELECT * FROM cursos WHERE condicion = '0' ORDER BY fecha_inicio DESC";
		return ejecutarConsulta($sql);		
	}



	//Implementar un método para listar los registros activos, su último precio y el stock (vamos a unir con el último registro de la tabla detalle_ingreso)
	public function listarCursosPeoples()
	{
		$sql="SELECT *, ponente.apenom_ponente  FROM cursos
				INNER JOIN ponente ON cursos.id_ponente = ponente.id_ponente
				WHERE fecha_inicio >= CURDATE() ORDER BY fecha_inicio asc ";
		return ejecutarConsulta($sql);		
	}
}



?>