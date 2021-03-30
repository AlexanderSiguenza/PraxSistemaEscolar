<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<script src="funciones3.js" language="JavaScript"></script>
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
        <li><a href="FrmSeccion2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conseccion2.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Conseccion.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
  <form method="post" action="../Control/AgregarSeccion.php">
  <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a><span class="Estilo1"> .................................................................................</span><strong>Ingresar Seccion</strong></p>
    <table width="363" border="0" align="center">
    <tr>
   <td>Grado: </td>
      <td><select id="carreras" name="Grado">
       <option value="0">Seleccionar Grado </option>
       <option value="1"> Primer Grado </option>
       <option value="2"> Segundo Grado </option>
       <option value="3"> Tercer Grado</option>
       <option value="4"> Cuarto Grado</option>
       <option value="5"> Quinto Grado</option>
       <option value="6"> Sexto Grado</option>
       <option value="7"> Septimo Grado</option>
       <option value="8"> Octavo Grado</option>
       <option value="9"> Noveno Grado</option>
   </select></td> <span id="espera"></span><br>
</tr>
<tr>
   <td>Seccion: </td>
    <td><select id="materias" name="Nombre">
   </select><br></td>
</tr>
      <tr>
        <td>Docente Orientador :</td>
        <td><select name="Docente">
            <?
       include_once('../Modelo/C_administrativo.php');
       $a=new administrativo();
       $consulta= $a->combobox_docente();
       while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoAdministrativo"]." > ".$registro["Nombres"]." , ".$registro["Apellido1"]." ".$registro["Apellido2"]."</option>\n";
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
</div>

</body>
</html>