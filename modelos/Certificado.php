<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/connection.php";

Class Certificado
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($tpo_equipocol_nombre)
	{
		$sql="INSERT INTO inv_equipo_tpo (tpo_equipocol_nombre) VALUES ( '$tpo_equipocol_nombre')";
		return ejecutarConsulta($sql);
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
		$sql="SELECT cursos.id_curso, cursos.nombre_curso, alumnos_anteriores.id_alumno_ant, alumnos_anteriores.dni_ant, alumnos_anteriores.celular_ant,  pdf_certificado
				FROM certificados
				INNER JOIN cursos ON certificados.id_curso = cursos.id_curso
				INNER JOIN alumnos_anteriores ON certificados.id_alumno = alumnos_anteriores.id_alumno_ant
				WHERE alumnos_anteriores.dni_ant =  '$txtdniOcelular' ";
		return ejecutarConsulta($sql);		
	}


	//Implementar un método para mostrar los datos de un registro a modificar
	public function verificar_table_cert($dni)
	{
		$sql="SELECT * FROM certificados_x_url WHERE id_alumno = '$dni'";
		return ejecutarConsulta($sql);
	}


	//Implementar un método paraverificar si el alumno existe
	public function verificar($txtdniOcelular)
	{
		$sql="SELECT id_alumno_ant, dni_ant, apenom_ant, correo_ant, celular_ant, detalles_ant, created_ant FROM alumnos_anteriores WHERE dni_ant = '$txtdniOcelular'";
		return ejecutarConsultaSimpleFila($sql);		
	}


	//Implementar un método paraverificar si el alumno existe
	public function verificar_nuevos($txtdniOcelular)
	{
		$sql="SELECT id_alumno,dni,apenom,correo,celular FROM alumnos WHERE (dni = '$txtdniOcelular'  || celular = '$txtdniOcelular' )";
		return ejecutarConsultaSimpleFila($sql);		
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
