<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
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
        <li class="first"><a href="../Vista/FrmNiveEsco.html" title="">inicio</a></li>
        <li><a href="../Vista/FrmSeccion2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conseccion2.php" title="">Mostrar</a></li>
        <li><a href="Conseccion.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
  <div align="center">
</div>
<?php
   $btn = $_POST['btn'];
   $seccion = $_POST['seccion'];
   $grado = $_POST['grado'];
   $n        = count($btn);
   $i        = 0;

   while ($i < $n){
      $Cadena=$btn[$i];
      $modifica=trim($Cadena[0]);
      $elimina=trim($Cadena[0]);
      $codigo1=trim(ltrim($Cadena, "M"));
      $codigo2=trim(ltrim($Cadena, "E"));
      $c=$codigo1;

      if ($modifica=="M"){
        Modificar($codigo1);
     }
     if ($elimina=="E"){
       Eliminar($codigo2);
      }
      $i++;
   }
    $seccion1 = $seccion[$c-1];
    $grado1 = $grado[$c-1];
   // echo ("$grado1.....$seccion1");
?>

<?php

function Modificar($codigo){

     include_once("../Modelo/C_seccion.php");
     $a=new seccion();
     $consulta=$a->buscar_seccion($codigo);

if ($reg=mysql_fetch_array($consulta)) {
?>
<div id="content">
  <form method="post" action="../Control/Modseccion.php">
  <p align="left"><a href="#" title=""><img src="../CSS/ico/Edit.png" alt="" width="64" height="61" /></a><span class="Estilo1"> .................................................................................</span><strong>Modificar Seccion</strong></p>
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
   <td>Nombre: </td>
    <td><select id="materias" name="Nombre">
    <input type="hidden" name="Codigo"  onkeypress="return validarText(event)" maxlength="20" value="<?php echo $reg['CodigoSeccion'] ?>"/>
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

<?php
 }
}
function  Eliminar($codigo){ ?>
<p align="left"><img src="../CSS/ico/Open-folder-delete-256.png" alt="" width="64" height="61" />
<?php
   include_once("../Modelo/C_seccion.php");
   $a=new seccion();
   $consulta=$a->eliminar_seccion($codigo);
   }
?>
</p>
</body>
</html>




