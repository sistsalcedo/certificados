
function init() {
	
}

const getRemainingTime = deadline => {
  let now = new Date(),
      remainTime = (new Date(deadline) - now + 1000) / 1000,
      remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
      remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
      remainHours = ('0' + Math.floor(remainTime / 3600 % 24)).slice(-2),
      remainDays = Math.floor(remainTime / (3600 * 24));

  return {
    remainSeconds,
    remainMinutes,
    remainHours,
    remainDays,
    remainTime
  }
};

const countdown = (deadline,elem,finalMessage) => {
  const el = document.getElementById(elem);

  const timerUpdate = setInterval( () => {
    let t = getRemainingTime(deadline);
    el.innerHTML = `${t.remainDays}d:${t.remainHours}h:${t.remainMinutes}m:${t.remainSeconds}s`;

    if(t.remainTime <= 1) {
      clearInterval(timerUpdate);
      el.innerHTML = finalMessage;
    }

  }, 1000)
};

function cuenta_regresiva(id_curso,cadena){
	$.post('../../ajax/cuenta_regresiva.php?op=cuenta_regresiva', {id_curso: id_curso, cadena:cadena }, function(data, textStatus) {

			

			data = JSON.parse(data);
			
			dateObj = new Date(data.fechainicio_url);
			dateObj2 = new Date(data.fechainicio_url+' '+data.horainicio_url);
			console.log(dateObj2);
			dateObj2.setTime(data.duracion_min);


			//dateObj2 = Date.parse(dateObj2);

			//adonde_llegar = data.duracion_min;

			//ok = new Date(dateObj2 + adonde_llegar);

			console.log(dateObj2);
			//console.log(adonde_llegar);
			//console.log(ok);

			//countdown('Dec 31 2025 21:34:40 GMT-0500', 'clock', 'Finalizó el timepo para marcar tu asistencia.');

		});	
}





// mes = dateObj.getUTCMonth() + 1; 
// 			dia = dateObj.getUTCDate();
// 			anio = dateObj.getUTCFullYear();
// 			hora = dateObj2.getHours(); 
// 			minutos = dateObj2.getMinutes();


init();