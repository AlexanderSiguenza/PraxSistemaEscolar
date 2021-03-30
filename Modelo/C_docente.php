<html>
<head>
<title>Docentes</title>
</head>
<body>

<?
class docente{

  function agregar_docente($_Nombres,$_Apellido1,$_Apellido2,$_Apellido3,$_FechaNacimiento,$_Direccion,$_Depto,$_Municipio,$_Telefono,$_Sexo,$_Dui,$_nivelacademico,$_Usuario,$_Contrasena){
   require_once('../Config/c_conexion.php');
   $link=Conectarse();

   $_Privelegio="Docente";
   $consulta2= "INSERT into usuario (nombreUsuario,Contrasenia,Privilegio) values ('$_Usuario','$_Contrasena','$_Privelegio')";
  if (!mysql_query($consulta2,$link)){
       echo "Los datos no pudieron ser guardados Usuario";
       exit();
     }

  $consulta= "INSERT into docente (Nombres,Apellido1,Apellido2,Apellido3,FechaNacimiento,Direccion,Departamento_codigoDepto,Municipio_codigoMunicipio,Telefono,Sexo,Dui,NivelAcademico,Usuario_nombreUsuario) values ('$_Nombres','$_Apellido1','$_Apellido2','$_Apellido3','$_FechaNacimiento','$_Direccion','$_Depto','$_Municipio','$_Telefono','$_Sexo','$_Dui','$_nivelacademico','$_Usuario')";
  $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
  return $result;

  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados Docente";
       exit();
     }
     mysql_close($link);  
   }

  function eliminar_docente($_Nombres){
      require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM alumno WHERE Nombres='$_Nombres'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
    }

    function modificar_docente ($_CodigoAlumno,$_Nombres,$_Apellido1,$_Apellido2,$_FechaNacimiento,$_Direccion,$_Telefono,$_Sexo,$_Discapacidad,$_ProblemasdeSalud,$_RepiteGrado,$_Estado){
     require_once('../Config/c_conexion.php');
    $link= Conectarse();
    $consulta="Update alumno Set CodigoAlumno='$_CodigoAlumno',Nombres='$_Nombres',Apellido1='$_Apellido1',Apellido2='$_Apellido2',FechaNacimiento='$_FechaNacimiento',Direccion='$_Direccion',Telefono='$_Telefono',Sexo='$_Sexo',Discapacidad='$_Discapacidad',ProblemasdeSalud='$_ProblemasdeSalud',RepiteGrado='$_RepiteGrado',Estado='$_Estado' WHERE Nombres='$_Nombres'";

     if(!mysql_query($consulta,$link))
    {
      echo "Los datos no pudieron ser modificados";
      exit();
    }
     echo "Datos modificados correctamente";
    }

    function buscar_docente($_Nombres){
         require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM alumno where Nombres='$_Nombres' LIMIT 1 ";
        $result= mysql_query($consulta,$link);
        return $result;
    }

     function  mostrar_docente(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT Nombres,Apellido1,Apellido2,Apellido3,FechaNacimiento,Direccion,Departamento_codigoDepto,Municipio_codigoMunicipio,Telefono,Sexo,Dui,NivelAcademico,Usuario_nombreUsuario FROM docente";
        $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
        mysql_close($conexion);
     }

      function  combobox_docente(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT CodigoDocente,Nombres,Apellido1,Apellido2,Apellido3 FROM docente";
        $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
        mysql_close($conexion);
     }


}  // fin de la clase
?>
</body>

</html>