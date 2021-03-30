<html>
<head>
<title>Docentes</title>
</head>
<body>

<?php
class administrativo{

  function agregar_administrativo($_Nombres,$_Apellido1,$_Apellido2,$_FechaNacimiento,$_Direccion,$_Depto,$_Municipio,$_Telefono,$_Sexo,$_Dui,$_Cargo,$_Usuario,$_Contrasena){
   require_once('../Config/c_conexion.php');
   $link=Conectarse();

   if ($_Cargo=="Administrativo"){
       $_Privelegio="Administrativo";
      }else
       $_Privelegio="Docente";

    $consulta2= "INSERT into usuario (nombreUsuario,Contrasenia,Privilegio) values ('$_Usuario','$_Contrasena','$_Privelegio')";
    $result= mysql_query($consulta2,$link) or die("Problemas en la instrucción select:".mysql_error());

    if (!$result){
       echo "Los datos no pudieron ser guardados Usuario";
       return $result;
       exit();
     }

  $consulta= "INSERT into administrativo (Nombres,Apellido1,Apellido2,FechaNacimiento,Direccion,Departamento_codigoDepto,Municipio_codigoMunicipio,Telefono,Sexo,Dui,Cargo,Usuario_nombreUsuario) values ('$_Nombres','$_Apellido1','$_Apellido2','$_FechaNacimiento','$_Direccion','$_Depto','$_Municipio','$_Telefono','$_Sexo','$_Dui','$_Cargo','$_Usuario')";
  $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());

  if (!$result)
     {
       echo "Los datos no pudieron ser guardados";
       return $result;
       exit();
     }
     mysql_close($link);  
   }

  function eliminar_administrativo($_Nombres){
      require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM administrativo WHERE Nombres='$_Nombres'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
    }

    function modificar_administrativo ($_CodigoAdmin,$_Nombres,$_Apellido1,$_Apellido2,$_FechaNacimiento,$_Direccion,$_Depto,$_Municipio,$_Telefono,$_Sexo,$_Dui,$_Cargo,$_Usuario,$_Contrasena){
     require_once('../Config/c_conexion.php');
    $link= Conectarse();
    $consulta="Update administrativo Set Nombres='$_Nombres',Apellido1='$_Apellido1',Apellido2='$_Apellido2',FechaNacimiento='$_FechaNacimiento',Direccion='$_Direccion',Departamento_codigoDepto='$_Depto',Municipio_codigoMunicipio='$_Municipio',Telefono='$_Telefono',Sexo='$_Sexo',Dui='$_Dui',Cargo='$_Cargo',Usuario_nombreUsuario='$_Usuario' WHERE CodigoAdministrativo='$_CodigoAdmin'";

     if(!mysql_query($consulta,$link))
    {
      echo "Los datos no pudieron ser modificados";
      exit();
    }
     //echo "Datos modificados correctamente";
    }

    function buscar_administrativo($_Nombres){
         require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM administrativo where Nombres='$_Nombres' LIMIT 1 ";
        $result= mysql_query($consulta,$link);
        return $result;
    }

     function  mostrar_administrativo(){  // para la colsulta  Mostrar
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM administrativo ORDER BY Cargo";
        $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
        mysql_close($conexion);
     }

       function  mostrar_administrativo2($codigo){  // para la modificacion
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM administrativo where CodigoAdministrativo='$codigo' ";
        $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
        mysql_close($conexion);
     }

      function  combobox_administrativo(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT CodigoDocente,Nombres,Apellido1,Apellido2,Apellido3 FROM administrativo";
        $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
        mysql_close($conexion);
     }

      function  combobox_docente(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $_Docente="Docente";
        $consulta= "SELECT * FROM administrativo where Cargo='$_Docente'";
        $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
        mysql_close($conexion);
     }

}  // fin de la clase
?>
</body>

</html>