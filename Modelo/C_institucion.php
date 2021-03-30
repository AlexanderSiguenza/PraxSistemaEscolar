<html>
<head>
<title>Institucion</title>
</head>
<body>

<?
class institucion{

  function agregar_institucion($_Nombre,$_Director,$_Telefono,$_Direccion,$_Depto,$_Municipio,$_Estado,$_Ano){
   require_once('../Config/c_conexion.php');
   $link=Conectarse();

  $consulta= "INSERT into institucion (NombreInstituto,NombreDirector,Telefono,Direccion,Departamento_codigoDepto,Municipio_codigoMunicipio,Estado,anho) values ('$_Nombre','$_Director','$_Telefono','$_Direccion','$_Depto','$_Municipio','$_Estado','$_Ano')";
  $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
  return $result;

  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados Docente";
       exit();
     }
     mysql_close($link);  
   }

  function eliminar_institucion($_Nombres){
      require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM institucion WHERE Nombres='$_Nombres'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
    }

    function modificar_institucion ($_Codigo,$_Nombre,$_Director,$_Telefono,$_Direccion,$_Depto,$_Municipio,$_Estado,$_Ano){
     require_once('../Config/c_conexion.php');
    $link= Conectarse();
    $consulta="Update institucion Set  NombreInstituto='$_Nombre',NombreDirector='$_Director',Telefono='$_Telefono',Direccion='$_Direccion',Departamento_codigoDepto='$_Depto',Municipio_codigoMunicipio='$_Municipio',Estado='$_Estado',anho='$_Ano' WHERE CodigoInstituto ='$_Codigo'";

     if(!mysql_query($consulta,$link))
    {
      echo "Los datos no pudieron ser modificados";
      exit();
    }
    // echo "Datos modificados correctamente";
    }

    function buscar_institucion($Codigo){
         require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM institucion where CodigoInstituto ='$Codigo' LIMIT 1 ";
        $result= mysql_query($consulta,$link);
        return $result;
    }

     function  mostrar_institucion(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM institucion";
        $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
        mysql_close($conexion);
     }

      function  combobox_institucion(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT CodigoDocente,Nombres,Apellido1,Apellido2,Apellido3 FROM institucion";
        $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
        mysql_close($conexion);
     }


}  // fin de la clase
?>
</body>

</html>