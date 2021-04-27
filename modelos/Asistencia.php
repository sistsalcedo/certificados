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
		public function insertar($txt_dni,$txt_apenom,$txt_email,$txt_celular,$id_curso, $flag)
	{
		
		$sql="INSERT INTO alumnos (dni,apenom,correo,celular)	 VALUES ( '$txt_dni', '$txt_apenom',  '$txt_email' ,'$txt_celular')";
		$id_alumno = ejecutarConsulta_retornarID($sql);

		$sql1="INSERT INTO matricula ( id_curso,id_alumno) VALUES ('$id_curso','$id_alumno') ";
		return ejecutarConsulta($sql1);
		
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

	//Implementamos un método para editar registros
	public function editar($idtpo_equipo,$tpo_equipocol_nombre)
	{
		
		$sql="UPDATE inv_equipo_tpo SET tpo_equipocol_nombre = '$tpo_equipocol_nombre'  WHERE  idtpo_equipo = '$idtpo_equipo'";
		return ejecutarConsulta($sql);

	}

	//Implementamos un método para desactivar registros
	public function desactivar($idtpo_equipo)
	{
		$sql="UPDATE inv_equipo_tpo SET condicion='0' WHERE idtpo_equipo='$idtpo_equipo'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar registros
	public function activar($idtpo_equipo)
	{
		$sql="UPDATE inv_equipo_tpo SET condicion='1' WHERE idtpo_equipo='$idtpo_equipo'";
		return ejecutarConsulta($sql);
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

	public function listarCertificadosAlumno($txtdniOcelular)
	{
		$sql=" SELECT cursos.id_curso, cursos.nombre_curso, alumnos.id_alumno, alumnos.dni, alumnos.celular,  pdf_certificado
				FROM certificados
				INNER JOIN cursos ON certificados.id_curso = cursos.id_curso
				INNER JOIN alumnos ON certificados.id_alumno = alumnos.id_alumno
				WHERE (alumnos.dni =  '$txtdniOcelular' || alumnos.celular = '$txtdniOcelular' ) ";
		return ejecutarConsulta($sql);		
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

// $certi = new Certificado();


// $rspta = $certi->verificar( '43836643', 'sistsalcedo@gmail.com' );
// var_dump($rspta);


?>
