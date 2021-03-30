<?php
$Fecha=getdate();
  $Anio=$Fecha["year"];
  $Mes=$Fecha["mon"];
  $Dia=$Fecha["mday"];
  $Hora=$Fecha["hours"].":".$Fecha["minutes"].":".$Fecha["seconds"];
  $fecha = strftime("%d - %m - %Y", time());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo11 {color: #FFFFFF}
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
        <li class="first"><a href="FrmRegisAcade.html" title="">inicio</a></li>
        <li><a href="FrmInstitucion2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Coninstitucion2.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Coninstitucion.php" title="">Modificar / eliminar</a></li>
  </ul>
</div>
<div id="content">
  <form method="post" action="../Control/AgregarInstitucion.php">
  <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a><span class="Estilo11">................................................................................</span><strong>Ingresar Institucion</strong></p>
    <table width="335" border="0" align="center">
      <tr>
        <td>*Codigo :</td>
        <td><input type="text" name="codigo" onkeypress="return validarAno(event)" maxlength="30"/></td>
      </tr>
      <tr>
        <td>*Nombre :</td>
        <td><input type="text" name="nombre" onkeypress="return validarText(event)" maxlength="50"/></td>
      </tr>
      <tr>
        <td>*Director :</td>
        <td><input type="text" name="director" onkeypress="return validarText(event)" maxlength="50"/></td>
      </tr>
      <tr>
        <td>*Telefono :</td>
        <td><input type="text" name="telefono" onkeyup="mascara(this,'-',telefon,true)" maxlength="9"/></td>
      </tr>
      <tr>
        <td>*Direccion :</td>
        <td><input type="text" name="direccion" /></td>
      </tr>
      <tr>
        <td>*Departamento :</td>
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
        <td>*Municipio :</td>
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
        <td>**Estado :</td>
        <td><select name="estado">
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select></td>
      </tr>
      <tr>
        <td>**Año :</td>
        <td><input type="text" name="ano" onkeypress="return validarAno(event)" readonly="readonly"  value="<?php echo("$Anio");?>" /></td>
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