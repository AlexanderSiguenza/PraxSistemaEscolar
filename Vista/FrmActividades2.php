<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
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
        <li><a href="FrmActividades2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conactividad.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Conactividad.php" title="">Modificar / eliminar</a></li>
    </ul>
</div>
<div id="content">
  <form method="post" name="formu"  onsubmit="return chequeo_Actividad(formu)" action="../Control/AgregarActividad.php">
  <p align="left"><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /><span class="Estilo11">.........................................................................</span><strong>Ingresar Actividad</strong></p>
    <table width="335" border="0" align="center">
      <tr>
        <td>*Actividad :</td>
        <td><input type="text" name="Descripcion" onkeypress="return validarText(event)" maxlength="20"/></td>
      </tr>
      <tr>
        <td>*Descripcion :</td>
        <td><input type="text" name="Nombre" maxlength="2" /></td>
      </tr>
       <tr>
        <td></td>
        <td align="left"><div style="color: #000000; font-size: 12px;"><strong> ejemplo: A1, A2, ET </strong></div></td>
      </tr>
    <td>*Porcentaje </td>
       <td><select name="porcentaje">
        <option value="0.05"> 0.05 </option>
        <option value="0.10"> 0.10 </option>
        <option value="0.15"> 0.15 </option>
        <option value="0.20"> 0.20 </option>
        <option value="0.25"> 0.25 </option>
        <option value="0.30"> 0.30 </option>
        <option value="0.35"> 0.35 </option>
        <option value="0.40"> 0.40 </option>
      </select></td> <span id="espera"></span><br>
    </tr>
      <tr>
        <td>*Trimestre :</td>
        <td><select name="Periodo">
            <?
       include_once('../Modelo/C_periodo.php');
       $a=new periodo();
       $consulta= $a->combobox_periodo();
       while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoPeriodo"]." > ".$registro["Descripcion"]."</option>\n";
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
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>