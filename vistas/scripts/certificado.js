

//Función que se ejecuta al inicio
function init(){
	mostrardiv(false);

	$("#formulario").on("submit",function(e)
	{
		
		e.preventDefault();
		var txtdniOcelular = $('#txtdniOcelular').val();
    	var txtemail = $('#txtemail').val();

    	verificar( txtdniOcelular, txtemail );
	})


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

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrardiv(false);
}

//Función Listar
function listar()
{
	tabla=$('#tbllistado1').dataTable(
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
					url: '../../ajax/categoria.php?op=listar',
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


init();