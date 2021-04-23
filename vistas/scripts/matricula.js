

//Función que se ejecuta al inicio
function init(){
	mostrarFormularioMatricula(false);
	ocultarBtnLimpiar();
	$("#fomrularioRegistro").on("submit",function(e)
	{
		guardaryeditar(e);	
	})

}

//Función limpiar
function limpiar()
{
	
		
	$("#txt_dni").val("");
	$("#txt_apenom").val("");	
	$("#txt_celular").val("");	
	$("#txt_email").val("");
	$('#txt_dni').prop("readonly",false);
			

}

//Ocultar boton verificar 
function limpiar_txt_dni(){
	
	//$("#btnVerificar").show();
	ocultarBtnLimpiar();

	limpiar();

}

function ocultarBtnLimpiar() {  
	
	$("#btnVerificar").show();
	$("#limpiarDatos").hide();
}

function mostrarBtnLimpiar() {  
	
	$("#btnVerificar").hide();
	$("#limpiarDatos").show();
}

//Función mostrar formulario
function mostrarFormularioMatricula(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#buscarRegistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
	}
	else
	{
		$("#listadoregistros").show(1000);
		$("#buscarRegistros").show(1000);
		$("#formularioregistros").fadeOut('slow');
	}
}

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarFormularioMatricula(false);
}


//Removiendo la imagen de Loading 
function removerLoading()
{
	$('#loading').fadeOut(1000);			
	$('#loading').remove();
}


//Función para guardar o editar
function guardaryeditar(e)
{

	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#fomrularioRegistro")[0]);

	$.ajax({
		url: "../../ajax/matricula.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          Swal.fire('Bien Hecho',datos,'success');	          
	          limpiar();
	          mostrarFormularioMatricula(false);
	          $("#btnGuardar").prop("disabled",false);
	    }

	});
	limpiar();

	
}

function verificar_dni(){


	var dni = $('#txt_dni').val();
	var nombres = "";
	var apellidos = "";


	if (dni != "" ) {

		
		mostrarBtnLimpiar();
		$('#div_apenom').append('<div id="loading"><img src="../view_sise/img/loading.gif" alt="loading" width="50px" />Un momento, por favor...</div>');
		var url = 'https://dniruc.apisperu.com/api/v1/dni/'+dni+'?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InNpc3RzYWxjZWRvQGdtYWlsLmNvbSJ9.P1giLK514zJDIcEE3nRZ6e7rpTdraowBBf2GbakxHJ8';
		var data = $.getJSON(url, function(data){

			if ( data.success == false ) {

				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Ingresar un DNI válido.'
				});
				removerLoading();
		   		limpiar_txt_dni();

			} else {

				var apenom = data.apellidoPaterno+" "+data.apellidoMaterno+" "+data.nombres;

				removerLoading();
				$('#txt_apenom').val(apenom);
				$('#txt_dni').prop("readonly",true);
			}				
		});


	} else {
		Swal.fire('Aviso','Debe ingresar el numero de DNI');
	}


}

init();