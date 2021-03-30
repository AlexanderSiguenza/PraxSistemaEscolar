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
        <li><a href="../Vista/FrmEvaluacion.php" title="">agregar</a></li>
        <li><a href="../Consultas/ConevaluacionVer1.php" title="">Mostrar</a></li>
      <li><a href="#" title="">Modificar / eliminar</a></li>
    </ul>
<div id="content">
  <div align="center">
      <?
   include_once('../Modelo/C_evaluacion.php');
   $a=new evaluacion();

   $resultado = $_POST['resultado'];
   $n= count( $resultado);
   $i= 0;
   $C=0;
   $Cc=0;
   $Ccc=0;

   while ($i < $n){
      $Cadena= $resultado[$i];
    // echo ("........$Cadena\n\n\n");
      $i++;

      if ($Cadena > 10 ){
        if ($C==0){
          $mayores="No puede introducir Notas > 10";
         }
         $C++;
      }

      if ($Cadena=="" ){
        if ($Cc==0){
          $vacios="No puede introducir Notas Vacias";
         }
         $Cc++;
      }

       if ($Cadena=="." or $Cadena==".." or  $Cadena=="..." or $Cadena=="...."){
        if ($Ccc==0){
          $puntos="No puede introducir solo puntos como Notas";
         }
         $Ccc++;
      }
   }

if ($mayores!="" or $vacios!="" or $puntos!="" ){
            // echo("$mayores..$vacios.. $puntos."."<br>");
             $logueado =2;
         }else{

      $a->agregar_evaluacion($_POST['codigo'],$_POST['asignatura'],$_POST['actividad'],$_POST['resultado'],$_POST['periodo']);
      $Secc=trim($_POST["seccion"]);
      $Asig=trim($_POST["asignatura"]);
      $Peri=trim($_POST["periodo"]);
      $Acti=trim($_POST["actividad"]);
      //echo " Seccion:$Secc / Asignatura:$Asig / Periodo:$Peri / Actividad:$Acti\n";
      $logueado =1;
          }

?>
  <?if ($logueado ==2){?>
           <p align="left"><img src="../CSS/ico/Open-folder-warning-256.png" alt="" width="88" height="83" />
     <?  echo("Problemas para Guardar.....$mayores / $vacios / $puntos"."<br>");}?>
     </p>
  <?if ($logueado ==1){ ?>
          <p align="left"><img src="../CSS/ico/Open-folder-accept-256.png" alt="" width="88" height="83" />
  <? echo("Las Notas se Guardaron con exito....."."<br>"); }?>
  </p>
  </div>
</div>
</body>
</html>



