<?
  $Fecha=getdate();
  $Anio=$Fecha["year"];
  $Mes=$Fecha["mon"];
  $Dia=$Fecha["mday"];
  $Hora=$Fecha["hours"].":".$Fecha["minutes"].":".$Fecha["seconds"];
  $fecha = strftime("%d - %m - %Y", time());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
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
      <li class="first"><a href="../Vista/FrmAlumno2.php" title="">Atras</a></li>
        <li><a href="../Vista/FrmAlumno2.php" title="">agregar</a></li>
        <li><a href="ConalumnoSeccion.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Conalumno.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
  <h1 align="center">&nbsp;</h1>
  <h1 align="left"><img src="../CSS/ico/Search.png" alt="" width="64" height="64" />Secciones / Año: <?php echo("$Anio");?></h1>
  <div align="center"> 
<?
    include_once("../Modelo/C_seccion.php");
    $a=new seccion();
    $consulta= $a->mostrar_seccion();

   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         echo ("<TABLE>\n");
         echo ("<TR>\n");
         echo ("<TH>Nombre</TH>\n");
         echo ("<TH>Grado</TH>\n");
         echo ("<TH>Docente Encargado</TH>\n");
         echo ("<TH></TH>\n");
         echo ("<TH></TH>\n");
         echo ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            echo ("<TR>\n");
            echo ("<TD>" . $resultado['Nombre'] . "</TD>\n");
            echo ("<TD>" . $resultado['usNombre'] . "</TD>\n");
            echo ("<TD>" . $resultado['uNombre'] . " " . $resultado['uApellido1'] . " " . $resultado['uApellido2'] . "</TD>\n");
            $codigo= $resultado['CodigoSeccion'];
            $nombre= $resultado['Nombre'];
            $grado=  $resultado['usNombre'];
            btn($codigo,$nombre,$grado);
           // echo ("$codigo");
         }
         echo ("</TABLE>\n");
         echo "<ul> </ul>";
      }
      else
         echo ("No hay Datos disponibles");
?>
  </div>
</div>
<? function btn($cont,$nombre,$grado){ ?>
        <form method="post" name="formu" action="Conalumno2.php">
         <td><INPUT TYPE=IMAGE SRC="../CSS/ico/listar.png"  name="btn[]" value="M<?php echo ("$cont")?>"><td>
         <input type="hidden" name="nombre[]" value="<?php echo ("$nombre")?>"">
         <input type="hidden" name="grado[]" value="<?php echo ("$grado")?>"">
         <? } //echo("$cont......$nombre.......$grado");?>
</body>
</html>



