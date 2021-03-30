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
        <li class="first"><a href="../Vista/FrmResponsable2.php" title="">inicio</a></li>
        <li><a href="../Vista/FrmResponsable2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conresponsable.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/ConresponAlumno.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
  <div align="center">
      <?
   include_once("../Modelo/C_responsable.php");
    $a=new responsable();
   if ($_POST ['Nombre']==NULL || $_POST ['Apellido1']==NULL || $_POST ['Sexo']==NULL  || $_POST ['Dui']==NULL || $_POST ['Parentesco']==NULL) {
       $logueado =2;
}else{
      $a->modificar_responsable($_POST ['Codigo'],$_POST ['Nombre'],$_POST ['Apellido1'],$_POST ['Apellido2'],$_POST ['Direccion'],$_POST ['Departamento'],$_POST ['Departamento'],$_POST ['TelefonoC'],$_POST ['TelefonoT'],$_POST ['Sexo'],$_POST['Dui'],$_POST ['Parentesco']);
      $logueado =1;
}
?>

  <?if ($logueado ==2){?>
           <p align="left"><img src="../CSS/ico/Open-folder-warning-256.png" alt="" width="88" height="83" />
     <?  echo("Un campo esta vacio....."."<br>"); }?>
     </p>

  <?if ($logueado ==1){ ?>
          <p align="left"><img src="../CSS/ico/Open-folder-accept-256.png" alt="" width="88" height="83" />
  <? echo("Datos modificados correctamente....."."<br>"); }?>
  </p>
  </div>
</div>
</body>
</html>












