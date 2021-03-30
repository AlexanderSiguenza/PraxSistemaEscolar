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
        <li class="first"><a href="../Vista/FrmUsuarios.html" title="">inicio</a></li>
        <li><a href="../Vista/FrmAdministrativo2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conadministrativo2.php" title="">Mostrar</a></li>
        <li><a href="#" title="">Modificar / eliminar</a></li>
    </ul>
<div id="content">
  <div align="center">
      <?
    include_once("../Modelo/C_administrativo.php");
    $a=new administrativo();
  if ($_POST ['nombres']==NULL || $_POST ['apellido1']==NULL || $_POST['fechanaci']==NULL || $_POST ['direccion']==NULL || $_POST ['departamento']==NULL || $_POST ['municipio']==NULL || $_POST ['sexo']==NULL || $_POST['dui']==NULL || $_POST ['Cargo']==NULL || $_POST ['usuario']==NULL || $_POST ['contrasena']==NULL) {
     $logueado =2;
}else{
      $municipio=1;
      $a->agregar_administrativo($_POST ['nombres'],$_POST ['apellido1'],$_POST ['apellido2'],$_POST['fechanaci'],$_POST ['direccion'],$_POST ['departamento'],$municipio,$_POST ['telefono'],$_POST ['sexo'],$_POST['dui'],$_POST ['Cargo'],$_POST ['usuario'] ,$_POST ['contrasena']);
      $logueado =1;
}
?>
  <?if ($logueado ==2){?>
           <p align="left"><img src="../CSS/ico/Open-folder-warning-256.png" alt="" width="88" height="83" />
     <?  echo("Un campo esta vacio..."."<br>");  }?>
     </p>

  <?if ($logueado ==1){ ?>
          <p align="left"><img src="../CSS/ico/Open-folder-accept-256.png" alt="" width="88" height="83" />
  <? echo("El Administrativo se Guardo con exito....."."<br>"); }?>
  </p>
  </div>
</div>
</body>
</html>


    
  

  