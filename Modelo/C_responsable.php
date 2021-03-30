<html>
<head>
<title>Docentes</title>
</head>
<body>
<?
class responsable{

  function agregar_responsable($_Nombres,$_Apellido1,$_Apellido2,$_Direccion,$_Depto,$_Municipio,$_TelefonoC,$_TelefonoT,$_Sexo,$_Dui,$_Parentesco){
   require_once('../Config/c_conexion.php');
   $link=Conectarse();

  $consulta= "INSERT into responsablealumno (Nombres,Apellido1,Apellido2,Sexo,Dui,Direccion,Departamento_codigoDepto,Municipio_codigoMunicipio,telefonoCasa,telefonoTrabajo,Parentesco) values ('$_Nombres','$_Apellido1','$_Apellido2','$_Sexo','$_Dui','$_Direccion','$_Depto','$_Municipio','$_TelefonoC','$_TelefonoT','$_Parentesco')";
  $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
  return $result;

  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     }
     mysql_close($link);  
   }

  function eliminar_responsable($Codigo){
      require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM responsablealumno WHERE CodigoRespon='$Codigo'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
    }

    function modificar_responsable ($_Codigo,$_Nombres,$_Apellido1,$_Apellido2,$_Direccion,$_Depto,$_Municipio,$_TelefonoC,$_TelefonoT,$_Sexo,$_Dui,$_Parentesco){
     require_once('../Config/c_conexion.php');
    $link= Conectarse();
    $consulta="Update responsablealumno Set Nombres='$_Nombres',Apellido1='$_Apellido1',Apellido2='$_Apellido2',Direccion='$_Direccion',Departamento_codigoDepto='$_Depto',Municipio_codigoMunicipio='$_Municipio',telefonoCasa='$_TelefonoC',telefonoTrabajo='$_TelefonoT',Sexo='$_Sexo',Dui='$_Dui',Parentesco='$_Parentesco' WHERE CodigoRespon='$_Codigo'";

     if(!mysql_query($consulta,$link))
    {
      echo "Los datos no pudieron ser modificados";
      exit();
    }
     echo "Datos modificados correctamente 6565656";
    }

    function buscar_responsable($Codigo){
         require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM responsablealumno where CodigoRespon='$Codigo'";
        $result= mysql_query($consulta,$link);
        return $result;
    }

      function buscar_responsable1($Nombre){
         require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM responsablealumno where Nombres='$Nombre'";
        $result= mysql_query($consulta,$link);
        return $result;
    }

     function  mostrar_responsable($codigo){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT responsablealumno.CodigoRespon,responsablealumno.Nombres, responsablealumno.Apellido1, responsablealumno.Apellido2,
                    responsablealumno.Parentesco,responsablealumno.telefonoCasa,responsablealumno.telefonoTrabajo,responsablealumno.Direccion,alumno.Nombres AS uNombre, alumno.Apellido1 AS uApellido1,
                    alumno.Apellido2 AS uApellido2
                    FROM responsablealumno, alumno, matricula
                    WHERE matricula.Seccion_codigoSeccion = '$codigo'
                    AND responsablealumno.CodigoRespon = alumno.CodigoResponsable
                    AND alumno.CodigoAlumno = matricula.Alumno_codigoAlumno";
       $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
        mysql_close($conexion);
     }

      function  combobox_responsable(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT CodigoDocente,Nombres,Apellido1,Apellido2,Apellido3 FROM responsablealumno";
        $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
        mysql_close($conexion);
     }
}
?>
</body>
</html>



