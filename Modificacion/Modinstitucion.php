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
        <li class="first"><a href="../Vista/FrmInstitucion2.php"title="">inicio</a></li>
        <li><a href="../Vista/FrmInstitucion2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Coninstitucion2.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Coninstitucion.php" title="">Modificar / eliminar</a></li>
  </ul>
</div>
<div id="content">
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
   //return $codigo;
?>

<?php

function Modificar($codigo){
      include_once("../Modelo/C_institucion.php");
      $a=new institucion();
      $consulta=$a->buscar_institucion($codigo);

if ($reg=mysql_fetch_array($consulta)) {
?>
  <form method="post" action="../Control/ModInstitucion.php">
  <p align="left"><a href="#" title=""><img src="../CSS/ico/Edit.png" alt="" width="64" height="61" /></a><span class="Estilo11">................................................................................</span><strong>Modificar Institucion</strong></p>
    <table width="335" border="0" align="center">
      <tr>
        <td>*Nombre :</td>
        <td><input type="text" name="nombre" onkeypress="return validarText(event)" maxlength="50" value="<?php echo $reg['NombreInstituto'] ?>"/></td>
        <input type="hidden" name="Codigo"  value="<?php echo $reg['CodigoInstituto'] ?>"/>
      </tr>
      <tr>
        <td>*Director :</td>
        <td><input type="text" name="director" onkeypress="return validarText(event)" maxlength="50" value="<?php echo $reg['NombreDirector'] ?>"/></td>
      </tr>
      <tr>
        <td>*Telefono :</td>
        <td><input type="text" name="telefono" onkeyup="mascara(this,'-',telefon,true)" maxlength="9" value="<?php echo $reg['Telefono'] ?>"/></td>
      </tr>
      <tr>
        <td>*Direccion :</td>
        <td><input type="text" name="direccion"  value="<?php echo $reg['Direccion'] ?>"/></td>
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
        <td><select name="ano">
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
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
<?php
}
}
function  Eliminar($codigo){ ?>
<p align="left"><img src="../CSS/ico/Open-folder-delete-256.png" alt="" width="88" height="83" />
<?php
  include_once("../Modelo/C_institucion.php");
  $a=new institucion();
 //$a->eliminar_($codigo);
 echo("No se podra Eliminar La Institucion del sistema....."."<br>");
}
?>
</body>
</html>




