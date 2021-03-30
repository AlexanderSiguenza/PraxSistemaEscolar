<html>
<head>
<title>Actividad</title>
</head>
<body>
<?
class evaluacion{

  function agregar_evaluacion($Codigo_Alumno,$Cod_Asignatura,$Cod_Actividad,$Resultado,$_Trimestre){
  require_once('../Config/c_conexion.php');
  $link=Conectarse();
  $conteo= count($Codigo_Alumno);
  $i     = 0;

//Timestre 1
   if ( ($_Trimestre==1) and ($Cod_Actividad==1)){

   while ($i < $conteo)
   {
     $consulta= "INSERT into trimestre1 (Alumno_codigoAlumno,Asignatura_codigoAsignatura,Trimestre,A1) values ('$Codigo_Alumno[$i]','$Cod_Asignatura','$_Trimestre','$Resultado[$i]')";
     $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
     $i++;
   }
  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     }
     mysql_close($link);
     return $result;
  echo "Datos guardados correctamente";
   }
   if ( ($_Trimestre==1) and ($Cod_Actividad==2)){

   while ($i < $conteo)
   {
    $consulta="Update trimestre1 Set A2='$Resultado[$i]' WHERE Alumno_codigoAlumno='$Codigo_Alumno[$i]' And Asignatura_codigoAsignatura='$Cod_Asignatura'";
    $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
     $i++;
   }
  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     }
     mysql_close($link);
     return $result;
  echo "Datos guardados correctamente";
   }
    if ( ($_Trimestre==1) and ($Cod_Actividad==3)){

   while ($i < $conteo)
   {
    $consulta="Update trimestre1 Set ET='$Resultado[$i]' WHERE Alumno_codigoAlumno='$Codigo_Alumno[$i]' And Asignatura_codigoAsignatura='$Cod_Asignatura'";
    $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
     $i++;
   }
  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     }
     mysql_close($link);
     return $result;
  echo "Datos guardados correctamente";
   }

//Timestre 2
   if ( ($_Trimestre==2) and ($Cod_Actividad==4)){

   while ($i < $conteo)
   {
     $consulta= "INSERT into trimestre2 (Alumno_codigoAlumno,Asignatura_codigoAsignatura,Trimestre,A1) values ('$Codigo_Alumno[$i]','$Cod_Asignatura','$_Trimestre','$Resultado[$i]')";
     $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
     $i++;
   }
  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     }
     mysql_close($link);
     return $result;
  echo "Datos guardados correctamente";
   }
   if ( ($_Trimestre==2) and ($Cod_Actividad==5)){

   while ($i < $conteo)
   {
   $consulta="Update trimestre2 Set A2='$Resultado[$i]' WHERE Alumno_codigoAlumno='$Codigo_Alumno[$i]' And Asignatura_codigoAsignatura='$Cod_Asignatura'";
    $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
     $i++;
   }
  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     }
     mysql_close($link);
     return $result;
  echo "Datos guardados correctamente";
   }
    if ( ($_Trimestre==2) and ($Cod_Actividad==6)){

   while ($i < $conteo)
   {
    $consulta="Update trimestre2 Set ET='$Resultado[$i]' WHERE Alumno_codigoAlumno='$Codigo_Alumno[$i]' And Asignatura_codigoAsignatura='$Cod_Asignatura'";
    $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
     $i++;
   }
  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     }
     mysql_close($link);
     return $result;
  echo "Datos guardados correctamente";
   }

//Timestre 3
   if ( ($_Trimestre==3) and ($Cod_Actividad==8)){

   while ($i < $conteo)
   {
     $consulta= "INSERT into trimestre3 (Alumno_codigoAlumno,Asignatura_codigoAsignatura,Trimestre,A1) values ('$Codigo_Alumno[$i]','$Cod_Asignatura','$_Trimestre','$Resultado[$i]')";
     $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
     $i++;
   }
  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     }
     mysql_close($link);
     return $result;
  echo "Datos guardados correctamente";
   }
   if ( ($_Trimestre==3) and ($Cod_Actividad==9)){

   while ($i < $conteo)
   {
     $consulta="Update trimestre3 Set A2='$Resultado[$i]' WHERE Alumno_codigoAlumno='$Codigo_Alumno[$i]' And Asignatura_codigoAsignatura='$Cod_Asignatura'";
    $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
     $i++;
   }
  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     }
     mysql_close($link);
     return $result;
  echo "Datos guardados correctamente";
   }
    if ( ($_Trimestre==3) and ($Cod_Actividad==10)){

   while ($i < $conteo)
   {
    $consulta="Update trimestre3 Set ET='$Resultado[$i]' WHERE Alumno_codigoAlumno='$Codigo_Alumno[$i]' And Asignatura_codigoAsignatura='$Cod_Asignatura'";
    $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
     $i++;
   }
  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     }
     mysql_close($link);
     return $result;
  echo "Datos guardados correctamente";
   }
  }

  function eliminar_evaluacion($_CodigoGrado){
      require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM actividad WHERE CodigoGrado='$_CodigoGrado'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
    }

    function modificar_evaluacion($_CodigoGrado,$_Nombre){
    require_once('../Config/c_conexion.php');
    $link= Conectarse();
    $consulta="Update actividad Set CodigoGrado='$_CodigoGrado',Nombre='$_Nombre' WHERE CodigoGrado='$_CodigoGrado'";

     if(!mysql_query($consulta,$link))
    {
      echo "Los datos no pudieron ser modificados";
      exit();
    }
     echo "Datos modificados correctamente";
    }

    function buscar_evaluacion($_CodigoGrado){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM actividad where CodigoGrado='$_CodigoGrado' LIMIT 1 ";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

     function  mostrar_evaluacion($codigo){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT CodigoAlumno,alumno.Nombres As uNombres,

         alumno.Apellido1 As uApellido1,alumno.Apellido2 As uApellido2

         FROM alumno,matricula

         where matricula.Seccion_codigoSeccion='$codigo'

         and CodigoAlumno = matricula.Alumno_codigoAlumno

         ORDER BY uApellido1,uApellido2";

        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

     function  mostrar_Notas($codigo){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();

        //Periodos
$estado="Activo";
$periodo="SELECT * FROM periodo where estado='$estado'";
$result= mysql_query($periodo,$link)or die("Problemas en la instrucción select:".mysql_error());
$row = mysql_fetch_array($result);
$CodigoPeriodo=$row['CodigoPeriodo'];

if ($CodigoPeriodo==1){
//Notas
$consulta= "SELECT asignatura.Nombre AS Asignatura,

trimestre1.A1 As A1, trimestre1.A2 As A2, trimestre1.ET As ET,
(trimestre1.A1 + trimestre1.A2 + trimestre1.ET ) AS Suma,
ROUND( (( (trimestre1.A1*0.35) + (trimestre1.A2*0.35) + (trimestre1.ET*0.30) )), 2 ) AS Pro1

FROM alumno, trimestre1,asignatura
WHERE trimestre1.Alumno_codigoAlumno='$codigo'
AND trimestre1.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
GROUP BY asignatura.Nombre
ORDER BY asignatura.Nombre";
}

if ($CodigoPeriodo==2){
//Notas
$consulta = "SELECT asignatura.Nombre AS Asignatura,

trimestre1.A1 As A1, trimestre1.A2 As A2, trimestre1.ET As ET,
(trimestre1.A1 + trimestre1.A2 + trimestre1.ET ) AS Suma,
ROUND( (( (trimestre1.A1*0.35) + (trimestre1.A2*0.35) + (trimestre1.ET*0.30) )), 2 ) AS Pro1,

trimestre2.A1 As A11, trimestre2.A2 As A22, trimestre2.ET As ETT,
(trimestre2.A1 + trimestre2.A2 + trimestre2.ET) AS Suma,
ROUND( (( (trimestre2.A1*0.35) + (trimestre2.A2*0.35) + (trimestre2.ET*0.30) )), 2) AS Pro2

FROM alumno, trimestre1,trimestre2, asignatura
WHERE trimestre1.Alumno_codigoAlumno='$codigo'
And trimestre2.Alumno_codigoAlumno='$codigo'
AND trimestre1.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
AND trimestre2.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
GROUP BY asignatura.Nombre
ORDER BY asignatura.Nombre";
}

if ($CodigoPeriodo==3){
//Notas
$consulta = "SELECT asignatura.Nombre AS Asignatura,

trimestre1.A1 As A1, trimestre1.A2 As A2, trimestre1.ET As ET,
(trimestre1.A1 + trimestre1.A2 + trimestre1.ET ) AS Suma,
ROUND( (( (trimestre1.A1*0.35) + (trimestre1.A2*0.35) + (trimestre1.ET*0.30) )), 2 ) AS Pro1,

trimestre2.A1 As A11, trimestre2.A2 As A22, trimestre2.ET As ETT,
(trimestre2.A1 + trimestre2.A2 + trimestre2.ET) AS Suma,
ROUND( (( (trimestre2.A1*0.35) + (trimestre2.A2*0.35) + (trimestre2.ET*0.30) )), 2) AS Pro2,

trimestre3.A1 As A111, trimestre3.A2 As A222, trimestre3.ET As ETTT,
(trimestre3.A1 + trimestre3.A2 + trimestre3.ET  ) AS Suma,
ROUND( (( (trimestre3.A1*0.35) + (trimestre3.A2*0.35) + (trimestre3.ET*0.30) )), 2  ) AS Pro3,

ROUND( ( (  (( trimestre1.A1 + trimestre1.A2 + trimestre1.ET ) /3 ) + (( trimestre2.A1 + trimestre2.A2 + trimestre2.ET ) /3 ) + ((trimestre3.A1 + trimestre3.A2 + trimestre3.ET ) /3)  )/3 ),2) AS Pro_Final

FROM alumno, trimestre1, trimestre2, trimestre3, asignatura
WHERE trimestre1.Alumno_codigoAlumno='$codigo'
AND trimestre2.Alumno_codigoAlumno='$codigo'
AND trimestre3.Alumno_codigoAlumno='$codigo'
AND trimestre1.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
AND trimestre2.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
AND trimestre3.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
GROUP BY asignatura.Nombre
ORDER BY asignatura.Nombre";
}
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

      function  combobox_evaluacion(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT CodigoGrado,Nombre FROM actividad";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }
}
?>
</body>
</html>