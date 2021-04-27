

//Función que se ejecuta al inicio
function init(){
	mostrardiv(false);

	$("#fomrularioRegistroAsistencia").on("submit",function(e)
	{
		
		e.preventDefault();
		var txt_dni = $('#txt_dni').val();
    	var id_curso = $('#id_curso').val();
    	var momento = $('#momento').val();

    	verificar( txt_dni, id_curso, momento );
	})

	$("#fomrularioRegistro").on("submit",function(e)
	{
		guardaryeditar(e);	
	})


}


function asistencia (idcurso, cadena)
{


}
//Función limpiar
function limpiar()
{
	$("#txt_dni").val("");
	

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




//Funcion para poder verificar si alumno existe en la base de datos
function verificar (txt_dni, id_curso,momento ) {


	$.post("../../ajax/asistencia.php?op=verificar",{txt_dni: txt_dni, id_curso: id_curso, momento: momento}, function(data, status)
	{
			
		console.log(data);


		if ( data != null ) {
			data = JSON.parse(data);
			alert('Usario matriculado en el curso');
			marcarAsistencia(txt_dni, id_curso, momento);
			limpiar();

		}else{
			alert('Usario no matriculado');
			//preguntarse_EXxistira_usuario(txt_dni, id_curso);
			//mostrardiv(true);
			//Swal.fire({ title:'Aviso', text: e, footer: '<a href>Tiene problemas para descargar su certificado?</a>' });
	    	limpiar();
		}
 		
 	})

	// $.post('../../ajax/asistencia.php?op=verificar', {txt_dni: txt_dni, id_curso: id_curso, momento: momento}, function(data, status) {
		
		
			
	// });	
}

function  marcarAsistencia(txt_dni, id_curso, momento) {


	$.post("../../ajax/asistencia.php?op=marcarAsistencia",{txt_dni : txt_dni, id_curso : id_curso, momento : momento  }, function(data, status)
	{
			alert(data);	
			console.log(data)	;
 	})

}

function preguntarse_EXxistira_usuario(txt_dni, id_curso)
{
	$.post('../../ajax/asistencia.php?op=verificar_ex', {txt_dni: txt_dni, id_curso: id_curso},  function(data, status) {
		
		data = JSON.parse(data);	
		console.log(data);


		if ( data != null ) {
			alert('Usario si existe en la base de datos');
			//matricularlo(txt_dni, id_curso, momento);
			//limpiar();

		}else{
			alert('Usario  no existe en la base de datos');
			mostrardiv(true);
			//crearusuario;
			//matricularlo(txt_dni, id_curso, momento);
			//marcarAsistencia(txt_dni, id_curso, momento);
	    	//limpiar();
		}

	});	

}


function registrar(txt_dni, id_curso)
{
	mostrardiv(true);

	$.post("../../ajax/asistencia.php?op=registrar",{txt_dni : txt_dni, id_curso : id_curso }, function(data, status)
	{
		


 	})

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


function ocultarBtnLimpiar() {  
	
	$("#btnVerificar").show();
	$("#limpiarDatos").hide();
}

function mostrarBtnLimpiar() {  
	
	$("#btnVerificar").hide();
	$("#limpiarDatos").show();
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
	$("#btnRegistrar").prop("disabled",true);
	var formData = new FormData($("#fomrularioRegistro")[0]);

	$.ajax({
		url: "../../ajax/asistencia.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          Swal.fire('Bien Hecho',datos,'success');	          
	          limpiar();
	          mostrardiv(false);
	          $("#btnRegistrar").prop("disabled",false);
	    }

	});
	limpiar();

	
}


init();