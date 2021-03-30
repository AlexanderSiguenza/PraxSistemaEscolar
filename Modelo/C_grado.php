<html>
<head>
<title>Usuario</title>
</head>
<body>

<?

class grado{

function agregar_grado($_Nombre,$_codigoNivel){
  require_once('../Config/c_conexion.php');
  $link=Conectarse();

  $consulta= "SELECT * FROM  grado where Nombre='$_Nombre' LIMIT 1 ";
  $result= mysql_query($consulta,$link);

    $nfilas = mysql_num_rows ($result);
      if ($nfilas > 0){
         // echo ("Ya Existe Un Registro: $Nombre");
          $result=3;
          return $result;
      }else
            $consulta= "INSERT into grado (Nombre,Nivel_codigoNivel) values ('$_Nombre','$_codigoNivel')";
     if(!mysql_query($consulta,$link)) {
     //echo "Los datos no pudieron ser modificados";
     exit();
    }$result=1;
   // echo "Datos modificados correctamente";
     mysql_close($link);
     return $result;
  }


function eliminar_grado($_CodigoGrado){
      require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM grado WHERE CodigoGrado='$_CodigoGrado'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pueden ser eliminados hay dependencia";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
    }

function modificar_grado($_CodigoGrado,$_Nombre){
    require_once('../Config/c_conexion.php');
    $link= Conectarse();

    $consulta= "SELECT * FROM  grado where Nombre='$_Nombre' LIMIT 1 ";
    $result= mysql_query($consulta,$link);

    $nfilas = mysql_num_rows ($result);
      if ($nfilas > 0){
         // echo ("Ya Existe Un Registro: $Nombre");
          $result=3;
          return $result;
      }else
            $consulta="Update grado Set Nombre='$_Nombre' WHERE CodigoGrado='$_CodigoGrado'";
    if(!mysql_query($consulta,$link)) {
     //echo "Los datos no pudieron ser modificados";
     exit();
    }$result=1;
   // echo "Datos modificados correctamente";
     return $result;
  }

function buscar_grado($Cod_seccion){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM seccion where CodigoSeccion='$Cod_seccion' LIMIT 1 ";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

function  mostrar_grado(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT grado.CodigoGrado,grado.Nombre,grado.Nivel_codigoNivel As codigoNivel,nivel.Nombre As usNombre FROM grado,nivel WHERE grado.Nivel_codigoNivel = nivel.CodigoNivel";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

function  combobox_grado(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT CodigoGrado,Nombre FROM grado";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

function  combobox_grado_seccion(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT grado.Nombre,seccion.CodigoSeccion As uCodigo,seccion.Nombre As uNombre FROM grado,seccion WHERE  grado.CodigoGrado = seccion.Grado_codigo ";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

function busca_grado($codigo){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM grado where CodigoGrado='$codigo' LIMIT 1 ";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
     }

}

?>
</body>

</html>