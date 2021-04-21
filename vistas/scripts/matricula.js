

//Función que se ejecuta al inicio
function init(){

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
	$('#txt_dni').attr("autofocus");		

}


//Función cancelarform
function cancelarform()
{
	limpiar();
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
	          bootbox.alert(datos);	          
	          limpiar();
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

		var url = 'https://dniruc.apisperu.com/api/v1/dni/'+dni+'?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InNpc3RzYWxjZWRvQGdtYWlsLmNvbSJ9.P1giLK514zJDIcEE3nRZ6e7rpTdraowBBf2GbakxHJ8';
		var data = $.getJSON(url, function(data){
			
			//var nombres =data.nombres;
			//var apellidos = data.apellidoPaterno+" "+data.apellidoMaterno;
			var apenom = data.apellidoPaterno+" "+data.apellidoMaterno+" "+data.nombres;

			$('#txt_apenom').val(apenom);
			$('#txt_dni').prop("readonly",true);	
		});

		  data.done(function(data) {
		  
		    
		  });	

	} else {
		bootbox.alert("DEBE DE INGRESAR EL DNI DE LA PERSONA!", function(){
			console.log('DEBE DE INGRESAR EL DNI DE LA PERSONA!'); 
		});
	}


}

init();