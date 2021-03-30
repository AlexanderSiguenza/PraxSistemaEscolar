<html>
<head>
<title>Actividad</title>
</head>
<body>

<?
class actividad{
  function agregar_actividad($_Nombre,$_Descripcion,$_Porcentaje,$_Periodo){
  require_once('../Config/c_conexion.php');
  $link=Conectarse();

   $consulta= "SELECT * FROM  actividad where Nombre='$_Nombre' And Periodo_codigoPeriodo='$_Periodo'";
   $result= mysql_query($consulta,$link);

    $nfilas = mysql_num_rows ($result);
      if ($nfilas > 0){
          $result=3;    // echo ("Ya Existe Un Registro: $Nombre");
          return $result;
      }else
         $consulta= "INSERT into actividad (Porcentaje,Nombre,Descripcion,Periodo_codigoPeriodo) values ('$_Porcentaje','$_Nombre','$_Descripcion','$_Periodo')";
   if(!mysql_query($consulta,$link)) {
     //echo "Los datos no pudieron ser modificados";
     exit();
    }$result=1;  // echo "Datos modificados correctamente";
     return $result;
     mysql_close($link);
  }


  function eliminar_actividad($_CodigoActividad){
      require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM actividad WHERE CodigoActividad='$_CodigoActividad'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados, hay Dependencias";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
    }


    function modificar_actividad($_CodigoActividad,$_Nombre,$_Descripcion,$_porcentaje,$_Periodo){
    require_once('../Config/c_conexion.php');
    $link= Conectarse();

    $consulta= "SELECT * FROM  actividad where Nombre='$_Nombre' And Periodo_codigoPeriodo='$_Periodo'";
    $result= mysql_query($consulta,$link);

    $nfilas = mysql_num_rows ($result);
      if ($nfilas > 0){
      //echo ("Ya Existe Un Registro: $Nombre");
       $result=3;
       return $result;
      }else
          $consulta="Update actividad Set Porcentaje='$_porcentaje', Nombre='$_Nombre', Descripcion='$_Descripcion', Periodo_codigoPeriodo='$_Periodo' WHERE CodigoActividad='$_CodigoActividad'";
    if((!mysql_query($consulta,$link))) {
     //echo "Los datos no pudieron ser modificados";
     exit();
    }  // echo "Datos modificados correctamente";
     $result=1;
     mysql_close($link);
     return $result;
    }


    function buscar_actividad($_CodigoActividad){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM actividad where CodigoActividad='$_CodigoActividad'";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

     function  mostrar_actividad(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT actividad.CodigoActividad,actividad.Porcentaje,actividad.Nombre,actividad.Descripcion,periodo.CodigoPeriodo,periodo.Descripcion As uDescripcion,periodo.estado,periodo.Nivel_codigoNivel As uCodigoNivel,periodo.Nombre As NomPeriodo FROM actividad,periodo WHERE actividad.Periodo_codigoPeriodo = periodo.CodigoPeriodo"  ;
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

      function  combobox_actividad(){
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