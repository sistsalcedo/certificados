

//Función que se ejecuta al inicio
function init(){
	mostrardiv(false);

	$("#fomrularioRegistroAsistencia").on("submit",function(e)
	{
		
		e.preventDefault();
		var txt_dni = $('#txt_dni').val();
    	var id_curso = $('#id_curso').val();

    	verificar( txt_dni, id_curso );
	})


}


function asistencia (idcurso, cadena)
{


}
//Función limpiar
function limpiar()
{
	$("#txtdniOcelular").val("");
	$("#txtemail").val("");

}

//Función mostrar formulario
function mostrardiv(flag)
{
	limpiar();
	if (flag)
	{
		$("#div_asistencia").hide();
		$("#div_registro").show();
	}
	else
	{
		$("#div_asistencia").show();
		$("#div_registro").hide();
		$("#btnRegistrar").prop("disabled",false);
		//$("#btnagregar").show();
	}
}

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrardiv(false);
}


//Función para guardar o editar

function consultar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#consultar").prop("disabled",true);
	var formData = new FormData($("#fomrularioRegistroAsistencia")[0]);

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
function verificar (txt_dni, id_curso) {

	$.post('../../ajax/asistencia.php?op=verificar', {txt_dni: txt_dni, id_curso: id_curso}, function(e) {
		
		if ( e == '1' ) {
			console.log('Usuario  existe');
			alert('Usario matriculado en el curso');
			//marcarAsistencia(txt_dni, id_curso);
			limpiar();

		}else{
			//alert('Tiene q registrarte');
			registrar(txt_dni, id_curso);
			//mostrardiv(true);
			//Swal.fire({ title:'Aviso', text: e, footer: '<a href>Tiene problemas para descargar su certificado?</a>' });
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

function  marcarAsistencia(txt_dni, id_curso) {


	$.post("../../ajax/asistencia.php?op=marcarAsistencia",{txt_dni : txt_dni, id_curso : id_curso }, function(data, status)
	{
				
 	})

}

function registrar(txt_dni, id_curso)
{
	mostrardiv(true);

	$.post("../../ajax/asistencia.php?op=registrar",{txt_dni : txt_dni, id_curso : id_curso }, function(data, status)
	{
		


 	})

}

init();