

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listarCursosPeoples();
	listarvigentes();
	listarConcluidos();
	listarEliminados();

	$("#formulario").on("submit",function(e)
	{
		
		guardaryeditar(e);	
	})


}

//Función limpiar
function limpiar()
{
	$("#nombre_curso").val("");
	$("#id_curso").val("");
	$("#organizador").val("");
	$("#modalidad_curso").val("");
	$("#img_curso").val("");
	$("#modelo_certificado_curso").val("");
	$("#firma1_curso").val("");
	$("#firma2_curso").val("");
	$("#fecha_inicio").val("");
	$("#hora_inicio").val("");
	$("#fecha_fin").val("");
	$("#hora_fin").val("");
	$("#apenom_ponente").val("");
	$("#cargo").val("");
	$("#objetivo_curso").val("");


}

//Función mostrar formulario
function mostrardiv(flag)
{
	limpiar();
	if (flag)
	{
		$("#formularioConsulta").hide();
		$("#divResultado").show();
	}
	else
	{
		$("#formularioConsulta").show();
		$("#divResultado").hide();
		$("#consultar").prop("disabled",false);
		//$("#btnagregar").show();
	}
}



//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#formulario_Para_GenerarEnlaces").hide();
		$("#listadoregistros").hide();
		$("#formularioregistros").show(300);
		$("#btnGuardar").prop("disabled",false);
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

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrardiv(false);
}

//Función Listar
function listarCursosPeoples()
{
	$.post('../../ajax/cursos.php?op=listarCursosPeoples', function(data, textStatus) {
		//data = JSON.parse(data);	
		//console.log(data);

		$("#cursos").html(data); 
	});
}
//Función para guardar o editar

function consultar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#consultar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../../ajax/certificado.php?op=consultar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}

//Funcion para poder verificar si alumno existe en la base de datos
function verificar (txtdniOcelular, txtemail) {

	$.post('../../ajax/certificado.php?op=verificar', {txtdniOcelular: txtdniOcelular, txtemail: txtemail}, function(e) {
		
		if ( e == '1' ) {
			console.log('Usuario  existe');
			mostrarDatos(txtdniOcelular);
			listarCertificadosAlumno(txtdniOcelular);
			//limpiar();

		}else{
			bootbox.alert(e);
	    	limpiar();
		}		
	});	
}


function mostrarDatos(txtdniOcelular)
{
	$.post("../../ajax/certificado.php?op=mostrarDatos",{txtdniOcelular : txtdniOcelular}, function(data, status)
	{
		data = JSON.parse(data);	
		console.log(data);
		mostrardiv(true);

		$("#datosAlumno").html(data.apenom); 		
 	})
}


//Función Listar
function listarvigentes()
{
	tabla=$('#tbllistadoVigentes').dataTable(
	{
		"lengthMenu": [ 5, 10, 25, 75, 100],//mostramos el menú de registros a revisar
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: '<Bl<f>rtip>',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../../ajax/cursos.php?op=listarCursosVigentes',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"language": {
            "lengthMenu": "Mostrar : _MENU_ registros",
            "buttons": {
            "copyTitle": "Tabla Copiada",
            "copySuccess": {
                    _: '%d líneas copiadas',
                    1: '1 línea copiada'
                }
            }
        },
		"bDestroy": true,
		"iDisplayLength": 30,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}

function listarConcluidos()
{
	tabla=$('#tbllistadoConcluidos').dataTable(
	{
		"lengthMenu": [ 5, 10, 25, 75, 100],//mostramos el menú de registros a revisar
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: '<Bl<f>rtip>',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../../ajax/cursos.php?op=listarCursosConcluidos',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"language": {
            "lengthMenu": "Mostrar : _MENU_ registros",
            "buttons": {
            "copyTitle": "Tabla Copiada",
            "copySuccess": {
                    _: '%d líneas copiadas',
                    1: '1 línea copiada'
                }
            }
        },
		"bDestroy": true,
		"iDisplayLength": 30,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}

function listarEliminados()
{
	tabla=$('#tbllistadoEliminados').dataTable(
	{
		"lengthMenu": [ 5, 10, 25, 75, 100],//mostramos el menú de registros a revisar
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: '<Bl<f>rtip>',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../../ajax/cursos.php?op=listarCursosEliminados',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"language": {
            "lengthMenu": "Mostrar : _MENU_ registros",
            "buttons": {
            "copyTitle": "Tabla Copiada",
            "copySuccess": {
                    _: '%d líneas copiadas',
                    1: '1 línea copiada'
                }
            }
        },
		"bDestroy": true,
		"iDisplayLength": 30,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}


//Función Listar todos los certificados del alumno, que consulta en las WEB
function listarCertificadosAlumno(txtdniOcelular)
{
	tabla=$('#tbllistado').dataTable(
	{
		
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    /*dom: '<Bl<f>rtip>',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],*/
		"ajax":
				{
					url: '../../ajax/certificado.php?op=listarCertificadosAlumno&txtdniOcelular='+txtdniOcelular,
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		/*"language": {
            "lengthMenu": "Mostrar : _MENU_ registros",
            "buttons": {
            "copyTitle": "Tabla Copiada",
            "copySuccess": {
                    _: '%d líneas copiadas',
                    1: '1 línea copiada'
                }
            }
        },*/
		"bDestroy": true,
		"searching": false,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]],//Ordenar (columna,orden)
	    'paging':      false
	}).DataTable();
}

//Funcion que muestra los datos en la pantalla de vista usuarios . el contenido del curso.
function mostrar(idcurso)
{
	$.post("../../ajax/cursos.php?op=mostrar",{idcurso : idcurso}, function(data, status)
	{
		data = JSON.parse(data);	
		console.log(data);
		mostrarform(true);

		$("#id_curso").val(data.id_curso);
		$("#nombre_curso").val(data.nombre_curso);
		$("#organizador").val(data.organizador);
		$("#modalidad_curso").val(data.modalidad_curso);
		$("#img_curso_html").html(data.img_curso);
		$("#certificado_html").html(data.modelo_certificado_curso);	
		$("#firma1_html").html(data.firma1_curso);
		$("#firma2_html").html(data.firma2_curso);	
		$("#fecha_inicio").val(data.fecha_inicio);
		$("#hora_inicio").val(data.hora_inicio);
		$("#fecha_fin").val(data.fecha_fin);	
		$("#hora_fin").val(data.hora_fin);	
		$("#apenom_ponente").val(data.apenom_ponente);
		$("#cargo").val(data.cargo);	
		$("#objetivo_curso").val(data.objetivo_curso);
 	})
}

//Funcion que muestra los datos del curso en panel de administracion.


//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../../ajax/cursos.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          listarvigentes();
			  listarConcluidos();
			  listarEliminados();
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}


function generar_cert(idcurso){

	bootbox.confirm({
	    title: "Generar Certificados!",
	    message: "Estas seguro que desea generar los certificados?. Tienes que verificar los siguiente:<br><ul><li>Curso finalizado.</li><li>Toma de asistencia finalizado.</li><li>Que los archivos necesarios para generar los certificados sean los correctos como: Modelo de certiicado, las firmas y los datos del curso.</li></ul>",
	    buttons: {
	        confirm: {
            label: 'SI',
            className: 'btn-success'
	        },
	        cancel: {
	            label: 'No',
	            className: 'btn-danger'
	        }
	    },
	    callback: function (result) {
	        console.log('This was logged in the callback: ' + result);
	        generar_cert_url(id_curso);
	    }
	});

}

function generar_cert_url(idcurso){

	$.post("../../ajax/cursos.php?op=generar_cert_url",{idcurso : idcurso}, function(data, status)
	{
		

 	})



}


init();