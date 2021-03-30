<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
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
       <li class="first"><a href="FrmAlumno2.php" title="">Atras</a></li>
    </ul>
</div>
<div id="content">
  <form method="post"  name="formu"  onsubmit="return busca_alumno(formu)" action="FrmAlumno2.php">
  <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a></p>
    <p align="center"><strong>Buscar Responsable</strong></p>
    <table width="335" border="0" align="center">

      <tr>
        <td>Nombres :</td>
        <td><input type="text"  name="Nombre" onkeypress="return validarText(event)" maxlength="40"/></td>
      </tr>
      <tr>
        <td colspan="2"><p align="right">
            <input type="submit" value="Buscar" onclick="return chequeo(formu)" />
            <input type="reset" value="Cancelar" />
        </p>Introducir: Nombres_____ejemplo: Luis Mario</td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>