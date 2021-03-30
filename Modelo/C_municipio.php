<?
   class municipio{

  function agregar_nivel($_Nombre){
  require_once('../Config/c_conexion.php');
  $link=Conectarse();
  $consulta= "INSERT into nivel (Nombre) values ('$_Nombre')";
  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     }
     mysql_close($link);
  echo "Datos guardados correctamente";
  }

  function eliminar_municipio($_Nombre){
      require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM nivel WHERE Nombre='$_Nombre'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados";
               exit();
              }
          mysql_close($link);
       echo "Datos eliminados correctamente";
    }

    function modificar_municipio($_Nombre){
    require_once('../Config/c_conexion.php');
    $link= Conectarse();
    $consulta="Update nivel Set Nombre='$_Nombre' WHERE Nombre='$_Nombre'";

     if(!mysql_query($consulta,$link))
    {
      echo "Los datos no pudieron ser modificados";
      exit();
    }
     echo "Datos modificados correctamente";
    }

    function buscar_municipio($_Nombre){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM nivel where Nombre='$_Nombre' LIMIT 1 ";
        $result= mysql_query($consulta,$link);
        return $result;
    }

    function  mostrar_municipio(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT CodigoNivel,Nombre FROM nivel";
        $result= mysql_query($consulta,$link);
        return $result;  
        mysql_close($conexion);
     }


     function  combobox_municipio(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM municipio";
        $result= mysql_query($consulta,$link);
        return $result;  
        mysql_close($conexion);
     }

        }  // fin de la clase
?>

