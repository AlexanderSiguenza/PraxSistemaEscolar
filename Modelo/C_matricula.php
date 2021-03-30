<html>
<head>
<title>Matricula</title>
</head>
<body>

<?
class matricula{

  function agregar_matricula($_Alumno,$_Seccion,$_Anho){
  require_once('../Config/c_conexion.php');
  $link=Conectarse();

  $consulta= "SELECT * FROM matricula where Alumno_codigoAlumno='$_Alumno' and Institucion_anho='$_Anho'";
  $result= mysql_query($consulta,$link);

  $nfilas = mysql_num_rows ($result);
      if ($nfilas > 0){
          //echo ("Ya existe una Matricula para este Alumno:");
          $result=3;
          return $result;
      }else
          $Estado="Activo";
         $consulta= "INSERT into matricula (Alumno_codigoAlumno,Seccion_codigoSeccion,Institucion_anho,estadoFinal) values ('$_Alumno','$_Seccion','$_Anho','$Estado')";
  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     } $result=1;
       mysql_close($link);
       return $result;
       echo "Datos guardados correctamente";
  }

  function eliminar_matricula($_CodigoGrado){
      require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM matricula WHERE CodigoGrado='$_CodigoGrado'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
    }

    function modificar_matricula($_CodigoGrado,$_Nombre){
    require_once('../Config/c_conexion.php');
    $link= Conectarse();
    $consulta="Update matricula Set CodigoGrado='$_CodigoGrado',Nombre='$_Nombre' WHERE CodigoGrado='$_CodigoGrado'";

     if(!mysql_query($consulta,$link))
    {
      echo "Los datos no pudieron ser modificados";
      exit();
    }
     echo "Datos modificados correctamente";
    }

    function buscar_matricula($_CodigoGrado){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM matricula where CodigoGrado='$_CodigoGrado' LIMIT 1 ";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

     function  mostrar_matricula(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT alumno.Nombres As uNombres,alumno.Apellido1 As uApellido1,alumno.Apellido2 As uApellido2,seccion.Nombre As uSeccion,matricula.Institucion_anho As uAnho,matricula.estadoFinal As uEstado FROM  matricula,alumno,seccion WHERE matricula.Alumno_codigoAlumno = alumno.CodigoAlumno AND matricula.Seccion_codigoSeccion = seccion.CodigoSeccion";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }
}

?>
</body>

</html>