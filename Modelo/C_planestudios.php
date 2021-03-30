<html>
<head>
<title>Usuario</title>
</head>
<body>

<?

class planestudios{

function agregar_planestudios($_Nombre,$_ano,$_codigoGrado){
  require_once('../Config/c_conexion.php');
  $link=Conectarse();

  $consulta= "SELECT * FROM  planestudio where Nombre='$_Nombre' or Grado_CodigoGrado='$_codigoGrado' LIMIT 1 ";
  $result= mysql_query($consulta,$link);

    $nfilas = mysql_num_rows ($result);
      if ($nfilas > 0){
         // echo ("Ya Existe Un Registro: $Nombre");
         $result=3;
         return $result;
      }else
         $consulta= "INSERT into planestudio (Nombre,ano,Grado_CodigoGrado) values ('$_Nombre','$_ano','$_codigoGrado')";
         $result=1;
     if(!mysql_query($consulta,$link)) {
         echo "Los datos no pudieron ser modificados";
     exit(); 
    }
     mysql_close($link);
     return $result;
}


function eliminar_planestudios($_CodigoPlan){
      require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM planestudio WHERE CodigoPlan='$_CodigoPlan'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
}

function modificar_planestudios ($_CodigoPlan,$_Nombre,$_ano,$_NombreGrado){
    require_once('../Config/c_conexion.php');
    $link= Conectarse();

   $consulta= "SELECT * FROM  planestudio where Nombre='$_Nombre' or Grado_CodigoGrado='$_codigoGrado' LIMIT 1 ";
    $result= mysql_query($consulta,$link);

    $nfilas = mysql_num_rows ($result);
      if ($nfilas > 0){
         // echo ("Ya Existe Un Registro: $Nombre");
          $result=3;
          return $result;
      }else
        $consulta="Update planestudio Set Nombre='$_Nombre',ano='$_ano',Grado_CodigoGrado='$_NombreGrado' WHERE CodigoPlan='$_CodigoPlan'";
    if(!mysql_query($consulta,$link)) {
        echo "Los datos no pudieron ser modificados";
     exit();
    }$result=1;
   // echo "Datos modificados correctamente";
     mysql_close($link);
     return $result;
}

function buscar_planestudios($_CodigoPlan){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM planestudio where CodigoPlan='$_CodigoPlan' LIMIT 1 ";
        $result= mysql_query($consulta,$link);
        return $result;
}

function  mostrar_planestudios(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT planestudio.CodigoPlan, planestudio.Nombre, planestudio.ano, Grado.Nombre As uNombre FROM planestudio,grado WHERE planestudio.Grado_CodigoGrado = grado.CodigoGrado";
        $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
        mysql_close($conexion);
}

      function  contar_planestudios(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT count(*) FROM planestudio";
        $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
        return $result;
        mysql_close($conexion);
     }


function  combobox_planestudios(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT planestudio.CodigoPlan,planestudio.Nombre,grado.Nombre As uNombre FROM planestudio,grado where planestudio.Grado_CodigoGrado= grado.CodigoGrado";
        $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
        mysql_close($conexion);
}

}  // fin de la clase

?>
</body>

</html>