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
        <h1><a href="#">PRAXON</a></h1>
        <h2><a href="#">sistema de registro academico y expediente en linea</a></h2>
  </div>
</div>
<div id="menu">
    <ul>
        <li class="first"><a href="../Vista/FrmUsuarios.html" title="">inicio</a></li>
        <li><a href="../Vista/FrmDocente2.php" title="">agregar</a></li>
        <li><a href="#" title="">Modificar</a></li>
        <li><a href="../Consultas/Condocente2.php" title="">buscar</a></li>
        <li><a href="#" title="">eliminar</a></li>       
    </ul>
<div id="content">
  <div align="center">
      <?
    include_once("../Modelo/C_docente.php");
    $a=new docente();
   if ($_POST ['nombres']==NULL || $_POST ['apellido1']==NULL || $_POST ['apellido2']==NULL || $_POST['fechanaci']==NULL ||       $_POST ['direccion']==NULL || $_POST ['departamento']==NULL || $_POST ['municipio']==NULL || $_POST ['telefono']==NULL ||       $_POST ['sexo']==NULL || $_POST['dui']==NULL || $_POST ['nivelacad']==NULL || $_POST ['usuario'] ==NULL || $_POST ['contrasena']==NULL){ $logueado =2;
}else{
      $a->agregar_docente($_POST ['nombres'],$_POST ['apellido1'],$_POST ['apellido2'],$_POST ['apellido3'],$_POST['fechanaci'],                          $_POST ['direccion'],$_POST ['departamento'],$_POST ['municipio'],$_POST ['telefono'],$_POST ['sexo'],                          $_POST['dui'],$_POST ['nivelacad'],$_POST ['usuario'] ,$_POST ['contrasena']);
     $logueado =1;
}
?>
  <?if ($logueado ==2){?>
           <p align="left"><img src="../CSS/ico/Open-folder-warning-256.png" alt="" width="88" height="83" />
     <?  echo("Un campo esta vacio....."."<br>"); }?>
     </p>
  <?if ($logueado ==1){ ?>

          <p align="left"><img src="../CSS/ico/Open-folder-accept-256.png" alt="" width="88" height="83" />
  <? echo("El Docente se Guardo con exito....."."<br>"); }?>
  </p>
  </div>
</div>
</body>
</html>


 
   















   

  