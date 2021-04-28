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
	public function validar_url($id_curso , $cadena)
	{
		
		$sql="SELECT id_enlace_curso, cadena_aleatoria, enlace_url, enlaceQR_url, fechainicio_url, horainicio_url, duracion_min, momento_enlace_url, condicion_url, id_curso
		   FROM enlaces_asistencia_curso
		   WHERE id_curso =  '$id_curso'  AND cadena_aleatoria = '$cadena'";
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

// $asistencia=new Asistencia();


// $rspta=$asistencia->validar_url('27' , 'yK7j2GbSsp');
// var_dump($rspta);


?>
