<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/connection.php";

Class Matricula
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($txt_dni,$txt_apenom,$txt_email,$txt_celular,$id_curso)
	{
		
		$sql="INSERT INTO alumnos (dni,apenom,correo,celular)	 VALUES ( '$txt_dni', '$txt_apenom',  '$txt_email' ,'$txt_celular')";
		$id_alumno = ejecutarConsulta_retornarID($sql);

		$sql1="INSERT INTO matricula ( id_curso,id_alumno) VALUES ('$id_curso','$id_alumno') ";
		return ejecutarConsulta($sql1);

	}

	


	//Implementamos un método para editar registros
	public function editar($idemployee,$dni,$nombres,$apellidos,$email,$phone,$dependencia,$cargo,$sede)
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

	// Buscar biscar si el usuario existe en la base de datos
	public function user($txt_dni)
	{
		$sql="	SELECT id_alumno, dni, apenom, correo, celular, detalles
				FROM farojeqn_bdpjhuanuco.alumnos
				WHERE dni = '$txt_dni'";
		return ejecutarConsultaSimpleFila($sql);
	}

	// Buscar biscar si el usuario existe en la base de datos
	public function si_se_matriculo($id_curso, $txt_dni)
	{
		$sql1="SELECT id_alumno FROM alumnos WHERE dni='$txt_dni'";
		$rs = ejecutarConsultaSimpleFila($sql1);
		$id_alumno = $rs['id_alumno'];

		$sql="	SELECT id_matricula, id_curso, id_alumno, fechainscripcion, detalles
				FROM farojeqn_bdpjhuanuco.matricula
				WHERE id_curso = '$id_curso' AND id_alumno = '$id_alumno' ";
		return ejecutarConsultaSimpleFila($sql);
	}



	public function matricular($id_curso, $txt_dni , $txt_apenom)
	{
		
		$sql1="SELECT id_alumno FROM alumnos WHERE dni='$txt_dni'";
		$rs = ejecutarConsultaSimpleFila($sql1);
		$id_alumno = $rs['id_alumno'];

		$ipreal = $_SERVER['REMOTE_ADDR'];

		$sql="INSERT INTO matricula ( id_curso, id_alumno,  detalles)
				VALUES ( '$id_curso' , '$id_alumno' , '$ipreal' ) ";
		return ejecutarConsulta($sql);

		
	}

	//Verificar si la ip de la maquina son iguales q la actual
	public function ip_matricula($id_curso, $txt_dni)
	{	
		$sql1="SELECT id_alumno FROM alumnos WHERE dni='$txt_dni'";
		$rs = ejecutarConsultaSimpleFila($sql1);
		$id_alumno = $rs['id_alumno'];

		$ipreal = $_SERVER['REMOTE_ADDR'];

		$sql="	SELECT id_matricula, id_curso, id_alumno, fechainscripcion, detalles
				FROM  matricula
				WHERE id_curso = '$id_curso' AND detalles = '$ipreal' ";
		return ejecutarConsultaSimpleFila($sql);
	}


	public function crear_usuario_matricular($id_curso, $txt_dni , $txt_apenom)
	{
		$ipreal = $_SERVER['REMOTE_ADDR'];

		$sql="INSERT INTO alumnos (dni, apenom, detalles )	 VALUES ( '$txt_dni', '$txt_apenom',  '$ipreal' )";
		$id_alumno = ejecutarConsulta_retornarID($sql);

		$sql1="INSERT INTO matricula ( id_curso, id_alumno,  detalles)
				VALUES ( '$id_curso' , '$id_alumno' , '$ipreal' ) ";
		return ejecutarConsulta($sql1);

		
	}


	//Implementar un método para mostrar los datos de un registro a modificar 
	public function mostrar($idemployee)
	{
		$sql="SELECT idemployee,employee_dni,employee_name,employee_apellidos,employee_avatar,employee_email,employee_phone,created_atempl, dependencia_iddependencia, dependencia.dep_descripcion ,tpocargo_id ,employee_tpocargo.tpocargo_name, sedeid, sede.sedecol_nombre 
            FROM personas
            INNER JOIN dependencia ON employee.dependencia_iddependencia = dependencia.iddependencia
            INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo
            INNER JOIN sede ON employee.sedeid = sede.idsede
            WHERE idemployee = '$idemployee'
            ORDER BY employee_name ASC";
		return ejecutarConsultaSimpleFila($sql);
	}





	public function mostrarcondni($dni)
	{
		$url="https://dniruc.apisperu.com/api/v1/dni/".$dni."?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InNpc3RzYWxjZWRvQGdtYWlsLmNvbSJ9.P1giLK514zJDIcEE3nRZ6e7rpTdraowBBf2GbakxHJ8";
		$json = file_get_contents($url);
		$datos = json_decode($json,true);
		return $datos;
	}


	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT idemployee,employee_dni,employee_name,employee_apellidos,employee_avatar,employee_email,employee_phone,created_atempl, dependencia_iddependencia, dependencia.dep_descripcion ,tpocargo_id ,employee_tpocargo.tpocargo_name, sedeid, sede.sedecol_nombre , creadoPor, employee.condicion
			FROM personas
			INNER JOIN dependencia ON employee.dependencia_iddependencia = dependencia.iddependencia
			INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo
			INNER JOIN sede ON employee.sedeid = sede.idsede
			WHERE idemployee != 100
			ORDER BY employee_name ASC";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros activos
	public function listarCargos()
	{
		$sql="SELECT * FROM employee_tpocargo  ORDER BY tpocargo_name ASC";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros activos, su último precio y el stock (vamos a unir con el último registro de la tabla detalle_ingreso)
	public function listarActivosVenta()
	{
		$sql="SELECT a.idarticulo,a.idcategoria,c.nombre as categoria,a.codigo,a.nombre,a.stock,(SELECT precio_venta FROM detalle_ingreso WHERE idarticulo=a.idarticulo order by iddetalle_ingreso desc limit 0,1) as precio_venta,a.descripcion,a.imagen,a.condicion FROM articulo a INNER JOIN categoria c ON a.idcategoria=c.idcategoria WHERE a.condicion='1'";
		return ejecutarConsulta($sql);		
	}
}

// $siaju=new Siaju();
// $rspta=$siaju->insertar('43836643','Salcedo','Milton','33','caritas','2','987456321','si','','10','76','201','100','Super','Admin');
// var_dump($rspta);

?>