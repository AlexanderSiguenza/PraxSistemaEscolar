<html>
<head>
<title>Asignatura</title>
</head>

<body>

<?

class carga{

  function agregar_carga($_Docente,$_Asignatura,$_Planestudios){
   require_once('../Config/c_conexion.php');
  $link=Conectarse();
  $consulta= "INSERT into cargaacademica (Docente_codigoDocente,Asignatura_codigoAsignatura,Planestudio_codigoPlan) values ('$_Docente','$_Asignatura','$_Planestudios')";
  $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
  return $result;



  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     }
     mysql_close($link);
  echo "Datos guardados correctamente";
  }


  function eliminar_carga($_CodigoGrado){
       require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM cargaacademica WHERE CodigoGrado='$_CodigoGrado'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
    }


    function modificar_carga($_CodigoGrado,$_Nombre){
     require_once('../Config/c_conexion.php');
    $link= Conectarse();
    $consulta="Update cargaacademica Set CodigoGrado='$_CodigoGrado',Nombre='$_Nombre' WHERE CodigoGrado='$_CodigoGrado'";

     if(!mysql_query($consulta,$link))
    {
      echo "Los datos no pudieron ser modificados";
      exit();
    }
     echo "Datos modificados correctamente";
    }


    function buscar_carga($_CodigoGrado){
         require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM cargaacademica where CodigoGrado='$_CodigoGrado' LIMIT 1 ";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;
    }

     function mostrar_carga(){
         require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT Docente_codigoDocente,Asignatura_codigoAsignatura,Planestudio_codigoPlan FROM cargaacademica";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;
    }



        }  // fin de la clase
?>
</body>

</html>