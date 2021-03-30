<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<script src="funciones2.js" language="JavaScript"></script>
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
        <li class="first"><a href="FrmNiveEsco.html" title="">inicio</a></li>
        <li><a href="FrmGrado2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Congrados2.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Congrado.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
  <form method="post" name="formu"  onsubmit="return grado(formu)" action="../Control/AgregarGrado.php">
  <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a><span class="Estilo1"> .................................................................................. </span><strong>Ingresar Grado</strong></p>
    <table width="335" border="0" align="center">
<tr>
   <td>Nivel: </td>
    <td><select id="carreras" name="Nivel">
   <option value="0">Seleccionar Nivel </option>
   <option value="1"> Primer Ciclo </option>
   <option value="2"> Segundo Ciclo </option>
   <option value="3"> Tercer Ciclo </option>
   </select></td> <span id="espera"></span><br>
</tr>
<tr>
   <td>Grado: </td>
    <td><select id="materias" name="Grado">
   </select><br></td>
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
</body>
</html>