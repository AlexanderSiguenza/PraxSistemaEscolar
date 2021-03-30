<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
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
        <li><a href="FrmMatricula2.php" title="">agregar</a></li>
        <li><a href="#" title="">Modificar</a></li>
        <li><a href="../Consultas/Conmatricula.php" title="">buscar</a></li>
        <li><a href="#" title="">eliminar</a></li>

    </ul>
</div>
<div id="content">
  <form method="post" name="formu"  onsubmit="return chequeo(formu)" action="../Control/AgregarResponsable.php">
  <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a></p>
    <p align="center"><strong>Ingresar Matricula</strong></p>
    <table width="335" border="0" align="center">
    <tr>
        <td>Alumno :</td>
        <td><select name="Alumno">
     <?
        include_once("../Modelo/C_alumno.php");
        $a=new alumno();
        $consulta= $a->buscar_alumno($_POST ['Nombre'],$_POST ['Apellido1'],$_POST ['Apellido22'],$_POST ['Apellido33']);
      while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoAlumno"]." > ".$registro["Nombres"]." , ".$registro["Apellido1"]." ".$registro["Apellido2"]." ".$registro["Apellido3"]."</option>\n";
      }
    ?>
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
        <td>Apellido 3 :</td>
        <td><input type="text" name="apellido3" onkeypress="return validarText(event)" maxlength="15"/></td>
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
        <td>Telefono Casa :</td>
        <td><input type="text" name="telefonoC" onkeyup="mascara(this,'-',telefon,true)" maxlength="9"/></td>
      </tr>
      <tr>
        <td>Telefono Trabajo:</td>
        <td><input type="text" name="telefonoT" onkeyup="mascara(this,'-',telefon,true)" maxlength="9"/></td>
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
        <td>Parentesco :</td>
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