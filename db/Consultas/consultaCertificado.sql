SELECT id_certificado,cursos.id_curso, cursos.nombre_curso,cursos.fecha_inicio, cursos.fecha_fin, cursos.modalidad_curso,
cursos.organizador, alumnos.id_alumno, alumnos.apenom,qr_code,tipocertificado,fecha_certificado, ponente.id_ponente, ponente.firma_ponente, 
presidente.id_presidente, presidente.firma_presi
FROM certificados

INNER JOIN cursos ON certificados.id_curso = cursos.id_curso
INNER JOIN ponente ON cursos.id_ponente = ponente.id_ponente
INNER JOIN alumnos ON certificados.id_alumno = alumnos.id_alumno
INNER JOIN presidente ON certificados.id_presidente = presidente.id_presidente

WHERE cursos.id_curso = 1
 