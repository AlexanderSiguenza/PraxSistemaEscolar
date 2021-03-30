<html>
<head>
<title>Usuario</title>
</head>
<body>

<?
class seccion{

function agregar_seccion($_Nombre,$_codigogrado,$_codigodocente){
  require_once('../Config/c_conexion.php');
  $link=Conectarse();

  $consulta= "SELECT * FROM  seccion where Nombre='$_Nombre' OR Docente_codigoDocente='$_codigodocente'";
   $result= mysql_query($consulta,$link);

    $nfilas = mysql_num_rows ($result);
      if ($nfilas > 0){
          $result=3;    // echo ("Ya Existe Un Registro: $Nombre");
          return $result;
      }else
         $consulta= "INSERT into seccion (Nombre,Grado_codigo,Docente_codigoDocente) values ('$_Nombre','$_codigogrado','$_codigodocente')";
         //$result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
         //return $result;
    if(!mysql_query($consulta,$link)) {
     //echo "Los datos no pudieron ser modificados";
     exit();
    }$result=1;  // echo "Datos modificados correctamente";
     return $result;
     mysql_close($link);
  }

function eliminar_seccion($_Codigo){
      require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM seccion WHERE CodigoSeccion='$_Codigo'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados hay dependencias";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
    }


function modificar_seccion($_Codigo,$_Nombre,$_Grado,$_Docente){
    require_once('../Config/c_conexion.php');
    $link= Conectarse();

   $consulta= "SELECT * FROM  seccion where  Nombre='$_Nombre' OR Docente_codigoDocente='$_Docente' LIMIT 1 ";
   $result= mysql_query($consulta,$link);

    $nfilas = mysql_num_rows ($result);
      if ($nfilas > 0){
          $result=3;    // echo ("Ya Existe Un Registro: $Nombre");
          return $result;
      }else
        $consulta="Update seccion Set Nombre='$_Nombre',Grado_codigo='$_Grado', Docente_codigoDocente='$_Docente' WHERE CodigoSeccion='$_Codigo'";
    if(!mysql_query($consulta,$link)) {
     //echo "Los datos no pudieron ser modificados";
     exit();
    }$result=1;  // echo "Datos modificados correctamente";
     return $result;
     mysql_close($link);
}

function buscar_seccionGrado($_CodigoGrado){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM seccion where Grado_codigo='$_CodigoGrado'";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

function buscar_seccion($_CodigoSeccion){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM seccion where CodigoSeccion='$_CodigoSeccion' LIMIT 1 ";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

function  mostrar_seccion(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT seccion.CodigoSeccion,seccion.Nombre,grado.Nombre As usNombre,administrativo.Nombres As uNombre,administrativo.Apellido1 As uApellido1,administrativo.Apellido2 As uApellido2 FROM seccion,administrativo,grado WHERE seccion.Docente_codigoDocente = administrativo.CodigoAdministrativo and seccion.Grado_codigo = grado.CodigoGrado ORDER BY Nombre";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

function  combobox_seccion(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT CodigoSeccion,Nombre FROM seccion";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

}  // fin de la clase

?>
</body>

</html>