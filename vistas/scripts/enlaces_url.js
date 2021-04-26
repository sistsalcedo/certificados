
function init() {
	
	$("#formulario_generarURL").on("submit",function(e)
		{
			
			guardaryeditar_url(e);	
		})

}

function inicialEnlaces(id_curso){
	
	mostrarformU(true);

	poneridcurso(id_curso);
	nombrecurso(id_curso);
	MostrarFrm_sihay_enlaces(id_curso);
	Listar_Enlaces(id_curso);

}

//Función limpiar
function limpiar_url()
{
	$("#momento_enlace").val("");
	$("#fecha_inicio_enlace").val("");
	$("#id_enlace_curso").val("");
	$("#hora_inicio_enlace").val("");
	$("#duracion_enlace").val("");

}


function poneridcurso(id_curso){

	
	$("#id_curso_enlace").val(id_curso); 
}

//Función mostrar formulario
function mostrarformU(flag)
{
	limpiar_url();
	if (flag)
	{
		$("#formulario_Para_GenerarEnlaces").show(300);
		$("#listadoregistros").hide();
		$("#formularioregistros").hide();
		$("#btnGuardarEnlace").prop("disabled",false);
		$("#btnagregar").hide();
	}
	else
	{
		$("#formulario_Para_GenerarEnlaces").hide();
		$("#listadoregistros").show(300);
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}


//Función mostrar formulario
function mostrarform_URL(flag)
{
	limpiar_url();
	if (flag)
	{
		$("#formularioGenerarEnlaces").show(300);
	}
	else
	{
		$("#formularioGenerarEnlaces").hide();
	}
}

//Función cancelarform
function cancelarformU()
{
	limpiar_url();
	mostrarformU(false);
}


function MostrarFrm_sihay_enlaces(id_curso){

	$.post('../../ajax/enlaces_url.php?op=mostrarform', {id_curso: id_curso}, function(data, textStatus) {

		if(data < 3) { 
			
			mostrarform_URL(true);

		}else{
			mostrarform_URL(false);
		}

	});	
};



function nombrecurso(id_curso){
	$.post('../../ajax/enlaces_url.php?op=nombrecurso', {id_curso: id_curso}, function(data, textStatus) {

		data = JSON.parse(data);
		$("#nombrecurso").html(data.nombre_curso); 
	});	
}


//Función para guardar o editar

function guardaryeditar_url(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardarEnlace").prop("disabled",true);
	var formData = new FormData($("#formulario_generarURL")[0]);

	$.ajax({
		url: "../../ajax/enlaces_url.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	
	                    
	          mostrarformU(false); 
	    }

	});
	limpiar_url();
}


function Listar_Enlaces(id_curso){
	$.post('../../ajax/enlaces_url.php?op=listar_enlaces', {id_curso: id_curso}, function(data, textStatus) {

		$("#listadoenlaces").html(data); 
	});	
};

//Función para desactivar registros
function desactivarurl(id_enlace_curso,id_curso)
{
	bootbox.confirm("¿Está Seguro de Eliminar el Enlace?", function(result){
		if(result)
        {
        	$.post("../../ajax/enlaces_url.php?op=desactivar", {id_enlace_curso : id_enlace_curso}, function(e){
        		bootbox.alert(e);
        		MostrarFrm_sihay_enlaces(id_curso)
	            Listar_Enlaces(id_curso);
        	});	
        }
	})
}

init();