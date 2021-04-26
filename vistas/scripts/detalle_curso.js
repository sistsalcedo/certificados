
function init() {
	//detalleCurso(idcurso);
}

function detalleCurso(idcurso) {
	$.post("../../ajax/cursos.php?op=mostrar",{idcurso : idcurso}, function(data, status)
	{
		data = JSON.parse(data);	
		console.log(data);
		

		$("#id_curso").val(data.id_curso);
		$("#nombre_curso").html(data.nombre_curso);
		$("#nombre_curso_frm").html(data.nombre_curso);
		$("#fecha_curso").html(data.fecha_inicio);
		$("#hora_curso").html(data.hora_inicio);
		$("#nombre_ponente").html(data.apenom_ponente);		
		$('#imagen_curso').attr("src", '../../files/imagen_curso/'+data.img_curso);	
 	})
}


init();