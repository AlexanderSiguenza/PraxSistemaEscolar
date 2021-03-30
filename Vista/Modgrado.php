<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
-->
</style>
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
        <h1><a href="#">PRAXON</a></h1>
        <h2><a href="#">sistema de registro academico y expediente en linea</a></h2>
  </div>
</div>
<div id="menu">
    <ul>
        <li class="first"><a href="../Vista/FrmNiveEsco.html" title="">inicio</a></li>
        <li><a href="../Vista/FrmGrado2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Congrados2.php" title="">buscar</a></li>
        <li><a href="Congrado.php" title="">Modificar  /  eliminar</a></li>  
    </ul>
</div>
<div id="content">
  <div align="center">
</div>
<?php
   $btn = $_POST['btn'];
   $n        = count($btn);
   $i        = 0;

   while ($i < $n){
      $Cadena=$btn[$i];
      $modifica=trim($Cadena[0]);
      $elimina=trim($Cadena[0]);
      $codigo1=trim(ltrim($Cadena, "M"));
      $codigo2=trim(ltrim($Cadena, "E"));

      if ($modifica=="M"){
        Modificar($codigo1);
     }
     if ($elimina=="E"){
       Eliminar($codigo2);
      }
      $i++;
   }
?>

<?php

function Modificar($codigo){
      include_once("../Modelo/C_grado.php");
      $a=new grado();
      $consulta=$a->busca_grado($codigo);

if ($reg=mysql_fetch_array($consulta)) {
?>

</div>
<div id="content">
  <form method="post" action="../Control/ModGrado.php">
  <p align="left"><a href="#" title=""><img src="../CSS/ico/Edit.png" alt="" width="64" height="61" /></a><span class="Estilo1"> .................................................................................. </span><strong>Modificar Grado</strong></p>
    <table width="335" border="0" align="center">
      <tr>
        <td>Nombre :</td>
        <td><input type="text" name="Nombre" onkeypress="return validarText(event)" maxlength="20" value="<?php echo $reg['Nombre'] ?>"/></td>
        <input type="hidden" name="Codigo" value="<?php echo $reg['CodigoGrado'] ?>"/>
      </tr>      
      <tr>
        <td>Programa de Estudio </td>
        <td><select name="planestudios">
            <?
       include_once('../Modelo/C_planestudios.php');
       $a=new planestudios();
       $consulta= $a->combobox_planestudios();
       while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoPlan"]." > ".$registro["Nombre"]." - 1998</option>\n";
      }
    ?>
        </select></td>
      </tr>
      <tr>
        <td>Nivel :</td>
        <td><select name="NombreNivel">
            <?
       include_once('../Modelo/C_nivel.php');
       $a=new nivel();
       $consulta= $a->mostrar_nivel();
       while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoNivel"]." > ".$registro["Nombre"]."</option>\n";
      }
    ?>
        </select></td>
      </tr>
      <tr>
        <td colspan="2"><p align="right">
            <input type="submit" value="Agregar" />
            <input type="reset" value="Cancelar" />
        </p></td>
      </tr>
    </table>
  </form>
</div>

<?php
 }
}
function  Eliminar($codigo){ ?>
<p align="left"><img src="../CSS/ico/Open-folder-delete-256.png" alt="" width="64" height="61" />
<?php
   include_once("../Modelo/C_grado.php");
   $a=new grado();
   $a->eliminar_grado($codigo);
   }
?>
</p>
</body>
</html>




