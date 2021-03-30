<?php
   $btn = $_POST['btn'];
   $nombre = $_POST['nombre'];
   $grado = $_POST['grado'];
   $n        = count($btn);
   $i        = 0;

   while ($i < $n){
      $Cadena=$btn[$i];
      $modifica=trim($Cadena[0]);
      $Grado=trim(ltrim($Cadena, "M"));
      $c=$Grado;

      if ($modifica=="M"){
        echo ("");
     }
      $i++;
   }
    $nombre2=$nombre[$c-1];
    $grado2=$grado[$c-1];
  //echo(" $grado2  /   Seccion: $nombre2");
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
  <h1 align="left"><img src="../CSS/ico/Search.png" alt="" width="64" height="64" />Notas : <?php echo(" $grado2  /   Seccion: $nombre2");?></h1>
  <div align="center">
    <?
    include_once("../Modelo/C_evaluacion.php");
    $a=new evaluacion();
    $consulta= $a-> mostrar_evaluacion($Grado);

   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         echo ("<TABLE>\n");
         echo ("<TR>\n");
         echo ("<TH>Codigo</TH>\n");
         echo ("<TH>Apellidos</TH>\n");
         echo ("<TH>Nombres</TH>\n");
         echo ("<TH></TH>\n");
        //echo ("<TH>Resultado</TH>\n");
         echo ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            echo ("<TR>\n");
            echo ("<TD>" . $resultado['CodigoAlumno'] . "</TD>\n");
            echo ("<TD>" . $resultado['uApellido1'] . " " . $resultado['uApellido2'] . "</TD>\n");
            echo ("<TD>" . $resultado['uNombres'] . "</TD>\n");
            //echo ("<TD>" . $resultado['uActividad'] . "</TD>\n");
            //echo ("<TD>" . $resultado['uResultado'] . "</TD>\n");
            $CodAlumno=$resultado['CodigoAlumno'];
            $grado2=$grado2;
            $nombre2=$nombre2;
            btn($CodAlumno,$grado2,$nombre2);

          }
         echo ("</TABLE>\n");
         echo "<ul> </ul>";
      }
      else
         echo ("No hay Datos disponibles");
?>

<? function btn($CodAlumno,$grado2,$nombre2){ ?>
        <form method="post" name="formu" action="ConNotas.php">
         <td><INPUT TYPE=IMAGE SRC="../CSS/ico/aceptar.png" name="btn[]" value="M<?php echo ("$CodAlumno")?>" ><td>
         <input type="hidden" name="grado" value="<?php echo ("$grado2")?>"">
         <input type="hidden" name="seccion" value="<?php echo ("$nombre2")?>"">

         <? }// echo("$CodAlumno,$grado2,$nombre2");?>

</body>
</html>






