<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
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
        <h1><a href="#">PRAX</a></h1>
        <h2><a href="#">sistema de registro academico y expediente</a></h2>
  </div>
</div>
<div id="menu">
    <ul>
        <li class="first"><a href="../Vista/FrmNiveEsco.html" title="">inicio</a></li>
        <li><a href="../Vista/FrmPlanestudios2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conplanestudio2.php" title="">Mostrar</a></li>
        <li><a href="Conplanestudios.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
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
     include_once("../Modelo/C_planestudios.php");
    $a=new planestudios();
    $consulta= $a->buscar_planestudios($codigo);

if ($reg=mysql_fetch_array($consulta)) {
?>
  <form method="post" action="../Control/ModPlanestudios.php">
   <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a><span class="Estilo1"> .. ............. .......................................................</span> <strong>Modificar Plan de Estudios</strong></p>
    <table width="335" border="0" align="center">
      <tr>
        <td>Nombre :</td>
        <td><input type="text" name="Nombre" size="20" maxlength="25"  value="<?php echo $reg['Nombre'] ?>" /></td>
        <input type="hidden" name="Codigo" value="<?php echo $reg['CodigoPlan'] ?>"/>
      </tr>
       <tr>
        <td>Año:</td>
        <td><select id="ano" name="ano">
           <option value="2011">2011</option>
           <option value="2010">2010</option>
           <option value="2009">2009</option>
           <option value="2008">2008</option>
           <option value="2007">2007</option>
           <option value="2006">2006</option>
           <option value="2005">2005</option>
           <option value="2004">2004</option>
           <option value="2003">2003</option>
           <option value="2002">2002</option>
           <option value="2001">2001</option>
           <option value="2000">2000</option>
           <option value="1999">1999</option>
           <option value="1998">1998</option>
           <option value="1997">1997</option>
           <option value="1996">1996</option>
           <option value="1995">1995</option>
        </select></td> <span id="espera"></span><br>
        </tr>
      <tr>
        <td>Grado :</td>
        <td><select name="NombreGrado">
            <?
       include_once('../Modelo/C_grado.php');
       $a=new grado();
       $consulta= $a->combobox_grado();
       while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoGrado"]." > ".$registro["Nombre"]."</option>\n";
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
   include_once("../Modelo/C_planestudios.php");
    $a=new planestudios();
    $consulta= $a->eliminar_planestudios($codigo);
   }
?>
</body>
</html>