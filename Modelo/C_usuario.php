<html>
<head>
<title>Usuario</title>
</head>

 CREATE TABLE `usuario` (
`CodigoUsuario` int(7) NOT NULL,
  `nombreUsuario` char(15) NOT NULL,
  `Contrasenia` varchar(20) NOT NULL,
  `Privilegio` char(20) NOT NULL,
  PRIMARY KEY  (`CodigoUsuario`)


<body>

<?
   class usuario{
        var $CodigoUsuario;
        var $nombreUsuario;
        var $Contrasenia;
        var $Privilegio;


  function agregar_usuario($_CodigoUsuario,$_nombreUsuario,$_Contrasenia,$_Privilegio){
  require_once("c_conexion.php");
  $link=Conectarse();
  $consulta= "INSERT into usuario (CodigoUsuario,nombreUsuario,Contrasenia,Privilegio) values ('$_CodigoUsuario','$_nombreUsuario','$_Contrasenia','$_Privilegio')";
  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     }
     mysql_close($link);
  echo "Datos guardados correctamente";
  }


  function eliminar_usuario($_nombreUsuario){
      require_once("c_conexion.php");
      $link= Conectarse();

      $consulta= "DELETE FROM usuario WHERE nombreUsuario='$_nombreUsuario'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
    }



    function modificar_usuario ($_CodigoUsuario,$_nombreUsuario,$_Contrasenia,$_Privilegio){
    require_once("c_conexion.php");
    $link= Conectarse();
    $consulta="Update usuario Set CodigoUsuario='$_CodigoUsuario',nombreUsuario='$_nombreUsuario',Contrasenia='$_Contrasenia',Privilegio='$_Privilegio' WHERE nombreUsuario='$_nombreUsuario'";

     if(!mysql_query($consulta,$link))
    {
      echo "Los datos no pudieron ser modificados";
      exit();
    }
     echo "Datos modificados correctamente";
    }


    function buscar_usuario($_nombreUsuario){
        require_once("c_conexion.php");
        $link=Conectarse();
        $consulta= "SELECT * FROM usuario where nombreUsuario='$_nombreUsuario' LIMIT 1 ";
        $result= mysql_query($consulta,$link);
        return $result;
    }
        }  // fin de la clase
?>
</body>

</html>