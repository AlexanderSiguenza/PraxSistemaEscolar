<?php
  require_once('../Config/c_conexion.php');
  $conexion=Conectarse();

   $btn = $_POST['btn'];
   $seccion = $_POST['seccion'];
   $grado = $_POST['grado'];
   $n        = count($btn);
   $i        = 0;

   while ($i < $n){
      $Cadena=$btn[$i];
      $modifica=trim($Cadena[0]);
      $alumno=trim(ltrim($Cadena, "M"));
      $codigo=$alumno;

      if ($modifica=="M"){
        echo ("");
     }
      $i++;
   }
    //Alumnos
    $consulta="SELECT CONCAT( Nombres,' ',Apellido1 ,' ', Apellido2) as Nombre FROM alumno
    WHERE alumno.CodigoAlumno='$codigo'";
    $result= mysql_query($consulta,$conexion)or die("Problemas en la instrucción select:".mysql_error());
    $row = mysql_fetch_array($result);
    $nombre=$row['Nombre'];
    //echo(" $grado  /   Seccion: $seccion  alumno:$nombre... $codigo");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
<link href="../CSS/estilo2.css" rel="stylesheet" type="text/css" />
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
        <li><a href="../Vista/FrmEvaluacion1.php" title="">agregar</a></li>
        <li><a href="ConevaluacionVer1.php" title="">Mostrar</a></li>
        <li><a href="#" title="">Modificar / eliminar</a></li>
    </ul>
</div>
<div id="content">
  <h1 align="center">&nbsp;</h1>
  <div align="center">
  </div>
  <h1 align="left"><img src="../CSS/ico/Search.png" alt="" width="64" height="64" /><?php echo("$nombre  / $grado  / Seccion: $seccion ");?></h1>
  <div align="center">
    <?
    include_once("../Modelo/C_evaluacion.php");
    $a=new evaluacion();
    $consulta= $a-> mostrar_Notas($codigo);

   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      echo("<br>");
      if ($nfilas > 0)
      {
         echo ("<TABLE>\n");
         echo ("<TR>\n");
         echo ("<TH>Asignatura</TH>\n");
         echo ("<TH>Acti 1</TH>\n");
         echo ("<TH>Acti 2</TH>\n");
         echo ("<TH>Exa T</TH>\n");
         echo ("<TH>Pro TI</TH>\n");
         echo ("<TH>Acti 1</TH>\n");
         echo ("<TH>Acti 2</TH>\n");
         echo ("<TH>Exa T</TH>\n");
         echo ("<TH>Pro TII</TH>\n");
         echo ("<TH>Acti 1</TH>\n");
         echo ("<TH>Acti 2</TH>\n");
         echo ("<TH>Exa T</TH>\n");
         echo ("<TH>Pro TIII</TH>\n");
         echo ("<TH>Promedio Final</TH>\n");

        //echo ("<TH>Resultado</TH>\n");
         echo ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            echo ("<TR>\n");
            echo ("<TD>" . $resultado['Asignatura'] . "</TD>\n");
            echo ("<TD>" . $resultado['A1'] . "</TD>\n");
            echo ("<TD>" . $resultado['A2'] . "</TD>\n");
            echo ("<TD>" . $resultado['ET'] . "</TD>\n");
            echo ("<TD>" . $resultado['Pro1'] . "</TD>\n");
            echo ("<TD>" . $resultado['A11'] . "</TD>\n");
            echo ("<TD>" . $resultado['A22'] . "</TD>\n");
            echo ("<TD>" . $resultado['ETT'] . "</TD>\n");
            echo ("<TD>" . $resultado['Pro2'] . "</TD>\n");
            echo ("<TD>" . $resultado['A111'] . "</TD>\n");
            echo ("<TD>" . $resultado['A222'] . "</TD>\n");
            echo ("<TD>" . $resultado['ETTT'] . "</TD>\n");
            echo ("<TD>" . $resultado['Pro3'] . "</TD>\n");
            echo ("<TD>" . $resultado['Pro_Final'] . "</TD>\n");
          }
         echo ("</TABLE>\n");
         echo "<ul> </ul>";
      }
      else
         echo ("No hay Datos disponibles");
?>
</body>
</html>






