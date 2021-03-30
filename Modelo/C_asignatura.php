<html>
<head>
<title>Asignatura</title>
</head>

<body>

<?

class asignatura{

  function agregar_asignatura($_Nombre,$_PlanEstudio){
   require_once('../Config/c_conexion.php');
   $link=Conectarse();

  $consulta= "SELECT * FROM  asignatura where Nombre='$_Nombre' and PlanEstudio_codigoPlan='$_PlanEstudio'";
  $result= mysql_query($consulta,$link);

    $nfilas = mysql_num_rows ($result);
      if ($nfilas > 0){
          $result=3;    // echo ("Ya Existe Un Registro: $Nombre");
          return $result;
      }else
         $consulta= "INSERT into asignatura (Nombre,PlanEstudio_codigoPlan) values ('$_Nombre','$_PlanEstudio')"; //$result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
      if(!mysql_query($consulta,$link)) {
          echo "Los datos no pudieron ser modificados";
     exit();
    }$result=1;  // echo "Datos modificados correctamente";
     return $result;
     mysql_close($link);
  }


  function eliminar_asignatura($_Codigo){
       require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM asignatura WHERE CodigoAsignatura='$_Codigo'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
    }


  function modificar_asignatura($_Codigo,$_Nombre,$_PlanEstudio){
    require_once('../Config/c_conexion.php');
    $link= Conectarse();

  $consulta= "SELECT * FROM  asignatura where Nombre='$_Nombre' and PlanEstudio_codigoPlan='$_PlanEstudio'";
  $result= mysql_query($consulta,$link);

    $nfilas = mysql_num_rows ($result);
      if ($nfilas > 0){
          $result=3;    // echo ("Ya Existe Un Registro: $Nombre");
      }else
         $consulta="Update asignatura Set Nombre='$_Nombre',PlanEstudio_codigoPlan='$_PlanEstudio' WHERE CodigoAsignatura='$_Codigo'";
         $result= mysql_query($consulta,$link);
      if(!mysql_query($consulta,$link)) {
          echo "Los datos no pudieron ser modificados";
     exit();
    }$resulta=1;  // echo "Datos modificados correctamente";
     return $resulta;
     mysql_close($link);
  }


    function buscar_asignatura($codigo){
         require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT asignatura.CodigoAsignatura, asignatura.Nombre FROM asignatura, planestudio
        WHERE asignatura.PlanEstudio_codigoPlan= planestudio.CodigoPlan  And planestudio.Grado_CodigoGrado ='$codigo'";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;
    }

    function buscar_asignatura22($Cod_asignatura){
         require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM asignatura WHERE CodigoAsignatura='$Cod_asignatura' ";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;
    }

     function mostrar_asignatura(){
         require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT asignatura.CodigoAsignatura As uCodigo,asignatura.Nombre,planestudio.Nombre As uNombre FROM asignatura,planestudio WHERE asignatura.PlanEstudio_codigoPlan = planestudio.CodigoPlan";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;
    }


     function combobox_asignatura(){
         require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT CodigoAsignatura,Nombre FROM asignatura";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;
    }
   }
?>

