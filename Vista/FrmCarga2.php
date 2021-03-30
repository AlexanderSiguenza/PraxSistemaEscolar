<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
-->
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
        <li class="first"><a href="FrmRegisAcade.html" title="">inicio</a></li>
        <li><a href="FrmCarga2.php" title="">agregar</a></li>
        <li><a href="#" title="">Modificar</a></li>
        <li><a href="../Consultas/Concarga2.php" title="">buscar</a></li>
        <li><a href="#" title="">eliminar</a></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      <li></li>
        <li></li>
                <li></li>
        <li></li>
        <li></li>
        <li></li> 
    </ul>
</div>
<div id="content">
  <form method="post" action="../Control/AgregarCarga.php">
  <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a><span class="Estilo1"> ...........................................................................</span><strong>Ingresar Carga Academica</strong></p>
    <table width="400" border="0" align="center">
      <tr>
        <td>Docente Orientador :</td>
        <td><select name="Docente">
            <?
       include_once('../Modelo/C_docente.php');
       $a=new docente();
       $consulta= $a->combobox_docente();
       while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoDocente"]." > ".$registro["Nombres"]." , ".$registro["Apellido1"]." ".$registro["Apellido2"]."</option>\n";
      }
      ?>
        </select></td>
      </tr>
      <tr>
        <td>Asignatura :</td>
        <td><select name="Asignatura">
            <?
       include_once('../Modelo/C_asignatura.php');
       $a=new asignatura();
       $consulta= $a->combobox_asignatura();
       while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoAsignatura"]." > ".$registro["Nombre"]." </option>\n";
      }
      ?>
        </select></td>
      </tr>
      <tr>
        <td>Programa de Estudio :</td>
        <td><select name="Planestudios">
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
        <td colspan="2"><p align="right">
            <input type="submit" value="Agregar" />
            <input type="reset" value="Cancelar" />
        </p></td>
      </tr>
    </table>
  </form>
  <p align="center">&nbsp;</p>
</div>
</body>
</html>