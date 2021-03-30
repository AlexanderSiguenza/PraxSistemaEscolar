<?
class periodo{
function agregar_periodo($_Nombre,$_descripcion,$_fechaini,$_fechafin,$_estado,$_anho){
  require_once('../Config/c_conexion.php');
  $link=Conectarse();
  $_codigoNivel=1;
  $consulta= "INSERT into periodo(Nombre,Descripcion,Nivel_codigoNivel,FechaInicio,FechaFin,estado,Institucion_anho) values ('$_Nombre','$_descripcion','$_codigoNivel','$_fechaini','$_fechafin','$_estado','$_anho')";
  $result= mysql_query($consulta,$link) or die("Problemas en la instrucción select:".mysql_error());
  return $result;

  if (!mysql_query($consulta,$link))
     {
       echo "Los datos no pudieron ser guardados";
       exit();
     }else{
     return $opc="1";
     mysql_close($link);
     }
  }
function eliminar_periodo($_Codigo){
      require_once('../Config/c_conexion.php');
      $link= Conectarse();

      $consulta= "DELETE FROM periodo WHERE CodigoPeriodo='$_Codigo'";
         if (!mysql_query($consulta,$link))
           {
               echo "Los datos no pudieron ser eliminados";
               exit();
              }
    mysql_close($link);
       echo "Datos eliminados correctamente";
}
function modificar_periodo($_Codigo,$_Nombre,$_Descripcion,$_fechaini,$_fechafin,$_estado,$_anho){
    require_once('../Config/c_conexion.php');
    $link= Conectarse();

    $consulta= "SELECT * FROM  periodo where Nombre='$_Nombre' LIMIT 1 ";
    $result= mysql_query($consulta,$link);

    $nfilas = mysql_num_rows ($result);
      if ($nfilas ==0){
          $result=3;
          return $result;
      }else
            $consulta="Update periodo Set Nombre='$_Nombre',Descripcion='$_Descripcion',Nivel_codigoNivel=1,FechaInicio='$_fechaini',FechaFin='$_fechafin',estado='$_estado',Institucion_anho='$_anho' WHERE CodigoPeriodo='$_Codigo'";
    if(!mysql_query($consulta,$link)) {
     //echo "Los datos no pudieron ser modificados";
     exit();
    }$result=1;
     return $result;
}
function buscar_periodo($_Codigo){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM periodo where CodigoPeriodo='$_Codigo' LIMIT 1 ";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
}
function mostrar_periodo(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT * FROM periodo";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
}
function  combobox_periodo(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT periodo.CodigoPeriodo,periodo.Descripcion,nivel.CodigoNivel,nivel.Nombre As usNombre FROM periodo,nivel WHERE  periodo.Nivel_codigoNivel = nivel.CodigoNivel";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
}
function  mostrar_periodo1(){
        require_once('../Config/c_conexion.php');
        $link=Conectarse();
        $consulta= "SELECT periodo.CodigoPeriodo As Codigo,periodo.Nombre,periodo.Descripcion,periodo.FechaInicio,periodo.FechaFin,periodo.estado,periodo.Institucion_anho,nivel.Nombre As usNombre FROM periodo,nivel WHERE periodo.Nivel_codigoNivel = nivel.CodigoNivel";
        $result= mysql_query($consulta,$link)or die("Problemas en la instrucción select:".mysql_error());
        return $result;  
}
}

?>

