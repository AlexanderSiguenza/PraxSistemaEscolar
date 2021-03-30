<?
   class nivel{

  function agregar_nivel($_Nombre){
  require_once('../Config/c_conexion.php');
  $link=Conectarse();

  $consulta= "SELECT * FROM nivel where Nombre='$_Nombre' LIMIT 1 ";
  $result= mysql_query($consulta,$link);

  $nfilas = mysql_num_rows ($result);
      if ($nfilas > 0){
        // echo ("Ya Existe Un Registro: $Nombre");
          $result=3;
          return $result;
      }else
          $consulta= "INSERT into nivel (Nombre) values ('$_Nombre')";
  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     } $result=1;
       mysql_close($link);
       return $result;
       echo "Datos guardados correctamente";
  }

  function eliminar_nivel($_Codigo){
      require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM nivel WHERE CodigoNivel='$_Codigo'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados";
               exit();
              }
          mysql_close($link);
       echo "Datos eliminados correctamente";
    }

    function modificar_nivel($Codnivel,$Nombre){
    require_once('../Config/c_conexion.php');
    $link= Conectarse();

    $consulta= "SELECT * FROM nivel where Nombre='$Nombre' LIMIT 1 ";
    $result= mysql_query($consulta,$link);

    $nfilas = mysql_num_rows ($result);
      if ($nfilas > 0){
         // echo ("Ya Existe Un Registro: $Nombre");
          $result=3;
          return $result;
      }else
            $consulta="Update nivel Set Nombre='$Nombre' where CodigoNivel='$Codnivel'";
    if(!mysql_query($consulta,$link)) {
     echo "Los datos no pudieron ser modificados";
     exit();
    }$result=1;
    // echo "Datos modificados correctamente";
     return $result;
}

    function buscar_nivel($Codnivel){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM nivel where CodigoNivel='$Codnivel' LIMIT 1 ";
        $result= mysql_query($consulta,$link);
        return $result;
    }

     function buscar_Nombre($Nombre){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM nivel where Nombre='$Nombre' LIMIT 1 ";
        $result= mysql_query($consulta,$link);
        return $result;
    }

    function  mostrar_nivel(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM nivel";
        $result= mysql_query($consulta,$link);
        return $result;  
        mysql_close($conexion);
     }

        }  // fin de la clase
?>

