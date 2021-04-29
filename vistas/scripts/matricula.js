

//Función que se ejecuta al inicio
function init(){
	mostrarFormularioMatricula(false);
	btn_para_q_se_registren(false);
	ocultarBtnLimpiar();
	$("#fomrularioRegistro").on("submit",function(e)
	{
		e.preventDefault();
		var id_curso = $('#id_curso').val();
		var txt_dni = $('#txt_dni').val();
		//var flag = $('#flag').val();
		var txt_apenom = $('#txt_apenom').val();
		

		if (txt_apenom == '' ) {
			Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Debe ingresar su DNI y luego hacer click en el boton azul verificar.'
				});
		}else{
			Ejecutar_consulta(id_curso , txt_dni, txt_apenom);	
		}

		
	})

}

//Función limpiar
function limpiar()
{
	
		
	$("#txt_dni").val("");
	$("#txt_apenom").val("");	
	//$("#txt_celular").val("");	
	//$("#txt_email").val("");
	$('#txt_dni').prop("readonly",false);
			

}

//Ocultar boton verificar 
function limpiar_txt_dni(){
	
	//$("#btnVerificar").show();
	ocultarBtnLimpiar();
	btn_para_q_se_registren(false);

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

function btn_para_q_se_registren(flag){

	if (flag)
	{
		$("#btn_para_q_se_registren").show(300);
	}
	else
	{
		$("#btn_para_q_se_registren").hide();
	}
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



function Ejecutar_consulta( id_curso , txt_dni, txt_apenom ){
	
	user(id_curso , txt_dni, txt_apenom);

}




function user(id_curso , txt_dni, txt_apenom) {

	
	$.post("../../ajax/matricula.php?op=existe_user",{txt_dni : txt_dni}, function(data, status)
	{
		
		
		if (data != 'null') {
			
			
			ip_matricula_si_e(id_curso, txt_dni, txt_apenom);
			

		} else {

			ip_matricula_no_e(id_curso, txt_dni, txt_apenom);

		} 		
 	});

}


function se_matriculo( id_curso , txt_dni, txt_apenom ){

	$.post("../../ajax/matricula.php?op=si_se_matriculo",{id_curso : id_curso, txt_dni : txt_dni}, function(data, status)
	{
		

		if (data != 'null') {

			Swal.fire('Aviso','Usted ya esta matriuclado en este curso.','success');
			limpiar();
			ocultarBtnLimpiar();
			mostrarFormularioMatricula(false);


		} else {

			matricular( id_curso , txt_dni, txt_apenom)

		}			
 	})
}


function matricular( id_curso , txt_dni, txt_apenom){

	$.post("../../ajax/matricula.php?op=matricular",{id_curso : id_curso, txt_dni : txt_dni , txt_apenom : txt_apenom}, function(data, status)
	{
		//console.log(data);

		Swal.fire('Aviso', data );
		limpiar();	
		ocultarBtnLimpiar();
		mostrarFormularioMatricula(false);
 		
 	})
}


function ip_matricula_si_e(id_curso, txt_dni, txt_apenom){


	$.post("../../ajax/matricula.php?op=ip_matricula",{id_curso : id_curso, txt_dni : txt_dni}, function(data, status)
	{
		
		if (data != 'null') {

			console.log('llego');
			Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'No te puedes inscribir al curso 2 veces ó no puede inscribir a otras personas al mismo curso, desde este  mismo equipo.'
				});
			limpiar();
			ocultarBtnLimpiar();
			mostrarFormularioMatricula(false);

		} else {
			console.log('llego tbn');
			se_matriculo( id_curso , txt_dni, txt_apenom );

		}	 		
 	})
}

function ip_matricula_no_e(id_curso, txt_dni, txt_apenom){


	$.post("../../ajax/matricula.php?op=ip_matricula",{id_curso : id_curso, txt_dni : txt_dni}, function(data, status)
	{
		
		if (data != 'null') {

			console.log('llego');
			Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'No puede inscribir a otras personas al mismo curso desde este equipo.'
				});
			limpiar();
			ocultarBtnLimpiar();
			mostrarFormularioMatricula(false);

		} else {
			console.log('llego tbn');
			crear_usuario_matricular( id_curso, txt_dni, txt_apenom );

		}	 		
 	})
}


function crear_usuario_matricular( id_curso, txt_dni, txt_apenom ){


	$.post("../../ajax/matricula.php?op=crear_usuario_matricular",{id_curso : id_curso, txt_dni : txt_dni , txt_apenom : txt_apenom}, function(data, status)
	{
		//console.log(data);

		Swal.fire('Aviso', data );
		limpiar();	
		ocultarBtnLimpiar();
		mostrarFormularioMatricula(false);
 		
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
				btn_para_q_se_registren(false);
		   		limpiar_txt_dni();

			} else {

				var apenom = data.apellidoPaterno+" "+data.apellidoMaterno+" "+data.nombres;

				removerLoading();
				btn_para_q_se_registren(true);
				$('#txt_apenom').val(apenom);
				$('#txt_dni').prop("readonly",true);
			}				
		});


	} else {
		Swal.fire('Aviso','Debe ingresar el numero de DNI');
	}


}

init();