<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
<script language='javascript' type='text/javascript'>
function BuscarAlumno(){
location.href='index.php';
}
</script>

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
        <li class="first"><a href="index.html" title="">inicio</a></li>
        <li><a href="#" title="">agregar</a></li>
        <li><a href="#" title="">Modificar</a></li>
        <li><a href="#" title="">buscar</a></li>
        <li><a href="#" title="">eliminar</a></li>

    </ul>
</div>
<div id="content">
  <form method="post" name="formu"  onsubmit="return chequeo(formu)" action="../Control/BuscaAlumno.php">
  <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a></p>
    <p align="center"><strong>Buscar Alumno </strong></p>
    <table width="335" border="0" align="center">
      <tr>
        <td>Nombres :</td>
        <td><input type="text"  name="Nombre"  maxlength="40" onkeypress="return validarText(event)"/></td>
      </tr>
     <tr>
        <td>Apellido 1 :</td>
        <td><input type="text" name="Apellido1" maxlength="15"  onkeypress="return validarText(event)" /></td>
      </tr>
      <tr>
        <td>Apellido 2 :</td>
        <td><input type="text" name="Apellido22" maxlength="15" onkeypress="return validarText(event)" /></td>
      </tr>
      <tr>
        <td>Apellido 3 :</td>
        <td><input type="text" name="Apellido33" maxlength="15" onkeypress="return validarText(event)" /></td>
      </tr>
      <tr>
        <td colspan="2"><p align="right">
            <input type="submit" value="Buscar" />
            <input type="reset" value="Cancelar" />
        </p></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>