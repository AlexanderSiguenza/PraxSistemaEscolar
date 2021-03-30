<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sistema de Registro Academico</title>
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
        <li class="first"><a href="../Vista/FrmRegisAcade.html" title="">inicio</a></li>
        <li><a href="../Vista/FrmActividades2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conactividad.php" title="">mostrar</a></li>
        <li><a href="../Modificacion/Conactividad.php" title="">Modificar / eliminar</a></li>
    </ul>
<div id="content">
  <div align="center">
      <?
   include_once('../Modelo/C_actividad.php');
   $a=new actividad();
   if ($_POST ['Nombre']==NULL || $_POST ['Descripcion']==NULL || $_POST ['porcentaje']==NULL || $_POST ['Periodo']==NULL) {
       $logueado =2;
}else{
      $logueado = $a->agregar_actividad($_POST ['Nombre'],$_POST ['Descripcion'],$_POST ['porcentaje'],$_POST ['Periodo']);
    }
?>

  <?if ($logueado ==1){ ?>
          <p align="left"><img src="../CSS/ico/Open-folder-accept-256.png" alt="" width="88" height="83" />
  <? echo("El Registro se Guardo con exito....."."<br>"); }?></p>

  <?if ($logueado ==2){?>
           <p align="left"><img src="../CSS/ico/Open-folder-warning-256.png" alt="" width="88" height="83" />
     <?  echo("Un Campo esta vacio....."."<br>"); }?> </p>

<?if ($logueado ==3){?>
           <p align="left"><img src="../CSS/ico/Open-folder-warning-256.png" alt="" width="88" height="83" />
     <?  echo("No se puede Guardar Datos Repetidos(Nombre,Trimestre)...."."<br>"); }?> </p>

  </p>
  </div>
</div>
</body>
</html>











