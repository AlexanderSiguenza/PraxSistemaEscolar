<?php
   $btn = $_POST['btn'];
   $nombre = $_POST['nombre'];
   $grado = $_POST['grado'];
   $codigoNivel = $_POST['codigoNivel'];
   $n        = count($btn);
   $i        = 0;

   while ($i < $n){
      $Cadena=$btn[$i];
      $modifica=trim($Cadena[0]);
      $Grado=trim(ltrim($Cadena, "M"));
      $c=$Grado;

      if ($modifica=="M"){
        echo ("");
     }
      $i++;
   }
    $nombre2=$nombre[$c-1];
    $grado2=$grado[$c-1];
    $codigoNivel2=$codigoNivel[$c-1];
 // echo(" $grado2  /nivel:$codigoNivel2/   Seccion: $nombre2......codigo grado:$Grado");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
<script language='javascript' type='text/javascript'>
function BuscarAlumno(){
location.href='BuscaAlumno.php';
}
</script>
</head>
<body>
<div id="header">
    <div id="topmenu">
        <ul>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div id="logo">
        <h1><a href="#">PRAX</a></h1>
        <h2><a href="#">sistema de registro academico y expediente</a></h2>
  </div>
</div>
<div id="menu">
    <ul>
        <li class="first"><a href="FrmRegisAcade.html" title="">inicio</a></li>
        <li><a href="FrmEvaluacion1.php" title="">agregar</a></li>
        <li><a href="../Consultas/ConevaluacionVer1.php" title="">Mostrar</a></li>
        <li><a href="#" title="">Modificar / eliminar</a></li>
    </ul>
</div>
<div id="content">
  <form method="post" name="formu"  onsubmit="return chequeo(formu)" action="../Consultas/Conevaluacion.php">
  <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a></p>
  <h1 align="center"><strong>Evaluacion : <?php echo(" $grado2  /  $nombre2 <br>");  echo "<br>";?></strong></h1>
    <table width="335" border="0" align="center">
     <tr>
        <td>Seccion :</td>
        <td><select name="seccion">
            <?
       include_once('../Modelo/C_seccion.php');
       $a=new seccion();
       $consulta= $a->buscar_seccionGrado($Grado);
       while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoSeccion"]." > ".$registro["Nombre"]." </option>\n";
      }
    ?>
        </select></td>
      </tr>
    <tr>
        <td>Asignatura:</td>
        <td><select name="asignatura">
            <?
       include_once('../Modelo/C_asignatura.php');
       $a=new asignatura();
       $consulta= $a->buscar_asignatura($Grado);
       while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoAsignatura"]." > ".$registro["Nombre"]."</option>\n";
      }
    ?></select></td>
     </tr>
     <tr>
        <td>Trimestre:</td>
        <td><select name="periodo">
            <?
       include_once('../Modelo/C_periodo.php');
       $a=new periodo();
       $consulta= $a->mostrar_periodo();
       while($registro=mysql_fetch_array($consulta))
      {
      if ($registro["estado"]=="Activo"){
              echo"<option value=".$registro["CodigoPeriodo"]." > ".$registro["Nombre"]." - ".$registro["Descripcion"]."</option>\n";
             }
          }
    ?></select></td>
     <tr>
        <td>Actividad:</td>
        <td><select name="actividad">
            <?
      include_once("../Modelo/C_actividad.php");
    $a=new actividad();
    $consulta= $a->mostrar_actividad();
       while($registro=mysql_fetch_array($consulta))
      {   if ($registro["estado"]=="Activo"){
              echo"<option value=".$registro["CodigoActividad"]." > ".$registro["Nombre"]." - ".$registro["Descripcion"]." - ".$registro["NomPeriodo"]."</option>\n";
            }
      }
    ?></select></td>
     </tr>
      <tr>
        <td colspan="2"><p align="right">
            <input type="submit" value="Aceptar" />
            <input type="reset" value="Cancelar" />
        </p></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>




