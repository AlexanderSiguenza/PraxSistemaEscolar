<?
class alumno{

  function agregar_alumno($_Nombres,$_Apellido1,$_Apellido2,$_FechaNacimiento,$_Direccion,$_Depto,$_Municipio,$_Telefono,$_Sexo,$_Discapacidad,$_ProblemasdeSalud,$_Usuario,$_Contrasena,$_Responsable){
   require_once('../Config/c_conexion.php');
   $link=Conectarse();

   $_Privelegio="Alumno";
   $consulta2= "INSERT into usuario (nombreUsuario,Contrasenia,Privilegio) values ('$_Usuario','$_Contrasena','$_Privelegio')";
   $result= mysql_query($consulta2,$link) or die("Problemas en la instrucción select:".mysql_error());

  if (!$result){
       echo "Los datos no pudieron ser guardados Usuario";
       return $result;
       exit();
     }

  $_Estado="Activo";
  $consulta= "INSERT into alumno (Nombres,Apellido1,Apellido2,FechaNacimiento,Direccion,Departamento_codigoDepto,Municipio_codigoMunicipio,Telefono,Sexo,Discapacidad,ProblemasdeSalud,Estado,Usuario_nombreUsuario,CodigoResponsable) values ('$_Nombres','$_Apellido1','$_Apellido2','$_FechaNacimiento','$_Direccion','$_Depto','$_Municipio','$_Telefono','$_Sexo','$_Discapacidad','$_ProblemasdeSalud','$_Estado','$_Usuario','$_Responsable')";
  $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());

  if (!$result){
       echo "Los datos no pudieron ser guardados Usuario";
       return $result;
       exit();
     }

     mysql_close($link);
   }

  function eliminar_alumno($codigo){
      require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM alumno WHERE CodigoAlumno='$codigo'" ;
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
    }

    function modificar_alumno ($_CodigoAlumno,$_Nombres,$_Apellido1,$_Apellido2,$_FechaNacimiento,$_Direccion,$_departamento,$_municipio,$_Telefono,$_Sexo,$_Discapacidad,$_ProblemasdeSalud){
     require_once('../Config/c_conexion.php');
    $link= Conectarse();
    $consulta="Update alumno Set Nombres='$_Nombres',Apellido1='$_Apellido1',Apellido2='$_Apellido2',FechaNacimiento='$_FechaNacimiento',Direccion='$_Direccion',Telefono='$_Telefono',Sexo='$_Sexo',Discapacidad='$_Discapacidad',ProblemasdeSalud='$_ProblemasdeSalud' WHERE CodigoAlumno='$_CodigoAlumno'";

     if(!mysql_query($consulta,$link))
    {
      //echo "Los datos no pudieron ser modificados";
      $result=3;
      exit();
    }
     //echo "Datos modificados correctamente";
     $result=1;
     return $result;
    }

    function buscar_alumno($_Nombres){
         require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT CodigoAlumno,Nombres,Apellido1,Apellido2 FROM alumno WHERE Nombres='$_Nombres'";
        $result= mysql_query($consulta,$link);
        return $result;
    }

     function  mostrar_alumno($codigo){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();

        $con= "SELECT * FROM institucion";
        $consulta= mysql_query($con,$link) or die("Problemas en la instrucción select:".mysql_error());
       while($registro=mysql_fetch_array($consulta)){
         if ($registro["Estado"]=="Activo"){
              $ano=$registro["Anho"];
          } 
     }
        $consulta= "SELECT CodigoAlumno,Nombres,Apellido1,Apellido2,FechaNacimiento,
        Direccion,Departamento_codigoDepto,Municipio_codigoMunicipio,
        Telefono,Sexo,Discapacidad,ProblemasdeSalud,Estado,
        Usuario_nombreUsuario
        FROM alumno,matricula
        where matricula.Seccion_codigoSeccion='$codigo' and CodigoAlumno = matricula.Alumno_codigoAlumno and Institucion_anho='$ano'";
        $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
        mysql_close($conexion);
     }

      function matricula_alumno($_Seccion,$_Asignatura,$_Periodo,$_Actividad){
         require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM alumno,matricula WHERE alumno.CodigoAlumno= matricula.Alumno_codigoAlumno AND matricula.Seccion_codigoSeccion = $_Seccion  ORDER BY Apellido1,Apellido2" ;
        $result= mysql_query($consulta,$link);
        return $result;
    }

    function Mostrar_alumno2($codigo){
         require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM alumno WHERE CodigoAlumno='$codigo'";
        $result= mysql_query($consulta,$link);
        return $result;
    }
}
?>

