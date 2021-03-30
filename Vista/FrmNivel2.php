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
        <h1><a href="#">PRAX</a></h1>
        <h2><a href="#">sistema de registro academico y expediente</a></h2>
  </div>
</div>
<div id="menu">
    <ul>
        <li class="first"><a href="FrmNiveEsco.html" title="">inicio</a></li>
        <li><a href="FrmNivel2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Consultanivel2.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Connivel.php" title="">Modificar   /  eliminar </a></li>         
      <div align="left"></div>
    </ul>
</div>
<div id="content">
  <form method="post" name="formu"  onsubmit="return chequeo_Responsable(formu)"  action="../Control/AgregarNivel.php">
    <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a><strong><span class="Estilo1">................................................................................</span>Ingresar Nivel</strong></p>
    <table width="335" border="0" align="center">
      <tr>
        <td>Nivel :</td>
        <td><input type="text" name="Nombre"  onkeypress="return validarText(event)" maxlength="20" value="<?php echo $_POST ['Nombre']; ?>"/></td>
        </tr>
      <tr>
        <td colspan="2"><p align="right">
            </p>Ejemplo : Primer Ciclo
            <INPUT TYPE=IMAGE SRC="../CSS/ico/aceptar.png"  value="Agregar" >
            <INPUT TYPE=IMAGE SRC="../CSS/ico/cancelar.png"  value="Cancelar" >
        </p></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>