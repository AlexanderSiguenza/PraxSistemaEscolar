<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
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
        <li><a href="../Vista/FrmPlanestudios2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conplanestudio2.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Conplanestudios.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
  <div align="center">
<?
     include_once("../Modelo/C_planestudios.php");
     $a=new planestudios();

     $aa=$_POST ['Nombre'];
     $bb=$_POST ['ano'];
     $Codigo_Grado=$_POST ['Grado'];
     //echo("nombre=$aa------ano:$bb-------grado:$Codigo_Grado"."<br>");

switch ($Codigo_Grado) {
case "Primer Grado":
$Codigo_Grado=1;
break;
case "Segundo Grado":
$Codigo_Grado=2;
break;
case "Tercer Grado":
$Codigo_Grado=3;
break;
case "Cuarto Grado":
$Codigo_Grado=4;
break;
case "Quinto Grado":
$Codigo_Grado =5;
break;
case "Sexto Grado":
$Codigo_Grado=6;
break;
case "Septimo Grado":
$Codigo_Grado=7;
break;
case "Octavo Grado":
$Codigo_Grado=8;
break;
case "Noveno Grado":
$Codigo_Grado=9;
break;
default://Cuando $i no valga ni 0, ni 1, ni 2
$Codigo_Grado=1;
}
//echo("nombre=$aa------ano:$bb-------grado:$Codigo_Grado"."<br>");

if ($_POST ['Nombre']==NULL || $_POST ['ano']==NULL) {
    $logueado =2;
}else{
     $logueado=$a->agregar_planestudios($_POST ['Nombre'],$_POST ['ano'],$Codigo_Grado);
}
?>

  <?if ($logueado ==2){?>
    <p align="left"><img src="../CSS/ico/Open-folder-warning-256.png" alt="" width="70" height="65" />
    <?  echo("Un campo esta vacio volver a Ingresar los datos....."."<br>"); }?> </p>
                
  <?if ($logueado ==1){ ?>
    <p align="left"><img src="../CSS/ico/Edit_yes.png" alt="" width="64" height="61" />
  <? echo("El Plan de estudios se Guardo con exito....."."<br>"); }?>

  <?if ($logueado ==3){ ?>
    <p align="left"><img src="../CSS/ico/Edit_No.png" alt="" width="64" height="61"  />
  <? echo("Ya existe un Plan de estudios con ese Nombre...."."<br>"); }?>
  </p>
  </div>
</div>
</body>
</html>









   
   

  