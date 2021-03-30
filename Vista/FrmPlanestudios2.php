<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
<script src="funciones2.js" language="JavaScript"></script>
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
        <li><a href="FrmPlanestudios2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conplanestudio2.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Conplanestudios.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
  <form method="post" action="../Control/AgregarPlanestudios.php">
   <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a><span class="Estilo1"> .. ............. .......................................................</span> <strong>Ingresar Plan de Estudios</strong></p>
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
      <td>Nombre :</td>
        <td><input type="text" name="Nombre" size="20" onkeypress="return validarText(event)" maxlength="25"/></td>
      </tr>
       <tr>
        <td></td>
        <td align="left"><div style="color: #000000; font-size: 12px;"><strong> Ej. Plan Primer Grado </strong></div></td>
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



