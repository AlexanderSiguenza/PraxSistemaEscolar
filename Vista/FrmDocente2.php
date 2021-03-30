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
        <li class="first"><a href="FrmUsuarios.html" title="">inicio</a></li>
        <li><a href="FrmDocente2.php" title="">agregar</a></li>
        <li><a href="#" title="">Modificar</a></li>
        <li><a href="../Consultas/Condocente2.php" title="">buscar</a></li>
        <li><a href="#" title="">eliminar</a></li>        
    </ul>
</div>
<div id="content">
  <form method="post" action="../Control/AgregarDocente.php">
  <h1 align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a><strong><span class="Estilo1">...................................................</span>Ingresar Docente</strong></h1>
  <table width="335" border="0" align="center">
      <tr>
        <td>Nombres :</td>
        <td><input type="text" name="nombres" onkeypress="return validarText(event)" maxlength="30"/></td>
      </tr>
      <tr>
        <td>Apellido 1 :</td>
        <td><input type="text" name="apellido1" onkeypress="return validarText(event)" maxlength="15"/></td>
      </tr> 
      <tr>
        <td>Apellido 2 :</td>
        <td><input type="text" name="apellido2" onkeypress="return validarText(event)" maxlength="15"/></td>
      </tr>
      <tr>
        <td>Fecha de Nacimiento:</td>
        <td><input type="text" name="fechanaci" onkeyup="mascara(this,'/',fecha,true)" maxlength="10" /></td>
      </tr>
      <tr>
        <td></td>
        <td align="left"><div style="color: #000000; font-size: 12px;"><strong> dia/mes/año </strong></div></td>
      </tr>
      <tr>
        <td>Direccion :</td>
        <td><input type="text" name="direccion" /></td>
      </tr>
      <tr>
        <td>Departamento :</td>
        <td><select name="departamento">
            <?
       include_once('../Modelo/C_departamento.php');
       $a=new departamento();
       $consulta= $a->combobox_departamento();
       while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoDepto"]." > ".$registro["Nombre"]." </option>\n";
      }
    ?>
        </select></td>
      </tr>
      <tr>
        <td>Municipio :</td>
        <td><select name="municipio">
            <?
       include_once('../Modelo/C_municipio.php');
       $a=new municipio();
       $consulta= $a->combobox_municipio();
       while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoMunicipio"]." > ".$registro["Nombre"]." </option>\n";
      }
    ?>
        </select></td>
      </tr>
      <tr>
        <td>Telefono :</td>
        <td><input type="text" name="telefono" onkeyup="mascara(this,'-',telefon,true)" maxlength="9"/></td>
      </tr>
      <tr>
        <td>Sexo :</td>
        <td><select name="sexo">
            <option value="Femenino">F</option>
            <option value="Masculino">M</option>
        </select></td>
      </tr>
      <tr>
        <td>Dui :</td>
        <td><input type="text" name="dui" onkeyup="mascara(this,'-',documento,true)" maxlength="10" /></td>
      </tr>
      <tr>
        <td>Nivel Academico :</td>
        <td><input type="text" name="nivelacad" onkeypress="return validarText(event)" /></td>
      </tr>
      <tr>
        <td>Usuario :</td>
        <td><input type="text" name="usuario" onkeypress="return validarText(event)" maxlength="10" /></td>
      </tr>
      <tr>
        <td>Contrasena :</td>
        <td><input type="password" name="contrasena" maxlength="15"/></td>
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