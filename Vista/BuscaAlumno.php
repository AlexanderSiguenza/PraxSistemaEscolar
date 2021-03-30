<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
<script language='javascript' type='text/javascript'>
function opcion(){
location.href='Vistas/FromAlumno.php';
}
function volvermenu(){
location.href='../index.html';
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
        <h1><a href="#">PRAX</a></h1>
        <h2><a href="#">sistema de registro academico y expediente</a></h2>
  </div>
</div>
<div id="menu">
    <ul>
       <li class="first"><a href="FrmMatricula.php" title="">Atras</a></li>
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
      $i++;
   }
    //echo ("Grado:$codigo1");
?>
  <form method="post" name="formu"  onsubmit="return busca_alumno(formu)"  action="FrmMatricula21.php">
  <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a></p>
    <p align="center"><strong>Buscar Alumno </strong></p>
    <table width="335" border="0" align="center">
      <tr>
        <td>*Nombres :</td>
        <td><input type="text"  name="Nombre"  maxlength="40" onkeypress="return validarText(event)"/></td>
        <input type="hidden" name="Grado" value="<?php echo ("$codigo1") ?>"/>
      </tr>
      <tr>
        <td colspan="2"><p align="right">
            <input type="submit" value="Buscar" />
            <input type="reset" value="Cancelar" />
            </p>Introducir: Nombres_____ejemplo: Luis Mario</td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>