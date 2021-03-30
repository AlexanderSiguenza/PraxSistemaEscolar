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
        <li><a href="FrmAsignatura2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conasignatura2.php" title="">Mostrar</a></li>
       <li><a href="../Modificacion/Conasignatura.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
  <form method="post" action="../Control/AgregarAsignatura.php">
   <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a><span class="Estilo1"> ..............................................................................</span>.<strong>Ingresar Asignatura</strong></p>
    <table width="335" border="0" align="center">
    <tr>
        <td>Plan de Estudio </td>
        <td><select name="Planestudios">
            <?
       include_once('../Modelo/C_planestudios.php');
       $a=new planestudios();
       $consulta= $a->combobox_planestudios();
       while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoPlan"]." > ".$registro["Nombre"]."</option>\n";
      }
    ?>
        </select></td>
      </tr>
    <tr>
         <td>Nombre: </td>
    <td><select id="carreras" name="Nombre">
        <option value="Ingles">Ingles</option>
        <option value="Matematicas">Matematicas</option>
        <option value="Eduacion Fisica">Eduacion Fisica</option>
        <option value="Eduacion Artistica">Eduacion Artistica</option>
        <option value="Lenguaje y Literatura">Lenguaje y Literatura</option>
        <option value="Estudios Sociales y Civica">Estudios Sociales y Civica</option>
        <option value="CC Salud y Medio Ambiente">CC Salud y Medio Ambiente</option>
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