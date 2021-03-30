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
        <li class="first"><a href="../Vista/FrmAlumno2.php" title="">inicio</a></li>
        <li><a href="../Vista/FrmAlumno2.php" title="">agregar</a></li>
        <li><a href="../Consultas/ConalumnoSeccion.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Conalumno.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
  <div align="center">
      <?
    include_once('../Modelo/C_alumno.php');
    $a=new alumno();
   if ($_POST ['nombres']==NULL){
       $logueado =2;
}else{
     $logueado=$a->modificar_alumno($_POST ['Codigo'],$_POST ['nombres'],$_POST ['apellido1'],$_POST ['apellido2'],$_POST['fechanaci'],$_POST ['direccion'],$_POST ['departamento'],$_POST ['departamento'],$_POST ['telefono'],$_POST ['sexo'],$_POST['discapacidad'],$_POST ['problesalud']);
}
?>
  <?if ($logueado ==2){?>
           <p align="left"><img src="../CSS/ico/Open-folder-warning-256.png" alt="" width="88" height="83" />
             <?  echo("Un campo esta vacio volver a Ingresar los datos....."."<br>"); }?> </p>
               
  <?if ($logueado ==1){ ?>
    <p align="left"><img src="../CSS/ico/Edit_yes.png" alt="" width="64" height="61" />
  <? echo("El Alumno se Modifico con Exito....."."<br>"); }?>

  <?if ($logueado ==3){ ?> 
    <p align="left"><img src="../CSS/ico/Edit_No.png" alt="" width="64" height="61" />
  <? echo("Problemas para Actualizar Datos...."."<br>"); }?>
  </p>
  </div>
</div>
</body>
</html>