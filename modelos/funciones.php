<?php 

function nombrelog($conexion, $nick){
    
    $sql = "SELECT * FROM employee WHERE employee_dni='$nick' ";
    return $resultado = $conexion->query($sql);

}

function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}


function nombreuser($conexion, $nick){
    
    $sql = "SELECT * FROM employee WHERE employee_dni='$nick' ";
    $resultado = $conexion->query($sql);
    $actor = $resultado->fetch_assoc();
     echo (" 
        <div class='name' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style=' margin-top: 30px; margin-right: 10px;'>
       	 <span style='color:white; margin-top:5px; font-size: 12px '>".$actor['employee_name']." " .$actor['employee_apellidos']."</span>
        </div>        
      ");
}


function obtener_datosuser($conexion, $nick) {
	 $sql00 = "SELECT idemployee,employee_dni,employee_name,employee_apellidos,employee_avatar,employee_email,employee_phone,created_atempl,dependencia_iddependencia,tpocargo_id,sedeid,
			sede.sedecol_nombre, pa_distrito.Id_distrito,  pa_distrito.coldistrito_nombre, pa_provincia.colprovincia_nombre
 FROM employee 
 
 INNER JOIN sede ON employee.sedeid = sede.idsede
 INNER JOIN pa_distrito ON sede.distrito_iddistrito = pa_distrito.Id_distrito
 INNER JOIN pa_provincia ON pa_distrito.idprovincia = pa_provincia.idprovincia
 
 WHERE employee_dni='$nick' ";
    return $resultado100 = $conexion->query($sql00);
}


function fecha($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Ene.', 'Feb.', 'Mar.', 'Abr.', 'May.', 'Jun.', 'Jul.', 'Ago.', ' Set.', 'Oct.', 'Nov.', 'Dic.'];

	$dia = date('d', $timestamp );
	$mes = date('m', $timestamp ) - 1;
	$ano = date('Y', $timestamp );
	$hora = date('g', $timestamp);
	$min = date('ia', $timestamp);

	$fecha = " $dia  ".$meses[$mes]."  $ano - $hora:$min";
	return $fecha;

}

function fechaSola($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', ' Setiembre', 'Octubre', 'Noviembre', 'Diciembre'];

	$dia = date('d', $timestamp );
	$mes = date('m', $timestamp ) - 1;
	$ano = date('Y', $timestamp );
	

	//$fecha = " $dia  ".$meses[$mes]."  $ano ";
	$fecha = " $dia  "." de ".$meses[$mes]." de "." $ano ";
	return $fecha;

}

function messi($mess){
	$timestamp = $mess;
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo.', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre'];

	$mes = date('m', $timestamp ) - 1;	
	$mess = $meses[$mes];
	return $mess;

}

function ObtenerMes($smes){
	$timestamp = $smes;
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo.', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre'];

	$mes = $timestamp - 1;	
	$smess = $meses[$mes];
	return $smess;

}


function loguser($conexion, $id_admin){
	// Obtenemos el id del usuario
	// $user = "SELECT id FROM users WHERE nick = '$nick' ";
	// $resultado = $conexion->query($user);
	// $actor = $resultado->fetch_assoc();
	// $id = $actor['id'];

	$log = "SELECT * FROM user_access_log WHERE usuarios_id = '$id_admin'   ORDER BY created_at DESC LIMIT 25";
	return $log1 = $conexion->query($log);
}



function obtener_posts($conexion) {

	$sql1 = "SELECT idPosts, pos_titulo, pos_alias, posts_categoria.pcat_name, pos_fechapublicacion, pos_fecha_update, pos_estado, employee.employee_name  FROM posts 
 INNER JOIN posts_categoria ON posts.posts_categoria_idposts_categoria = posts_categoria.idposts_categoria
 INNER JOIN employee ON posts.usuarios_id = employee.idemployee   
 WHERE posts_categoria_idposts_categoria = 1  ORDER BY pos_fechapublicacion DESC";
	return $resultado1 = $conexion->query($sql1);
     // $resultado1->fetch_assoc();
}

function obtener_catpost($conexion) {

	$sql70 = "SELECT * FROM posts_categoria  ORDER BY pcat_name ASC";
	return $resultado70 = $conexion->query($sql70);
     // $resultado1->fetch_assoc();
}

function obtener_empleados($conexion) {

	$sql80 = "SELECT idemployee,employee_dni,employee_name,employee_apellidos,employee_avatar,employee_email,employee_phone,created_atempl, dependencia_iddependencia, dependencia.dep_descripcion ,tpocargo_id ,employee_tpocargo.tpocargo_name, sedeid, sede.sedecol_nombre , creadoPor
			FROM employee
			INNER JOIN dependencia ON employee.dependencia_iddependencia = dependencia.iddependencia
			INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo
			INNER JOIN sede ON employee.sedeid = sede.idsede
			WHERE idemployee != 100
			ORDER BY employee_name ASC";
	return $resultado80 = $conexion->query($sql80);
     
}


function obtener_pages($conexion) {

	$sql1 = "SELECT idPosts, pos_titulo, pos_alias,  posts_categoria.pcat_name, pos_fechapublicacion, pos_fecha_update, pos_estado, employee.employee_name  FROM posts 
 INNER JOIN posts_categoria ON posts.posts_categoria_idposts_categoria = posts_categoria.idposts_categoria
 INNER JOIN employee ON posts.usuarios_id = employee.idemployee  WHERE posts_categoria_idposts_categoria = 2 ORDER BY pos_fechapublicacion DESC ";
	return $resultado1 = $conexion->query($sql1);
     // $resultado1->fetch_assoc();
}

function distritos($conexion) {
	$sql50 = "SELECT * FROM pa_distrito  ORDER BY coldistrito_nombre ASC";
	return $resultado7 = $conexion->query($sql50);
}

function sedes($conexion) {
	$sql50 = "SELECT idsede,sedecol_nombre,sedecol_direccion,created_at,update_at,organizacion_idorganizacion,distrito_iddistrito,pa_distrito.coldistrito_nombre, pa_provincia.colprovincia_nombre 
 FROM sede 
 
 INNER JOIN pa_distrito ON sede.distrito_iddistrito = pa_distrito.Id_distrito
 INNER JOIN pa_provincia ON pa_distrito.idprovincia = pa_provincia.idprovincia
 
  ORDER BY sedecol_nombre ASC";
	return $resultado7 = $conexion->query($sql50);
}

function dependencia($conexion) {
	$sql60 = "SELECT * FROM dependencia WHERE estado_dep=1 ORDER BY created_atdep ASC";
	return $resultado60 = $conexion->query($sql60);
}

function cargo($conexion) {
	$sql70 = "SELECT * FROM employee_tpocargo  ORDER BY tpocargo_name ASC";
	return $resultado70 = $conexion->query($sql70);
}


function grupos($conexion) {
	$sql70 = "SELECT * FROM roles WHERE idbak_grupo != 6 ORDER BY bak_grupocol_nombre ASC";
	return $resultado70 = $conexion->query($sql70);
}


function usuario($conexion) {
	$sql80 = "SELECT * FROM employee  ORDER BY employee_name ASC";
	return $resultado80 = $conexion->query($sql80);
}

function administradores($conexion) {
	$sql90 = "SELECT id,nick,employee.employee_name, employee.employee_apellidos,created_atuser,bak_user_group.id_bak_grupo, bak_grupo.bak_grupocol_nombre ,sede.idsede,sede.sedecol_nombre,employee_tpocargo.idtpocargo, employee_tpocargo.tpocargo_name
		FROM users 
		INNER JOIN employee  ON users.id = employee.idemployee
		INNER JOIN bak_user_group ON users.id = bak_user_group.id_user
		INNER JOIN bak_grupo ON bak_user_group.id_bak_grupo = bak_grupo.idbak_grupo		
		INNER JOIN sede ON employee.sedeid = sede.idsede
		INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo
		WHERE id != 100
 		ORDER BY nick ASC";
	return $resultado90 = $conexion->query($sql90);
}



function obtener_categorias($conexion) {

	$sql2 = "SELECT * FROM posts_categoria ORDER BY created_at DESC";
	return $resultado2 = $conexion->query($sql2);
     // $resultado1->fetch_assoc();
}

function obtener_cslides($conexion) {

	$sql25 = "SELECT * FROM cms_slide ORDER BY created_slide DESC";
	return $resultado25 = $conexion->query($sql25);
     // $resultado1->fetch_assoc();
}


function obtener_carousel($conexion, $idslide) {

	$sql26 = "SELECT * FROM cms_carousel WHERE idslide = '$idslide' ORDER BY car_posicion ASC ";
	return $resultado26 = $conexion->query($sql26);
     // $resultado1->fetch_assoc();
}

function lista_tpoequipo($conexion) {

	$sql255 = "SELECT * FROM inv_equipo_tpo ORDER BY tpo_equipocol_nombre ASC";
	return $resultado255 = $conexion->query($sql255);
}

function listado_inventario($nick, $conexion){
	$sql3 = "SELECT * FROM posts_categoria ORDER BY created_at DESC";
	return $resultado2 = $conexion->query($sql2);
 }



// Funcion para inventario de computadoras
 
function inventariopc($conexion,$nick) {
	
	// Obtenemos el id del usuario
	$user = "SELECT id FROM users WHERE nick = '$nick' ";
	$resultado = $conexion->query($user);
	$actor = $resultado->fetch_assoc();
	$id = $actor['id'];

	// Vemos si eS administrador, inventariador general o de Sede
	
	$grupo = "SELECT idbak_user_group,id_user,employee.employee_name , id_bak_grupo , bak_grupo.bak_grupocol_nombre
				FROM bak_user_group
				INNER JOIN employee ON bak_user_group.id_user = employee.idemployee
				INNER JOIN bak_grupo ON bak_user_group.id_bak_grupo = bak_grupo.idbak_grupo
				WHERE ((id_bak_grupo = 1) OR (id_bak_grupo = 3)  OR (id_bak_grupo = 5)  OR (id_bak_grupo = 6) ) AND (employee.idemployee = '$id') ";
	$resultado1 = $conexion->query($grupo);
	$grupop = $resultado1->fetch_assoc();
	
	// Si el administrador e inventariador general
	if (  $grupop['id_bak_grupo'] == 1 || $grupop['id_bak_grupo'] == 3 || $grupop['id_bak_grupo'] == 6) {
		
		$sql4 = "SELECT  idsede, sede.sedecol_nombre, dependencia.dep_descripcion,   employee_tpocargo.tpocargo_name, employee.employee_name, employee.employee_apellidos, idcomputadora, pc_nombre,pc_grupo,pc_ipaddress,pc_marca,pc_modelo,pc_serie,pc_cp,pc_estado, created_atc
			 FROM inv_computadoras

			INNER JOIN dependencia ON inv_computadoras.dependencia_iddependencia = dependencia.iddependencia
			INNER JOIN sede ON inv_computadoras.sedeid = sede.idsede
			INNER JOIN employee ON inv_computadoras.employee_id = employee.idemployee
			INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo
			ORDER BY sede.idsede DESC
			";
		return $resultado4 = $conexion->query($sql4);

	}else{
		

		$sed_d_user ="SELECT *	FROM employee	WHERE idemployee = '$id' ";

		$resultado5 = $conexion->query($sed_d_user);
		$sed_d_user1 = $resultado5->fetch_assoc();
		$sede_d_user = $sed_d_user1['sedeid'];
		


		$sql4 = "SELECT  idsede, sede.sedecol_nombre, dependencia.dep_descripcion,   employee_tpocargo.tpocargo_name, employee.employee_name, employee.employee_apellidos, idcomputadora, pc_nombre,pc_grupo,pc_ipaddress,pc_marca,pc_modelo,pc_serie,pc_cp,pc_estado, created_atc
			 FROM inv_computadoras

			INNER JOIN dependencia ON inv_computadoras.dependencia_iddependencia = dependencia.iddependencia
			INNER JOIN sede ON inv_computadoras.sedeid = sede.idsede
			INNER JOIN employee ON inv_computadoras.employee_id = employee.idemployee
			INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo
			where inv_computadoras.sedeid = '$sede_d_user'
			ORDER BY sede.idsede DESC
			";
		return $resultado4 = $conexion->query($sql4);

	}

}

// fUNCION PARA INVENTARIO DE fotocopiadoras
	function inventariocopi($conexion,$nick) {
	
	$user = "SELECT id FROM users WHERE nick = '$nick' ";
	$resultado = $conexion->query($user);
	$actor = $resultado->fetch_assoc();
	$id = $actor['id'];

	$grupoimp = "SELECT idbak_user_group,id_admin,employee.employee_name , id_bak_grupo , roles.bak_grupocol_nombre
				FROM role_user
				INNER JOIN employee ON role_user.id_admin = employee.idemployee
				INNER JOIN roles ON role_user.id_bak_grupo = roles.idbak_grupo
				WHERE ((id_bak_grupo = 1) OR (id_bak_grupo = 3)  OR (id_bak_grupo = 5)  OR (id_bak_grupo = 6) ) AND (employee.idemployee = '$id') ";
	$resultado1imp = $conexion->query($grupoimp);
	$grupoimp = $resultado1imp->fetch_assoc();


	if (  $grupoimp['id_bak_grupo'] == 1 || $grupoimp['id_bak_grupo'] == 4 || $grupoimp['id_bak_grupo'] == 6 || $grupoimp['id_bak_grupo'] == 3)  {
		
		$sql5 = "SELECT  idequipo, inv_equipo_tpo.tpo_equipocol_nombre ,  dependencia.dep_descripcion, sede.sedecol_nombre, sede.idsede, employee_tpocargo.tpocargo_name, employee.employee_name, employee.employee_apellidos,eq_descripcion,eq_marca,eq_modelo,eq_serie,eq_cp, eq_estado, created_ateq 
			 FROM inv_equipo
			INNER JOIN inv_equipo_tpo ON inv_equipo.tpo_equipo_idtpo_equipo = inv_equipo_tpo.idtpo_equipo
			INNER JOIN dependencia ON inv_equipo.dependencia_iddependencia = dependencia.iddependencia
			INNER JOIN sede ON inv_equipo.sedeid = sede.idsede
			INNER JOIN employee ON inv_equipo.employee_idemployee = employee.idemployee
			INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo
			
			WHERE  (idtpo_equipo = 2) 
			";
		return $resultado4 = $conexion->query($sql5);

	}else{
		

		$sed_d_user ="SELECT *	FROM employee	WHERE idemployee = '$id' ";

		$resultado5 = $conexion->query($sed_d_user);
		$sed_d_user1 = $resultado5->fetch_assoc();
		$sede_d_user = $sed_d_user1['sedeid'];
		

		$sql5 = "SELECT DISTINCT inv_equipo_tpo.tpo_equipocol_nombre ,  dependencia.dep_descripcion, sede.sedecol_nombre, sede.idsede, employee_tpocargo.tpocargo_name, employee.employee_name, employee.employee_apellidos,idequipo,eq_descripcion,eq_marca,eq_modelo,eq_serie,eq_cp, eq_estado, created_ateq
			 FROM inv_equipo
			INNER JOIN inv_equipo_tpo ON inv_equipo.tpo_equipo_idtpo_equipo = inv_equipo_tpo.idtpo_equipo
			INNER JOIN dependencia ON inv_equipo.dependencia_iddependencia = dependencia.iddependencia
			INNER JOIN sede ON inv_equipo.sedeid = sede.idsede
			INNER JOIN employee ON inv_equipo.employee_idemployee = employee.idemployee
			INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo			
			WHERE (idtpo_equipo = 2)  AND employee_idemployee = '$id'
		
			";
		return $resultado4 = $conexion->query($sql5);

		}



	}





// fUNCION PARA INVENTARIO DE IMPRESORAS, fotocpiadoras y scanner
	function inventarioimp($conexion,$nick) {
	
	$user = "SELECT id FROM users WHERE nick = '$nick' ";
	$resultado = $conexion->query($user);
	$actor = $resultado->fetch_assoc();
	$id = $actor['id'];

	$grupoimp = "SELECT idbak_user_group,id_user,employee.employee_name , id_bak_grupo , bak_grupo.bak_grupocol_nombre
				FROM bak_user_group
				INNER JOIN employee ON bak_user_group.id_user = employee.idemployee
				INNER JOIN bak_grupo ON bak_user_group.id_bak_grupo = bak_grupo.idbak_grupo
				WHERE ((id_bak_grupo = 1) OR (id_bak_grupo = 3)  OR (id_bak_grupo = 5)  OR (id_bak_grupo = 6) ) AND (employee.idemployee = '$id')";
	$resultado1imp = $conexion->query($grupoimp);
	$grupoimp = $resultado1imp->fetch_assoc();


	if (  $grupoimp['id_bak_grupo'] == 1 || $grupoimp['id_bak_grupo'] == 3) {
		
		$sql5 = "SELECT inv_equipo_tpo.tpo_equipocol_nombre ,  dependencia.dep_descripcion, sede.sedecol_nombre, sede.idsede, employee_tpocargo.tpocargo_name, employee.employee_name, employee.employee_apellidos,idequipo,eq_descripcion,eq_marca,eq_modelo,eq_serie,eq_cp, eq_estado, created_ateq  
			 FROM inv_equipo
			INNER JOIN inv_equipo_tpo ON inv_equipo.tpo_equipo_idtpo_equipo = inv_equipo_tpo.idtpo_equipo
			INNER JOIN dependencia ON inv_equipo.dependencia_iddependencia = dependencia.iddependencia
			INNER JOIN sede ON inv_equipo.sedeid = sede.idsede
			INNER JOIN employee ON inv_equipo.employee_idemployee = employee.idemployee
			INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo
			WHERE ((idtpo_equipo = 1) OR (idtpo_equipo = 2)  OR (idtpo_equipo = 7) )
			";
		return $resultado4 = $conexion->query($sql5);

	}else{
		

		$sed_d_user ="SELECT *	FROM employee	WHERE idemployee = '$id' ";

		$resultado5 = $conexion->query($sed_d_user);
		$sed_d_user1 = $resultado5->fetch_assoc();
		$sede_d_user = $sed_d_user1['sedeid'];
	

		$sql5 = "SELECT inv_equipo_tpo.tpo_equipocol_nombre ,  dependencia.dep_descripcion, sede.sedecol_nombre, sede.idsede, employee_tpocargo.tpocargo_name, employee.employee_name, employee.employee_apellidos,idequipo,eq_descripcion,eq_marca,eq_modelo,eq_serie,eq_cp, eq_estado, created_ateq  
			 FROM inv_equipo
			INNER JOIN inv_equipo_tpo ON inv_equipo.tpo_equipo_idtpo_equipo = inv_equipo_tpo.idtpo_equipo
			INNER JOIN dependencia ON inv_equipo.dependencia_iddependencia = dependencia.iddependencia
			INNER JOIN sede ON inv_equipo.sedeid = sede.idsede
			INNER JOIN employee ON inv_equipo.employee_idemployee = employee.idemployee
			INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo
			WHERE ((idtpo_equipo = 1) OR (idtpo_equipo = 2)  OR (idtpo_equipo = 7) ) AND inv_equipo.sedeid = '$sede_d_user'
		
			";
		return $resultado4 = $conexion->query($sql5);

		}



	}





// fUNCION PARA INVENTARIO DE equipos en general
	function inventarioequ($conexion,$nick,$idtpo_equipo) {
	
	$user = "SELECT id FROM users WHERE nick = '$nick' ";
	$resultado = $conexion->query($user);
	$actor = $resultado->fetch_assoc();
	$id = $actor['id'];

	$grupoimp = "SELECT idbak_user_group,id_user,employee.employee_name , id_bak_grupo , bak_grupo.bak_grupocol_nombre
				FROM bak_user_group
				INNER JOIN employee ON bak_user_group.id_user = employee.idemployee
				INNER JOIN bak_grupo ON bak_user_group.id_bak_grupo = bak_grupo.idbak_grupo
				WHERE ((id_bak_grupo = 1) OR (id_bak_grupo = 3)  OR (id_bak_grupo = 5)  OR (id_bak_grupo = 6) ) AND (employee.idemployee = '$id')";
	$resultado1imp = $conexion->query($grupoimp);
	$grupoimp = $resultado1imp->fetch_assoc();


	if (  $grupoimp['id_bak_grupo'] == 1 || $grupoimp['id_bak_grupo'] == 3 || $grupoimp['id_bak_grupo'] == 6) {
		
		$sql5 = "SELECT inv_equipo_tpo.tpo_equipocol_nombre ,  dependencia.dep_descripcion, sede.sedecol_nombre, sede.idsede, employee_tpocargo.tpocargo_name, employee.employee_name, employee.employee_apellidos,idequipo,eq_descripcion,eq_marca,eq_modelo,eq_serie,eq_cp, eq_estado, created_ateq  
			 FROM inv_equipo
			INNER JOIN inv_equipo_tpo ON inv_equipo.tpo_equipo_idtpo_equipo = inv_equipo_tpo.idtpo_equipo
			INNER JOIN dependencia ON inv_equipo.dependencia_iddependencia = dependencia.iddependencia
			INNER JOIN sede ON inv_equipo.sedeid = sede.idsede
			INNER JOIN employee ON inv_equipo.employee_idemployee = employee.idemployee
			INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo
			WHERE (idtpo_equipo = '$idtpo_equipo') 
			";
		return $resultado4 = $conexion->query($sql5);

	}else{
		

		$sed_d_user ="SELECT *	FROM employee	WHERE idemployee = '$id' ";

		$resultado5 = $conexion->query($sed_d_user);
		$sed_d_user1 = $resultado5->fetch_assoc();
		$sede_d_user = $sed_d_user1['sedeid'];
	

		$sql5 = "SELECT inv_equipo_tpo.tpo_equipocol_nombre ,  dependencia.dep_descripcion, sede.sedecol_nombre, sede.idsede, employee_tpocargo.tpocargo_name, employee.employee_name, employee.employee_apellidos,idequipo,eq_descripcion,eq_marca,eq_modelo,eq_serie,eq_cp, eq_estado, created_ateq  
			 FROM inv_equipo
			INNER JOIN inv_equipo_tpo ON inv_equipo.tpo_equipo_idtpo_equipo = inv_equipo_tpo.idtpo_equipo
			INNER JOIN dependencia ON inv_equipo.dependencia_iddependencia = dependencia.iddependencia
			INNER JOIN sede ON inv_equipo.sedeid = sede.idsede
			INNER JOIN employee ON inv_equipo.employee_idemployee = employee.idemployee
			INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo
			WHERE (idtpo_equipo = '$idtpo_equipo')  AND inv_equipo.sedeid = '$sede_d_user'
		
			";
		return $resultado4 = $conexion->query($sql5);

		}



	}



// Funcion para inventario de switch

	function inventariosw($conexion,$nick) {
	
	$user = "SELECT id FROM users WHERE nick = '$nick' ";
	$resultado = $conexion->query($user);
	$actor = $resultado->fetch_assoc();
	$id = $actor['id'];
	

	$gruposw = "SELECT idbak_user_group,id_user,employee.employee_name , id_bak_grupo , bak_grupo.bak_grupocol_nombre
				FROM bak_user_group
				INNER JOIN employee ON bak_user_group.id_user = employee.idemployee
				INNER JOIN bak_grupo ON bak_user_group.id_bak_grupo = bak_grupo.idbak_grupo
				WHERE ((id_bak_grupo = 1) OR (id_bak_grupo = 3)  OR (id_bak_grupo = 5)  OR (id_bak_grupo = 6) ) AND (employee.idemployee = '$id')";
	$resultado1sw = $conexion->query($gruposw);
	$gruposw = $resultado1sw->fetch_assoc();


	if (  $gruposw['id_bak_grupo'] == 1 || $gruposw['id_bak_grupo'] == 3) {
		
		$sql5 = "SELECT inv_equipo_tpo.tpo_equipocol_nombre ,  dependencia.dep_descripcion, sede.sedecol_nombre, sede.idsede, employee_tpocargo.tpocargo_name, employee.employee_name, employee.employee_apellidos,idequipo,eq_descripcion,eq_marca,eq_modelo,eq_serie,eq_cp, eq_estado, created_ateq  
			 FROM inv_equipo
			INNER JOIN inv_equipo_tpo ON inv_equipo.tpo_equipo_idtpo_equipo = inv_equipo_tpo.idtpo_equipo
			INNER JOIN dependencia ON inv_equipo.dependencia_iddependencia = dependencia.iddependencia
			INNER JOIN sede ON inv_equipo.sedeid = sede.idsede
			INNER JOIN employee ON inv_equipo.employee_idemployee = employee.idemployee
			INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo
			WHERE ((idtpo_equipo = 3)  )
			";
		return $resultado4 = $conexion->query($sql5);

	}else{
		

		$sed_d_user ="SELECT *	FROM employee	WHERE idemployee = '$id' ";

		$resultado5 = $conexion->query($sed_d_user);
		$sed_d_user1 = $resultado5->fetch_assoc();
		$sede_d_user = $sed_d_user1['sedeid'];



		$sql5 = "SELECT inv_equipo_tpo.tpo_equipocol_nombre ,  dependencia.dep_descripcion, sede.sedecol_nombre, sede.idsede, employee_tpocargo.tpocargo_name, employee.employee_name, employee.employee_apellidos,idequipo,eq_descripcion,eq_marca,eq_modelo,eq_serie,eq_cp, eq_estado, created_ateq  
			 FROM inv_equipo
			INNER JOIN inv_equipo_tpo ON inv_equipo.tpo_equipo_idtpo_equipo = inv_equipo_tpo.idtpo_equipo
			INNER JOIN dependencia ON inv_equipo.dependencia_iddependencia = dependencia.iddependencia
			INNER JOIN sede ON inv_equipo.sedeid = sede.idsede
			INNER JOIN employee ON inv_equipo.employee_idemployee = employee.idemployee
			INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo
			WHERE ((idtpo_equipo = 3)  )  AND inv_equipo.sedeid = '$sede_d_user'
			";
		return $resultado4 = $conexion->query($sql5);

		}



	}


	// Funcion para lista de incidencias

	function listado_incidencias($conexion,$nick,$mes) {
	
	$user = "SELECT id FROM users WHERE nick = '$nick' ";
	$resultado = $conexion->query($user);
	$actor = $resultado->fetch_assoc();
	$id = $actor['id'];
	

	$gruposw = "SELECT idbak_user_group,id_user,employee.employee_name , id_bak_grupo , bak_grupo.bak_grupocol_nombre
				FROM bak_user_group
				INNER JOIN employee ON bak_user_group.id_user = employee.idemployee
				INNER JOIN bak_grupo ON bak_user_group.id_bak_grupo = bak_grupo.idbak_grupo
				WHERE ((id_bak_grupo = 1) OR (id_bak_grupo = 3)  OR (id_bak_grupo = 5)  OR (id_bak_grupo = 6) ) AND (employee.idemployee = '$id') ";
	$resultado1sw = $conexion->query($gruposw);
	$gruposw = $resultado1sw->fetch_assoc();


	if (  $gruposw['id_bak_grupo'] == 1 || $gruposw['id_bak_grupo'] == 4 || $gruposw['id_bak_grupo'] == 3 || $gruposw['id_bak_grupo'] == 6) {
		
		$sql5 = "SELECT sede.idsede, sede.sedecol_nombre,equipo_idequipo, inv_equipo.eq_marca, inv_equipo.eq_modelo,  idIncidencias, Incidenciascol_descrip,Incidenciascol_fecha_inc,Incidenciascol_recomendacion,Incidenciascol_fecha_solucion,Incidenciascol_estado
					FROM eqincidencias
					INNER JOIN inv_equipo ON eqincidencias.equipo_idequipo = inv_equipo.idequipo
					INNER JOIN sede ON inv_equipo.sedeid = sede.idsede
					WHERE inv_equipo.tpo_equipo_idtpo_equipo = 2 AND month(Incidenciascol_fecha_inc) = '$mes'
					ORDER BY Incidenciascol_fecha_inc ASC
			";
		return $resultado4 = $conexion->query($sql5);

	}else{
		

		$sed_d_user ="SELECT *	FROM employee	WHERE idemployee = '$id' ";

		$resultado5 = $conexion->query($sed_d_user);
		$sed_d_user1 = $resultado5->fetch_assoc();
		$sede_d_user = $sed_d_user1['sedeid'];



		$sql5 = "SELECT sede.idsede, sede.sedecol_nombre,equipo_idequipo, inv_equipo.eq_marca, inv_equipo.eq_modelo,  idIncidencias, Incidenciascol_descrip,Incidenciascol_fecha_inc,Incidenciascol_recomendacion,Incidenciascol_fecha_solucion,Incidenciascol_estado
				FROM eqincidencias
				INNER JOIN inv_equipo ON eqincidencias.equipo_idequipo = inv_equipo.idequipo
				INNER JOIN sede ON inv_equipo.sedeid = sede.idsede
				WHERE inv_equipo.tpo_equipo_idtpo_equipo = 2  AND sede.idsede = '$sede_d_user' AND month(Incidenciascol_fecha_inc) = '$mes'
				ORDER BY Incidenciascol_fecha_inc ASC
			
			";
		return $resultado4 = $conexion->query($sql5);

		}



	}


	// Listado de mantenimiento de fotocopiadoras
	function listado_mantenimientos($conexion,$nick) {
	
	$user = "SELECT id FROM users WHERE nick = '$nick' ";
	$resultado = $conexion->query($user);
	$actor = $resultado->fetch_assoc();
	$id = $actor['id'];
	

	$gruposw = "SELECT idbak_user_group,id_user,employee.employee_name , id_bak_grupo , bak_grupo.bak_grupocol_nombre
				FROM bak_user_group
				INNER JOIN employee ON bak_user_group.id_user = employee.idemployee
				INNER JOIN bak_grupo ON bak_user_group.id_bak_grupo = bak_grupo.idbak_grupo
				WHERE ((id_bak_grupo = 1) OR (id_bak_grupo = 3)  OR (id_bak_grupo = 5)  OR (id_bak_grupo = 6) ) AND (employee.idemployee = '$id') ";
	$resultado1sw = $conexion->query($gruposw);
	$gruposw = $resultado1sw->fetch_assoc();


	if (  $gruposw['id_bak_grupo'] == 1 || $gruposw['id_bak_grupo'] == 4 || $gruposw['id_bak_grupo'] == 3) {
		
		$sql5 = "SELECT sede.idsede, sede.sedecol_nombre,ideq, inv_equipo.eq_marca, inv_equipo.eq_modelo,  idmant_eq, mantpc_obs,mantpc_fechaman
					FROM inv_equipo_manten
					INNER JOIN inv_equipo ON inv_equipo_manten.ideq = inv_equipo.idequipo
					INNER JOIN sede ON inv_equipo.sedeid = sede.idsede
					WHERE inv_equipo.tpo_equipo_idtpo_equipo = 2
					ORDER BY mantpc_fechaman DESC
			";
		return $resultado4 = $conexion->query($sql5);

	}else{
		

		$sed_d_user ="SELECT *	FROM employee	WHERE idemployee = '$id' ";

		$resultado5 = $conexion->query($sed_d_user);
		$sed_d_user1 = $resultado5->fetch_assoc();
		$sede_d_user = $sed_d_user1['sedeid'];



		$sql5 = "SELECT sede.idsede, sede.sedecol_nombre,ideq, inv_equipo.eq_marca, inv_equipo.eq_modelo,  idmant_eq, mantpc_obs,mantpc_fechaman
					FROM inv_equipo_manten
					INNER JOIN inv_equipo ON inv_equipo_manten.ideq = inv_equipo.idequipo
					INNER JOIN sede ON inv_equipo.sedeid = sede.idsede
					WHERE inv_equipo.tpo_equipo_idtpo_equipo = 2  AND sede.idsede = '$sede_d_user'
					ORDER BY mantpc_fechaman DESC
		
			";
		return $resultado4 = $conexion->query($sql5);

		}



	}



// fUNCION PARA INVENTARIO DE CONTADORES
	function inventariocontador($conexion,$nick,$mes) {
	
	$user = "SELECT id FROM users WHERE nick = '$nick' ";
	$resultado = $conexion->query($user);
	$actor = $resultado->fetch_assoc();
	$id = $actor['id'];

	$grupoimp = "SELECT idbak_user_group,id_user,employee.employee_name , id_bak_grupo , bak_grupo.bak_grupocol_nombre
				FROM bak_user_group
				INNER JOIN employee ON bak_user_group.id_user = employee.idemployee
				INNER JOIN bak_grupo ON bak_user_group.id_bak_grupo = bak_grupo.idbak_grupo
				WHERE ((id_bak_grupo = 1) OR (id_bak_grupo = 3)  OR (id_bak_grupo = 5)  OR (id_bak_grupo = 6) ) AND (employee.idemployee = '$id') ";
	$resultado1imp = $conexion->query($grupoimp);
	$grupoimp = $resultado1imp->fetch_assoc();


	if (  $grupoimp['id_bak_grupo'] == 1 || $grupoimp['id_bak_grupo'] == 4 || $grupoimp['id_bak_grupo'] == 6 || $grupoimp['id_bak_grupo'] == 3)  {
		
		$sql5 = "SELECT idcontador, sede.idsede, sede.prioridad, sede.sedecol_nombre,dependencia.dep_descripcion , inv_equipo.eq_marca, inv_equipo.eq_modelo, inv_equipo.eq_serie, cont_lect_anterior,cont_lect_actual,cont_consumo_mensual,contador_file, reporte_pdf, created_at_contado
				FROM fotoco_contador
				INNER JOIN inv_equipo ON fotoco_contador.idfotocopiadora = inv_equipo.idequipo
				INNER JOIN dependencia ON inv_equipo.dependencia_iddependencia = dependencia.iddependencia
				INNER JOIN sede ON inv_equipo.sedeid = sede.idsede
				WHERE month(created_at_contado) = '$mes' AND estadoContador = 1
				ORDER BY prioridad ASC
			";
		return $resultado4 = $conexion->query($sql5);

	}else{
		

		$sed_d_user ="SELECT *	FROM employee	WHERE idemployee = '$id' ";

		$resultado5 = $conexion->query($sed_d_user);
		$sed_d_user1 = $resultado5->fetch_assoc();
		$sede_d_user = $sed_d_user1['sedeid'];
		

		$sql5 = "SELECT idcontador, sede.idsede, sede.prioridad, sede.sedecol_nombre, dependencia.dep_descripcion , inv_equipo.eq_marca, inv_equipo.eq_modelo, inv_equipo.eq_serie,cont_lect_anterior,cont_lect_actual,cont_consumo_mensual,contador_file, reporte_pdf,created_at_contado
				FROM fotoco_contador
				INNER JOIN inv_equipo ON fotoco_contador.idfotocopiadora = inv_equipo.idequipo
				INNER JOIN dependencia ON inv_equipo.dependencia_iddependencia = dependencia.iddependencia
				INNER JOIN sede ON inv_equipo.sedeid = sede.idsede		
			    WHERE iduser = '$id' AND month(created_at_contado) = '$mes' AND estadoContador = 1
			    ORDER BY prioridad ASC
		
			";
		return $resultado4 = $conexion->query($sql5);

		}



	}


function pdfcontador($conexion,$idcontador){
	$sql70 = "SELECT iduser, employee.employee_name,employee.employee_dni, employee.employee_apellidos, employee.employee_phone, sede.idsede ,sede.sedecol_nombre,sede.sedecol_direccion,sede.distrito_iddistrito, pa_distrito.coldistrito_nombre, pa_provincia.colprovincia_nombre,
		 created_at_contado, idfotocopiadora, inv_equipo.eq_marca,inv_equipo.eq_modelo,inv_equipo.eq_serie,cont_lect_anterior,cont_lect_actual,cont_consumo_mensual,cont_observaciones
		FROM fotoco_contador
		INNER JOIN employee ON fotoco_contador.iduser = employee.idemployee
		INNER JOIN sede ON fotoco_contador.idsede = sede.idsede
		INNER JOIN pa_distrito ON sede.distrito_iddistrito = pa_distrito.Id_distrito
		INNER JOIN pa_provincia ON pa_distrito.idprovincia = pa_provincia.idprovincia
		INNER JOIN inv_equipo ON fotoco_contador.idfotocopiadora = inv_equipo.idequipo
		WHERE idcontador = '$idcontador'";
	return $resultado70 = $conexion->query($sql70);
}




// Funcion para inventario de computadoras
 
function list_edictos($conexion,$nick) {
	
	// Obtenemos el id del usuario
	$user = "SELECT id FROM users WHERE nick = '$nick' ";
	$resultado = $conexion->query($user);
	$actor = $resultado->fetch_assoc();
	$id = $actor['id'];

	// Vemos si eS administrador, inventariador general o de Sede
	
	$grupo = "SELECT idbak_user_group,id_user,employee.employee_name , id_bak_grupo , bak_grupo.bak_grupocol_nombre
				FROM bak_user_group
				INNER JOIN employee ON bak_user_group.id_user = employee.idemployee
				INNER JOIN bak_grupo ON bak_user_group.id_bak_grupo = bak_grupo.idbak_grupo
				WHERE  (employee.idemployee = '$id') ";
	$resultado1 = $conexion->query($grupo);
	$grupop = $resultado1->fetch_assoc();
	
	// Si el administrador e inventariador general
	if (  $grupop['id_bak_grupo'] == 1 || $grupop['id_bak_grupo'] == 6) {
		
		$sql4 = "SELECT id_edicto,edic_titulo,edic_estado,edic_creado, updated_atempl, id_employee, employee.employee_name,employee.employee_apellidos FROM edicto INNER JOIN employee ON edicto.id_employee = employee.idemployee
			";
		return $resultado4 = $conexion->query($sql4);

	}else{
		

		$sql4 = "SELECT id_edicto,edic_titulo,edic_estado,edic_creado, updated_atempl, id_employee, employee.employee_name,employee.employee_apellidos FROM edicto INNER JOIN employee ON edicto.id_employee = employee.idemployee
				where id_employee = '$id'
			";
		return $resultado4 = $conexion->query($sql4);

	}

}


function obtener_send($conexion,$nick) {
		// Obtenemos el id del usuario
	$user = "SELECT id FROM users WHERE nick = '$nick' ";
	$resultado = $conexion->query($user);
	$actor = $resultado->fetch_assoc();
	$id = $actor['id'];

	$sql70 = "SELECT id_mensaje,sms_mensaje, id_destino, employee.employee_name, employee.employee_apellidos, edicto.id_edicto, edicto.edic_titulo,	sms_estadp,sms_fecha_created FROM mensaje INNER JOIN employee ON mensaje.id_destino = employee.idemployee INNER JOIN edicto ON mensaje.id_edicto = edicto.id_edicto WHERE id_remite = '$id' ";
	return $resultado70 = $conexion->query($sql70);
     // $resultado1->fetch_assoc();
}

function obtener_received($conexion,$nick) {
		// Obtenemos el id del usuario
	$user = "SELECT id FROM users WHERE nick = '$nick' ";
	$resultado = $conexion->query($user);
	$actor = $resultado->fetch_assoc();
	$id = $actor['id'];

	$sql70 = "SELECT id_mensaje,sms_mensaje, sms_estado_v, id_remite, employee.employee_name,employee.employee_apellidos, edicto.id_edicto, edicto.edic_titulo,	sms_estadp,sms_fecha_created
				FROM mensaje
				INNER JOIN employee ON mensaje.id_remite = employee.idemployee
				INNER JOIN edicto ON mensaje.id_edicto = edicto.id_edicto
				WHERE id_destino = '$id' ";
	return $resultado70 = $conexion->query($sql70);
     // $resultado1->fetch_assoc();
}


function seguimiento($conexion) {
	
	$sql70 = "SELECT edicto.id_edicto, edicto.edic_titulo, id_remite,name_remite, id_destino,name_destino, sms_fecha_created FROM mensaje INNER JOIN edicto ON mensaje.id_edicto = edicto.id_edicto  ORDER BY id_edicto ASC ";
	return $resultado70 = $conexion->query($sql70);

}


function tipo_grupo($conexion, $nick){
    
    $sqlrol = "SELECT id, nick,  bak_user_group.id_bak_grupo  FROM users INNER JOIN bak_user_group ON users.id = bak_user_group.id_user WHERE nick='$nick' ";
    return $resultadorol = $conexion->query($sqlrol);
   



}


function tablaPeticion($conexion){
	$sql71 = "SELECT idpeticionEmail, employee.idemployee , employee.employee_name, employee.employee_apellidos, employee.employee_dni,
			employee.tpocargo_id, employee_tpocargo.tpocargo_name, dependencia.dep_descripcion, sede.sedecol_nombre,
			sede.distrito_iddistrito, pa_distrito.idprovincia, pa_provincia.colprovincia_nombre, employee.employee_phone, tpoPeticion, created_Pet,
			estado, usuarioEmail, passwordEmail, fechaAtencion
			FROM peticionesemail
			INNER JOIN employee ON peticionesemail.idemployee = employee.idemployee
			INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo
			INNER JOIN dependencia ON employee.dependencia_iddependencia = dependencia.iddependencia
			INNER JOIN sede ON employee.sedeid = sede.idsede
			INNER JOIN pa_distrito ON sede.distrito_iddistrito = pa_distrito.Id_distrito
			INNER JOIN pa_provincia ON pa_distrito.idprovincia = pa_provincia.idprovincia
			WHERE estado = 0 OR estado = 1
			ORDER BY estado ASC

			";
	return $resultado71 = $conexion->query($sql71);
}


function accessLog($conexion){
	$access = "SELECT  created_at, iduser_access_log, employee.employee_name, employee.employee_apellidos, employee.employee_avatar,
employee_tpocargo.tpocargo_name, log_ip_address
FROM user_access_log
INNER JOIN employee ON user_access_log.usuarios_id = employee.idemployee
INNER JOIN employee_tpocargo ON employee.tpocargo_id = employee_tpocargo.idtpocargo WHERE usuarios_id != 100  ORDER BY created_at DESC LIMIT 50";

return $accessLog = $conexion->query($access);

}


function contador_12meses_csjhco($conexion){
	$sql = "SELECT MONTH(created_at_contado) as fecha, SUM(cont_consumo_mensual) AS total 
			FROM fotoco_contador 
			GROUP by fecha 
			ORDER BY fecha ASC LIMIT 0,12";

	return $contador_12meses_csjhco = $conexion->query($sql);

}

function incidencias_en_mes($conexion){
	$sql ="SELECT count(*)  as cantidad  FROM eqincidencias WHERE (Incidenciascol_fecha_inc BETWEEN DATE_FORMAT(NOW(), '%Y-%m-01') AND NOW())";
	$resultado = $conexion->query($sql);
	return $incidencias_en_mes = $resultado->fetch_assoc();

}

function cantidad_fotocopiadoras($conexion){
	$sql = "SELECT count(*) as cantFotocopiadoras FROM inv_equipo WHERE tpo_equipo_idtpo_equipo = 2 AND condicion = 1";
	$resultado = $conexion->query($sql);
	return $incidencias_en_mes = $resultado->fetch_assoc();
}

?>