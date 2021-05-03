

//Función que se ejecuta al inicio
function init(){
	mostrardiv(false);

	$("#formulario").on("submit",function(e)
	{
		
		e.preventDefault();
		var txtdniOcelular = $('#txtdniOcelular').val();
    	//var txtemail = $('#txtemail').val();

    	verificar_dniantiguos( txtdniOcelular );
    	//verificar_table_cert(txtdniOcelular);
	})


}

//Función limpiar
function limpiar()
{
	$("#txtdniOcelular").val("");
	$("#txtemail").val("");
	//$("#datosAlumno").html("");


	

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
function verificar_dniantiguos (txtdniOcelular) {

	$.post('../../ajax/certificado.php?op=verificar', {txtdniOcelular: txtdniOcelular}, function(e) {
		
		if ( e == '1' ) {
			console.log('Usuario  existe');
			mostrarDatos(txtdniOcelular);
			listarCertificadosAlumno(txtdniOcelular);
			//verificar_dninuevos_sin_else(txtdniOcelular);
			verificar_table_cert(txtdniOcelular)
			//limpiar();

		}else{

			verificar_dninuevos(txtdniOcelular);
			//bootbox.alert(e);
			//Swal.fire({ title:'Aviso', text: e, footer: '<a class="text-green" href="whatsapp://send?text=Tengo problemas para descargar mi certificado, mis datos son: &phone=+51935197244&abid=+51935197244">Tiene problemas para descargar su certificado? Comunicate con nosotros enviando tus datos al WhatsApp  935197244 <i class="fa fa-whatsapp"></i></a>' });
	    	//limpiar();
		}		
	});	
}


function verificar_dninuevos_sin_else (txtdniOcelular) {

	$.post('../../ajax/certificado.php?op=verificar_nuevos', {txtdniOcelular: txtdniOcelular}, function(data, status){
		
		if ( data != 'null' ) {
			console.log('Usuario nuevo existe');		
			verificar_table_cert(txtdniOcelular)
			limpiar();

		}else{
			console.log('llego aqui');
		}	
	});	
}


function verificar_dninuevos (txtdniOcelular) {

	$.post('../../ajax/certificado.php?op=verificar_nuevos', {txtdniOcelular: txtdniOcelular}, function(data, status) {
		
		console.log(data);
		if ( data != 'null' ) {
			data = JSON.parse(data);	
			$("#datosAlumno").html(data.apenom);
			//mostrarDatos_dninuevos(txtdniOcelular);
			verificar_table_cert(txtdniOcelular)
			limpiar();

		}else{

			//bootbox.alert(e);
			Swal.fire({ title:'Aviso', text: 'DNI no se encuentra registrado.', footer: '<a class="text-green" href="whatsapp://send?text=Tengo problemas para descargar mi certificado, mis datos son: &phone=+51935197244&abid=+51935197244">Tiene problemas para descargar su certificado? Comunicate con nosotros enviando tus datos al WhatsApp  935197244 <i class="fa fa-whatsapp"></i></a>' });
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

		$("#datosAlumno").html(data.apenom_ant); 		
 	})
}


function mostrarDatos_dninuevos(txtdniOcelular)
{
	$.post("../../ajax/certificado.php?op=mostrarDatos_dninuevos",{txtdniOcelular : txtdniOcelular}, function(data, status)
	{
		data = JSON.parse(data);	
		console.log(data);
		mostrardiv(true);

		$("#datosAlumno").html(data.apenom_ant); 		
 	})
}

function verificar_table_cert(txtdniOcelular)
{
	
	mostrardiv(true);
	tabla=$('#tbllistado_url').dataTable(
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
					url: '../../ajax/certificado.php?op=verificar_table_cert&txtdniOcelular='+txtdniOcelular,
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