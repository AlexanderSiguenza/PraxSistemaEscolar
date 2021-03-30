<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
<script src="funciones.js" language="JavaScript"></script>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
-->
</style>
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="cal_alumno.js"></script>
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
        <li class="first"><a href="../Vista/FrmAdministrativo2.php" title="">inicio</a></li>
        <li><a href="../Vista/FrmAdministrativo2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conadministrativo2.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Conadministrativo" title="">Modificar / eliminar</a></li>
    </ul>
</div>
<div id="content">
  <div align="center">
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
?>
<?php
function Modificar($codigo){
    include_once("../Modelo/C_administrativo.php");
    $a=new administrativo();
    $consulta= $a->mostrar_administrativo2($codigo);

if ($reg=mysql_fetch_array($consulta)) {
?>
<div id="content">
  <form method="post" name="frm"  onsubmit="return Adminitrativo(frm)" action="../Control/ModAdministrativo.php">
    <h1 align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a><strong><span class="Estilo1">...........................................</span>Modificar Administrativo</strong></h1>
    <table width="335" border="0" align="center">
      <tr>
        <td>*Nombres :</td>
        <td><input type="text" name="nombres" onkeypress="return validarText(event)" maxlength="30" value="<?php echo $reg['Nombres'] ?>"/></td>
        <input type="hidden" name="Codigo" value="<?php echo $reg['CodigoAdministrativo'] ?>"/>
      </tr>
      <tr>
        <td>*Apellido 1 :</td>
        <td><input type="text" name="apellido1" onkeypress="return validarText(event)" maxlength="15" value="<?php echo $reg['Apellido1'] ?>"/></td>
      </tr>
      <tr>
        <td>Apellido 2 :</td>
        <td><input type="text" name="apellido2" onkeypress="return validarText(event)" maxlength="15" value="<?php echo $reg['Apellido2'] ?>"/></td>
      </tr>
      <tr>
        <td>*Fecha de Nacimiento:</td>
        <td><input type="text" name="fechanaci" id="inputField" readonly="readonly" maxlength="10" value="<?php echo $reg['FechaNacimiento'] ?>" /></td>
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
        <td>*Dui :</td>
        <td><input type="text" name="dui" onkeyup="mascara(this,'-',documento,true)" maxlength="10" value="<?php echo $reg['Dui'] ?>" /></td>
      </tr>
      <tr>
        <td>*Cargo :</td>
        <td><select name="Cargo">
            <option>Administrativo</option>
            <option>Docente</option>
        </select></td>
      </tr>
      <tr>
        <td>**Usuario :</td>
        <td><input type="text" name="usuario" onkeypress="return validarTextUsuarios(event)" maxlength="10" value="<?php echo $reg['Usuario_nombreUsuario'] ?>"/></td>
      </tr>
      <tr>
        <td>**Contrasena :</td>
        <td><input type="password" name="contrasena" maxlength="15" onkeypress="return validarTextUsuarios(event)" value="<?php echo $reg['Nombres'] ?>"/></td>
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
</div>
</div>
</div>
<?php
}
}
function  Eliminar($codigo){ ?>
<p align="left"><img src="../CSS/ico/Open-folder-delete-256.png" alt="" width="88" height="83" />
<?php
 include_once('../Modelo/C_nivel.php');
 $a=new nivel();
 $a->eliminar_nivel($codigo);
}
?>
</p>
</body>
</html>