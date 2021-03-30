select
(select cliente from tabla where cliente = 'cliente') as cliente,
(select dato1 from tabla where cliente = 'cliente') as col1,
(select dato2 from tabla where cliente = 'cliente') as col2,
(select dato3 from tabla where cliente = 'cliente') as col3,
(select dato4 from tabla where cliente = 'cliente') as col4

cliente col1 col2 col3 col4
1111 dato1 dato2 dato3 dato4



SELECT CONCAT(alumno.Apellido1 ,' ', alumno.Apellido2 ,' ',alumno.Nombres) as Nombre,
sum( Resultado * ( 1 - abs( sign( Asignatura_codigoAsignatura -1 ) ) ) ) AS Matematicas,
sum( Resultado * ( 1 - abs( sign( Asignatura_codigoAsignatura -9 ) ) ) ) AS Ingles,
sum( Resultado * ( 1 - abs( sign( Asignatura_codigoAsignatura -10 ) ) ) ) AS Eduacion_Fisica,
sum( Resultado * ( 1 - abs( sign( Asignatura_codigoAsignatura -11 ) ) ) ) AS Eduacion_Artistica
FROM evaluacion,alumno  where alumno.CodigoAlumno = evaluacion.Alumno_codigoAlumno
And Actividad_codigoActividad=1 GROUP BY Nombre 








SELECT alumno.CodigoAlumno, alumno.Nombres, asignatura.Nombre AS Asignatura,
evaluacion.Resultado AS Nota,  SUM( Resultado ) AS total
FROM alumno, evaluacion, asignatura
WHERE alumno.CodigoAlumno = evaluacion.Alumno_codigoAlumno
AND evaluacion.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
GROUP BY alumno.CodigoAlumno, alumno.Nombres


SELECT alumno.CodigoAlumno, alumno.Nombres, asignatura.Nombre AS Asignatura,
evaluacion.Resultado AS Nota,AVG( Resultado ) AS Promedio
FROM alumno, evaluacion, asignatura
WHERE alumno.CodigoAlumno = evaluacion.Alumno_codigoAlumno
AND evaluacion.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
GROUP BY alumno.CodigoAlumno, alumno.Nombres

good

SELECT alumno.CodigoAlumno, alumno.Nombres, asignatura.Nombre AS Asignatura,
evaluacion.Resultado AS Nota, AVG( Resultado ) AS Promedio
FROM alumno, evaluacion, asignatura, matricula
WHERE matricula.Seccion_codigoSeccion = '1'
AND alumno.CodigoAlumno = matricula.Alumno_codigoAlumno
AND evaluacion.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
AND alumno.CodigoAlumno = evaluacion.Alumno_codigoAlumno
GROUP BY alumno.CodigoAlumno, alumno.Nombres


SELECT alumno.CodigoAlumno, alumno.Nombres, asignatura.Nombre AS Asignatura,
(A1 + A2 + ET) AS Suma
FROM alumno, notas, asignatura
WHERE notas.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
AND alumno.CodigoAlumno = notas.Alumno_codigoAlumno
GROUP BY alumno.CodigoAlumno, alumno.Nombres


SELECT asignatura.Nombre AS Asignatura, notas.A1, notas.A2, notas.ET,
(A1 + A2 + ET ) AS Suma, ROUND( (( A1 + A2 + ET) /3 ) , 2) AS Promedio
FROM alumno, notas, asignatura
WHERE notas.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
AND alumno.CodigoAlumno = notas.Alumno_codigoAlumno
GROUP BY asignatura.Nombre
ORDER BY asignatura.Nombre




SELECT asignatura.Nombre AS Asignatura, trimestre1.A1, trimestre1.A2, trimestre1.ET, (
trimestre1.A1 + trimestre1.A2 + trimestre1.ET
) AS Suma, ROUND( (
(
trimestre1.A1 + trimestre1.A2 + trimestre1.ET
) /3 ) , 2
) AS Promedio, trimestre2.A1, trimestre2.A2, trimestre2.ET, (
trimestre2.A1 + trimestre2.A2 + trimestre2.ET
) AS Suma, ROUND( (
(
trimestre2.A1 + trimestre2.A2 + trimestre2.ET
) /3 ) , 2
) AS Promedio, trimestre3.A1, trimestre3.A2, trimestre3.ET, (
trimestre3.A1 + trimestre3.A2 + trimestre3.ET
) AS Suma, ROUND( (
(
trimestre3.A1 + trimestre3.A2 + trimestre3.ET
) /3 ) , 2
) AS Promedio
FROM alumno, trimestre1, trimestre2, trimestre3, asignatura
WHERE trimestre1.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
AND alumno.CodigoAlumno = trimestre1.Alumno_codigoAlumno
GROUP BY asignatura.Nombre
ORDER BY asignatura.Nombre


Esta funciona 05 mayo 2011

SELECT alumno.CodigoAlumno, alumno.Nombres, asignatura.Nombre AS Asignatura,

trimestre1.A1, trimestre1.A2, trimestre1.ET,
(trimestre1.A1 + trimestre1.A2 + trimestre1.ET ) AS Suma,
ROUND( (( trimestre1.A1 + trimestre1.A2 + trimestre1.ET ) /3 ), 2 ) AS Pro1,

trimestre2.A1, trimestre2.A2, trimestre2.ET,
(trimestre2.A1 + trimestre2.A2 + trimestre2.ET) AS Suma,
ROUND( (( trimestre2.A1 + trimestre2.A2 + trimestre2.ET ) /3 ), 2) AS Pro2,

trimestre3.A1, trimestre3.A2, trimestre3.ET,
(trimestre3.A1 + trimestre3.A2 + trimestre3.ET  ) AS Suma,
ROUND( ((trimestre3.A1 + trimestre3.A2 + trimestre3.ET  ) /3 ), 2  ) AS Pro3,

ROUND( ( (  (( trimestre1.A1 + trimestre1.A2 + trimestre1.ET ) /3 ) + (( trimestre2.A1 + trimestre2.A2 + trimestre2.ET ) /3 ) + ((trimestre3.A1 + trimestre3.A2 + trimestre3.ET ) /3)  )/3 ),2) AS Pro_Final

FROM alumno, trimestre1, trimestre2, trimestre3, asignatura
WHERE alumno.CodigoAlumno = trimestre1.Alumno_codigoAlumno
AND trimestre1.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
AND trimestre2.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
AND trimestre3.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
GROUP BY asignatura.Nombre
ORDER BY asignatura.Nombre