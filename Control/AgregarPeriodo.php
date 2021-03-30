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
        <li class="first"><a href="../Vista/FrmRegisAcade.html" title="">inicio</a></li>
        <li><a href="../Vista/FrmPeriodo.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conperiodo.php" title="">Mostrar</a></li>
        <li><a href="#" title="">Modificar / eliminar</a></li>
    </ul>
</div>
<div id="content">
  <div align="center">
      <?
   include_once('../Modelo/C_periodo.php');
   $a=new periodo();  
   if ($_POST ['Nombre']==NULL || $_POST ['Descripcion']==NULL || $_POST ['fechaini']==NULL || $_POST ['fechafin']==NULL || $_POST ['estado']==NULL || $_POST ['anho']==NULL) {
       $logueado =2;
}else{
      $a->agregar_periodo($_POST ['Nombre'],$_POST ['Descripcion'],$_POST ['fechaini'],$_POST ['fechafin'],$_POST ['estado'],$_POST ['anho']);
      $logueado =1;
}
?>

  <?if ($logueado ==2){?>
           <p align="left"><img src="../CSS/ico/Open-folder-warning-256.png" alt="" width="88" height="83" />
     <?  echo("Un campo esta vacio....."."<br>"); }?>
     </p>
  <?if ($logueado ==1){ ?>

          <p align="left"><img src="../CSS/ico/Open-folder-accept-256.png" alt="" width="88" height="83" />
  <? echo("El periodo se Guardo con exito....."."<br>"); }?>
  </p>
  </div>
</div>
</body>
</html>










