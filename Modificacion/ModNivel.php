<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
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
        <li><a href="../Vista/FrmNivel2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Consultanivel2.php" title="">Mostrar</a></li>
        <li><a href="Connivel.php" title="">Modificar  /  eliminar</a></li>  
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
   //return $codigo;
?>

<?php

function Modificar($codigo){
      include_once('../Modelo/C_nivel.php');
      $a=new nivel();
      $consulta=$a->buscar_nivel($codigo);

if ($reg=mysql_fetch_array($consulta)) {
?>
<div id="content">
  <form method="post" name="formu"  onsubmit="return chequeo_Responsable(formu)"  action="../Control/ModNivel.php">
    <p align="left"><a href="#" title=""><img src="../CSS/ico/Edit.png" alt="" width="64" height="61" /></a><strong><span class="Estilo1">................................................................................</span>Modificar Nivel</strong></p>
    <table width="335" border="0" align="center">
      <tr>
        <td>Nombre :</td>
        <td><input type="text" name="Nombre"  onkeypress="return validarText(event)" maxlength="20" value="<?php echo $reg['Nombre'] ?>"/></td>
        <input type="hidden" name="Codigo"  onkeypress="return validarText(event)" maxlength="20" value="<?php echo $reg['CodigoNivel'] ?>"/>
      </tr>
      <tr>
        <td colspan="2"><p align="right">
            <input type="submit" value="Modificar"/>
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
<p align="left"><img src="../CSS/ico/Open-folder-delete-256.png" alt="" width="88" height="83" />
<?php
 include_once('../Modelo/C_nivel.php');
 $a=new nivel();
 $a->eliminar_nivel($codigo);
}
?>
</p>
</body>
</html>




