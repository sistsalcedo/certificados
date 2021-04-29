

//Función que se ejecuta al inicio
function init(){
	mostrardiv(false);
	mostrardiv(false);

	$("#fomrularioRegistroAsistencia").on("submit",function(e)
	{
		
		e.preventDefault();
		var txt_dni = $('#txt_dni').val();
  		var id_curso = $('#id_curso').val();
     	var momento = $('#momento').val();

 		console.log(id_curso+' '+txt_dni +' '+momento);

  	 	si_se_matriculo( txt_dni, id_curso, momento );

	})




}

function mostrar_pagina(flag)
{
	if (flag)
	{
		$("#errores").hide();
		$("#todo_bien").show();
	}
	else
	{
		$("#errores").show();
		$("#todo_bien").hide();
	}
}

function validar_url(id_curso, cadena, momento )
{
		$.post("../../ajax/asistencia.php?op=validar_url",{id_curso : id_curso, cadena : cadena,  momento : momento}, function(data, status)
	{
		
		console.log(data);
		if (data != 'null') {

			console.log('enlace valido');
			si_enlace_vigente( id_curso, cadena );
			//limpiar();
			//ocultarBtnLimpiar();
			//mostrarFormularioMatricula(false);


		} else {

			swal.fire({
	             icon: 'error',
	  				title: 'Oops...',
	  				text: 'Este enlace para la asistecnia no el Valido, solicitar el correcto'
	        });
	        mostrar_pagina(false);



		}			
 	})

}

function si_enlace_vigente(id_curso, cadena )
{
		$.post("../../ajax/asistencia.php?op=si_enlace_vigente",{id_curso : id_curso, cadena : cadena}, function(data, status)
	{
		

		if (data != 'null') {

			console.log('enlace vigente');
			mostrar_pagina(true);
			mostrardiv(false);
			//limpiar();
			//ocultarBtnLimpiar();
			//mostrarFormularioMatricula(false);


		} else {

			swal.fire({
	             icon: 'error',
	  				title: 'Oops...',
	  				text: 'Este enlace para la asistencia al curso ya no esta vigente.'
	        });
	        mostrar_pagina(false);



		}			
 	})

}


function si_se_matriculo( txt_dni, id_curso, momento )
{
	
	$.post("../../ajax/asistencia.php?op=si_se_matriculo",{txt_dni : txt_dni , id_curso : id_curso, momento : momento}, function(data, status)
	{
		
		if (data != 'null') {			

			ip_matriculado_existe(txt_dni, id_curso, momento);

			console.log('Si se matriculo');
			

		} else if(momento = 'inicio') {

				console.log('llego aqui');
				si_user_existe( txt_dni, id_curso, momento);
			
		}else{
			console.log('llego aqui tbn');
				swal.fire({
	             icon: 'error',
	  				title: 'Oops...',
	  				text: 'Ya no puede marcar su asistencia, porque no se encuentra matriculado. La MATRICULA se realiza al comienzo del curso'
		        });
		        mostrar_pagina(false);
		}			
 	})



}


function ip_matriculado_existe(txt_dni, id_curso, momento){

	$.post("../../ajax/asistencia.php?op=ip_matricula",{id_curso : id_curso}, function(data, status)
	{
		
		if (data != 'null') {

			console.log('llego');
			Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'No se puede marcar la asistencia de otra persona desde este mismo equipo.'
				});
			//limpiar();
			//ocultarBtnLimpiar();
			//mostrarFormularioMatricula(false);

		} else {

			marcar_asistencia( txt_dni, id_curso, momento);

		}	 		
 	})

}



function si_user_existe( txt_dni, id_curso, momento) {

	
	$.post("../../ajax/asistencia.php?op=si_user_existe",{txt_dni : txt_dni}, function(data, status)
	{
		
		
		if (data != 'null') {
			
			ip_matricula_si_e(id_curso , txt_dni, momento);
			
		} else {


			ip_matricula_no_e(id_curso , txt_dni, momento);
		} 		
 	});

}



function ip_matricula_si_e( id_curso , txt_dni, momento){


	$.post("../../ajax/asistencia.php?op=ip_matricula",{id_curso : id_curso}, function(data, status)
	{
		
		if (data != 'null') {

			console.log('llego');
			Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'No se puede inscribir a otras personas al mismo curso, desde este  mismo equipo.'
				});
			//limpiar();
			//ocultarBtnLimpiar();
			//mostrarFormularioMatricula(false);

		} else {
			console.log('llego tbn');
			

			matricular(txt_dni, id_curso, momento);

		}	 		
 	})
}

function ip_matricula_no_e(id_curso , txt_dni, momento){


	$.post("../../ajax/asistencia.php?op=ip_matricula",{id_curso : id_curso}, function(data, status)
	{
		
		if (data != 'null') {

			console.log('llego');
			Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'No puede inscribir a otras personas al mismo curso desde este equipo.'
				});
			//limpiar();
			//ocultarBtnLimpiar();
			//mostrarFormularioMatricula(false);

		} else {
			console.log('llego tbn');
			verificar_si_dni_valido(id_curso , txt_dni , momento);
			//crear_usuario_matricular_asistencia( id_curso, txt_dni, txt_apenom );

		}	 		
 	})
}


function matricular(txt_dni, id_curso, momento){

	$.post("../../ajax/asistencia.php?op=matricular",{txt_dni : txt_dni, id_curso : id_curso, momento : momento  }, function(data, status)
	{
		//console.log(data);

		Swal.fire('Aviso', data );
		//limpiar();	
		//ocultarBtnLimpiar();
		//mostrarFormularioMatricula(false);
 		
 	})

}


function verificar_si_dni_valido(id_curso , txt_dni , momento){


	var url = 'https://dniruc.apisperu.com/api/v1/dni/'+txt_dni+'?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InNpc3RzYWxjZWRvQGdtYWlsLmNvbSJ9.P1giLK514zJDIcEE3nRZ6e7rpTdraowBBf2GbakxHJ8';
	
	var data = $.getJSON(url, function(data){

		if ( data.success == false ) {

			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Ingresar un DNI válido.'
			});
			//limpiar();	

		} else {

			var apenom = data.apellidoPaterno+" "+data.apellidoMaterno+" "+data.nombres;
			crearuser_matricular_asistencia(id_curso , txt_dni, apenom);
		}				
	});
	

}


function crearuser_matricular_asistencia(id_curso , txt_dni, apenom) {

	$.post("../../ajax/asistencia.php?op=crearuser_matricular_asistencia",{id_curso : id_curso, txt_dni : txt_dni, apenom : apenom  }, function(data, status)
	{
		//console.log(data);

		Swal.fire('Aviso', data );
		//limpiar();	
		//ocultarBtnLimpiar();
		//mostrarFormularioMatricula(false);
 		
 	})

}


function marcar_asistencia( txt_dni, id_curso, momento){

	$.post("../../ajax/asistencia.php?op=marcar_asistencia",{id_curso : id_curso, txt_dni : txt_dni,  momento : momento  }, function(data, status)
	{
		//console.log(data);

		Swal.fire('Aviso', data );
		//limpiar();	
		//ocultarBtnLimpiar();
		//mostrarFormularioMatricula(false);
 		
 	})

}






//Función limpiar
function limpiar()
{
	$("#txt_dni").val("");
	$("#id_curso").val("");
	$("#momento").val("");
	

}

//Función mostrar formulario
function mostrardiv(flag)
{
	//limpiar();
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
	//limpiar();
	mostrardiv(false);
}


// function mostrar_pagina(flag)
// {
// 	if (flag)
// 	{
// 		$("#errores").hide();
// 		$("#todo_bien").show();
// 	}
// 	else
// 	{
// 		$("#errores").show();
// 		$("#todo_bien").hide();
// 	}
// }

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
	    	//limpiar();
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





init();