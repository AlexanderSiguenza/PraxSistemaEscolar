<?php

$host="localhost";
$usuario="root";
$contrasena="contrasenia";
$bdd="praxon";
$tabla="seccion";
mysql_connect ($host,$usuario,$contrasena);
mysql_select_db ($bdd);

//Rutina para sacar los encabezados de la Tabla

$result =mysql_query("SHOW COLUMNS FROM $tabla");
?>
<table border=1>
<tr>
<?php
if (mysql_num_rows($result)>0) {
while ($row= mysql_fetch_assoc($result)) {
echo"<td>",$row['Field'],"</td>";
}
}
?>
</tr>

<?php  //ORDER BY evaluacion.Alumno_codigoAlumno ASC

//Rutina para sacar todos los datos contenidos en la tabla

$result2 =mysql_query("SELECT * FROM $tabla");
while($row2= mysql_fetch_array($result2, MYSQL_NUM)) {
echo"<tr>";
for($i=0; $i<count($row2);$i++)
echo"<td>",$row2[$i],"</td>";
echo"</tr>";
}
?>
</table>


