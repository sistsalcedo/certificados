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
		$sql="SELECT *, ponente.apenom_ponente, ponente.cargo   FROM cursos
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


	public function generar_cert_url($idcurso, $fecha_inicio){

		$n_ulitmo_certificado = "SELECT id_certificado_url, id_curso, nombre_curso, fecha_inicio_curso, fecha_fin_curso, organizador_curso, modelo_certificado, modalidad_curso, tpo_certificado, apellidos_nombres, id_alumno, firma_presidente, firma_organizador, firma_opcional, n_certificado, codigo_certificado, qr_certificado, f_created, descargado_certificado
			FROM certificados_x_url
			WHERE Date_format(fecha_inicio_curso,'%Y') = 2021 ORDER BY id_certificado_url desc limit 1" ;
		$rspta = ejecutarConsultaSimpleFila($n_ulitmo_certificado);

		 $n_cert =  $rspta["n_certificado"] + 1;
		 $mes = date("m", strtotime($rspta["fecha_inicio_curso"])) ;
		 $tpo_certificado = 'ASISTENTE';
		 $codigo_certificado = $n_cert.'-'.$mes.'-2021-CV-CSJHCO-PJ';

		$sql="SELECT id_asistencia, asistenciacursos.id_curso, cursos.nombre_curso, cursos.fecha_inicio, cursos.fecha_fin, cursos.organizador, cursos.modelo_certificado_curso, cursos.modalidad_curso, cursos.firma1_curso, cursos.firma2_curso,
		 asistenciacursos.id_alumno, alumnos.dni, alumnos.apenom,  fecha_ingreso, fecha_salida, fecha_intermedia, ip_asistencia
			FROM asistenciacursos
			INNER JOIN cursos ON asistenciacursos.id_curso = cursos.id_curso
			INNER JOIN alumnos ON asistenciacursos.id_alumno = alumnos.id_alumno
			WHERE asistenciacursos.id_curso = '$idcurso' AND fecha_ingreso IS NOT NULL AND fecha_intermedia IS NOT NULL AND fecha_salida IS NOT NULL";

		$query = ejecutarConsulta($sql);

		

		while ($reg = $query->fetch_object()){

			$sql2 ="INSERT INTO certificados_x_url ( id_curso, nombre_curso, fecha_inicio_curso, fecha_fin_curso, organizador_curso, modelo_certificado, modalidad_curso, tpo_certificado, apellidos_nombres, id_alumno, firma_presidente, firma_organizador, n_certificado, codigo_certificado, qr_certificado, f_created)
				VALUES ( '$reg->id_curso', '$reg->nombre_curso', '$reg->fecha_inicio', '$reg->fecha_fin', '$reg->organizador', '$reg->modelo_certificado_curso','$reg->modalidad_curso', '$tpo_certificado', '$reg->apenom', '$reg->dni', '$reg->firma1_curso', '$reg->firma2_curso', '$n_cert',  '$codigo_certificado', '$codigo_certificado', NOW())";
			return ejecutarConsulta($sql2);
			//echo $sql2;

		}
	}

	public function datos_p_certificado_url( $id_curso, $id_alumno ){



			
	}
}


//$curso=new Curso();

//$rspta=$curso->generar_cert_url(28, 1620000000);
 		//echo $rspta ? "Certificados generados coorrectamente" : "Certificados no se puede desactivar";

//var_dump($rspta);
?>