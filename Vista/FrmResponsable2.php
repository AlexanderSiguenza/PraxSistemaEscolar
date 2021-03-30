<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
<script src="funciones.js" language="JavaScript"></script>
<script language='javascript' type='text/javascript'>
function BuscarAlumno(){
location.href='BuscaAlumno2.php';
}
</script>
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
        <li class="first"><a href="FrmAlumno2.php" title="">Atras</a></li>
        <li><a href="FrmResponsable2" title="">agregar</a></li>
        <li><a href="../Consultas/Conresponsable.php" title="">Mostrar</a></li>
          <li><a href="../Modificacion/ConresponAlumno.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
  <form method="post" name="formu"  onsubmit="return chequeo_Responsable(formu)" action="../Control/AgregarResponsable.php">
  <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a><strong><span class="Estilo1">...............................................................................</span>Ingresar Responsable</strong> <strong>
    <table width="335" border="0" align="center">
      <tr>
        <td>*Nombres :</td>
        <td><input type="text" name="Nombre" onkeypress="return validarText(event)" maxlength="30"/></td>
      </tr>
      <tr>
        <td>*Apellido 1 :</td>
        <td><input type="text" name="Apellido1" onkeypress="return validarText(event)" maxlength="15"/></td>
      </tr>
      <tr>
        <td>Apellido 2 :</td>
        <td><input type="text" name="Apellido2" onkeypress="return validarText(event)" maxlength="15"/></td>
      </tr>
      <tr>
        <td>*Direccion :</td>
        <td><input type="text" name="Direccion" /></td>
      </tr>
       <tr>
   <td>*Departamento </td>
    <td><select id="carreras" name="Departamento">
    <option value="0"> Seleccionar </option>
   <option value="1"> Santa Ana </option>
   <option value="2"> Ahuachapan </option>
   <option value="3"> Sonsonate </option>
   <option value="4"> La Libertad </option>
   <option value="5"> San Salvador </option>
   <option value="6"> Cuscatlan </option>
   <option value="7"> Chalatenango </option>
   <option value="8">  La Paz </option>
   <option value="9"> Cabanas </option>
   <option value="10"> San Vicente </option>
   <option value="11"> Usulutan </option>
   <option value="12"> San Miguel </option>
   <option value="13"> Morazan </option>
   <option value="14"> La Union </option>
   </select></td> <span id="espera"></span><br>
</tr>
<tr>
   <td>*Municipio </td>
    <td><select id="materias" name="municipio">
   </select><br></td>
</tr>
      <tr>
        <td>Telefono Casa :</td>
        <td><input type="text" name="TelefonoC" onkeyup="mascara(this,'-',telefon,true)" maxlength="9"/></td>
      </tr>
      <tr>
        <td>Telefono Trabajo:</td>
        <td><input type="text" name="TelefonoT" onkeyup="mascara(this,'-',telefon,true)" maxlength="9"/></td>
      </tr>
      <tr>
        <td>*Sexo :</td>
        <td><select name="Sexo">
            <option value="Femenino">F</option>
            <option value="Masculino">M</option>
        </select></td>
      </tr>
      <tr>
        <td>*Dui :</td>
        <td><input type="text" name="Dui" onkeyup="mascara(this,'-',documento,true)" maxlength="10" /></td>
      </tr>
      <tr>
        <td>*Parentesco :</td>
        <td><input type="text" name="Parentesco" onkeypress="return validarText(event)" /></td>
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