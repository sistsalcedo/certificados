<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/connection.php";

Class Asistencia
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}


	//Implementamos un método para insertar registros
	public function marcarAsistencia($txt_dni, $id_curso, $momento)
	{
		
		$sql1="SELECT id_alumno FROM alumnos WHERE dni='$txt_dni'";
		$rs = ejecutarConsultaSimpleFila($sql1);
		$id_alumno = $rs['id_alumno'];



		if(  $momento == 'inicio'   ){

			$sql="INSERT INTO asistenciacursos (id_curso, id_alumno, fecha_ingreso) VALUES ( '$id_curso' , '$id_alumno', NOW() )";
			return ejecutarConsulta($sql);

		}elseif( $momento == 'medio' ){

			$sql="INSERT INTO asistenciacursos (id_curso, id_alumno, fecha_intermedia) VALUES ( '$id_curso' , '$id_alumno', NOW() )";
			return ejecutarConsulta($sql);
		}else {
			$sql="INSERT INTO asistenciacursos (id_curso, id_alumno, fecha_salida) VALUES ( '$id_curso' , '$id_alumno', NOW() )";
			return ejecutarConsulta($sql);
		}
	}



	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idtpo_equipo)
	{
		$sql="SELECT * FROM inv_equipo_tpo WHERE idtpo_equipo='$idtpo_equipo'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM inv_equipo_tpo ORDER BY tpo_equipocol_nombre ASC";
		return ejecutarConsulta($sql);		
	}


	//Implementar un método para mostrar los datos de un registro a modificar
	public function validar_url($id_curso , $cadena, $momento)
	{
		
		$sql="SELECT id_enlace_curso, cadena_aleatoria, enlace_url, enlaceQR_url, fechainicio_url, horainicio_url, duracion_min, momento_enlace_url, condicion_url, id_curso
		   FROM enlaces_asistencia_curso
		   WHERE id_curso =  '$id_curso'  AND cadena_aleatoria = '$cadena' AND momento_enlace_url = '$momento'";
		return ejecutarConsultaSimpleFila($sql);
	}


	//Implementar un método para mostrar los datos de un registro a modificar
	public function si_enlace_vigente($id_curso , $cadena)
	{		
		date_default_timezone_set('America/Lima');
		$fecha_actual = date("Y-m-d H:i:s", time());

		$sql="SELECT id_enlace_curso, cadena_aleatoria, enlace_url, enlaceQR_url, fechainicio_url, horainicio_url, duracion_min, momento_enlace_url, condicion_url, id_curso
				FROM enlaces_asistencia_curso
				WHERE id_curso =  '$id_curso'  AND cadena_aleatoria = '$cadena' AND horainicio_url > '$fecha_actual'";
		return ejecutarConsultaSimpleFila($sql);
	}


	//Implementar un método para mostrar los datos de un registro a modificar
	public function si_se_matriculo( $txt_dni, $id_curso, $momento)
	{
		$sql1="SELECT id_alumno FROM alumnos WHERE dni='$txt_dni'";
		$rs = ejecutarConsultaSimpleFila($sql1);
		$id_alumno = $rs['id_alumno'];
		//var_dump($id_alumno);

		if ( is_null($id_alumno)){
			$id_alumno = '99999999';
			//echo "LLego aqui";

			$sql="SELECT id_matricula, id_curso, id_alumno, fechainscripcion, detalles
				FROM matricula
				WHERE id_curso = '$id_curso' AND id_alumno = '$id_alumno'  ";
			return ejecutarConsultaSimpleFila($sql);

		}else{


			$sql="SELECT id_matricula, id_curso, id_alumno, fechainscripcion, detalles
				FROM matricula
				WHERE id_curso = '$id_curso' AND id_alumno = '$id_alumno'  ";
			return ejecutarConsultaSimpleFila($sql);

		}

		
	}


		// Buscar biscar si el usuario existe en la base de datos
	public function si_user_existe($txt_dni)
	{
		$sql="	SELECT id_alumno, dni, apenom, correo, celular, detalles
				FROM farojeqn_bdpjhuanuco.alumnos
				WHERE dni = '$txt_dni'";
		return ejecutarConsultaSimpleFila($sql);
	}



	//Verificar si la ip de la maquina son iguales q la actual
	public function ip_matricula($id_curso )
	{	
		// $sql1="SELECT id_alumno FROM alumnos WHERE dni='$txt_dni'";
		// $rs = ejecutarConsultaSimpleFila($sql1);
		// $id_alumno = $rs['id_alumno'];

		$ipreal = $_SERVER['REMOTE_ADDR'];

		$sql="	SELECT id_matricula, id_curso, id_alumno, fechainscripcion, detalles
				FROM  matricula
				WHERE id_curso = '$id_curso' AND detalles = '$ipreal' ";
		return ejecutarConsultaSimpleFila($sql);
	}


		public function matricular($txt_dni, $id_curso, $momento)
	{
		
		$sql1="SELECT id_alumno FROM alumnos WHERE dni='$txt_dni'";
		$rs = ejecutarConsultaSimpleFila($sql1);
		$id_alumno = $rs['id_alumno'];

		$ipreal = $_SERVER['REMOTE_ADDR'];

		$sql="INSERT INTO matricula ( id_curso, id_alumno,  detalles)
				VALUES ( '$id_curso' , '$id_alumno' , '$ipreal' ) ";
		ejecutarConsulta($sql);

		
		if(  $momento == 'inicio'   ){

			$sql2="INSERT INTO asistenciacursos (id_curso, id_alumno, fecha_ingreso) VALUES ( '$id_curso' , '$id_alumno', NOW() )";
			return ejecutarConsulta($sql2);

		}elseif( $momento == 'medio' ){

			$sql2="UPDATE asistenciacursos
					SET fecha_intermedia = NOW()   WHERE id_curso= '$id_curso' AND  id_alumno = '$id_alumno'  ";

			return ejecutarConsulta($sql2);

		}else {
			$sql2="UPDATE asistenciacursos
					SET	fecha_salida = NOW()   WHERE id_curso= '$id_curso' AND id_alumno = '$id_alumno'  ";
			return ejecutarConsulta($sql2);
		}

		
	}


	public function crearuser_matricular_asistencia($id_curso , $txt_dni, $apenom )
	{
		
		$sql1="INSERT INTO alumnos ( dni, apenom) VALUES ( '$id_curso', '$apenom')";
		$$id_alumno = ejecutarConsulta_retornarID($sql1);

		$ipreal = $_SERVER['REMOTE_ADDR'];

		$sql="INSERT INTO matricula ( id_curso, id_alumno,  detalles)
				VALUES ( '$id_curso' , '$id_alumno' , '$ipreal' ) ";
		ejecutarConsulta($sql);

		
		if(  $momento == 'inicio'   ){

			$sql2="INSERT INTO asistenciacursos (id_curso, id_alumno, fecha_ingreso) VALUES ( '$id_curso' , '$id_alumno', NOW() )";
			return ejecutarConsulta($sql2);

		}elseif( $momento == 'medio' ){

			$sql2="UPDATE asistenciacursos
					SET fecha_intermedia = NOW()   WHERE id_curso= '$id_curso' AND  id_alumno = '$id_alumno'  ";

			return ejecutarConsulta($sql2);

		}else {
			$sql2="UPDATE asistenciacursos
					SET	fecha_salida = NOW()   WHERE id_curso= '$id_curso' AND id_alumno = '$id_alumno'  ";
			return ejecutarConsulta($sql2);
		}

		
	}



		public function marcar_asistencia($txt_dni, $id_curso, $momento)
	{
		
		$sql1="SELECT id_alumno FROM alumnos WHERE dni='$txt_dni'";
		$rs = ejecutarConsultaSimpleFila($sql1);
		$id_alumno = $rs['id_alumno'];

		
		if(  $momento == 'inicio'   ){

			$sql2="INSERT INTO asistenciacursos (id_curso, id_alumno, fecha_ingreso) VALUES ( '$id_curso' , '$id_alumno', NOW() )";
			return ejecutarConsulta($sql2);

		}elseif( $momento == 'medio' ){

			$sql2="UPDATE asistenciacursos
					SET fecha_intermedia = NOW()   WHERE id_curso= '$id_curso' AND  id_alumno = '$id_alumno'  ";

			return ejecutarConsulta($sql2);

		}else {
			$sql2="UPDATE asistenciacursos
					SET	fecha_salida = NOW()   WHERE id_curso= '$id_curso' AND id_alumno = '$id_alumno'  ";
			return ejecutarConsulta($sql2);
		}

		
	}




	//Implementar un método paraverificar si el alumno existe
	public function verificar($txt_dni, $id_curso ,$momento)
	{	
		$sql1="SELECT id_alumno FROM alumnos WHERE dni='$txt_dni'";
		$rs = ejecutarConsultaSimpleFila($sql1);
		$id_alumno = $rs['id_alumno'];


		$sql="SELECT * FROM matricula WHERE id_curso = '$id_curso' AND id_alumno = '$id_alumno' ";
		return ejecutarConsultaSimpleFila($sql);		
	}


//Implementar un método paraverificar si el alumno existe
	public function verificar_ex($txt_dni, $id_curso ,$momento)
	{	
		$sql1="SELECT id_alumno FROM alumnos WHERE dni='$txt_dni'";		
		return ejecutarConsultaSimpleFila($sql1);		
	}

	//Implementar un método para listar los registros
	public function consultar( $txtdniOcelular, $txtemail  )
	{
		
		$sqlVerificandoAlumno = "SELECT id_alumno,dni,correo,celular FROM alumnos WHERE (dni = '$txtdniOcelular'  || celular = '$txtdniOcelular' ) && correo = '$txtemail'";
		ejecutarConsulta($sqlVerificandoAlumno);

		if (!empty($sqlVerificandoAlumno)) {
			
			$sql="SELECT id_certificado,cursos.id_curso, cursos.nombre_curso, alumnos.id_alumno, alumnos.dni,alumnos.apenom,alumnos.correo,alumnos.celular, pdf_certificado FROM certificados
			INNER  JOIN cursos ON certificados.id_curso = cursos.id_curso
			INNER JOIN alumnos ON certificados.id_alumno = alumnos.id_alumno
			WHERE alumnos.correo = '$txtemail' AND  alumnos.celular = '$txtdniOcelular' OR alumnos.dni = '$txtdniOcelular'";
			return ejecutarConsulta($sql);	

		}else{

		}


			
	}

}

 //$asistencia=new Asistencia();


//$rspta=$asistencia->matricular($id_curso , $txt_dni, $momento );
//$rspta=$asistencia->si_user_existe(45862145);
 		
//var_dump($rspta);


?>
