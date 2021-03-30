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
        <li><a href="../Vista/FrmInstitucion2.php" title="">agregar</a></li>
         <li><a href="../Consultas/Coninstitucion2.php" title="">Mostrar</a></li>
         <li><a href="../Modificacion/Coninstitucion.php" title="">Modificar / eliminar</a></li>
    </ul>
</div>
<div id="content">
  <div align="center">
      <?
    include_once("../Modelo/C_institucion.php");
    $a=new institucion();
   if ($_POST ['nombre']==NULL || $_POST ['director']==NULL || $_POST ['telefono'] ==NULL || $_POST['direccion'] ==NULL || $_POST ['departamento'] ==NULL || $_POST ['municipio']  ==NULL || $_POST ['estado'] ==NULL || $_POST ['ano']==NULL){
       $logueado =2;
}else{
      $a->modificar_institucion($_POST ['Codigo'],$_POST ['nombre'],$_POST ['director'],$_POST ['telefono'],$_POST['direccion'],$_POST ['departamento'],$_POST ['municipio'],$_POST ['estado'],$_POST ['ano']);
      $logueado =1;
}
?>

  <?if ($logueado ==2){?>
           <p align="left"><img src="../CSS/ico/Open-folder-warning-256.png" alt="" width="88" height="83" />
     <?  echo("Un campo esta vacio....."."<br>"); }?>
     </p>
  <?if ($logueado ==1){ ?>

          <p align="left"><img src="../CSS/ico/Open-folder-accept-256.png" alt="" width="88" height="83" />
  <? echo("La Informacion se Guardo con exito....."."<br>"); }?>
  </p>
  </div>
</div>
</body>
</html>



    
   

  