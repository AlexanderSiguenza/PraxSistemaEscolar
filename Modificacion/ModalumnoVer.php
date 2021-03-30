<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
<script src="funciones.js" language="JavaScript"></script>
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
    window.onload = function(){
        new JsDatePick({
            useMode:2,
            target:"inputField",
            dateFormat:"%d-%M-%Y"
            /*selectedDate:{
                day:5,
                month:9,
                year:2006
            },
            yearsRange:[2000,2020],
            limitToToday:false,
            cellColorScheme:"beige",
            dateFormat:"%m-%d-%Y",
            imgPath:"img/",
            weekStartDay:1*/
        });
    };
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
        <li class="first"><a href="../Vista/FrmAlumno2.php" title="">inicio</a></li>
        <li><a href="../Vista/FrmAlumno2.php" title="">agregar</a></li>
        <li><a href="../Consultas/ConalumnoSeccion.php" title="">Mostrar</a></li>
        <li><a href="Conalumno.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
  <div align="center">
</div>
<?php
   $btn = $_POST['btn'];
   $n        = count($btn);
   $i        = 0;

   while ($i < $n){
      $Cadena=$btn[$i];
      $modifica=trim($Cadena[0]);
      $elimina=trim($Cadena[0]);
      $codigo1=trim(ltrim($Cadena, "M"));
      $codigo2=trim(ltrim($Cadena, "E"));

      if ($modifica=="M"){
        Modificar($codigo1);
     }
     if ($elimina=="E"){
       Eliminar($codigo2);
      }
      $i++;
   }
   //echo("M:$codigo1..M:$modifica.....E:$codigo2");
?>

<?php

function Modificar($codigo){
      include_once('../Modelo/C_alumno.php');
      $a=new alumno();
      $consulta=$a->Mostrar_alumno2($codigo);

if ($reg=mysql_fetch_array($consulta)) {
?>
</div>
<div id="content">
  <form method="post" name="formu"  onsubmit="return chequeo(formu)" action="../Control/ModAlumno.php" >
    <p align="left"><a href="#" title=""><img src="../CSS/ico/Edit.png" alt="" width="64" height="61" /></a><strong><span class="Estilo1">................................................................................</span>Modificar Alumno</strong></p>
      <p align="left">
    <table width="332" border="0" align="center">
    <tr>
        <td align="left"><div style="color: #000000; font-size: 12px;"><strong> * Campos Requeridos </strong></div></td>
      </tr>
      <tr>
        <td>*Nombres :</td>
        <td><input type="text" name="nombres" onkeypress="return validarText(event)" maxlength="40" value="<?php echo $reg['Nombres'] ?>"  /></td>
        <input type="hidden" name="Codigo"  value="<?php echo $reg['CodigoAlumno'] ?>"/>
      </tr>
      <tr>
        <td>*Apellido 1 :</td>
        <td><input type="text" name="apellido1" onkeypress="return validarText(event)" maxlength="20"  value="<?php echo $reg['Apellido1'] ?>"/></td>
      </tr>
      <tr>
        <td>Apellido 2 :</td>
        <td><input type="text" name="apellido2" onkeypress="return validarText(event)" maxlength="20" value="<?php echo $reg['Apellido2'] ?>"/></td>
      </tr>
      <tr>
        <td>*Fecha de Nacimiento:</td>
        <td><input type="text" readonly="readonly" name="fechanaci" id="inputField" value="<?php echo $reg['FechaNacimiento'] ?>"/></td>
      </tr>
      <tr>
        <td></td>
        <td align="left"><div style="color: #000000; font-size: 12px;"><strong> dia/mes/a&ntilde;o </strong></div></td>
      </tr>
      <tr>
        <td>*Direccion :</td>
        <td><input type="text" name="direccion" value="<?php echo $reg['Direccion'] ?>"/></td>
      </tr>

    <tr>
   <td>*Departamento </td>
    <td><select id="carreras" name="departamento">
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
        <td>Telefono :</td>
        <td><input type="text" name="telefono" onkeyup="mascara(this,'-',telefon,true)" maxlength="9" value="<?php echo $reg['Telefono'] ?>"/></td>
      </tr>
      <tr>
        <td>*Sexo :</td>
        <td><select name="sexo">
            <option value="Femenino">F</option>
            <option value="Masculino">M</option>
        </select></td>
      </tr>
      <tr>
        <td>Discapacidad </td>
        <td><input type="text" name="discapacidad" onkeypress="return validarText(event)" maxlength="20" value="<?php echo $reg['Discapacidad'] ?>"/></td>
      </tr>
      <tr>
        <td>Problemas de salud:</td>
        <td><input type="text" name="problesalud" onkeypress="return validarText(event)" maxlength="20" value="<?php echo $reg['ProblemasdeSalud'] ?>"/></td>
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
<?php
}
}
function  Eliminar($codigo){ ?>
<p align="left"><img src="../CSS/ico/Open-folder-delete-256.png" alt="" width="88" height="83" />
<?php
   include_once('../Modelo/C_alumno.php');
   $a=new alumno();
   $consulta=$a->eliminar_alumno($codigo);
}
?>
</p>
</body>
</html>